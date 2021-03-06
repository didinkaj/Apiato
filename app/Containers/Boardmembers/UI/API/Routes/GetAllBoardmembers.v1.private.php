<?php

/**
 * @apiGroup           Boardmembers
 * @apiName            getAllBoardmembers
 *
 * @api                {GET} /v1/boardmembers Endpoint title here..
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
$router->get('boardmembers', [
    'as' => 'api_boardmembers_get_all_boardmembers',
    'uses'  => 'Controller@getAllBoardmembers',
    'middleware' => [
      'auth:api',
    ],
]);
