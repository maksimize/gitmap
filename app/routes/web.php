<?php

$router->get('/', function () use ($router) {

});

$router->get('{user}/{repo}/pulls', [
    'as' => 'pulls', 'uses' => 'PRsController@index'
]);
