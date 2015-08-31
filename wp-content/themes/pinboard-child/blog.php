<?php
/*
Template Name: Blog
*/

// Which page of the blog are we on?
$paged = get_query_var('paged');
query_posts('cat=-0&paged='.$paged);

// make posts print only the first part with a link to rest of the post.
global $more;
$more = 0;

//load index to show blog
// load_template(TEMPLATEPATH . '/index.php');
?>


<?php get_header(); ?>

	<div id="container">
		<section id="content" <?php pinboard_content_class(); ?>>
			<?php if( is_category( pinboard_get_option( 'portfolio_cat' ) ) || ( is_category() && cat_is_ancestor_of( pinboard_get_option( 'portfolio_cat' ), get_queried_object() ) ) ) : ?>
				<?php pinboard_category_filter( pinboard_get_option( 'portfolio_cat' ) ); ?>
			<?php endif; ?>
			<?php if( have_posts() ) : ?>
				<div class="entries">
					<?php while( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content-simple', get_post_format() ); ?>
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
