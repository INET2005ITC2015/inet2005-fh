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

Route::resource('articles', 'ArticlesController');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('tags/{tags}', 'TagsController@show');

Route::get('foo', ['middleware' => 'manager', function()
{
    return 'this page may only be viewed by managers';


}
]);

//Route::get('/', 'WelcomeController@index');


//Route::get('articles', 'ArticlesController@index');
//
//Route::get('articles/create', 'ArticlesController@create');
//
//Route::get('articles/{id}', 'ArticlesController@show');
//
//Route::post('articles', 'ArticlesController@store');
//
//Route::get('articles/{id}/edit', 'ArticlesController@edit');


//use Illuminate\Support\Facades\Route;

//use Symfony\Component\Routing\Route;

//use Symfony\Component\Routing\Annotation\Route;

//use Illuminate\Routing\Route;


