<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;

use Mexitek\PHPColors\Color;
require Constants::$theme_inc_dir . 'dynamic-style/dynamic-common.php';

?>
<?php
/*-------------------------------------
#. Typography
---------------------------------------*/
?>
body,
ul li,
p {
  font-family: <?php echo esc_html( $typo_body['font-family'] ); ?>, sans-serif;
  font-size: <?php echo esc_html( $typo_body['font-size'] ); ?>;
  font-weight : <?php echo esc_html( $typo_body['font-weight'] ); ?>;
  font-style: <?php echo empty( $typo_body['font-style'] ) ? 'normal' : $typo_body['font-style']; ?>;
  line-height: <?php echo esc_html( $typo_body['line-height'] ); ?>;
}
h1 {
  font-family: <?php echo esc_html( $typo_h1['font-family'] ); ?>, sans-serif;
  font-size: <?php echo esc_html( $typo_h1['font-size'] ); ?>;
  line-height: <?php echo esc_html( $typo_h1['line-height'] ); ?>;
  font-weight : <?php echo esc_html( $typo_h1['font-weight'] ); ?>;
  font-style: <?php echo empty( $typo_h1['font-style'] ) ? 'normal' : $typo_h1['font-style']; ?>;
}
h2 {
  font-family: <?php echo esc_html( $typo_h2['font-family'] ); ?>, sans-serif;
  font-size: <?php echo esc_html( $typo_h2['font-size'] ); ?>;
  line-height: <?php echo esc_html( $typo_h2['line-height'] ); ?>;
  font-weight : <?php echo esc_html( $typo_h2['font-weight'] ); ?>;
  font-style: <?php echo empty( $typo_h2['font-style'] ) ? 'normal' : $typo_h2['font-style']; ?>;
}
h3 {
  font-family: <?php echo esc_html( $typo_h3['font-family'] ); ?>, sans-serif;
  font-size: <?php echo esc_html( $typo_h3['font-size'] ); ?>;
  line-height: <?php echo esc_html( $typo_h3['line-height'] ); ?>;
  font-weight : <?php echo esc_html( $typo_h3['font-weight'] ); ?>;
  font-style: <?php echo empty( $typo_h3['font-style'] ) ? 'normal' : $typo_h3['font-style']; ?>;
}
h4 {
  font-family: <?php echo esc_html( $typo_h4['font-family'] ); ?>, sans-serif;
  font-size: <?php echo esc_html( $typo_h4['font-size'] ); ?>;
  line-height: <?php echo esc_html( $typo_h4['line-height'] ); ?>;
  font-weight : <?php echo esc_html( $typo_h4['font-weight'] ); ?>;
  font-style: <?php echo empty( $typo_h4['font-style'] ) ? 'normal' : $typo_h4['font-style']; ?>;
}
h5 {
  font-family: <?php echo esc_html( $typo_h5['font-family'] ); ?>, sans-serif;
  font-size: <?php echo esc_html( $typo_h5['font-size'] ); ?>;
  line-height: <?php echo esc_html( $typo_h5['line-height'] ); ?>;
  font-weight : <?php echo esc_html( $typo_h5['font-weight'] ); ?>;
  font-style: <?php echo empty( $typo_h5['font-style'] ) ? 'normal' : $typo_h5['font-style']; ?>;
}
h6 {
  font-family: <?php echo esc_html( $typo_h6['font-family'] ); ?>, sans-serif;
  font-size: <?php echo esc_html( $typo_h6['font-size'] ); ?>;
  line-height: <?php echo esc_html( $typo_h6['line-height'] ); ?>;
  font-weight : <?php echo esc_html( $typo_h6['font-weight'] ); ?>;
  font-style: <?php echo empty( $typo_h6['font-style'] ) ? 'normal' : $typo_h6['font-style']; ?>;
}

<?php // desktop menu ?>
nav > ul > li > a, nav.template-main-menu > ul > li > a,
#header-menu-desktop .main-menu-content nav > ul > li > a {
  font-size: <?php echo esc_html($menu_typo['font-size']) ?>;
  font-family: <?php echo esc_html($menu_typo['font-family']) ?>;
  font-weight: <?php echo esc_html($menu_typo['font-weight']) ?>;
  line-height: <?php echo esc_html($menu_typo['line-height']) ?>;
  text-transform: <?php echo esc_html($menu_typo['text-transform']) ?>;
  font-style: <?php echo empty( $menu_typo['font-style'] ) ? 'normal' : $menu_typo['font-style']; ?>;

}
nav > ul > li ul.sub-menu li a, nav.template-main-menu > ul > li ul.sub-menu li a,
#header-menu-desktop .main-menu-content ul li > ul.sub-menu > li ul li:hover > a,
#header-menu-desktop .main-menu-content ul li > ul.sub-menu > li > a,
#header-menu-desktop .main-menu-content ul li > ul.sub-menu > li ul li a {
  font-size: <?php echo esc_html($submenu_typo['font-size']) ?>;
  font-family: <?php echo esc_html($submenu_typo['font-family']) ?>;
  font-weight: <?php echo esc_html($submenu_typo['font-weight']) ?>;
  line-height: <?php echo esc_html($submenu_typo['line-height']) ?>;
  text-transform: <?php echo esc_html($submenu_typo['text-transform']) ?>;
  font-style: <?php echo empty( $submenu_typo['font-style'] ) ? 'normal' : $submenu_typo['font-style']; ?>;
}
.offcanvas-menu-wrap .main-offcanvas-content .offcanvas-menu a {
  font-size: <?php echo esc_html($offcanvas_menu_typo['font-size']) ?>;
  font-family: <?php echo esc_html($offcanvas_menu_typo['font-family']) ?>;
  font-weight: <?php echo esc_html($offcanvas_menu_typo['font-weight']) ?>;
  line-height: <?php echo esc_html($offcanvas_menu_typo['line-height']) ?>;
  text-transform: <?php echo esc_html($offcanvas_menu_typo['text-transform']) ?>;
  font-style: <?php echo empty( $offcanvas_menu_typo['font-style'] ) ? 'normal' : $offcanvas_menu_typo['font-style']; ?>;
}

