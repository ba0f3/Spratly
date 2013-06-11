<?php
/**
 * Created by JetBrains PhpStorm.
 * User: rgv151
 * Date: 6/9/13
 * Time: 4:46 PM
 * To change this template use File | Settings | File Templates.
 */


Route::group(array('prefix' => Config::get('spratly::spratly.prefix')), function()
{
    Route::get('/', function() {
        if(!Auth::check()) {
            return Redirect::to('admin/login');
        }
        return View::make('spratly::dashboard');
    });

    Route::get('/login', 'Rgv151\Spratly\LoginController@getLogin');
    Route::post('/login', 'Rgv151\Spratly\LoginController@doLogin');
    Route::any('/logout', 'Rgv151\Spratly\LoginController@doLogout');

    Route::resource('manage/forms', 'Rgv151\Spratly\FormController', array('except' => array('update', 'destroy')));
});