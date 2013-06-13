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
    Route::get('/', 'Rgv151\Spratly\AdminController@index');

    Route::get('/login', 'Rgv151\Spratly\LoginController@getLogin');
    Route::post('/login', 'Rgv151\Spratly\LoginController@doLogin');
    Route::any('/logout', 'Rgv151\Spratly\LoginController@doLogout');

    Route::controller('users', 'Rgv151\Spratly\UserController');
    Route::resource('manage/forms', 'Rgv151\Spratly\FormController', array('except' => array('update', 'destroy')));

});