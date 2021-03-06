<?php if( is_front_page() || is_page_template( 'template-landing-page.php' ) || ( is_home() && ! is_paged() ) ) : ?>
  <?php get_sidebar( 'footer-wide' ); ?>
<?php endif; ?>
<div id="footer">
  <?php get_sidebar( 'footer-wide' ); ?>
  <div id="copyright">
    <p class="copyright twocol">

      <ul class="inline noprint">
        <li>Content on this site is licensed under a <a href="https://creativecommons.org/licenses/by-sa/3.0/us/">Creative Commons Attribution-ShareAlike License</a>.</li>
        <li><a href="<?php echo home_url( '/' ); ?>membership/current/">eXtension Members</a></li>
        <li><a href="<?php echo home_url( '/' ); ?>privacy/">Privacy</a></li>
        <li><a href="<?php echo home_url( '/' ); ?>contact/">Contact Us</a></li>
        <li><a href="<?php echo home_url( '/' ); ?>terms-of-use/">Terms of Use</a></li>
      </ul>


    </p>
    <p class="credits twocol">
        <a class="theme-credit" href="https://www.onedesigns.com/themes/pinboard" title="Pinboard Theme">Parent theme credit: Pinboard</a>
      </p>
    <div class="clear"></div>
  </div><!-- #copyright -->
</div><!-- #footer -->
</div><!-- #wrapper -->
<?php wp_footer(); ?>
</body>
</html>
