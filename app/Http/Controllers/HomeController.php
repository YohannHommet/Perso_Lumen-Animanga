<?php

namespace App\Http\Controllers;

use App\Http\Services\ApiRequests;


class HomeController extends Controller
{

    public function home()
    {

        $anime = ApiRequests::get("https://kitsu.io/api/edge/", "anime");

        return view('home', [
            "response" => $anime['data']
        ]);
    }
}
