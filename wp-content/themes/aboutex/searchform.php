<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
<div>
    <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
    <input alt="search" title="search" type="image" src="<?php bloginfo('template_directory'); ?>/images/searchbutton.gif" />
</div>
</form>
