<?php

namespace App\Http\Controllers;

use App\Http\Services\ApiRequests;
use Illuminate\Http\Request;


class HomeController extends Controller
{

    public function home(Request $request)
    {
        // Search Query based on Anime
        if ($request->get('anime')) {
            $search = $request->get('anime');

            $anime = ApiRequests::get("https://kitsu.io/api/edge/", "anime?filter[text]=" . $search);
            array_pop($anime['data']);
            $manga = ApiRequests::get("https://kitsu.io/api/edge/", "manga");
            array_pop($manga['data']);

            return view('home', [
                "animeResponse" => $anime['data'],
                "mangaResponse" => $manga['data']
            ]);
        }

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
