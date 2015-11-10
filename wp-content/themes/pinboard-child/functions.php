<?php // Opening PHP tag - nothing should be before this, not even whitespace

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}


function posts_on_mobile_homepage( $query ) {
  if ( wp_is_mobile() ) {
    $query->set( 'posts_per_page', 3 );
    // desktop number is set in Settings > Reading
  }
}
add_action( 'pre_get_posts', 'posts_on_mobile_homepage' );

function remove_footer_admin () {
  echo 'Thank you for creating with <a href="https://wordpress.org/">WordPress</a> | <a href="http://articles.extension.org/main/termsofuse" target="_blank">Terms of Use</a>';
}
add_filter('admin_footer_text', 'remove_footer_admin');
