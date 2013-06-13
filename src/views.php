<?php
/**
 * User: rgv151
 * Date: 6/10/13
 * Time: 1:59 AM
 */

namespace Rgv151\Spratly;
use Carbon\Carbon;
use Session;
use View;
use Auth;
View::composer('spratly::*', function($view) {
    $view->authUser = Auth::user();
    $view->menus = Menu::all();

    $view->message = Session::get('message');
});


View::composer('spratly::dashboard', function($view) {
    $view->icon = 'dashboard';
    $view->title = 'Dashboard';
});

View::composer('spratly::user.form', function($view) {
    $view->icon = 'edit';
    $view->title = 'Edit User';
});