<?php

/** @var Route $router */
$router->delete('home/{id}', [
    'as' => 'web_board_delete',
    'uses'  => 'Controller@delete',
    'middleware' => [
      'auth:web',
    ],
]);
