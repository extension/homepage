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
function exclude_category( $query ) {
  if ( is_home() ) {
    $newsroom_id = get_cat_ID('newsroom');
    $query->set( 'cat', '-'.$newsroom_id );
  }
}
add_action( 'pre_get_posts', 'exclude_category' );

function  news_widgets_init() {
	$title_tag = pinboard_get_option( 'widget_title_tag' );

	register_sidebar(
		array(
      'name' => 'News Sidebar ',
      'id' => 'sidebar-news',
			'description' => 'Displays in in the sidebar on the News page.',
			'before_widget' => '<div class="column onecol"><aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside><!-- .widget --></div>',
			'before_title' => '<' . $title_tag . ' class="widget-title">',
			'after_title' => '</' . $title_tag . '>'
		)
	);
}
add_action( 'widgets_init', 'news_widgets_init' );
add_action( 'pre_get_posts', 'posts_on_mobile_homepage' );

function remove_footer_admin () {
  echo 'Thank you for creating with <a href="https://wordpress.org/">WordPress</a> | <a href="https://extension.org/terms-of-use/" target="_blank">Terms of Use</a>';
}

function remove_avatar_help_text () {
  if ( IS_PROFILE_PAGE ) {
    /* translators: %s: Gravatar URL */
    $description = sprintf( __( 'You can change your profile picture by uploading an image below or via <a href="%s">Gravatar</a>.' ),
      __( 'https://en.gravatar.com/' )
    );
  } else {
    $description = '';
  }
  echo $description;
}
add_filter('admin_footer_text', 'remove_footer_admin');
add_filter('user_profile_picture_description', 'remove_avatar_help_text');
