<?php
/**
 * User: rgv151
 * Date: 6/12/13
 * Time: 1:42 AM
 */

namespace Rgv151\Spratly;

use Carbon\Carbon;
use DB;
use Input;
use Controller;
use Route;
use View;
use Auth;
use Redirect;
use Config;
use Validator;

class UserController extends Controller {
    public function getIndex() {
        $users = User::paginate(Config::get('spratly::spratly.records_per_page', 15));
        return View::make('spratly::user.index')->with('users', $users);
    }

    public function postIndex() {
        $checked = Input::get('checked');

        $users = DB::table('users')->whereIn('id', $checked);
        switch(Input::get('action')) {
            case 'active':
                $users->update(array('enabled' => true));
                break;
            case 'deactive':
                $users->update(array('enabled' => false));
                break;
            case 'delete':
                $users->delete();
                break;
        }
        return Redirect::to(Route::getCurrentRoute()->getPath());
    }

    public function getEdit($id) {
        $id = intval($id);
        $user = User::find($id);

        $view = View::make('spratly::user.edit');
        $view->with('user', $user);

        $view->with('roles', FormHelper::getRelationshipSelectList('Rgv151\Spratly\Role',$user->role->id));

        return $view;

    }

    public function getCreate() {
        $view = View::make('spratly::user.create');

        $view->with('roles', FormHelper::getRelationshipSelectList('Rgv151\Spratly\Role'));
        return $view;
    }

    public function postSave() {
        $action = Input::get('action', 'cancel');

        if($action == 'cancel') {
            return Redirect::to( 'admin/users');
        }

        if($action == 'save') {
            $rules = array (
                'username' => 'required',
                'email' => 'required|email',
                'first_name' => 'required',
                'last_name' => 'required',
                'password' => 'confirmed|size:8'
            );
        } else {
            $rules = array (
                'username' => 'required|unique:users',
                'email' => 'required|email|unique:users',
                'first_name' => 'required',
                'last_name' => 'required',
                'password' => 'required|confirmed|size:8'
            );
        }

        $messages = array(
            'password2.required_with' => 'Please confirm your password.',
            'password2.same' => 'The passwords you enter must match.'
        );

        $validator = Validator::make(Input::all(), $rules, $messages);
        if($validator->fails()) {
            if($action == 'save') {
                return Redirect::to( 'admin/users/edit/' . Input::get('id') )->exceptInput('password')->withErrors($validator);
            } else {
                return Redirect::to( 'admin/users/create' )->exceptInput('password')->withErrors($validator);
            }
        }

        if($action == 'save') {
            User::find(Input::get('id'))->update(Input::except('password_confirmation', 'action'));
            return Redirect::to( 'admin/users' )->with('message', 'User updated successful!');
        } else {
            User::create(Input::except('password_confirmation', 'action'))->save();
            return Redirect::to( 'admin/users' )->with('message', 'User created successful!');
        }

    }

}