<?php

//load file config
$config = require_once (realpath(__DIR__.'../../../config/package-front.php'));

//load LESS library
require_once './lessc.inc.php';

$less = 'less';
$css = 'css';


//define list of using assets
$page_config = $config['page_config'];

//build LESS to CSS
$assets_path = realpath(__DIR__.'../../');

//LESS
foreach ($page_config as $_page) {

    foreach ($_page['ids'] as $_id) {

        $source = realpath($assets_path . '/' . $less . '/blocks/' . $_id . '.less');
        $target = $assets_path . '/' . $css . '/blocks/' . $_id . '.css';

        if (!empty($source)) {
            $obj_less = new lessc();
            $obj_less->compileFile($source, $target);
        }
    }
}

?>
Done