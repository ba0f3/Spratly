<?php
/**
 * User: rgv151
 * Date: 6/10/13
 * Time: 1:59 AM
 */

namespace Rgv151\Spratly;
use Carbon\Carbon;
use View;
use Auth;
View::composer('spratly::*', function($view) {
    $view->user = Auth::user();
    $view->menus = Menu::all();
});


View::composer('spratly::dashboard', function($view) {
    $view->title = 'Dashboard';
});