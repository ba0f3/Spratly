<?php
/**
 * User: rgv151
 * Date: 6/13/13
 * Time: 2:02 PM
 */


Route::filter('spratly', function()
{

    $prefix = Config::get('spratly::spratly.prefix');

    $currentpath = Route::getCurrentRoute()->getPath();
    $loginPath = '/'. $prefix.'/'.'login';
    if (!Auth::check() && $currentpath != $loginPath )
    {
        return Redirect::to($loginPath);
    }
});

Route::when(Config::get('spratly::spratly.prefix') . '*', 'spratly');
