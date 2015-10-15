<?php $page = get_posts( array( 'name' => 'homepage-welcome-section', 'post_type' => 'page' ) ); ?>

<?php if ( $page ) { ?>
	<section id="brochure">

			<article class="sticky-brochure">
				<?php echo $page[0]->post_content; ?>
				<div class="clear"></div>
			</article><!-- .sticky-brochure -->

		<div class="clear"></div>
	</section><!-- #brochure -->
<?php } ?>
