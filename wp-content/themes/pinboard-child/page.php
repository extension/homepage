<?php get_header(); ?>
	<div id="container" class="page">
		<section id="content" <?php pinboard_content_class(); ?>>
			<?php if( have_posts() ) : the_post(); ?>
				<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
					<div id="top-of-page" class="entry">

  <?php
		$additional_subnav_items = get_post_meta( get_the_ID(), 'add_to_subnav', true );
		// var_dump($additional_subnav_items);
    if($post->post_parent) {
      $parent_id = get_post_ancestors($post->ID);
      $id = end($parent_id);
    } else {
      $id = $post->ID;
    }
		$children = wp_list_pages("title_li=&child_of=" . $id . "&echo=0");
  ?>

<?php if ($children) { ?>
	<ul class="top-page-subnavigation page-subnavigation">
		<?php wp_list_pages('title_li=&include=' . $id); ?>
		<?php wp_list_pages('title_li=&child_of=' . $id); ?>
		<?php if (!empty($additional_subnav_items)) {wp_list_pages('title_li=&include=' . $additional_subnav_items);} ?>
	</ul>
	<p id="top-subnav"><a href="#subnav">Related pages</a></p>
<?php } ?>



						<header class="entry-header">
							<<?php pinboard_title_tag( 'post' ); ?> class="entry-title"><?php the_title(); ?></<?php pinboard_title_tag( 'post' ); ?>>

						</header><!-- .entry-header -->
						<div class="entry-content">
							<?php the_content(); ?>
							<?php edit_post_link( __( '<p class="edit-link">Edit this page</p>', 'pinboard' ), '<span class="edit-link">', '</span>' ); ?>
							<div class="clear"></div>
						</div><!-- .entry-content -->
						<?php wp_link_pages( array( 'before' => '<footer class="entry-utility"><p class="post-pagination">' . __( 'Pages:', 'pinboard' ), 'after' => '</p></footer><!-- .entry-utility -->' ) ); ?>

						<?php if ($children) { ?>
							<div id="subnav" class="bottom-page-subnavigation-wrapper">
								<a class="bottom-subnav" href="#top-of-page">Back to top</a>
							<h2 class="bottom-page-subnavigation-header">Related links</h2>
							<ul class="bottom-page-subnavigation page-subnavigation">
								<?php wp_list_pages('title_li=&include=' . $id); ?>
								<?php wp_list_pages('title_li=&child_of=' . $id); ?>
								<?php if (!empty($additional_subnav_items)) {wp_list_pages('title_li=&include=' . $additional_subnav_items);} ?>
							</ul>
						</div>
						<?php } ?>


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
