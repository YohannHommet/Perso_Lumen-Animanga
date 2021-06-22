<?php

namespace App\Http\Controllers;

use App\Http\Services\ApiRequests;


class MangaController extends Controller
{

    public function show($id)
    {
        $manga = ApiRequests::get("https://kitsu.io/api/edge/", "manga/{$id}");
        dump($manga['data']);
        return view('manga_show', [
            "response" => $manga['data']
        ]);
    }

}
