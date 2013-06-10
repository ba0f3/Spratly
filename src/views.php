<?php
/**
 * User: rgv151
 * Date: 6/10/13
 * Time: 1:59 AM
 */

use Carbon\Carbon;

View::composer('spratly::*', function($view) {
    $view->user = Auth::user();
    $view->top_nav = new \Rgv151\Spratly\Navigation;
});


View::composer('spratly::dashboard', function($view) {
    $view->title = 'Dashboard';
});