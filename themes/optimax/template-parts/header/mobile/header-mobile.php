<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;

$has_icon           = RDTheme::$search_icon || RDTheme::$cart_icon || RDTheme::$menu_button || RDTheme::$offcanvas_menu;




$logo_main      = empty(  RDTheme::$options['logo_main']['id'] ) ? '<img width="500" height="132" alt="'.get_bloginfo( 'name' ).'" src="'.Helper::get_img( 'logo_main.png' ).'">' :  wp_get_attachment_image(RDTheme::$options['logo_main']['id'],'full');

$logo_sticky      = empty(  RDTheme::$options['logo_sticky']['id'] ) ? '<img width="500" height="132" alt="'.get_bloginfo( 'name' ).'" src="'.Helper::get_img( 'logo_sticky.png' ).'">' :  wp_get_attachment_image(RDTheme::$options['logo_sticky']['id'],'full');

$hamburger_for_light_background      = empty(  RDTheme::$options['hamburger_for_light_background']['id'] ) ? '<img width="500" height="132" alt="'.get_bloginfo( 'name' ).'" src="'.Helper::get_img( 'hamburger_for_light_background.png' ).'">' :  wp_get_attachment_image(RDTheme::$options['hamburger_for_light_background']['id'],'full');

?> 
<header class="header header-mobile">
  <div id="header-menu-mobile" class="header-menu header-menu-mobile header-menu-mobile-sticky menu-layout1 pd-x-45">
    <div class="container">
      <div class="row d-flex align-items-center row-responsive-margin">
        <div class="col-4 col-responsive-padding">
          <div class="logo-area d-flex justify-content-md-start p-0">
            <a href="<?php echo home_url( '/' ); ?>" class="temp-logo">
              <?php echo wp_kses( $logo_main, 'alltext_allow' );?>
            </a>
            <a href="<?php echo home_url( '/' ); ?>" class="sticky-logo">
              <?php echo wp_kses( $logo_sticky, 'alltext_allow' );?>
            </a>
          </div>
        </div>
        <div class="col-8 d-flex justify-content-end col-responsive-padding right_menu_class text-right">
		  <?php if ($has_icon): ?>
			  <div class="d-flex justify-content-end">
				<?php get_template_part( 'template-parts/header/icon', 'area' ); ?>
			  </div>
		  <?php endif ?>
          <div class="main-menu-content">
            <div class="offcanvas-menu-trigger-wrap">
              <button type="button" class="offcanvas-menu-btn menu-status-open" data-target="#offcanvas-menu-mobile">
                <span class="hamburger_image hamburger-for-light-background">
                  <?php echo wp_kses( $hamburger_for_light_background, 'alltext_allow' );?>
                </span>
              </button>
            </div>
          </div>
        </div>		
      </div>
    </div>
  </div>
</header>