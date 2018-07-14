<?php

/** @var Route $router */
$router->get('committees_api/{id}/edit', [
    'as' => 'web_committees_edit',
    'uses'  => 'Controller@edit',
    'middleware' => [
      'auth:web',
    ],
]);
