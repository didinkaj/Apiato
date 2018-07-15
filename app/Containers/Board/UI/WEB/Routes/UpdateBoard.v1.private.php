<?php

/** @var Route $router */
$router->patch('board/{id}', [
    'as' => 'web_board_update',
    'uses'  => 'Controller@update',
/*    'middleware' => [
      'auth:web',
    ],*/
]);
