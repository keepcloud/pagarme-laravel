<?php

namespace Keepcloud\Pagarme\Utils;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

abstract class ApiAdapter
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function setClient(Client $client): void
    {
        $this->client = $client;
    }

    public function getHeader(): array
    {
        return [
            'Content-Type'  => 'application/json',
            'Authorization' => 'Basic ' . base64_encode(config('pagarme.api_key') . ':'),
        ];
    }

    public function getFormDataHeader(): array
    {
        return [
            'Content-Type'  => 'multipart/form-data',
            'Authorization' => 'Basic ' . base64_encode(config('pagarme.api_key') . ':'),
        ];
    }

    public function getUrl(string $url): string
    {
        $baseUrl = rtrim(config('pagarme.base_url'), '/');

        $apiVersion = rtrim(config('pagarme.api_version'), '/');

        return "{$baseUrl}/{$apiVersion}/{$url}";
    }

    public function post(string $url, array $data, bool $multipart = false)
    {
        return $this->makeRequest('POST', $url, $data, $multipart);
    }

    public function put(string $url, array $data = null, bool $multipart = false)
    {
        return $this->makeRequest('PUT', $url, $data, $multipart);
    }

    public function patch(string $url, array $data = null, bool $multipart = false)
    {
        return $this->makeRequest('PATCH', $url, $data, $multipart);
    }

    public function get(string $url, array $queryParams = [], bool $multipart = false)
    {
        if (! empty($queryParams)) {
            $url .= '?' . http_build_query($queryParams);
        }

        return $this->makeRequest('GET', $url, null, $multipart);
    }

    public function delete(string $url, bool $multipart = false)
    {
        return $this->makeRequest('DELETE', $url, null, $multipart);
    }

    protected function makeRequest(string $method, string $url, array $data = null, bool $multipart = false, array $options = [])
    {
        $fullUrl = $this->getUrl($url);

        $options = $this->mergeHeaders($options, $multipart, $data);

        try {
            return $this->client->request($method, $fullUrl, $options);
        } catch (ClientException $e) {
            $this->handleClientException($e);
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    protected function handleClientException(ClientException $e): void
    {
        $response = $e->getResponse();

        $statusCode = $e->getCode();

        $responseBody = $response ? $response->getBody()->getContents() : '{}';

        $responseData = json_decode($responseBody, true);

        $errorMessage = "[{$statusCode}] " . ($responseData['message'] ?? 'Unknown request error');

        if (isset($responseData['errors'])) {
            foreach ($responseData['errors'] as $field => $errors) {
                $error = ["field" => $field, "errors" => implode(', ', $errors)];
                $errorMessage .= " " . json_encode($error);
            }
        }

        throw new Exception($errorMessage, $statusCode);
    }

    protected function mergeHeaders(array $options, bool $multipart, ?array $data = null): array
    {
        $defaultHeaders = $multipart ? $this->getFormDataHeader() : $this->getHeader();

        $options['headers'] = array_merge($defaultHeaders, $options['headers'] ?? []);

        if ($data !== null) {
            $options['json'] = $data;
        }

        return $options;
    }
}
