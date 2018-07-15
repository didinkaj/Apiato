<?php

/**
 * @apiGroup           Boardmembers
 * @apiName            updateBoardmembers
 *
 * @api                {PATCH} /v1/boardmembers/:id Endpoint title here..
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
$router->patch('boardmembers/{id}', [
    'as' => 'api_boardmembers_update_boardmembers',
    'uses'  => 'Controller@updateBoardmembers',
    'middleware' => [
      'auth:api',
    ],
]);
