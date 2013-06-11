<?php
/**
 * User: rgv151
 * Date: 6/12/13
 * Time: 1:42 AM
 */

namespace Rgv151\Spratly;

use Carbon\Carbon;
use Input;
use Controller;
use View;
use Auth;
use Redirect;

class FormController extends Controller {
    public function index() {
        return View::make('spratly::form.index');
    }

    public function create() {
        return View::make('spratly::form.create');
    }


}