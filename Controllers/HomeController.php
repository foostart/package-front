<?php namespace Foostart\Front\Controllers;

/*
|-------------------------------------------------------------------------------
| HomeController
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

//Models
use Foostart\Post\Models\Post;
use Foostart\Slideshow\Models\Slideshow;

class HomeController extends FrontController {

    public $obj_post = NULL;
    public $obj_slideshow = NULL;

    public function __construct() {

        parent::__construct();

        //object item
        $this->obj_post = new Post();
        $this->obj_slideshow = new Slideshow();
    }

    /**
     * Home page
     */
    public function index(Request $request) {

        //init
        $user = $this->getUser();

        //Load list of categories
        $params = array(
            'order' => array(
                'category_order' => 'ASC',
            )
        );
        $course_categories = $this->obj_category->getCategoriesByIdParent('1', $params);//TODO: move 1 to config
        $courses = $this->obj_post->getCoursesByCategoriesRoot($course_categories);

        //load slid eshow author and customer
        $slideshow_author_customer = $this->obj_slideshow->getSlideshowById('1');//TODO: move 1 to config

        // display view
        $this->data_view = array_merge($this->data_view, array(
            'request' => $request,
            'assets' => $this->getAssetPage('home'),
            'title' => trans('front-user.pages.title-home'),
            'courses' => $courses,
            'slideshow_author_customer' => $slideshow_author_customer,
            'user' => $user
        ));

        return view($this->package_name.'::pages.home', $this->data_view);
    }

}