<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::group([
    'as' => 'app.'
], function () {
    /**
     **Un authenticated route of application
     **/
    Route::group([
        'middleware' => 'web'
    ], function () {
        Route::get('/','HomeController@index')->name('home');
        Route::get('bug', function (){
            throw  new Exception('My bug');
        });
    });
    /**
     **Authenticated route of application
     **/
    Route::group([
        'middleware' => 'auth'
    ], function () {

    });
});
