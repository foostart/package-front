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

class ItemController extends FrontController {

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
    public function index($name, $id) {

        $request = new Request();
        //init
        $user = $this->getUser();

        //Get checklist item
        $params = array(
            'id' => $id
        );
        $checklist_item = $this->obj_post->selectItem($params);

        if (empty($checklist_item)) {
            return redirect()->route('home', []);
        }

        //Get related item
        $params = [
            'category_id' => $checklist_item->category_id,
            'limit' => 5,
        ];
        $related_items = $this->obj_post->selectItems($params);

        //load slid eshow author and customer
        $slideshow_author_customer = $this->obj_slideshow->getSlideshowById('1');//TODO: move 1 to config

        // display view
        $this->data_view = array_merge($this->data_view, array(
            'request' => $request,
            'assets' => $this->getAssetPage('item'),
            'title' => $checklist_item->post_slug,
            'checklist_item' => $checklist_item,
            'related_items' => $related_items,
            'slideshow_author_customer' => $slideshow_author_customer,
            'user' => $user
        ));

        return view($this->package_name.'::pages.item', $this->data_view);
    }

}