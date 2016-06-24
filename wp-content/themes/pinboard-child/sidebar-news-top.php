<div id="sidebar-news" <?php pinboard_sidebar_class(); ?>>
<?php if( is_active_sidebar( 'sidebar-news' ) ) : ?>
	<div id="sidebar-news-top" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-news' ) ; ?>
    <?php get_template_part( 'ex-nifa-module' ); ?>
	</div><!-- #sidebar-top -->
<?php endif; ?>
</div>
