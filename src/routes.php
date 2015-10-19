<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$router->post('articles', 'ArticlesController@store');
$router->get('articles/create', 'ArticlesController@create');
$router->get('articles', 'ArticlesController@index');
$router->get('articles/{id}', 'ArticlesController@show');

// $router->get('about', 'PagesController@about');

$router->controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
