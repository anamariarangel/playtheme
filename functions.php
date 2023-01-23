<?php

require ('custom-post/cpt-videos.php');


function playtheme_load_scripts() {
    wp_enqueue_style('playtheme_style', get_stylesheet_uri(), array(), '1.0', 'all');
    wp_enqueue_script('font_awesome', get_template_directory_uri() . '/assets/js/font-awesome/fontawesome.min.js', array(), '1.0', true);
    wp_enqueue_script('font_awesome_regular', get_template_directory_uri() . '/assets/js/font-awesome/regular.min.js', array(), '1.0', true);
    wp_enqueue_script('font_awesome_solid', get_template_directory_uri() . '/assets/js/font-awesome/solid.min.js', array(), '1.0', true);
    wp_enqueue_script('menu-mobile', get_template_directory_uri() . '/assets/js/menu-mobile.js', array(), '1.0', true);
    wp_enqueue_script('playtheme_player', get_template_directory_uri() . '/assets/js/player.js', array(), '1.0', true);
    wp_enqueue_script('playtheme_filme-slider', get_template_directory_uri() . '/assets/js/slider.js', array(), '1.0', true);
   
   }
   
   add_action('wp_enqueue_scripts','playtheme_load_scripts');

   function playtheme_admin_styles() {
	// Admin CSS file
	wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/admin.css' );
}
add_action('admin_head', 'playtheme_admin_styles');

function playtheme_config() {

      register_nav_menus(
        array (
            'playtheme_main_menu' => 'Menu1',
                    )
    ); 
       
    add_theme_support('post-thumbnails');
    add_theme_support( 'custom-logo', array(
        'width' => 104,
        'height' => 33,
        'flex-height'   => true,
        'flex-width'    => true));
    add_theme_support('automatic-feed-links');
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');
    add_theme_support('editor-styles');

}

add_action('after_setup_theme', 'playtheme_config',0);

if(! function_exists('wp_body_open')){
    function wp_body_open() {
        do_action('wp_body_open');
    } 
}


   






