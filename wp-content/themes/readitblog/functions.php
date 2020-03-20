<?php

add_filter('show_admin_bar', '__return_false');

add_action('wp_enqueue_scripts', 'register_styles_scripts');
add_action('after_setup_theme', 'after_setup');
add_action('widgets_init', 'register_widgets');


function register_styles_scripts() {
    wp_enqueue_style('readitblog-open-iconic', get_template_directory_uri() . '/assets/css/open-iconic-bootstrap.min.css');
    wp_enqueue_style('readitblog-animate', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('readitblog-owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style('readitblog-owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
    wp_enqueue_style('readitblog-magnific', get_template_directory_uri() . '/assets/css/magnific-popup.css');
    wp_enqueue_style('readitblog-aos', get_template_directory_uri() . '/assets/css/aos.css');
    wp_enqueue_style('readitblog-ionicons', get_template_directory_uri() . '/assets/css/ionicons.min.css');
    wp_enqueue_style('readitblog-flaticon', get_template_directory_uri() . '/assets/css/flaticon.css');
    wp_enqueue_style('readitblog-icomoon', get_template_directory_uri() . '/assets/css/icomoon.css');
    wp_enqueue_style('readitblog-style', get_template_directory_uri() . '/assets/css/style.css');

    wp_enqueue_script('readitblog-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', [], null, true);
    wp_enqueue_script('readitblog-jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.1.min.js', [], null, true);
    wp_enqueue_script('readitblog-popper', get_template_directory_uri() . '/assets/js/popper.min.js', [], null, true);
    wp_enqueue_script('readitblog-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', [], null, true);
    wp_enqueue_script('readitblog-jquery-easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', [], null, true);
    wp_enqueue_script('readitblog-jquery-waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', [], null, true);
    wp_enqueue_script('readitblog-jquery-stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', [], null, true);
    wp_enqueue_script('readitblog-owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', [], null, true);
    wp_enqueue_script('readitblog-jquery-magnific', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', [], null, true);
    wp_enqueue_script('readitblog-aos', get_template_directory_uri() . '/assets/js/aos.js', [], null, true);
    wp_enqueue_script('readitblog-jquery-animateNumber', get_template_directory_uri() . '/assets/js/jquery.animateNumber.min.js', [], null, true);
    wp_enqueue_script('readitblog-scrollax', get_template_directory_uri() . '/assets/js/scrollax.min.js', [], null, true);
    wp_enqueue_script('readitblog-googleapis', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false', [], null,true);
    wp_enqueue_script('readitblog-google-map', get_template_directory_uri() . '/assets/js/google-map.js', [], null, true);
    wp_enqueue_script('readitblog-main', get_template_directory_uri() . '/assets/js/main.js', [], null, true);
};

function after_setup() {
    register_nav_menus([
        'header_menu' => 'Меню в шапці',
        'footer_menu' => 'Меню в підвалі'
    ]);
    add_theme_support('post-thumbnails');
};

function register_widgets() {
    register_sidebar(['name' => 'latest News', 'id' => 'latest_news']);
    register_sidebar(['name' => 'Information', 'id' => 'information']);
    register_sidebar(['name' => 'Have a Questions?', 'id' => 'questions']);
    register_sidebar(['name' => 'Blog Single', 'id' => 'blog_single']);
};

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Theme General Settings',
        'menu_title'	=> 'Theme Settings',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Header Settings',
        'menu_title'	=> 'Header',
        'parent_slug'	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Footer Settings',
        'menu_title'	=> 'Footer',
        'parent_slug'	=> 'theme-general-settings',
    ));

};

function time_to_read() {
    $post = get_post();
    echo round(strlen($post->post_content) /120);
}
