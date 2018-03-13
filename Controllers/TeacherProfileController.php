<?php namespace Foostart\Front\Controllers;

/*
|-------------------------------------------------------------------------------
| TeacherProfileController
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

class TeacherProfileController extends FrontController {

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
            'assets' => $this->getAssetPage('teacher-profile')
        ));


        return view($this->package_name.'::pages.teacher-profile', $this->data_view);
    }

}