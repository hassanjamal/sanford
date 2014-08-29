<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
 */

Route::model('user', 'User');
Route::model('package', 'Package');
Route::model('payment', 'Payment');

Route::get('/', function ()
    {
        return View::make('index');
    });

// Session Routes
Route::get('login', [
    'as'   => 'login',
    'uses' => 'SessionController@create']);
Route::get('logout', [
    'as'   => 'logout',
    'uses' => 'SessionController@destroy']);
Route::resource('sessions', 'SessionController', [
    'only' => ['create', 'store', 'destroy']]);


Route::group(array('prefix' => 'admin', 'before' => 'isAdmin'), function ()
    {
        Route::get('dashboard', [
            'as'   => 'adminDashboard',
            'uses' => 'AdminDashboardController@index']);
        Route::patch('user/{user}/password', [
            'as'   => 'adminPasswordChange',
            'uses' => 'AdminUserController@changePassword']);
        Route::get('user/{user}/activate', [
            'as'   => 'adminUserActivation',
            'uses' => 'AdminUserController@activate'
        ]);
        Route::get('user/parent', [
            'uses' => 'AdminUserController@getParent'
        ]);
        Route::post('user/parent', [
            'uses' => 'AdminUserController@postParent'
        ]);
        Route::get('user/sponsor', [
            'uses' => 'AdminUserController@getSponsor'
        ]);
        Route::post('user/sponsor', [
            'uses' => 'AdminUserController@postSponsor'
        ]);
        Route::get('user/{user}/receipt', [
            'as'   => 'userReceipt',
            'uses' => 'AdminUserController@getReceipt']);

        Route::get('user/{user}/welcome', [
            'as'   => 'userWelcome',
            'uses' => 'AdminUserController@getWelcome']);

        Route::resource('user', 'AdminUserController');
        Route::resource('user.payment', 'AdminPaymentController');
        Route::resource('package', 'AdminPackagesController');
    });


Route::group(array('prefix' => 'account'), function ()
    {
        Route::get('/', [
            'as'   => 'dashboard',
            'uses' => 'UsersController@index']);
        Route::get('settings', [
            'as'   => 'settings',
            'uses' => 'UsersController@edit']);
        Route::post('settings/pass', [
            'as'     => 'settingsPassword',
            'before' => 'csrf',
            'uses'   => 'UsersController@updatePassword']);
        Route::post('settings/logo', [
            'as'     => 'settingsLogo',
            'before' => 'csrf',
            'uses'   => 'UsersController@updateLogo']);
    });





