<?php
/*
Template Name: Document
*/
?><?php get_header(); ?>
	<div id="container" class="document-template">
		<section id="content" <?php pinboard_content_class(); ?>>
			<?php if( have_posts() ) : the_post(); ?>
				<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
					<div class="entry">
						<p class="document-label"><span>eXtension Document</span></p>
						<?php echo get_post_custom_values("related_post")[0]; ?>

						<?php if ( get_post_meta( get_the_ID(), 'related_post_url', true ) ) : ?>
							<p class="related-post"><strong>Related post:</strong>
						        <a href="<?php echo esc_url( get_post_meta( get_the_ID(), 'related_post_url', true ) ); ?>" /><?php echo  get_post_meta( get_the_ID(), 'related_post_title', true ); ?>
						    </a>
						<?php endif; ?>

						<header class="entry-header">
							<<?php pinboard_title_tag( 'post' ); ?> class="entry-title"><?php the_title(); ?></<?php pinboard_title_tag( 'post' ); ?>>
						</header><!-- .entry-header -->
						<div class="entry-content">
							<?php the_content(); ?>
							<?php edit_post_link( __( '<p class="edit-link">Edit this page</p>', 'pinboard' ), '<span class="edit-link">', '</span>' ); ?>
							<div class="clear"></div>
						</div><!-- .entry-content -->
						<?php wp_link_pages( array( 'before' => '<footer class="entry-utility"><p class="post-pagination">' . __( 'Pages:', 'pinboard' ), 'after' => '</p></footer><!-- .entry-utility -->' ) ); ?>
					</div><!-- .entry -->
				</article><!-- .post -->
			<?php else : ?>
				<?php pinboard_404(); ?>
			<?php endif; ?>
		</section><!-- #content -->
		<?php if( ( 'no-sidebars' != pinboard_get_option( 'layout' ) ) && ( 'full-width' != pinboard_get_option( 'layout' ) ) ) : ?>
			<?php get_sidebar(); ?>
		<?php endif; ?>
		<div class="clear"></div>
	</div><!-- #container -->
<?php get_footer(); ?>
