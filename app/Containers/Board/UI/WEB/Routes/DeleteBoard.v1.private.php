<?php

/** @var Route $router */
$router->delete('board/{id}/delete', [
    'as' => 'web_board_delete',
    'uses'  => 'Controller@delete',
   /* 'middleware' => [
      'auth:web',
    ],*/
]);
