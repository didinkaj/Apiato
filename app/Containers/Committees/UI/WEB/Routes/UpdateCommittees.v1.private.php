<?php

/** @var Route $router */
$router->patch('committees_api/{id}', [
    'as' => 'web_committees_update',
    'uses'  => 'Controller@update',
    'middleware' => [
      'auth:web',
    ],
]);
