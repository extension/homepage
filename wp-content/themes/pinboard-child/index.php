<?php
   if (is_home()) {
     $paged = get_query_var('paged');
     query_posts('cat=-0&paged='.$paged);
   }
?>
<?php get_header(); ?>
	<?php if( is_home() && ! is_paged() ) : ?>

		<?php get_sidebar( 'wide' ); ?>
		<?php get_sidebar( 'boxes' ); ?>
	<?php elseif( ( is_home() && is_paged() ) || ( ! is_home() && pinboard_get_option( 'location' ) ) ) : ?>
		<?php pinboard_current_location(); ?>
	<?php endif; ?>
	<div id="container">
		<section id="content" <?php pinboard_content_class(); ?>>
			<?php if( is_home() && ! is_paged() ) : ?>
				<?php get_template_part( 'brochure' ); ?>
			<?php endif ?>
			<?php if( is_category( pinboard_get_option( 'portfolio_cat' ) ) || ( is_category() && cat_is_ancestor_of( pinboard_get_option( 'portfolio_cat' ), get_queried_object() ) ) ) : ?>
				<?php pinboard_category_filter( pinboard_get_option( 'portfolio_cat' ) ); ?>
			<?php endif; ?>
			<?php if( have_posts() ) : ?>
				<h3 class="index-subhead">Recent Posts</h3>
				<div class="entries">
					<?php while( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', get_post_format() ); ?>
					<?php endwhile; ?>
				</div><!-- .entries -->
				<?php pinboard_posts_nav(); ?>
			<?php else : ?>
				<?php pinboard_404(); ?>
			<?php endif; ?>
		</section><!-- #content -->
		<?php if( 'no-sidebars' != pinboard_get_option( 'layout' ) && 'full-width' != pinboard_get_option( 'layout' ) && ! is_category( pinboard_get_option( 'portfolio_cat' ) ) && ! ( is_category() && cat_is_ancestor_of( pinboard_get_option( 'portfolio_cat' ), get_queried_object() ) ) ) : ?>
			<?php get_sidebar(); ?>
		<?php endif; ?>
		<div class="clear"></div>
	</div><!-- #container -->
<?php get_footer(); ?>
