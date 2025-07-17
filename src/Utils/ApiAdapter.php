<?php

namespace Keepcloud\Pagarme\Utils;

use Exception;
use GuzzleHttp\Client;

abstract class ApiAdapter
{
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function setClient(Client $client)
    {
        $this->client = $client;
    }

    public function getHeader()
    {
        return [
            'Content-Type'  => 'application/json',
            'Authorization' => 'Basic ' . base64_encode(config('pagarme.api_key') . ':'),
        ];
    }

    public function getFormDataHeader()
    {
        return [
            'Content-Type'  => 'multipart/form-data',
            'Authorization' => 'Basic ' . base64_encode(config('pagarme.api_key') . ':'),
        ];
    }

    public function getUrl(string $url)
    {
        $baseUrl = config('pagarme.base_url');

        if (substr($baseUrl, -1) != '/') {
            $baseUrl .= '/';
        }

        $apiVersion = config('pagarme.api_version');

        if (substr($apiVersion, -1) != '/') {
            $apiVersion .= '/';
        }

        return $baseUrl . $apiVersion . $url;
    }

    public function post(string $url, array $data, $multipart = false)
    {
        return $this->makeRequest('POST', $url, $data, $multipart);
    }

    public function put(string $url, $data = null, $multipart = false)
    {
        return $this->makeRequest('PUT', $url, $data, $multipart);
    }

    public function patch(string $url, array $data = null, $multipart = false)
    {
        return $this->makeRequest('PATCH', $url, $data, $multipart);
    }

    public function get(string $url, array $queryParams = [], $multipart = false)
    {
        $fullUrl = $this->getUrl($url);

        $options = $this->setHeaders($multipart);

        if (! empty($queryParams)) {
            $fullUrl .= '?' . http_build_query($queryParams);
        }

        return $this->makeRequest('GET', $fullUrl, null, $multipart, $options);
    }

    public function delete(string $url, $multipart = false)
    {
        return $this->makeRequest('DELETE', $url, null, $multipart);
    }

    protected function makeRequest(string $method, string $url, $data = null, bool $multipart = false, array $options = [])
    {
        $fullUrl = $this->getUrl($url);

        $options = array_merge($options, $this->setHeaders($multipart, $data));

        try {
            return $this->client->request($method, $fullUrl, $options);
        } catch (ClientException $e) {
            $this->handleClientException($e);
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    protected function handleClientException(ClientException $e)
    {
        $response = $e->getResponse();

        $statusCode = $e->getCode();

        $responseBody = $response ? $response->getBody()->getContents() : '{}';

        $responseData = json_decode($responseBody, true);

        $errorMessage = $responseData['message'] ?? 'Unknown request error';

        if (isset($responseData['errors'])) {
            foreach ($responseData['errors'] as $field => $errors) {
                $error = ["field" => $field, "errors" => implode(', ', $errors)];

                $errorMessage .= " " . json_encode($error);
            }
        }

        throw new Exception($errorMessage, $statusCode);
    }

    public function setHeaders(bool $multipart = false, array $data = null): array
    {
        $options = [];

        if ($multipart) {
            $options['headers'] = $this->getFormDataHeader();
        } else {
            $options['headers'] = $this->getHeader();
        }

        if ($data) {
            $options['json'] = $data;
        }

        return $options;
    }
}
