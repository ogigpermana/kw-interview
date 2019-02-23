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
    // Route for users
    $router->get('users',  ['uses' => 'Actor\UserController@showAllUsers']);
  
    $router->get('users/{id}', ['uses' => 'Actor\UserController@showOneUser']);
  
    $router->post('users', ['uses' => 'Actor\UserController@create']);
  
    $router->delete('users/{id}', ['uses' => 'Actor\UserController@delete']);
  
    $router->put('users/{id}', ['uses' => 'Actor\UserController@update']);

    // Route for Items
    $router->get('items',  ['uses' => 'Kw\ItemController@showAllItems']);
  
    $router->get('items/{id}', ['uses' => 'Kw\ItemController@showOneItem']);
  
    $router->post('items', ['uses' => 'Kw\ItemController@create']);
  
    $router->delete('items/{id}', ['uses' => 'Kw\ItemController@delete']);
  
    $router->put('items/{id}', ['uses' => 'Kw\ItemController@update']);

    // Route for Checklists
    $router->get('checklists',  ['uses' => 'Kw\ChecklistController@showAllChecklists']);
  
    $router->get('checklists/{id}', ['uses' => 'Kw\ChecklistController@showOneChecklist']);
  
    $router->post('checklists', ['uses' => 'Kw\ChecklistController@create']);
  
    $router->delete('checklists/{id}', ['uses' => 'Kw\ChecklistController@delete']);
  
    $router->put('checklists/{id}', ['uses' => 'Kw\ChecklistController@update']);

    // Route for Template
    $router->get('templates',  ['uses' => 'Kw\TemplateController@showAllTemplates']);

    $router->get('templates/{id}',  ['uses' => 'Kw\TemplateController@showSingleTemplate']);

    $router->post('templates',  ['uses' => 'Kw\TemplateController@create']);
    
    $router->put('templates/{id}', ['uses' => 'Kw\TemplateController@update']);

    $router->put('templates/{id}', ['uses' => 'Kw\TemplateController@delete']);

  });
