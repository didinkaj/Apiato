<?php

/** @var Route $router */
$router->get('committees_api/create', [
    'as' => 'web_committees_create',
    'uses'  => 'Controller@create',
    'middleware' => [
      'auth:web',
    ],
]);
