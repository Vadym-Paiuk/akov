<form role="search"
      method="get"
      class="searchform"
      action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text"
	       name="s"
	       id="s"
	       value="<?php the_search_query(); ?>">
	<input type="submit"
	       value="">
</form>