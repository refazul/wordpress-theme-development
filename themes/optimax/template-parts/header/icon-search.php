<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;

?>

<div class="header-action-layout1">
  <ul class="possition-relative">
  
  	<?php if ( RDTheme::$search_icon ): ?>
      <li class="header-search-box">
        <a class="glass-icon" href="#header-search" title="<?php esc_html_e('Search', 'optimax'); ?>">
        <i class="fa fa-search" aria-hidden="true"></i>
        </a>
        <a class="cross-icon" href="#header-cross" title="<?php esc_html_e('Search', 'optimax'); ?>">
		  <i class="fa fa-times" aria-hidden="true"></i>
        </a>
		<section class="header_search-field">
			<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) )  ?>" class="search-form">
					<input required="" type="text" class="search-field" placeholder="Search …" value="" name="s">
					<input class="search-button" type="submit" value="Search">
					<i class="flaticon-magnifying-glass search__icon"></i>
			</form>
		</section>	
      </li>
  	<?php endif ?>
    
  </ul>
</div>



