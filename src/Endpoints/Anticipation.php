<?php

namespace Keepcloud\Pagarme\Endpoints;

use Keepcloud\Pagarme\Utils\ApiAdapter;

class Anticipation extends ApiAdapter
{
    public function create($recipientId, array $data)
    {
        return $this->post("recipients/{$recipientId}/bulk_anticipations", $data);
    }

    /**
     * Simula uma antecipação spot.
     *
     * Desde 28/08/2026 a API v5 exige POST com os parâmetros no corpo
     * (timeframe, requested_amount); payment_date não é mais aceito.
     *
     * @see https://docs.pagar.me/docs/antecipações
     */
    public function simulate($recipientId, array $data)
    {
        return $this->post("recipients/{$recipientId}/bulk_anticipations/simulate", $data);
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

    /**
     * @deprecated 1.3.0 Endpoint não existe na referência da API v5 (herdado da v4).
     *             Será removido na 2.0.
     */
    public function confirm($recipientId, $anticipationId)
    {
        return $this->post("recipients/{$recipientId}/bulk_anticipations/{$anticipationId}/confirm", []);
    }
}
