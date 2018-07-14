<?php

/** @var Route $router */
$router->post('home/store', [
    'as' => 'web_board_store',
    'uses'  => 'Controller@store',
//    'middleware' => [
//      'auth:web',
//    ],
]);
