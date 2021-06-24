<?php

namespace App\Http\Controllers;

use App\Http\Services\ApiRequests;
use Symfony\Component\HttpFoundation\Request;


class AnimeController extends Controller
{

    public function show(Request $request, $id)
    {
        $anime = ApiRequests::get("https://kitsu.io/api/edge/", "anime/{$id}");


        return view('anime_show', [
            "response" => $anime['data']
        ]);
    }

}
