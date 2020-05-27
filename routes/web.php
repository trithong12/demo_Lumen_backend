<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->group(['prefix' => 'api'], function () use ($router) {

    $router->group(['prefix' => 'exhibitions'], function () use ($router) {
        $router->get('/', ['uses' => 'ExhibitionController@index']);
        $router->get('/all', ['uses' => 'ExhibitionController@getAll']);
        $router->get('/{id}', ['uses' => 'ExhibitionController@show']);
        $router->post('/', ['uses' => 'ExhibitionController@create']);
        $router->put('/{id}', ['uses' => 'ExhibitionController@update']);
        $router->delete('/{id}', ['uses' => 'ExhibitionController@delete']);
    });

    $router->group(['prefix' => 'organizations'], function () use ($router) {
        $router->get('/', ['uses' => 'OrganizationController@index']);
        $router->get('/{id}', ['uses' => 'OrganizationController@show']);
        $router->post('/', ['uses' => 'OrganizationController@create']);
        $router->put('/{id}', ['uses' => 'OrganizationController@update']);
        $router->delete('/{id}', ['uses' => 'OrganizationController@delete']);
    });

    $router->group(['prefix' => 'sites'], function () use ($router) {
        $router->get('/', ['uses' => 'SiteController@index']);
        $router->get('/{id}', ['uses' => 'SiteController@show']);
        $router->post('/', ['uses' => 'SiteController@create']);
        $router->put('/{id}', ['uses' => 'SiteController@update']);
        $router->delete('/{id}', ['uses' => 'SiteController@delete']);
    });
});
