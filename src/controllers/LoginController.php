<?php
/**
 * User: rgv151
 * Date: 6/9/13
 * Time: 10:23 PM
 */

namespace Rgv151\Spratly;

use Carbon\Carbon;
use Input;
use Controller;
use View;
use Auth;
use Redirect;

class LoginController extends Controller {
    public function getLogin() {
        return View::make('spratly::login');
    }

    public function doLogin() {
        if(Input::get('_token') !== csrf_token()) {
            return Redirect::to('admin/login');
        }
        $email = Input::get('email');
        $password = Input::get('password');

        if (Auth::attempt(array('email' => $email, 'password' => $password))) {
            Auth::user()->last_login = Carbon::now();
            Auth::user()->save();
            return Redirect::intended('admin');
        } else {
            return Redirect::to('admin/login');
        }
    }

    public function doLogout() {
        Auth::logout();
        return Redirect::to('admin/login');
    }

    public function postForgotPassword() {

    }

    public function postRegister() {

    }
}