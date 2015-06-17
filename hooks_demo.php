<?php

/**
  Plugin Name: Wordpress hooks Demo
  Plugin URI: https://profiles.wordpress.org/vishalkakadiya/
  Version: 1.0
  Author: Vishal Kakadiya
  Contributor: Vishal Kakadiya (https://profiles.wordpress.org/vishalkakadiya/)
  Description: Sample of an AJAX
 */
add_action( 'admin_menu', 'vk_hook_menu_page' );

function vk_hook_menu_page() {
	add_menu_page( 'Wordpress Hooks Demo', 'Hooks Demo', 'manage_options', 'hooks_demo_page', 'custom_menu_page' );
}

function custom_menu_page() {
	echo "<h1>Wordpress Hooks Demo</h1>";
	do_action( 'add_content_after_title' );
	echo '<input type="button" id="btn-ajax" value="Click Me" /><br /><br /><br />';
	echo '<div id="ajax-content"></div>';
}

function add_content_after_title_hook() {
	echo '<h4 style="color: red; ">Sample content added by the Hook available in Plugin</h4>';
}

add_action( 'add_content_after_title', 'add_content_after_title_hook' );
?>