<?php 

/* Menu princiapl*/ 

function register_my_menus() {
    register_nav_menus(
        array(
            'main-menu' => __('Menu Principal', 'nathaliemota')
        )
    );
}
add_action('after_setup_theme', 'register_my_menus');
