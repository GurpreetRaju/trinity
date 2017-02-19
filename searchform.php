<form action="<?php home_url( '/' );?>" method="get">
    <div id="search-bar" class="clearfix">
       	<input type="text" name="s" placeholder="Search" value="<?php the_search_query(); ?>">
        <input type="submit" value="Go">
    </div>
</form>