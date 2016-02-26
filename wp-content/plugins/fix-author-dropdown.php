<?php
/**
 * Plugin Name: Author Dropdown Update
 * Version: 1.0
 * Author: NCSU
 * Description: This plugin fixes a WP bug which results in missing authors in the author dropdown list. It works by triggering a script which adds the missing (or updates an incorrect) 'meta_value' for the 'wp_user_level' field in the 'wp_usermeta' table. To run this script, activate and then deactivate this plugin. (The script is called by the register_deactivation_hook, so the default state for this plugin script will always be deactivated.)
 */

register_deactivation_hook( __FILE__, 'update_wp_user_level_values_based_on_roles' );

// Description of bug:
// https://hishamsadek.com/2014/05/wordpress-fix-missing-users-from-authors-dropdown-list/

// Code snippet to fix problem:
// https://gist.github.com/karlschwaier/4de32f85897336724ec2

// Idea to use a plugin and deactivation hook:
// http://wordpress.stackexchange.com/questions/131697/what-is-your-best-practice-to-execute-one-time-scripts

function update_wp_user_level_values_based_on_roles() {
  // Get users, but only get administrators, editors and authors
  // because we don't want 15,000 list items in a dropdown field.
  $users = get_users( [ 'role__in' => [ 'administrator', 'editor', 'author' ] ] );

  foreach ( $users as $user ) {
  	// Define user level by user role
  	switch ( array_shift( $user->roles ) ) {
  		case 'administrator':
  			$user_level = 10;
  			break;
  		case 'editor':
  			$user_level = 7;
  			break;
  		case 'author':
  			$user_level = 2;
  			break;
  		case 'contributor':
  			$user_level = 1;
  			break;
  		default:
  			$user_level = 0;
  	}

  	// Update user level
  	update_user_meta( $user->ID, 'wp_user_level', $user_level );
  }
}
