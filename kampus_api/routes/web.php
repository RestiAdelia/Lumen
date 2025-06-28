<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/', function () use ($router) {
    return response()->json(['message' => 'API Ready']);
});


$router->group(['prefix' => 'kampus'], function () use ($router) {
    $router->get('/', 'KampusController@index');
    $router->get('/{id}', 'KampusController@show');
    $router->post('/', 'KampusController@store');
    $router->put('/{id}', 'KampusController@update');
    $router->delete('/{id}', 'KampusController@destroy');
});
