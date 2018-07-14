<?php

/** @var Route $router */
$router->get('committees_api/{id}', [
    'as' => 'web_committees_show',
    'uses'  => 'Controller@show',
    'middleware' => [
      'auth:web',
    ],
]);
