<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8" />
<head profile="http://gmpg.org/xfn/11">

<title><?php single_post_title(); ?> - <?php bloginfo('name'); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<?php if (is_single() ) { ?>
  <?php if (have_posts()) : while (have_posts()) : the_post();  ?>
    <meta name="description" content="<?php echo get_the_excerpt(); ?>" />
  <?php endwhile; endif; ?>
<?php } else { ?>
  <meta name="description" content="<?php bloginfo('description'); ?>" />
<?php } ?>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery-1.4.2.min.js"></script>
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> ATOM Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>

<script type="text/javascript">
   $(document).ready(function() {
      // title value is set in WP menu admin. move it to a .class and delete the title.
      $('#homepage_links li [title|=highlight]').addClass('highlight').removeAttr('title');
   })
</script>

</head>
<body <?php if (is_page('index')) echo 'id="home"'; ?>>

  <script src="https://assets.extension.org/javascripts/global_nav_internal.js" type="text/javascript"></script>

<div id="frame">

<div id="header">
  <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
  <ul id="user_actions">
    <li class="last"><a href="<?php bloginfo('url'); ?>/get-started" title="Get an ID">Getting Started</a></li>
  </ul>

  <div id="search">
    <?php include (TEMPLATEPATH . '/searchform.php'); ?>
  </div>

  <ul id="nav">
    <li><a <?php echo is_page('about') ? 'class="current"' : ""; ?> href="<?php bloginfo('url'); ?>/about" title="About Us">About Us</a></li>
    <li><a <?php if (is_home()) echo('class="current" '); ?> href="<?php bloginfo('url'); ?>/blog" title="Blog" >Blog</a></li>
    <li><a href="http://www.extension.org/" title="extension.org">extension.org</a></li>
    <li id="support" class="last"><a href="<?php bloginfo('url'); ?>/about/donate/" title="Support eXtension">Support eXtension</a></li>
  </ul>
</div>

<div id="mini_banner">
  <div id="mini_art"></div>
  <ul id="call_to_action">
    <li><a href="<?php bloginfo('url'); ?>/get-started" title="Get Started" class="button gray primary cat small">Getting Started with eXtension</a></li>
  </ul>
</div>
