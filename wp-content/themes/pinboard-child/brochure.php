<?php $sticky = get_option( 'sticky_posts' ); ?>
<?php if( ! empty( $sticky ) ) : ?>
	<?php $brochure = new WP_Query( array( 'post__in' => $sticky, 'ignore_sticky_posts' => 1, 'posts_per_page' => 99 ) ); ?>
	<?php if( $brochure->have_posts() ) : ?>
		<section id="brochure">
      <?php while( $brochure->have_posts() ) : $brochure->the_post(); ?>
        <article class="sticky-brochure">
          <?php the_content(); ?>
          <div class="clear"></div>
        </article><!-- .sticky-brochure -->
      <?php endwhile; ?>

			<div class="clear"></div>
		</section><!-- #brochure -->
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>
<?php endif; ?>
