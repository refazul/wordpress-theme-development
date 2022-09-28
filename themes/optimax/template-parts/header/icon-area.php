<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;
$hamburger_for_dark_background =  RDTheme::$options['hamburger_for_dark_background']['url'] ? RDTheme::$options['hamburger_for_dark_background']['url'] : Helper::get_img( 'header/hamburger_for_dark_background.png' ) ;
$hamburger_for_light_background =  RDTheme::$options['hamburger_for_light_background']['url'] ? RDTheme::$options['hamburger_for_light_background']['url'] : Helper::get_img( 'header/hamburger_for_light_background.png' ) ;
if ( RDTheme::$hamburger_image ) {
  $hamburger_for_light_background =  RDTheme::$hamburger_image;
}

?>

<div class="header-action-layout1">
  <ul class="possition-relative">
    <?php if ( RDTheme::$cart_icon && class_exists( 'WC_Widget_Cart' ) ): ?>
      <li>
        <?php get_template_part( 'template-parts/header/icon', 'cart' ); ?>
      </li>
    <?php endif ?>

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

    <?php if ( RDTheme::$offcanvas_menu ): ?>
      <li class="offcanvas-menu-trigger-wrap">
        <button type="button" class="offcanvas-menu-btn offcanvas-btn-light-mobile menu-status-open" data-target="#offcanvas-wrap">
          <span class="only-in-desktop">
            <?php if ( RDTheme::$menu_theme == 'dark_theme' && !RDTheme::$hamburger_image ): ?>
              <span class="hamburger_image hamburger-for-dark-background">
                <img width="40" height="38" loading="lazy" src="<?php echo esc_attr( $hamburger_for_dark_background ); ?>" alt="<?php esc_html_e('hamburger menu', 'optimax'); ?>">
              </span>
            <?php else: ?>
              <span class="hamburger_image hamburger-for-light-background">
                <img width="40" height="38" loading="lazy" src="<?php echo esc_attr( $hamburger_for_light_background ); ?>" alt="<?php esc_html_e('hamburger menu', 'optimax'); ?>">
              </span>
            <?php endif ?>
          </span>
          <span class="only-in-mobile d-none">
            <span class="hamburger_image hamburger-for-dark-background">
              <img width="40" height="38" loading="lazy" src="<?php echo esc_attr( $hamburger_for_dark_background ); ?>" alt="<?php esc_html_e('hamburger menu', 'optimax'); ?>">
            </span>
          </span>
        </button>
      </li>
    <?php endif ?>
  </ul>
</div>



