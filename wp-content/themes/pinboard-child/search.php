<?php get_header(); ?>
<?php global $wp_query; ?>
<div id="container" class="page">
  <section id="content" <?php pinboard_content_class(); ?>>

    <div class="search-page">
        <h1 class="search-title"> <?php echo $wp_query->found_posts; ?>
          <?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>" </h1>

          <p class="search-prompt"><span>You're searching eXtension Foundation news and updates. To search educational content, please visit <a href="http://articles.extension.org/main/search?q=<?php echo $_GET["s"]; ?>">articles.eXtension.org</a>.</span></p>


          <?php if ( have_posts() ) { ?>

              <?php while ( have_posts() ) { the_post(); ?>

                 <div class="search-list-item">
                   <h3 class="search-header"><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a></h3>
                   <?php the_post_thumbnail('medium') ?>
                   <?php the_date(); ?> <?php the_excerpt(); ?>

                 </div>

              <?php } ?>

             <?php paginate_links(); ?>

          <?php } ?>

      </div>

  </section><!-- #content -->
  <?php if( ( 'no-sidebars' != pinboard_get_option( 'layout' ) ) && ( 'full-width' != pinboard_get_option( 'layout' ) ) ) : ?>
    <?php get_sidebar(); ?>
  <?php endif; ?>
  <div class="clear"></div>
</div><!-- #container -->


<?php get_footer(); ?>
