<?php

/** @var Route $router */
$router->delete('committees_api/{id}', [
    'as' => 'web_committees_delete',
    'uses'  => 'Controller@delete',
    'middleware' => [
      'auth:web',
    ],
]);
