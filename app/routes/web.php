<?php

$router->get('/', function () use ($router) {

});

$router->get('prs/{user}/{repo}', [
    'as' => 'prs', 'uses' => 'PRsController@index'
]);
