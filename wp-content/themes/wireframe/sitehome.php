<?php
/*
Template Name: Sitehome
*/
?>
<?php get_header(); ?>


  <div class="row">
    <div class="col-md-6">
      <h3>Featured News</h3>
      <div class="featured-news">
        <?php wp_nav_menu(array('menu_id' => 'homepage_links')); ?>
      </div>
    </div>
    <div class="col-md-6">
      <h2>What is eXtension?</h2>
      <p>eXtension is an Internet-based collaborative environment where Land Grant University content providers exchange objective, research-based knowledge to solve real challenges in real time.</p>
      <p><a class="more" href="<?php bloginfo('url'); ?>/about/">Learn More...</a></p>

      <p><a href="<?php bloginfo('url'); ?>/get-an-id" title="Get an ID" class="btn btn-default btn-lg">Get your eXtension ID</a></p>
      <p><a href="<?php bloginfo('url'); ?>/get-started" title="Get Started" class="btn btn-default btn-lg">Getting Started with eXtension</a></p>

    </div>

  </div>
  <div class="row">
    <div class="col-md-4">
      <h3>Latest Blog Posts</h3>
      <ul>
      <?php get_archives('postbypost', '14', 'custom', '<li>', '</li>'); ?>
      </ul>
    </div>

    <div class="col-md-4">
      <script type="text/javascript" src="http://www.extension.org/widgets/content/show?content_types=articles&escape=false&quantity=10&tags=front+page&width=auto"></script>
    </div>

    <div class="col-md-4">
      <h3>Quick Links</h3>
      <?php quicklink_menu(8); ?>
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
      <div class="well">
        <script type="text/javascript" src="https://learn.extension.org/widgets/front_porch.js?limit=2"></script>
      </div>
    </div>

  </div>





<?php get_footer(); ?>
