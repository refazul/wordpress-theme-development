<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;
$prefix                  = Constants::$theme_prefix;

$logo_main      = empty(  RDTheme::$options['logo_main']['id'] ) ? '<img width="500" height="132" alt="'.get_bloginfo( 'name' ).'" src="'.Helper::get_img( 'logo_main.png' ).'">' :  wp_get_attachment_image(RDTheme::$options['logo_main']['id'],'full');

$logo_transparent_header      = empty(  RDTheme::$options['logo_transparent_header']['id'] ) ? '<img width="500" height="132" alt="'.get_bloginfo( 'name' ).'" src="'.Helper::get_img( 'logo_transparent_header.png' ).'">' :  wp_get_attachment_image(RDTheme::$options['logo_transparent_header']['id'],'full');

$logo_sticky      = empty(  RDTheme::$options['logo_sticky']['id'] ) ? '<img width="500" height="132" alt="'.get_bloginfo( 'name' ).'" src="'.Helper::get_img( 'logo_sticky.png' ).'">' :  wp_get_attachment_image(RDTheme::$options['logo_sticky']['id'],'full');

$logo                    = RDTheme::$menu_theme == 'dark_theme' ? $logo_transparent_header : $logo_main;
$header_desktop_hover_class    = 'desktop-hover-on';
if ( RDTheme::$logo_type == 'dark_background_logo' ) {
  $logo = $logo_transparent_header;
  $header_desktop_hover_class    = 'desktop-hover-off';
} else if ( RDTheme::$logo_type == 'light_background_logo' ) {
  $logo = $logo_main;
  $header_desktop_hover_class    = 'desktop-hover-off';
}
$logo_width_column       = (int) RDTheme::$options['logo_width'];
$has_icon                = RDTheme::$search_icon || RDTheme::$cart_icon || RDTheme::$menu_button || RDTheme::$offcanvas_menu;
$icon_area_width         = RDTheme::$icon_area_width;

$icon_column = 0;

if ($has_icon) {
  $icon_column     = $icon_area_width;
}
$menu_width_column = 12 - $icon_column;
$social_width      = 12 - $logo_width_column;

$logo_class        = "col-lg-{$logo_width_column} col-4";
$social_class      = "col-lg-{$social_width}";


$menu_class        = "col-lg-{$menu_width_column} col-4";
$icon_class        = "col-lg-{$icon_column} col-4";

?>
<header id="header-menu-desktop"  class="header header-desktop header-2  <?php echo esc_attr( $header_desktop_hover_class ); ?>">
  <div class="logo-social pd-x-45">
    <div class="<?php echo esc_attr( Helper::header_container_class() ); ?>">
    <div class="row">
      <div class="<?php echo esc_attr( $logo_class ); ?> header-logo-content">
        <div class="logo-area">
          <a href="<?php echo home_url( '/' ); ?>" class="temp-logo">
            <?php echo wp_kses( $logo, 'alltext_allow' );?>
          </a>
          <a href="<?php echo home_url( '/' ); ?>" class="sticky-logo">
            <?php echo wp_kses( $logo_sticky, 'alltext_allow' );?>
          </a>
        </div>
      </div>

      <div class="<?php echo esc_attr( $social_class ); ?>">
        <div class="header-social-content justify-content-end">

            <?php if( !empty(RDTheme::$options['phone']) ) { ?>
            <div class="header-icon-social">
              <i class="fas fa-phone-alt"></i>
              <div class="header-icon-social-content">
                  <p class="title"><?php esc_html_e( 'Phone', 'optimax' ); ?></p>
                  <div class="subtitle">
                    <a href="tel:<?php echo esc_attr( RDTheme::$options['phone'] );?>"><?php echo wp_kses( RDTheme::$options['phone'] , 'alltext_allow' );?></a>
                  </div>
            </div>
            </div>
            <?php } ?>
            <?php if( !empty(RDTheme::$options['email']) ) { ?>
            <div class="header-icon-social">
              <i class="far fa-envelope"></i>
              <div class="header-icon-social-content">
                  <p class="title"><?php esc_html_e( 'Mail Us', 'optimax' ); ?></p>
                  <div class="subtitle">
                    <a href="mailto:<?php echo esc_attr( RDTheme::$options['email'] );?>"><?php echo wp_kses( RDTheme::$options['email'] , 'alltext_allow' );?></a>
                  </div>
            </div>
            </div>
            <?php } ?>
            <?php if( !empty(RDTheme::$options['office_time']) ) { ?>
            <div class="header-icon-social">
              <i class="far fa-clock"></i>
              <div class="header-icon-social-content">
                  <p class="title"><?php esc_html_e( 'Opening Hours', 'optimax' ); ?></p>
                  <div class="subtitle">
                    <?php echo wp_kses( RDTheme::$options['office_time'] , 'alltext_allow' );?>
                  </div>
            </div>
            </div>
            <?php } ?>
        </div>
      </div>
    </div>
    </div>
  </div>
  <div id="header-menu-desktop" class="header-menu header-menu-desktop-sticky menu-layout1 pd-x-45">
    <div class="<?php echo esc_attr( Helper::header_container_class() ); ?>">
      <div class="row d-flex align-items-center">
        <div class="<?php echo esc_attr( $menu_class ); ?>  possition-static header-menu-content d-flex justify-content-start">
          <div id="site-navigation" class="main-menu-content">
            <?php wp_nav_menu( Helper::main_menu_args() ); ?>
          </div>
        </div>
        <?php if ($has_icon): ?>
          <div class="<?php echo esc_attr( $icon_class ); ?> d-flex justify-content-end header-right-content">
            <?php get_template_part( 'template-parts/header/icon', 'area' ); ?>
          </div>
        <?php endif ?>
      </div>
    </div>
  </div>
</header>