<?php

/** @var Route $router */
$router->get('board/create', [
    'as' => 'web_board_create',
    'uses'  => 'Controller@create',
/*    'middleware' => [
      'auth:web',
    ],*/
]);
