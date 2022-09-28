<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;
get_header();

$error_image_rd    = RDTheme::$options['error_image'];
if ($error_image_rd['url']) {
  $error_image     = $error_image_rd['url'];
}else {
  $error_image     = Helper::get_img('404.png');
}
$error_text        = RDTheme::$options['error_text'];
$error_sub_text    = RDTheme::$options['error_sub_text'];
$error_button_text = RDTheme::$options['error_button_text'];

?>
<section class="error-page-wrap-layout1">
  <div class="container">
      <div class="error-page-box-layout1">
          <div class="error-img">
              <img src="<?php echo esc_attr( $error_image ); ?>" alt="404">
          </div>
          <h2 class="item-title"><?php echo esc_html( $error_text ); ?></h2>
          <div class="item-subtitle"><?php echo esc_html( $error_sub_text ); ?></div>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="item-btn btn-fill gradient-accent rtel-button-1"><?php echo esc_html( $error_button_text ); ?><i class="fas fa-long-arrow-alt-right"></i></a>
      </div>
  </div>
</section>

<?php get_footer(); ?>
