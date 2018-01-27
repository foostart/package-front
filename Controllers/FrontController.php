<?php namespace Foostart\Front\Controllers;

/*
|-------------------------------------------------------------------------------
| FrontController
|-------------------------------------------------------------------------------
| @author: Kang
| @website: http://foostart.com
| @date: 27/01/2018
|
*/

use Illuminate\Http\Request;
use URL, Route, Redirect;
use Illuminate\Support\Facades\App;

use App\Http\Controllers\Controller;

class FrontController extends Controller {


    public function __construct() {

        parent::__construct();

    }

    /**
     * Show list of items
     * @return view list of items
     * @date 27/12/2017
     */
    public function index(Request $request) {


    }

}