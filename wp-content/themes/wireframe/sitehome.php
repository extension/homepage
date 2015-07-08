<?php
/*
Template Name: Sitehome
*/
?>
<?php get_header(); ?>


  <div class="row">
    <div class="col-md-8">
      <div class="well hp-reading-item">
        <div class="home-feature-image pull-left">
          <img src="<?php bloginfo('template_directory'); ?>/images/placeholder-ducks-light.jpg" />
        </div>
        <?php $my_query = new WP_Query('showposts=1'); ?>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
          <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
          <?php the_excerpt(); ?>
        <?php endwhile; ?>
      </div>
    </div>
    <div class="col-md-4">
      <div class="featured-news hp-action-items">

        <?php wp_nav_menu(array('menu_id' => 'homepage_links')); ?>
      </div>
    </div>

  </div>
  <div class="row">
    <div class="col-md-4">
      BLOG POSTS
      <ul>
        <?php
  	$args = array( 'numberposts' => '6', 'offset' => '1' );
  	$recent_posts = wp_get_recent_posts( $args );
  	foreach( $recent_posts as $recent ){
  		echo '<li class="hp-reading-item"><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
  	}
  ?>
      </ul>
    </div>

    <div class="col-md-4">
      <div class="hp-reading-item">
      <script type="text/javascript" src="http://www.extension.org/widgets/content/show?content_types=articles&escape=false&quantity=8&tags=feature&width=auto"></script>
    </div>
    </div>

    <div class="col-md-4">
      <div class="well">
        <h2>Learn Webinars</h2>
        <p class="hp-action-item"><a href="https://learn.extension.org/">See recent webinars</a></p>

        <p class="hp-action-item"><a class="btn btn-default btn-lg" href="https://learn.extension.org/events/new">Create a Learn webinar</a></p>

        <p class="hp-action-item"><a class="btn btn-default btn-lg" href="https://learn.extension.org/widgets">Create a Learn widget</a></p>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="well">
        <h2>Ask an Expert</h2>
        <p class="hp-action-item"><a href="https://ask.extension.org/">See recent questions</a></p>
        <p class="hp-action-item"><a href="https://ask.extension.org/expert/home">Volunteer to answer questions</a></p>
        <p class="hp-action-item"><a class="btn btn-default btn-lg" href="https://ask.extension.org/widgets/">Create a question widget</a></p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="hp-reading-item">
      <a class="twitter-timeline" height="400" data-dnt="true" href="https://twitter.com/eXtension4U"  data-widget-id="352454166767104000">Tweets by @eXtension4U</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>
    </div>

    <div class="col-md-4">
      <div class="quick-links">
      <h3>Quick Links</h3>
      <?php quicklink_menu(8); ?>
    </div>
    </div>

  </div>





<?php get_footer(); ?>
