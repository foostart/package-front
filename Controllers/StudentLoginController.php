<?php namespace Foostart\Front\Controllers;

/*
|-------------------------------------------------------------------------------
| StudentLoginController
|-------------------------------------------------------------------------------
| @author: Kang
| @website: http://foostart.com
| @date: 27/01/2018
|
*/

use Illuminate\Http\Request;
use URL, Route, Redirect;
use Illuminate\Support\Facades\App;

use Foostart\Front\Controllers\FrontController;

class StudentLoginController extends FrontController {

    public function __construct() {
        parent::__construct();
    }

    /**
     * Home page
     */
    public function index(Request $request) {

        // display view
        $this->data_view = array_merge($this->data_view, array(
            'request' => $request,
            'assets' => $this->getAssetPage('student-login')
        ));

        return view($this->package_name.'::pages.student-login', $this->data_view);
    }

}