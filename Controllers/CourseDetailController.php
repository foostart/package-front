<?php namespace Foostart\Front\Controllers;

/*
|-------------------------------------------------------------------------------
| CourseDetailController
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

class CourseDetailController extends FrontController {

    //Post object
    public $obj_post = NULL;
    public $obj_category = NULL;

    public function __construct() {

        parent::__construct();

        $this->obj_post = new Post();
        $this->obj_category = new Category();

    }

    /**
     * Course detail page
     * @date 16h 14/07/2018
     * @location Cafe 96 S1TT
     */
    public function index($category, $post, $id) {

        //init
        $request = new Request();
        $params = [
            'id' => $id,
        ];
        $post = NULL;
        $other_posts = NULL;
        $category = NULL;
        $users_comments = NULL;
        $commentsArray = NULL;
        $usersArray = NULL;

        $user = $this->getUser();
        $this->obj_post->user = $user;
        //processing
        $post = $this->obj_post->selectItem($params);

        if ($post && $post->category_id) {
            $_params = [
                'id' => $post->category_id
            ];
            $category = $this->obj_category->selectItem($_params);
        }

        //get comment by cache
        if (!empty($this->cache) && $this->cache['status']) {
            // use cache in valid time
            $time = $post->cache_time ? ((int) $post->cache_time + 60 * $this->cache['time_comment']) : 0;
            if ($time >= $time) {

                // valid cache
                $users_comments = $post->cache_comments ? json_decode($post->cache_comments) : array();
            }
        }
        if (!$users_comments) {
            $users_comments = $this->obj_post->getComments($id);
        }
        list($commentsArray, $usersArray) = $users_comments;

        //get other posts by post
        $params = array(
            '_id' => $post->post_id,
            'category' => $post->category_id,
        );
        $other_posts = $this->obj_post->selectItems($params);

        // captcha
        $captcha = App::make('captcha_validator');

        // set user info in data view
        $this->setUserInfo($user);

        // display view
        $this->data_view = array_merge($this->data_view, array(
            'request' => $request,
            'assets' => $this->getAssetPage('course-detail'),
            'post' => $post,
            'other_posts' => $other_posts,
            'category' => $category,
            'user' => $user,
            'captcha' => $captcha,
            'context_name' => 'post',
            'context_id' => $post->id,
            'commentsArray' => $commentsArray,
            'usersArray' => $usersArray
        ));


        return view($this->package_name.'::pages.course-detail', $this->data_view);
    }

}