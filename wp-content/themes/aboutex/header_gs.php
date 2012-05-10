<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/standards.css" type="text/css" media="screen" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> ATOM Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>

<?php
$post_obj = $wp_query->get_queried_object();
$post_ID = $post_obj->ID;
$post_title = $post_obj->post_title;
$post_name = $post_obj->post_name;
?>

</head>
<body class="graphic_standards" id="gs-<?php echo $post_name; ?>">
    
    <div id="wrapper">
        <div id="header">
            <p><a href="<?php echo get_option('home'); ?>/">Back to the About.eXtension site</a></p>
            <p id="logo"><img src="<?php bloginfo('template_directory'); ?>/images/standards/logo.gif" width="155" height="61" alt="eXtension logo"/></p>
            <h2><a href="<?php bloginfo('url'); ?>/graphicstandards">eXtension Graphic Standards Guidelines</a></h2>
            <ul id="actions">
                <li class="files"><a href="<?php bloginfo('template_directory'); ?>/images/standards/eXtension_logos.zip">Download Logos</a> (2.1 MB)</li>
                <li class="pdf"><a href="<?php bloginfo('template_directory'); ?>/images/standards/eXtension_GS.pdf">Download pdf</a></li>
            </ul>
            <br class="clear"/>
        </div>
        <div id="body">
        <ul id="sidebar">
            <li id="identity"><a href="<?php bloginfo('url'); ?>/graphicstandards">Identity</a></li>
            <li id="logo-usage"><a href="<?php bloginfo('url'); ?>/graphicstandards/logo-usage/">Logo Usage</a></li>
            <li id="logo-color"><a href="<?php bloginfo('url'); ?>/graphicstandards/logo-color/">Logo Color</a></li>
            <li id="single-color"><a href="<?php bloginfo('url'); ?>/graphicstandards/single-color/">Single Color</a></li>
            <li id="black-and-white"><a href="<?php bloginfo('url'); ?>/graphicstandards/black-and-white/">Black and White</a></li>
            <li id="isolation"><a href="<?php bloginfo('url'); ?>/graphicstandards/isolation/">Logo Area of Isolation</a></li>
            <li id="minimum"><a href="<?php bloginfo('url'); ?>/graphicstandards/minimum/">Logo Minimum Size</a></li>
            <li id="donts"><a href="<?php bloginfo('url'); ?>/graphicstandards/donts/">Logo Don'ts</a></li>
            <li id="scaling"><a href="<?php bloginfo('url'); ?>/graphicstandards/scaling/">Scaling the Logo</a></li>
            <li id="typography"><a href="<?php bloginfo('url'); ?>/graphicstandards/typography/">Typography</a></li>
            <li id="email-signatures"><a href="<?php bloginfo('url'); ?>/graphicstandards/signature-blocks/">Signature Blocks</a></li>
            <li id="be-grow-create-icon"><a href="<?php bloginfo('url'); ?>/graphicstandards/be-grow-create-icon/">Be Grow Create eXtension Icon</a></li>
            <li id="aae-button"><a href="<?php bloginfo('url'); ?>/graphicstandards/ask-an-expert-button/">Ask an Expert Button</a></li>
        </ul>
