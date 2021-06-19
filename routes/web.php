<?php

/** @var Router $router */
use Laravel\Lumen\Routing\Router;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


$router->get(
    '/',
    [
        'uses' => 'HomeController@home',
        'as' => "home",
    ]
);

$router->get(
    '/anime/{id}',
    [
        'uses' => 'AnimeController@show',
        'as' => "anime-show",
    ]
);
