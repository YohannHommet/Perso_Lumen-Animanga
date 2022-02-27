<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Laravel\Lumen\Routing\Controller as BaseController;


class Controller extends BaseController
{
    public function sendJsonResponse($content, int $httpResponse = 200): JsonResponse
    {
        return response()->json($content, $httpResponse);
    }

}
