<?php
/*
Template Name: Sitehome
*/
?>
<?php get_header(); ?>

<div id="topbox">
<div id="secondary">
  <p>Be a thought leader.</p>
  <p>Grow your knowledge community.</p>
  <p>Create more mind reach.</p>
</div>

<div id="primary">
  <div id="aboutex">
    <h2>What is eXtension?</h2>
    <p>eXtension is an Internet-based collaborative environment where Land Grant University content providers exchange objective, research-based knowledge to solve real challenges in real time.</p> 
    <p><a class="more" href="<?php bloginfo('url'); ?>/about/">Learn More...</a></p>
  </div>
    
  <ul id="call_to_action">
    <li><a href="<?php bloginfo('url'); ?>/get-an-id" title="Get an ID" class="button white primary cat">Get your eXtension ID</a></li>
    <li><a href="<?php bloginfo('url'); ?>/get-started" title="Get Started" class="button white secondary cat">Getting Started with eXtension</a></li>
  </ul>
</div>
</div>

        
<div id="bottombox">
    <div id="featured_news">
        <h3>Featured News</h3>
        <?php wp_nav_menu(array('menu_id' => 'homepage_links')); ?>
    </div>
    
  <div id="latest_posts">
    <h3>Latest Blog Posts</h3>
    <ul id="posts">
    <?php get_archives('postbypost', '14', 'custom', '<li>', '</li>'); ?>
    </ul>
  </div>
  
  <div id="col3">
    <div id="quicklinks">
      <h3>Quick Links</h3>
      <?php quicklink_menu(8); ?>
    </div>
    <p id="aae_slug"><a href="http://www.extension.org/ask" class="button white primary">Ask an Expert</a>Submit a question to experts from universities across the country</p>
  </div>
</div>

<?php get_footer(); ?>
