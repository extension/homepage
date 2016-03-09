<?php
/**
 * Plugin Name: Author Dropdown Filter
 * Version: 0.1
 * Author: Jason Young
 * Description: hooks the wordpress users dropdown to change the query parameters
 */

add_filter( 'wp_dropdown_users_args', 'limit_wp_dropdown_users', 10, 2 );
function limit_wp_dropdown_users( $query_args, $r ) {

    if(isset($r['name']) and $r['name'] == 'post_author') {
      $query_args['meta_key'] = 'allow_ghost_post';
      $query_args['meta_value'] = '1';
      $query_args['who'] = '';
    }
    return $query_args;
}
