<form action="<?php echo home_url( '/' ); ?>" class="search-form">
  <input type="search" name="s" id="search" value="<?php the_search_query(); ?>">
  <label for="search-box" class="fas fa-search"></label>
</form>