<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;
//$logo_main =  RDTheme::$options['logo_main']['url'] ? RDTheme::$options['logo_main']['url'] : Helper::get_img( 'logo_main.png' ) ;

$logo_main      = empty(  RDTheme::$options['logo_main']['id'] ) ? '<img width="500" height="132" alt="'.get_bloginfo( 'name' ).'" src="'.Helper::get_img( 'logo_main.png' ).'">' :  wp_get_attachment_image(RDTheme::$options['logo_main']['id'],'full');

?>
<div class="offcanvas-menu-wrap" id="offcanvas-wrap" data-position="right">
  <div class="close-btn offcanvas-close"><i class="fas fa-times"></i></div>
  <div class="main-offcanvas-content">
    <div class="offcanvas-logo">
      <a href="<?php echo home_url('/') ?>"><?php echo wp_kses( $logo_main, 'alltext_allow' );?></a>
    </div>
    <?php wp_nav_menu( Helper::offcanvas_menu_args() ); ?>
    <?php if ( RDTheme::$options['offcanvas_menu_footer'] ): ?>
      <div class="offcanvas-footer">
        <div class="item-title"><?php echo esc_html( RDTheme::$options['offcanvas_menu_footer_title'] ); ?></div>
        <ul class="offcanvas-social">
          <?php foreach (Helper::socials() as $social): ?>
            <li><a href="<?php echo esc_attr( $social['url'] ); ?>"><i class="<?php echo esc_attr( $social['icon'] ); ?>"></i></a></li>
          <?php endforeach ?>
        </ul>
      </div>
    <?php endif ?>
  </div>
</div>
