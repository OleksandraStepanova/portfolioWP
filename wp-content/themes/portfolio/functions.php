<?php
if (!defined('ABSPATH')) exit;

if (!defined('_VERSION')) {
    define('_VERSION', '1.0.0');
}


require get_template_directory() . '/inc/_custom.php';

//Post types
require get_template_directory() . '/inc/_post-types.php';

//Menus
require get_template_directory() . '/inc/_menus.php';
