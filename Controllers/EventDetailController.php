<?php namespace Foostart\Front\Controllers;

/*
|-------------------------------------------------------------------------------
| EventDetailController
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

class EventDetailController extends FrontController {

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
            'assets' => $this->getAssetPage('event-detail')
        ));


        return view($this->package_name.'::pages.event-detail', $this->data_view);
    }

}