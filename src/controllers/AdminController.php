<?php
/**
 * User: rgv151
 * Date: 6/13/13
 * Time: 3:43 PM
 */

namespace Rgv151\Spratly;

use Carbon\Carbon;
use Input;
use Controller;
use View;
use Auth;
use Redirect;

class AdminController extends Controller {
    public function index() {
        return View::make('spratly::dashboard');
    }

}