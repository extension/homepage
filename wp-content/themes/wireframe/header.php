<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<p class="color-codes">
		<strong>COLOR CODES:</strong> &nbsp;
		<span class="hp-nav-item">navigation</span> &nbsp;
		<span class="hp-alert-item">alerts</span> &nbsp;
		<span class="hp-resource-item">resources</span> &nbsp;
		<span class="hp-action-item">calls to action</span>
	</p>
	<script src="https://assets.extension.org/javascripts/global_nav_internal.js" type="text/javascript"></script>
<div id="page" class="hfeed site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a> -->



	<div class="container">
	  <div class="row">
	    <div class="col-md-12">

					<header id="masthead" class="site-header" role="banner">
						<div class="site-branding">
							<?php
								if ( is_front_page() && is_home() ) : ?>
									<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
										<?php bloginfo( 'name' ); ?></a>
									</h1>
								<?php else : ?>
									<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
										<?php bloginfo( 'name' ); ?></a>
									</h1>
								<?php endif;

								$description = get_bloginfo( 'description', 'display' );
								if ( $description || is_customize_preview() ) : ?>
									<!-- <p class="site-description"><?php echo $description; ?></p> -->
								<?php endif;
							?>

						</div><!-- .site-branding -->
						<ul class="nav nav-pills pull-right hp-action-nav">
							<li class="hp-action-item"><a href="<?php bloginfo('url'); ?>/get-started" title="Get an ID">Getting Started</a></li>
							<li class="hp-action-item"><a href="<?php bloginfo('url'); ?>/get-an-id" title="Get an ID" class="btn btn-default btn-lg">Register</a></li>

						</ul>

						<ul class="nav nav-pills">
					    <li class="hp-nav-item"><a <?php echo is_page('about') ? 'class="current"' : ""; ?> href="<?php bloginfo('url'); ?>/about" title="About Us">About Us</a></li>
					    <li class="hp-nav-item"><a <?php if (is_home()) echo('class="current" '); ?> href="<?php bloginfo('url'); ?>/blog" title="Blog" >Blog</a></li>
					    <li class="hp-nav-item"><a <?php echo is_page('tools') ? 'class="current"' : ""; ?> href="<?php bloginfo('url'); ?>/tools" title="Tools">eX Tools</a></li>
					    <li class="hp-nav-item"><a <?php echo is_page('foundation') ? 'class="current"' : ""; ?> href="<?php bloginfo('url'); ?>/foundation" title="eXtension Foundation">eXtension Foundation</a></li>
					    <li class="hp-action-item"><a <?php echo is_page('foundation') ? 'class="current"' : ""; ?> href="<?php bloginfo('url'); ?>/foundation/donate/" title="Support eXtension">Support eXtension</a></li>
					  </ul>

					</header><!-- .site-header -->





			</div>
		</div>
	</div>


	<div id="content" class="site-content">
		<div class="container">