<?php
/*-------------------------------------
#. Responsive  Block
---------------------------------------*/
?>

@media only screen and (max-width: <?php echo esc_html( $max_width ); ?>) {
  .only-in-mobile {
    display: block;
  }

}

@media only screen and (min-width: <?php echo esc_html( $min_width ); ?>) {
  .main-header-area .header.header-desktop {
    display: block;
  }
  .only-in-desktop {
    display: block;
  }
}

<?php
/*-------------------------------------
#. Transparent header
---------------------------------------*/
?>

<?php
/*-------------------------------------
#. Gradient
---------------------------------------*/
?>
<?php
$accent_color_factory  = new Color( $accent_color );
$accent_color_darken  = '#' . $accent_color_factory->darken(8);
$accent_color_lighten  = '#' . $accent_color_factory->lighten(8);

?>

.gradient-accent-20 {
  background: -webkit-gradient(linear, left top, right top, from(<?php echo esc_html( $accent_color_darken ); ?>), to(<?php echo esc_html( $accent_color_lighten ); ?>));
  background: linear-gradient(to right, <?php echo esc_html( $accent_color_darken ); ?>, <?php echo esc_html( $accent_color_lighten ); ?>);
}


<?php
/*-------------------------------------
#. Footer Area Style
---------------------------------------*/
?>
.widget_nav_menu li a:before, .menu-bottom-menu-for-widget-container li a:before {
  color: <?php echo esc_html( $primary_color ); ?>;
}
.footer-wrap .footer-inner .main-footer-wrap:before {
    background-image: -o-linear-gradient(30deg, <?php echo esc_html( $footer_bgcolor1 ); ?> 0%, <?php echo esc_html( $footer_bgcolor2 ); ?> 100%);
    background-image: linear-gradient(60deg, <?php echo esc_html( $footer_bgcolor1 ); ?> 0%, <?php echo esc_html( $footer_bgcolor2 ); ?> 100%);
}
.footer-bottom-wrap {
    background-color: <?php echo esc_html( $copyright_bgcolor ); ?>;
}
.main-footer-wrap {
  color: <?php echo esc_html( $footer_color ); ?>;
}
.main-footer-wrap p {
  color: <?php echo esc_html( $footer_color ); ?>;
}
.footer-wrap .copyright {
  color: <?php echo esc_html( $footer_color ); ?>;
}
.footer-wrap a{
   color: <?php echo esc_html( $footer_link_color ); ?>;
}
.widget_optimax_about .footer-social li a {
   color: <?php echo esc_html( $footer_link_color ); ?>;
}
.widget.main-footer-box li a:hover {
  color: <?php echo esc_html( $footer_link_hover_color ); ?>;
}
.footer-bottom-wrap .copyright a:hover {
  color: <?php echo esc_html( $footer_link_hover_color ); ?>;
}
.main-footer-box .title,
.main-footer-box h1,
.main-footer-box h2,
.main-footer-box h3,
.main-footer-box h4,
.main-footer-box h5,
.main-footer-box h6 {
  color: <?php echo esc_html( $footer_title_color ); ?>;
}
.footer-social li a:hover {
  background-color: <?php echo esc_html( $footer_link_hover_color ); ?>;
}

.cta1 .cta1__inner .cta-title,
.cta2 .cta2__inner .cta-title {
  color: <?php echo esc_html( $footer_cta_title_color ); ?>;
}
.cta1 .cta1__inner .cta-subtitle,
.cta2 .cta2__inner .cta-subtitle {
  color: <?php echo esc_html( $footer_cta_subtitle_color ); ?>;
}
<?php /*banner title color */ ?>
.inner-page-banner .breadcrumbs-area h1 {
  color: <?php echo esc_html( $banner_title ); ?>;
}
<?php
/*-------------------------------------
#. Breadcrumbs Area Style
---------------------------------------*/
/*breadcrumb link color*/ ?>
.inner-page-banner .breadcrumbs-area ul li a{
  color: <?php echo esc_html( $breadcrumb_link_color ); ?>;
}
<?php /*breadcrumb link:hover color*/ ?>
.inner-page-banner .breadcrumbs-area ul li a:hover {
  color: <?php echo esc_html( $breadcrumb_link_hover_color ); ?>;
}
<?php /*breadcrumb active color*/  ?>
.inner-page-banner .breadcrumbs-area ul li {
  color: <?php echo esc_html( $breadcrumb_active_color ); ?>;
}
<?php /*breadcrumb separator color*/ ?>
.inner-page-banner .breadcrumbs-area ul li:before {
  color: <?php echo esc_html( $breadcrumb_seperator_color ); ?>;
}
<?php 
// navxt
 ?>
.inner-page-banner .breadcrumbs-area.bcn_display  {
  color: <?php echo esc_html( $breadcrumb_seperator_color ); ?>;
}
.inner-page-banner .breadcrumbs-area.bcn_display a span {
  color: <?php echo esc_html( $breadcrumb_link_color ); ?>;
}
.inner-page-banner .breadcrumbs-area.bcn_display span {
  color: <?php echo esc_html( $breadcrumb_active_color ); ?>;
}
.inner-page-banner .breadcrumbs-area.bcn_display a span:hover {
  color: <?php echo esc_html( $breadcrumb_link_hover_color ); ?>;
}
