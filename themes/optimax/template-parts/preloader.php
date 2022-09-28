<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;

?>

<?php if( RDTheme::$options['preloader'] ) : ?>
  <?php
  if ( !empty( RDTheme::$options['preloader_image']['url'] ) ) {
    $preloader_img = RDTheme::$options['preloader_image']['url'];
  }
  else {
    $preloader_img =  Helper::get_img('preloader.gif');
  }
  ?>

  <div id="preloader"
     style="background-image: url(<?php echo esc_url( $preloader_img ); ?>)">
  </div>

<?php endif; ?>
