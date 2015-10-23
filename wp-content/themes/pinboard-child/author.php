<?php
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>

<?php get_header(); ?>
	<?php if( is_home() && ! is_paged() ) : ?>

	<?php elseif( ( is_home() && is_paged() ) || ( ! is_home() && pinboard_get_option( 'location' ) ) ) : ?>


	<?php endif; ?>
	<div id="container">


		<section id="content" <?php pinboard_content_class(); ?>>

			<section id="brochure">

					<article class="sticky-brochure">


						<p class="get_wp_user_avatar"><?php echo get_wp_user_avatar('','medium'); ?></p>
						<h1 class="entry-title"><?php echo $curauth->display_name; ?></h1>

						<?php if ($curauth->description) { ?>

							<?php echo $curauth->description; ?>
						<?php } else { ?>
							<p class="muted">This person hasn't updated their bio yet.</p>
						<?php } ?>

						<div class="clear"></div>
					</article><!-- .sticky-brochure -->

				<div class="clear"></div>
			</section><!-- #brochure -->

			<?php if( is_category( pinboard_get_option( 'portfolio_cat' ) ) || ( is_category() && cat_is_ancestor_of( pinboard_get_option( 'portfolio_cat' ), get_queried_object() ) ) ) : ?>
				<?php pinboard_category_filter( pinboard_get_option( 'portfolio_cat' ) ); ?>
			<?php endif; ?>
			<?php if( have_posts() ) : ?>
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
