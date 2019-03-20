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
use Foostart\Category\Models\Category;
use Foostart\Post\Models\Post;
use Foostart\Slideshow\Models\Slideshow;

class ChecklistController extends FrontController {

    public $obj_post = NULL;
    public $obj_slideshow = NULL;
    public $obj_category = NULL;

    public function __construct() {

        parent::__construct();

        //object item
        $this->obj_category = new Category();
        $this->obj_post = new Post();
        $this->obj_slideshow = new Slideshow();
    }

    /**
     * Home page
     */
    public function index($name, $id) {

        $request = new Request();
        //init
        $user = $this->getUser();

        //Get category by id
        $params = array(
            'category_id' => $id,
        );
        $category = $this->obj_category->getCategoryById($id);

        if (empty($category)) {
            return redirect()->route('home', []);
        }

        $checklist = $this->obj_post->selectItems($params);

        //load slid eshow author and customer
        $slideshow_author_customer = $this->obj_slideshow->getSlideshowById('1');//TODO: move 1 to config

        // display view
        $this->data_view = array_merge($this->data_view, array(
            'request' => $request,
            'assets' => $this->getAssetPage('checklist'),
            'title' => $category->category_name,
            'category' => $category,
            'checklist' => $checklist,
            'slideshow_author_customer' => $slideshow_author_customer,
            'user' => $user
        ));

        return view($this->package_name.'::pages.checklist', $this->data_view);
    }

}