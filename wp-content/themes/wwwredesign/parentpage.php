<?php
/*
Template Name: ParentPage
*/
?>

<?php get_header(); ?>

	<div id="parentpage" >
	    <div id="content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; endif; ?>
	    </div>
	    <?php
	    //if (is_page('tools') || get_the_title($post->post_parent) == 'Tools') $subnav = "tools";
	    if (is_page('about') || get_the_title($post->post_parent) == 'About Us') $subnav = "about";
	    if (is_page('sponsorship') || get_the_title($post->post_parent) == 'Sponsorship') $subnav = "sponsorship";
	    if (is_page('get-benefits') || get_the_title($post->post_parent) == 'Get Benefits') $subnav = "get-benefits";
	    if (is_page('get-involved') || get_the_title($post->post_parent) == 'Get Involved') $subnav = "get-involved";
	    if (is_page('get-started') || get_the_title($post->post_parent) == 'Get Started') $subnav = "get-started";
      if (is_page('get-an-id') || get_the_title($post->post_parent) == 'Get an ID') $subnav = "get-an-id";
      if (is_page('foundation') || get_the_title($post->post_parent) == 'eXtension Foundation') $subnav = "foundation";
	    ?>
	    <?php if ($subnav) {
	        include (TEMPLATEPATH . '/subnav-' . $subnav . '.php');
	    } ?>
	</div>

<?php get_footer(); ?>