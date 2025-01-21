<?php
//Register menus
function register_menus()
{
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu')
        )
    );
}
add_action('after_setup_theme', 'register_menus');
