<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Http;


class ApiRequests
{

    /**
     * @param string $baseUrl
     * @param string $endpoint
     * @param null $data
     * @return array|mixed
     */
    public static function get(string $baseUrl, string $endpoint, $data = null)
    {
        try {
            $response = Http::get($baseUrl . $endpoint, $data);
        } catch (\Exception $e) {
            info($e->getMessage());
            abort(503);
        }

        return $response->json();
    }

}
