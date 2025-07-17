<?php

namespace Keepcloud\Pagarme\Endpoints;

use Keepcloud\Pagarme\Utils\ApiAdapter;

class Anticipation extends ApiAdapter
{
    public function create($recipientId, array $data)
    {
        return $this->post("recipients/{$recipientId}/bulk_anticipations", $data);
    }

    public function simulate($recipientId, array $queryParams)
    {
        return $this->get("recipients/{$recipientId}/bulk_anticipations/simulate", $queryParams);
    }

    public function limits($recipientId, array $queryParams)
    {
        return $this->get("recipients/{$recipientId}/bulk_anticipations/limits", $queryParams);
    }

    public function cancel($recipientId, $anticipationId)
    {
        return $this->post("recipients/{$recipientId}/bulk_anticipations/{$anticipationId}/cancel", []);
    }

    public function all($recipientId, array $queryParams = [])
    {
        return $this->get("recipients/{$recipientId}/bulk_anticipations", $queryParams);
    }

    public function find($recipientId, $anticipationId)
    {
        return $this->get("recipients/{$recipientId}/bulk_anticipations/{$anticipationId}");
    }

    public function confirm($recipientId, $anticipationId)
    {
        return $this->post("recipients/{$recipientId}/bulk_anticipations/{$anticipationId}/confirm", []);
    }
}
