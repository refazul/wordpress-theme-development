<div id="header-search" class="header-search">
  <button type="button" class="close">×</button>
  <form role="search"  method="get" class="header-search-form" action="<?php echo esc_url( home_url( '/' ) )  ?>">
    <input type="search" name="s" class="search-input" placeholder="<?php echo esc_attr__( 'Search here ...', 'optimax' )  ?>" value="<?php get_search_query(); ?>">
    <button type="submit" class="search-btn">
      <i class="flaticon-magnifying-glass"></i>
    </button>
  </form>
</div>

