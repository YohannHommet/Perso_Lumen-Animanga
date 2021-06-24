<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;


class Controller extends BaseController
{
    public function sendJsonResponse($content, int $httpResponse = 200)
    {
        return response()->json($content, $httpResponse);
    }

}
