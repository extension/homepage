<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php if( ! function_exists( '_wp_render_title_tag' ) ) : ?>
<title><?php wp_title( '&#124;', true, 'right' ); ?></title>
<?php endif; ?>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class() ?>>

<script src="https://assets.extension.org/javascripts/global_shortcuts_bar_public.js" type="text/javascript"></script>


	<div id="wrapper">
		<header id="header">
			<<?php pinboard_title_tag( 'site' ); ?> id="site-title">
					<a href="<?php echo home_url( '/' ); ?>" rel="home">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/eXtension_logo_600x300.png" alt="<?php bloginfo( 'name' ); ?>" />
					</a>
				<a class="home" href="<?php echo home_url( '/' ); ?>" rel="home"><?php bloginfo( 'description' ); ?></a>
			</<?php pinboard_title_tag( 'site' ); ?>>

			<?php get_sidebar( 'header' ); ?>
			<div class="clear"></div>
			<nav id="access">
				<a class="nav-show" href="#access">Show Navigation</a>
				<a class="nav-hide" href="#nogo">Hide Navigation</a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary_nav' ) ); ?>
				<div class="clear"></div>
			</nav><!-- #access -->
		</header><!-- #header -->
