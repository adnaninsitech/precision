<?php
add_theme_support( 'post-thumbnails' );
add_filter( 'use_block_editor_for_post_type', '__return_false' );
add_action( 'after_setup_theme', 'register_custom_nav_menus' );
function register_custom_nav_menus() {
  register_nav_menus( array(
    'header_menu' => 'Header Menu',
    'header_menu_reponsive' => 'Header Menu Reponsive',
    'footer_menu' => 'Footer Menu',
  )
);
}

require_once ( get_stylesheet_directory() . '/theme-option.php' );
function theme_scripts() {

  
   
    
    
  wp_enqueue_style( 'layout', get_template_directory_uri() . '/assets/css/layout.css' );
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style( 'theme-style', get_stylesheet_uri());   
    //wp_enqueue_script( 'jquery-3.1.0.min','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js', array(), false, true );
    wp_enqueue_script( 'main-lib', get_template_directory_uri() . '/assets/js/jquery.js', array(), '1.0.0', true );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0.0', true );
    //wp_localize_script('custom', 'the_ajax_script', array('ajaxurl' =>admin_url('admin-ajax.php')));
  }
add_action( 'wp_enqueue_scripts', 'theme_scripts' );


function widget_registration(){
    register_sidebar( array(
        'name' => 'Shop Widget',
        'id' => 'shop-page-widget',
        'description' => $description,
        'before_widget' => '<div class="sidepro">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init', 'widget_registration');


add_action('init', 'services');
function services()
{
    $labels = array(
        'name' => _x('services', 'post type general name'),
        'singular_name' => _x('services', 'post type singular name'),
        'add_new' => _x('Add New', 'services'),
        'add_new_item' => __('Add New services'),
        'edit_item' => __('Edit services'),
        'new_item' => __('New services'),
        'view_item' => __('View services'),
        'search_items' => __('Search services'),
        'not_found' => __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'menu_icon' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','thumbnail','editor')
    );
    register_post_type('services', $args);

}

add_action('init', 'news');
function news()
{
    $labels = array(
        'name' => _x('news', 'post type general name'),
        'singular_name' => _x('news', 'post type singular name'),
        'add_new' => _x('Add New', 'news'),
        'add_new_item' => __('Add New news'),
        'edit_item' => __('Edit news'),
        'new_item' => __('New news'),
        'view_item' => __('View news'),
        'search_items' => __('Search news'),
        'not_found' => __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'menu_icon' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','thumbnail','editor')
    );
    register_post_type('news', $args);

}

