<?php

namespace App\Http\Controllers;

use App\Http\Services\ApiRequests;


class HomeController extends Controller
{

    public function home()
    {
        // Request pour choper les anime et pour enlever le dernier pour en avoir 9 !
        $anime = ApiRequests::get("https://kitsu.io/api/edge/", "anime");
        array_pop($anime['data']);

        // Request pour choper les anime et pour enlever le dernier pour en avoir 9 !
        $manga = ApiRequests::get("https://kitsu.io/api/edge/", "manga");
        array_pop($manga['data']);

        return view('home', [
            "animeResponse" => $anime['data'],
            "mangaResponse" => $manga['data']
        ]);
    }
}
