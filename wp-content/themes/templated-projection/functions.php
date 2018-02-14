<?php
/**
theme function 

**/

function register_template_menus()
{
	register_nav_menus(array(
	'top-menu' =>  __('Top Menu', 'dummy_template'),
	));

}
add_action('init', 'register_template_menus');

function register_scripts()
{
	wp_enqueue_style('css',get_stylesheet_directory_uri(). '/style.css');
	wp_enqueue_style('template-css',get_stylesheet_directory_uri(). '/assets/css/main.css');
	
	
}

add_action('wp_enqueue_scripts','register_scripts');

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action('get_header', 'remove_admin_login_header');

function new_excerpt_more($more) {
	global $post;
 return ' <a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');