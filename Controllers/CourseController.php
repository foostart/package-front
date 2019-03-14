<?php namespace Foostart\Front\Controllers;

/*
|-------------------------------------------------------------------------------
| CourseController
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

//Load models
use Foostart\Post\Models\Post;
use Foostart\Category\Models\Category;

class CourseController extends FrontController {

    //Post object
    public $obj_post = NULL;
    public $obj_category = NULL;

    public function __construct() {

        parent::__construct();

        $this->obj_post = new Post();
        $this->obj_category = new Category();

    }

    /**
     * Contact page
     */
    public function index($category, Request $request) {


        //Load list of categories
        $params = array(
            'order' => array(
                'category_order' => 'ASC',
            )
        );
        $course_categories = $this->obj_category->getCategoriesByIdParent('1', $params);//TODO: move 1 to config

        //get category by name
        $params = array();
        $category = $this->obj_category->selectItem($params, 'category_slug', $category);

        $ids = [$category->category_id => 1];
        if (!empty($category->category_id_child_str)) {
            $ids += (array)json_decode($category->category_id_child_str);;
        }
        $ids = array_keys($ids);

        $courses = $this->obj_post->getCouresByCategoryIds($ids);

        // display view
        $this->data_view = array_merge($this->data_view, array(
            'request' => $request,
            'assets' => $this->getAssetPage('course'),
            'courses' => $courses,
            'category' => $category,
            'course_categories' => $course_categories,
        ));


        return view($this->package_name.'::pages.course', $this->data_view);
    }

}