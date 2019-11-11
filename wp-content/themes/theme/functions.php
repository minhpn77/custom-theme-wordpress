<?php
add_action('wp_enqueue_scripts', 'load_stylesheets');
function load_stylesheets() {
    wp_enqueue_style('font', get_template_directory_uri() . '/fonts/beyond_the_mountains-webfont.css',false,'1.1','all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/plugin-frameworks/bootstrap.min.css', false,'1.1','all');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/plugin-frameworks/swiper.css', false,'1.1','all');
    wp_enqueue_style('ioicons', get_template_directory_uri() . '/fonts/ionicons.css', false,'1.1','all');
    wp_enqueue_style('styles', get_template_directory_uri() . '/common/styles.css', false,'1.1','all');
}


//load scripts

function addjs() {
    wp_deregister_script('jquery');
    wp_register_script( 'jquery', get_template_directory_uri() . '/plugin-frameworks/jquery-3.2.1.min.js', array (), 1, 1, 1);
    wp_enqueue_script( 'jquery' );
    wp_register_script( 'bootstrap', get_template_directory_uri() . '/plugin-frameworks/bootstrap.min.js', array (), 1, 1, 1);
    wp_enqueue_script( 'bootstrap' );
    wp_register_script( 'swiper', get_template_directory_uri() . '/plugin-frameworks/swiper.js', array (), 1, 1, 1);
    wp_enqueue_script( 'swiper' );
    wp_register_script( 'scripts', get_template_directory_uri() . '/common/scripts.js', array (), 1, 1, 1);
    wp_enqueue_script( 'scripts' );
}
add_action('wp_enqueue_scripts', 'addjs');


//Customs image size

add_image_size('product_image_small', 400, 400, false);
add_image_size('product_image_large', 700, 700, false);

//Customs menu

add_theme_support('menus');

//register menu
register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme')
    )
);

?>
