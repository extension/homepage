<?php

/*
Plugin Name: Admin Theme Hack
Description: Admin Theme Hack - hide global "WP User Avatar" settings.
*/

function admin_theme_hack_style() {
    wp_enqueue_style('my-admin-theme', plugins_url('wp-admin.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'admin_theme_hack_style');
add_action('login_enqueue_scripts', 'admin_theme_hack_style');

?>
