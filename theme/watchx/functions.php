<?php

include 'inc/enqueue.php';     // add styles and scripts
include 'inc/acf.php';         // custom acf functions
include 'inc/extras.php';      // custom functions
include 'classes/walker.php';  // walker nav menu
include 'inc/register.php';    // custom ajax register and auth
include 'inc/ajax-actions.php';// ajax actions
include 'inc/woo.php';         // woocommerce actions

add_action('after_setup_theme', 'theme_register_nav_menu');


function theme_register_nav_menu(){
	register_nav_menus( array(
        'main-menu' => 'header',
        'foot-menu'  => 'footer 1',
        'foot-menu2'  => 'footer 2',
        'foot-menu3'  => 'footer 3',
        'foot-menu4'  => 'footer 4',
        'foot-bottom'  => 'footer bottom',
       )
    );
	add_theme_support( 'post-thumbnails');
    add_theme_support( 'woocommerce');
}



if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();

	acf_add_options_sub_page('Theme Settings');
}



function my_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyAh1NE8kfXzx31UyPrwTCqwJdETUseulmI');
}

add_action('acf/init', 'my_acf_init');