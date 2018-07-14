<?php

/** @var Route $router */
$router->get('/', [
    'as' => 'web_board_index',
    'uses'  => 'Controller@index',
   /* 'middleware' => [
      'auth:web',
    ],*/
]);
