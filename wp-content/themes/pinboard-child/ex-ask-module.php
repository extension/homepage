<aside class="widget widget_text">
  <div class="textwidget">
    <a href="https://ask.extension.org/">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Ask_An_Expert_logo_color.png" alt="<?php bloginfo( 'name' ); ?>" />
    </a>

    <!-- Ask an Expert -->
    <script type="text/javascript">
      (function() {
        function async_load(){
          var aae = document.createElement('script'); aae.type = 'text/javascript'; aae.async = true;
          aae.src = "https://ask.extension.org/widgets/questions.js?widget_key=aae-qw-413130fe&limit=4&tags=front page";
          var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(aae, s);
        }
        if (window.attachEvent)
          window.attachEvent('onload', async_load);
        else
          window.addEventListener('load', async_load, false);
      })();
    </script>
    <div id="aae-qw-413130fe"></div>
    <!-- End Ask an Expert -->


    <p class="hp-resource-item"></p>
    <p class="hp-action-item"><a class="btn btn-primary btn-default btn-lg" href="https://ask.extension.org/home/accept_questions">Enable question submission on your site</a></p>
    <p class="hp-action-item"><a class="btn btn-primary btn-default btn-lg" href="https://ask.extension.org/widgets/">Display Ask an Expert answers on your site</a></p>
  </div>
</aside>
