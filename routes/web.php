<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api/v1'], function () use ($router) {
    $router->get('users',  ['uses' => 'Actor\UserController@showAllUsers']);
  
    $router->get('users/{id}', ['uses' => 'Actor\UserController@showOneUser']);
  
    $router->post('users', ['uses' => 'Actor\UserController@create']);
  
    $router->delete('users/{id}', ['uses' => 'Actor\UserController@delete']);
  
    $router->put('users/{id}', ['uses' => 'Actor\UserController@update']);
  });
