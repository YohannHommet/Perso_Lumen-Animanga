<?php

namespace App\Http\Controllers;

use App\Http\Services\ApiRequests;
use Illuminate\Http\Request;


class HomeController extends Controller
{

    public function home(Request $request)
    {

        $anime = ApiRequests::get("https://kitsu.io/api/edge/", "anime");
        array_pop($anime['data']);
        $manga = ApiRequests::get("https://kitsu.io/api/edge/", "manga");
        array_pop($manga['data']);

        return view('home', [
            "animeResponse" => $anime['data'],
            "mangaResponse" => $manga['data']
        ]);

    }
}
