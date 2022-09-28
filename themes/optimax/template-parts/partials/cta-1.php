<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;
if ( RDTheme::$options['footer_cta_bgtype'] == 'bgimg') {
  $bgimg     = RDTheme::$options['footer_cta_bgimg']['url'];
  $bgstyle   = sprintf( "background-image: url( %s )",  $bgimg); ;
  if (!$bgimg) {
    $bgstyle = sprintf( "background-image: url( %s )", Helper::get_img('essential/breadcumb.jpg')); ;
  }
} elseif ( RDTheme::$options['footer_cta_bgtype'] == 'bgcolor') {
  $bgcolor   = RDTheme::$options['footer_cta_bgcolor'];
  $bgstyle   = sprintf( "background-color: %s ", $bgcolor); ;
}

?>

<div class="cta1" style="<?php echo esc_attr( $bgstyle ); ?>">
  <div class="container">
    <div class="cta1__inner">
      <div class="cta1__inner__left">
        <?php if ( $footer_cta_title = RDTheme::$options['footer_cta_title'] ): ?>
          <h2 class="cta-title"><?php echo esc_html( $footer_cta_title ); ?></h2>
        <?php endif ?>
        <?php if ( $footer_cta_subtitle = RDTheme::$options['footer_cta_subtitle'] ): ?>
          <p class="cta-subtitle"><?php echo esc_html( $footer_cta_subtitle ); ?></p>
        <?php endif ?>
      </div>
      <div class="cta1__inner__right">
        <a href="<?php echo esc_attr( RDTheme::$options['footer_cta_btn_url'] ); ?>" class="btn-fill-2 gradient-accent"><?php echo esc_html( RDTheme::$options['footer_cta_btn_text'] ); ?><i class="fas fa-long-arrow-alt-right"></i></a>
      </div>
    </div>
  </div>
</div>
