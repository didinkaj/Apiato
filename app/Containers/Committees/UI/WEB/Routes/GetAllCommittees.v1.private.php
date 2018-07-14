<?php

/** @var Route $router */
$router->get('committees_api', [
    'as' => 'web_committees_index',
    'uses'  => 'Controller@index',
    'middleware' => [
      'auth:web',
    ],
]);
