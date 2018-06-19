<?php

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
    $client = new \Github\Client();
    $repositories = $client->api('user')->repositories('ornicar');
    header('Content-type: text/javascript');
    echo json_encode($repositories, JSON_PRETTY_PRINT);
    die(1);
    return $router->app->version();
});
