<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;
?>

<div class="<?php Helper::the_sidebar_class();?>">
  <aside class="sidebar-widget-area">
    <?php
    do_action( 'optimax_before_sidebar' );
	
    if ( RDTheme::$sidebar ) {
      if ( is_active_sidebar( RDTheme::$sidebar ) ){
        dynamic_sidebar( RDTheme::$sidebar );
      }
    } else if ( is_singular('optimax_case') ) {	
		if ( is_active_sidebar( 'sidebar-case' ) ) {
			dynamic_sidebar( 'sidebar-case' );
		}		
	} else {
      if ( is_active_sidebar( 'sidebar' ) ){
        dynamic_sidebar( 'sidebar' );
      }
    }

    do_action( 'optimax_after_sidebar' );
    ?>
  </aside>
</div>
