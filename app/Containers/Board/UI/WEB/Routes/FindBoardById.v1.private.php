<?php

/** @var Route $router */
$router->get('board/{id}', [
    'as' => 'web_board_show',
    'uses'  => 'Controller@show',
/*    'middleware' => [
      'auth:web',
    ],*/
]);
