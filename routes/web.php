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
        Route::get('/', 'HomeController@index')->name('home');

        //Route processing ajax request
        Route::group([
            'prefix' => 'ajax',
            'as' => 'ajax.'
        ], function ($routes) {
            $routes->get('districts', 'ExtraController@getDistricts')->name('district');
            $routes->get('wards', 'ExtraController@getWards')->name('ward');
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
