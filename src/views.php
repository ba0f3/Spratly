<?php
/**
 * User: rgv151
 * Date: 6/10/13
 * Time: 1:59 AM
 */


View::composer('spratly::*', function($view) {
    $view->user = Auth::user();
});


View::composer('spratly::dashboard', function($view) {
    $view->title = 'Dashboard';
});