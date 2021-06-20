<?php

namespace App\Http\Controllers;

use App\Http\Services\ApiRequests;


class AnimeController extends Controller
{

    public function show($id)
    {

        $anime = ApiRequests::get("https://kitsu.io/api/edge/", "anime/{$id}");

        return view('anime_show', [
            "response" => $anime['data']
        ]);
    }

}
