<?php

/**
 * @apiGroup           Committees
 * @apiName            createCommittees
 *
 * @api                {POST} /v1/committees Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->post('committees', [
    'as' => 'api_committees_create_committees',
    'uses'  => 'Controller@createCommittees',
    'middleware' => [
      'auth:api',
    ],
]);
