<?php namespace Foostart\Front\Controllers;

/*
|-------------------------------------------------------------------------------
| ContactController
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

class ContactController extends FrontController {

    public function __construct() {

        parent::__construct();

    }

    /**
     * Contact page
     */
    public function index(Request $request) {
        
        // display view
        $this->data_view = array_merge($this->data_view, array(
            'request' => $request,
            'assets' => $this->getAssetPage('contact')
        ));


        return view($this->package_name.'::pages.contact', $this->data_view);
    }

}