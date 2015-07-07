<?php
/*
Template Name: Sitehome
*/
?>
<?php get_header(); ?>


  <div class="row">
    <div class="col-md-6">
      <div class="well">

        <?php $my_query = new WP_Query('showposts=1'); ?>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
          <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
          <?php the_excerpt(); ?>
        <?php endwhile; ?>
      </div>
    </div>
    <div class="col-md-6">
      <h3>Featured News</h3>
      <div class="featured-news">
        <?php wp_nav_menu(array('menu_id' => 'homepage_links')); ?>
      </div>
    </div>

  </div>
  <div class="row">
    <div class="col-md-4">
      <h3>Latest Blog Posts</h3>
      <ul>
        <?php
  	$args = array( 'numberposts' => '12', 'offset' => '1' );
  	$recent_posts = wp_get_recent_posts( $args );
  	foreach( $recent_posts as $recent ){
  		echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
  	}
  ?>
      </ul>
    </div>

    <div class="col-md-4">
      <script type="text/javascript" src="http://www.extension.org/widgets/content/show?content_types=articles&escape=false&quantity=10&tags=feature&width=auto"></script>
    </div>

    <div class="col-md-4">
      <div class="well">
        <script type="text/javascript" src="https://learn.extension.org/widgets/front_porch.js?limit=2"></script>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="well">
        <h2>Trending Questions</h2>
      <script type="text/javascript" src="https://ask.extension.org/widgets/front_porch.js?limit=4"></script>
      <p id="aae_slug"><a href="https://ask.extension.org/ask" class="btn btn-default btn-lg">Ask an Expert</a>
        Submit a question to experts from universities across the country</p>
      </div>
    </div>

    <div class="col-md-4">
      <a class="twitter-timeline" height="400" data-dnt="true" href="https://twitter.com/eXtension4U"  data-widget-id="352454166767104000">Tweets by @eXtension4U</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>

    <div class="col-md-4">
      <h3>Quick Links</h3>
      <?php quicklink_menu(8); ?>
    </div>

  </div>





<?php get_footer(); ?>
