<?php get_header(); ?>
	<div id="container" class="page search-container">
		<section id="content" <?php pinboard_content_class(); ?>>
			<h1>Search results</h1>



			<script>
  (function() {
    var cx = '002594610894210374936:hggphannnzi';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search queryParameterName="s" enableAutoComplete="true"></gcse:search>


		</section><!-- #content -->
		<?php if( ( 'no-sidebars' != pinboard_get_option( 'layout' ) ) && ( 'full-width' != pinboard_get_option( 'layout' ) ) ) : ?>
			<?php get_sidebar(); ?>
		<?php endif; ?>
		<div class="clear"></div>
	</div><!-- #container -->
<?php get_footer(); ?>
