<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8" />
<head profile="http://gmpg.org/xfn/11">

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<meta name="description" content="eXtension is an Internet-based collaborative environment where Land Grant University content providers exchange objective, research-based knowledge to solve real challenges in real time." />

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/foundation.css" type="text/css" media="screen" />
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
  <ul id="extensionNav">
  <li class="group"><span>Public sites</span>
    <ul>
      <li><a href="http://about.extension.org/" title="A starting place for all things eXtension">About eXtension</a></li>
      <li><a href="http://campus.extension.org/ " title="Moodle courses developed by eXtension Communities of Practice, as well as Extension professionals throughout the Cooperative Extension System, for use by the general public">Campus</a></li>
      <li><a href="http://www.extension.org" title="extension.org">eXtension.org</a></li>
      <li><a href="http://learn.extension.org/" title="Upcoming Professional Development Sessions and Archived PD Recordings">Learn</a></li>
      <li><a href="http://search.extension.org" title="One search for hundereds of Cooperative Extension Sites">Search</a></li>
    </ul>
  </li>
  <li class="group last"><span>Collaboration and Content Tools</span>
    <ul>
      <li><a href="http://aae.extension.org" title="Ask an Expert">AaE</a></li>
      <li><a href="http://collaborate.extension.org/wiki/" title="A wiki for professionals from the land-grant universities to collaborate on topics of interest.">Collaborate</a></li>
      <li><a href="http://create.extension.org/" title="A collaborative development of resources about the eXtension initiative: news, governance, and projects.">Create</a></li>
      <li><a href="http://cop.extension.org/events" title="Events">Events</a></li>
      <li><a href="http://people.extension.org/" title="Manage your eXtension profile, find colleagues, create and join communities.">People</a></li>
    </ul>
  </li>
  </ul>

<div id="frame">

<div id="header">
  <h1><a href="<?php bloginfo('url'); ?>/foundation"><?php bloginfo('name'); ?></a></h1>
  <ul id="user_actions">
    <li><a href="<?php bloginfo('url'); ?>/get-an-id" title="Get an ID">Register</a></li>
    <li class="last"><a href="<?php bloginfo('url'); ?>/get-started" title="Get an ID">Getting Started</a></li>
  </ul>
  
  <div id="search">    
    <?php include (TEMPLATEPATH . '/searchform.php'); ?>
  </div>
  
  <ul id="nav">
    <li><a <?php echo is_page('about') ? 'class="current"' : ""; ?> href="<?php bloginfo('url'); ?>/about" title="About Us">About Us</a></li>
    <li><a <?php if (is_home()) echo('class="current" '); ?> href="<?php bloginfo('url'); ?>/blog" title="Blog" >Blog</a></li>
    <li><a <?php echo is_page('tools') ? 'class="current"' : ""; ?> href="<?php bloginfo('url'); ?>/tools" title="Tools">eX Tools</a></li>
    <li><a href="http://www.extension.org/" title="extension.org">extension.org</a></li>
    <li><a <?php echo is_page('foundation') ? 'class="current"' : ""; ?> href="<?php bloginfo('url'); ?>/foundation" title="eXtension Foundation">eXtension Foundation</a></li>
    <li id="support" class="last"><a <?php echo is_page('foundation') ? 'class="current"' : ""; ?> href="<?php bloginfo('url'); ?>/foundation/donate/" title="Support eXtension">Support eXtension</a></li>
  </ul>
</div>

<div id="mini_banner">
  <div id="mini_art"></div>
  <ul id="call_to_action">
    <li><a href="<?php bloginfo('url'); ?>/get-an-id" title="Get an ID" class="button gray primary cat small">Get your eXtension ID</a></li>
    <li><a href="<?php bloginfo('url'); ?>/get-started" title="Get Started" class="button gray secondary cat small">Getting Started with eXtension</a></li>
  </ul>
</div>