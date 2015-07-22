<?php // Opening PHP tag - nothing should be before this, not even whitespace

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// register_sidebar(
// 		array(
// 			'name' => 'Sidebar eXtension Modules',
//       'id'            => 'ex-sidebar-module-1',
// 			'description' => 'Displays in the top of the sidebar.',
// 			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
// 			'after_widget' => '</aside><!-- .widget -->',
// 			'before_title' => '<' . $title_tag . ' class="widget-title">',
// 			'after_title' => '</' . $title_tag . '>'
// 		)
// 	);
