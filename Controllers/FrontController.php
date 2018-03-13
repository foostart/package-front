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
use URL,
    Route,
    Redirect;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class FrontController extends Controller {

    //send data to view
    public $data_view = [];
    //package name
    public $package_name = 'package-front';
    //directory blocks
    public $dir_blocks = 'K:\dev\tailieuweb\templates\blocks';
    //list of blocks id
    public $block_ids = [];
    //list of blocks id that using per page
    public $block_page_ids = [];

    public function __construct() {

        $this->data_view['dir_blocks'] = $this->dir_blocks;
    }

    /**
     * Copy all files from source to target
     * @param STRING $source
     * @param STRING $target
     */
    public function xcopy($source, $target) {
        if (is_dir($source)) {
            $d = dir($source);
            while (FALSE !== ( $entry = $d->read() )) {
                if ($entry == '.' || $entry == '..') {
                    continue;
                }
                $Entry = $source . '/' . $entry;
                if (is_dir($Entry)) {
                    $this->xcopy($Entry, $target . '/' . $entry);
                    continue;
                }
                copy($Entry, $target . '/' . $entry);
            }

            $d->close();
        } else {
            if (!empty($source)) {
                copy($source, $target);
            }
        }
    }

    /**
     * Copy list of assets: css, js, libs from source block to application assets
     */
    public function copy_assets() {

        //define list of using assets
        $page_config = config('package-front.page_config');

        //copy css from block to public system
        $env = env('APP_ENV');
        switch ($env) {
            case 'local':

                //copy block assets to public assets
                $blocks_path = realpath($this->dir_blocks);
                $assets_path = realpath(public_path('packages/foostart/package-front/'));

                //CSS
                foreach ($page_config as $_page) {

                    foreach ($_page['ids'] as $_id) {

                        $source = realpath($blocks_path . '/' . $_id . '/css/' . $_id . '.css');
                        if (!empty($source)) {
                            $target = $assets_path . '/css/blocks/' . $_id . '.css';
                            copy($source, $target);
                        }

                    }
                }

                //JS
                foreach ($page_config as $_page) {

                    foreach ($_page['ids'] as $_id) {

                        $source = realpath($blocks_path . '/' . $_id . '/js/' . $_id . '.js');
                        if (!empty($source)) {
                            $target = $assets_path . '/js/blocks/' . $_id . '.js';
                            copy($source, $target);
                        }
                    }
                }

                //lib
                foreach ($page_config as $_page) {

                    foreach ($_page['libs'] as $_id => $_config) {

                        foreach ($_config as $_type => $_values) {
                            switch ($_type) {
                                case 'js':
                                case 'css':
                                    foreach ($_values as $_item) {
                                        $_source = realpath($blocks_path . '/' . $_id . '/' . $_type . '/' . $_item . '.' . $_type);
                                        if (!empty($_source)) {
                                            $_target = $assets_path . '/' . $_type . '/blocks/' . $_item . '.' . $_type;
                                            copy($_source, $_target);
                                        }
                                    }
                                    break;
                            }
                        }//end $_values
                    }//end $_config
                }//end $_page

                break;
            case 'production':
                break;
        }
    }

    /**
     * Install blocks
     */
    public function installBlocks() {

        //list of block ids
        $this->block_ids = config('package-front.block_ids');

        //target directory of blocks
        $dir_target_blocks = realpath(realpath(__DIR__ . '/..') . '/Views/blocks');

        /**
         * copy to blade content
         */
        foreach ($this->block_ids as $id) {
            //source content
            $_source = realpath($this->dir_blocks . '/' . $id . '/' . $id . '-content.php');
            $_target = $dir_target_blocks . '/' . $id . '-content.blade.php';

            if ($_source) {
                //copy($_source, $_target);
            }
        }

        /**
         * copy to images
         */
        $image_paths = public_path('images');
        foreach ($this->block_ids as $id) {
            //source images
            $_source = realpath($this->dir_blocks . '/' . $id . '/images');
            //target images
            $_target = public_path('images');
            //$this->xcopy($_source, $_target);
        }

        /**
         * copy background image
         */
        $this->copyBackgroundImage();

        /**
         * Copy assets (css, js, libs) from block source
         */
        $this->copy_assets();
    }

    /**
     * List of config all pages
     */
    public function configBlockPageIds() {
        $this->block_page_ids = [
            'home' => $this->getPageConfig('home'),
            'blog' => $this->getPageConfig('blog'),
            'about' => $this->getPageConfig('about'),
            'blog-detail' => $this->getPageConfig('blog-detail'),
            'contact' => $this->getPageConfig('contact'),
            'course' => $this->getPageConfig('course'),
            'course-detail' => $this->getPageConfig('course-detail'),
            'edit-profile' => $this->getPageConfig('edit-profile'),
            'error' => $this->getPageConfig('error'),
            'event-detail' => $this->getPageConfig('event-detail'),
            'event' => $this->getPageConfig('event'),
            'faq' => $this->getPageConfig('faq'),
            'gallery' => $this->getPageConfig('gallery'),
            'lesson' => $this->getPageConfig('lesson'),
            'news' => $this->getPageConfig('news'),
            'service' => $this->getPageConfig('service'),
            'signin' => $this->getPageConfig('signin'),
            'student-login' => $this->getPageConfig('student-login'),
            'student-profile' => $this->getPageConfig('student-profile'),
            'teacher-profile' => $this->getPageConfig('teacher-profile'),
        ];
        return $this->block_page_ids;
    }


    /**
     * Get page config
     * @return ARRAY list of config assets
     */
    public function getPageConfig($page_name) {
        return config('package-front.page_config.'.$page_name);
    }


    /**
     *
     * @param STRING $page_name
     * @return STRING list of assets that using in page
     */
    public function getAssetPage($page_name) {
        $str_assets = '';
        $assets = $this->getPageConfig($page_name);

        $str_assets = $this->_getAssetPage($assets);

        return $str_assets;
    }

    public function _getAssetPage($assets) {
        $str_assets = [];
        //lib
        foreach ($assets['libs'] as $_id => $_asset) {

            foreach ($_asset as $_type => $_values) {

                foreach ($_values as $_item) {
                    if ($_type == 'css') {
                        $url_asset_css = url('/packages/foostart/package-front/css/blocks/'.$_item.'.css');
                            $str_assets[] = '<link href="'.$url_asset_css.'" rel="stylesheet" type="text/css">';
                        }

                    if ($_type == 'js'){
                        $url_asset_js = url('/packages/foostart/package-front/js/blocks/'.$_item.'.js');
                        $str_assets[] = '<script src="'.$url_asset_js.'" type="text/javascript"></script>';
                    }

                }
            }
        }
        //css
        if($assets && !empty($assets['ids'])) {
            foreach ($assets['ids'] as $id) {
                $dir_asset_css = realpath(public_path('packages/foostart/package-front/css/blocks/'.$id.'.css'));
                if ($dir_asset_css) {
                    $url_asset_css = url('/packages/foostart/package-front/css/blocks/'.$id.'.css');
                    $str_assets[] = '<link href="'.$url_asset_css.'" rel="stylesheet" type="text/css">';
                }
            }
        }

        //js
        if($assets && !empty($assets['ids'])) {
            foreach ($assets['ids'] as $id) {
                $dir_asset_css = realpath(public_path('packages/foostart/package-front/js/blocks/'.$id.'.js'));
                if ($dir_asset_css) {
                    $url_asset_js = url('/packages/foostart/package-front/js/blocks/'.$id.'.js');
                    $str_assets[] = '<script src="'.$url_asset_js.'" type="text/javascript"></script>';
                }
            }
        }

        return $str_assets;
    }

    /**
     * Copy background image from assets
     */
    public function copyBackgroundImage() {

        $bkg_images = [];
        $config_pages = $this->configBlockPageIds();

        $patterns = [
            'image' => '/url\([\'"]*\.\.\/images\/(.*?)[\'"]*\)/',
        ];
        //find list of background images
        foreach ($config_pages as $page) {
            //css
            if (!empty($page['ids'])) {
                foreach ($page['ids'] as $_id) {
                    $dir_asset_css = realpath(public_path('packages/foostart/package-front/css/blocks/'.$_id.'.css'));

                    if ($dir_asset_css) {
                        $css_content = file_get_contents($dir_asset_css);

                        preg_match_all($patterns['image'], $css_content, $matches);
                        if (!empty($matches[1])) {
                            foreach ($matches[1] as $image_name) {
                                if (!in_array($image_name, $bkg_images)) {
                                    $bkg_images[] = $image_name;
                                }
                            }
                        }
                    }
                }
            }
        }

        //copy to css image
        if (!empty($bkg_images)) {

            foreach ($bkg_images as $image_name) {
                //source
                $_source = realpath(public_path('images/'.$image_name));
                //target
                $_target = realpath(public_path('packages/foostart/package-front/css/images')).'/'.$image_name;
                //copy
                $this->xcopy($_source, $_target);
            }
        }

    }

}