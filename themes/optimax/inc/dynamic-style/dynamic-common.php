<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;
/*-------------------------------------
INDEX
=======================================
#. Typography
#. Defaults CSS File
#. Header
#. Breadcrumb
#. Footer
#. Theme Defaults
#. Widgets
#. Contents Area
-------------------------------------*/
/*-------------------------------------
Assign variable from Redux options
# typography
# color
# color references

@darkPrimaryColor: ffb400; // secondary in php
@primaryColor: ffc92b;
@textPrimaryColor: ffffff;
@accentColor: f8f8f8;
@primaryTextColor: 000000;
@breakpointMd: 768px;
-------------------------------------*/
$prefix                                       = Constants::$theme_prefix;
$typo_body                                    = RDTheme::$options['typo_body'];
$typo_h1                                      = RDTheme::$options['typo_h1'];
$typo_h2                                      = RDTheme::$options['typo_h2'];
$typo_h3                                      = RDTheme::$options['typo_h3'];
$typo_h4                                      = RDTheme::$options['typo_h4'];
$typo_h5                                      = RDTheme::$options['typo_h5'];
$typo_h6                                      = RDTheme::$options['typo_h6'];
$menu_typo                                    = RDTheme::$options['menu_typo'];
$submenu_typo                                 = RDTheme::$options['submenu_typo'];
$offcanvas_menu_typo                          = RDTheme::$options['offcanvas_menu_typo'];

/*Site wise color*/
$primary_color                                = apply_filters("${prefix}_primary_color", RDTheme::$options['primary_color']);
$dark_primary_color                           = apply_filters("${prefix}_dark_primary_color", RDTheme::$options['dark_primary_color']);
$accent_color                                 = apply_filters("${prefix}_accent_color", RDTheme::$options['accent_color']);
$dark_primary_text_color                      = apply_filters("${prefix}_dark_primary_text_color", RDTheme::$options['dark_primary_text_color']);
$light_primary_text_color                     = apply_filters("${prefix}_light_primary_text_color", RDTheme::$options['light_primary_text_color']);

$gradient_dark                                = apply_filters("${prefix}_gradient_dark", RDTheme::$options['gradient_dark']);
$gradient_light                               = apply_filters("${prefix}_gradient_light", RDTheme::$options['gradient_light']);
$gradient_2_dark                              = apply_filters("${prefix}_gradient_2_dark", RDTheme::$options['gradient_2_dark']);
$gradient_2_light                             = apply_filters("${prefix}_gradient_2_light", RDTheme::$options['gradient_2_light']);
/* php menu color - light theme */
$menu_color                                   = apply_filters("${prefix}_menu_color", RDTheme::$options['menu_color']);
$menu_accent_color                            = apply_filters("${prefix}_menu_accent_color", RDTheme::$options['menu_accent_color']);
$menu_background_color                        = apply_filters("${prefix}_menu_background_color", RDTheme::$options['menu_background_color']);

/* php menu color - dark theme */
$dark_theme_menu_color                        = apply_filters("${prefix}_dark_theme_menu_color", RDTheme::$options['dark_theme_menu_color']);
$dark_theme_menu_accent_color                 = apply_filters("${prefix}_dark_theme_menu_accent_color", RDTheme::$options['dark_theme_menu_accent_color']);
$dark_theme_menu_background_color             = apply_filters("${prefix}_dark_theme_menu_background_color", RDTheme::$options['dark_theme_menu_background_color']);

/* php menu color - transparent light menu */
$transparent_menu_color                       = apply_filters("${prefix}_transparent_menu_color", RDTheme::$options['transparent_menu_color']);
$transparent_menu_accent_color                = apply_filters("${prefix}_transparent_menu_accent_color", RDTheme::$options['transparent_menu_accent_color']);
$transparent_menu_background_color            = apply_filters("${prefix}_transparent_menu_background_color", RDTheme::$options['transparent_menu_background_color']);


/* php menu color - transparent dark menu */
$dark_theme_transparent_menu_color            = apply_filters("${prefix}_dark_theme_transparent_menu_color", RDTheme::$options['dark_theme_transparent_menu_color']);
$dark_theme_transparent_menu_accent_color     = apply_filters("${prefix}_dark_theme_transparent_menu_accent_color", RDTheme::$options['dark_theme_transparent_menu_accent_color']);
$dark_theme_transparent_menu_background_color = apply_filters("${prefix}_dark_theme_transparent_menu_background_color", RDTheme::$options['dark_theme_transparent_menu_background_color']);


$sticky_menu_color                            = apply_filters("${prefix}_sticky_menu_color", RDTheme::$options['sticky_menu_color']);
$sticky_menu_accent_color                     = apply_filters("${prefix}_sticky_menu_accent_color", RDTheme::$options['sticky_menu_accent_color']);
$sticky_menu_background_color                 = apply_filters("${prefix}_sticky_menu_background_color", RDTheme::$options['sticky_menu_background_color']);
$submenu_color                                = apply_filters("${prefix}_submenu_color", RDTheme::$options['submenu_color']);
$submenu_background_color                     = apply_filters("${prefix}_submenu_background_color", RDTheme::$options['submenu_background_color']);
$submenu_hover_color                          = apply_filters("${prefix}_submenu_hover_color", RDTheme::$options['submenu_hover_color']);
$submenu_hover_background_color               = apply_filters("${prefix}_submenu_hover_background_color", RDTheme::$options['submenu_hover_background_color']);

$topbar_color                                 = apply_filters("${prefix}_topbar_color", RDTheme::$topbar_color);
$topbar_accent_color                          = apply_filters("${prefix}_topbar_accent_color", RDTheme::$topbar_accent_color);
$topbar_background_color                      = apply_filters("${prefix}_topbar_background_color", RDTheme::$topbar_background_color);

$primary_color_rgb                            = Helper::hex2rgb( $primary_color );
$accent_color_rgb             = Helper::hex2rgb( $accent_color );

$breadcrumb_link_color        = apply_filters( "{$prefix}_breadcrumb_link_color", RDTheme::$options['breadcrumb_link_color'] );
$breadcrumb_link_hover_color  = apply_filters( "{$prefix}_breadcrumb_link_hover_color", RDTheme::$options['breadcrumb_link_hover_color'] );
$breadcrumb_active_color      = apply_filters( "{$prefix}_breadcrumb_active_color", RDTheme::$options['breadcrumb_active_color'] );
$breadcrumb_seperator_color   = apply_filters( "{$prefix}_breadcrumb_seperator_color", RDTheme::$options['breadcrumb_seperator_color'] );
$banner_title                 = apply_filters( "{$prefix}_banner_title", RDTheme::$options['banner_title'] );


$footer_bgcolor1               = apply_filters( "{$prefix}_footer_bgcolor1", RDTheme::$options['footer_bgcolor1'] );
$footer_bgcolor2               = apply_filters( "{$prefix}_footer_bgcolor2", RDTheme::$options['footer_bgcolor2'] );
$copyright_bgcolor               = apply_filters( "{$prefix}_copyright_bgcolor", RDTheme::$options['copyright_bgcolor'] );


$footer_title_color           = apply_filters( "{$prefix}_footer_title_color", RDTheme::$options['footer_title_color'] );
$footer_color                 = apply_filters( "{$prefix}_footer_color", RDTheme::$options['footer_color'] );
$footer_link_color            = apply_filters( "{$prefix}_footer_link_color", RDTheme::$options['footer_link_color'] );
$footer_link_hover_color      = apply_filters( "{$prefix}_footer_link_hover_color", RDTheme::$options['footer_link_hover_color'] );
$footer_cta_title_color       = apply_filters( "{$prefix}_footer_cta_title_color", RDTheme::$options['footer_cta_title_color'] );
$footer_cta_subtitle_color    = apply_filters( "{$prefix}_footer_cta_subtitle_color", RDTheme::$options['footer_cta_subtitle_color'] );

$max_width                    = apply_filters( "{$prefix}_responsive_max_width", RDTheme::$options['resmenu_width'] . 'px' );
$min_width                    = apply_filters( "{$prefix}_responsive_min_width", RDTheme::$options['resmenu_width'] + 1 . 'px' );
?>

<?php
/*-------------------------------------
#. Variable Assignment
---------------------------------------*/
?>
:root {

  --primary_color: <?php echo esc_html( $primary_color ); ?>;
  --dark_primary_color: <?php echo esc_html( $dark_primary_color ); ?>;
  --accent_color: <?php echo esc_html( $accent_color ); ?>;
  --dark_primary_text_color: <?php echo esc_html( $dark_primary_text_color ); ?>;
  --light_primary_text_color: <?php echo esc_html( $light_primary_text_color ); ?>;

  --gradient_dark: <?php echo esc_html( $gradient_dark ); ?>;
  --gradient_light: <?php echo esc_html( $gradient_light ); ?>;


  <?php 
  // Top bar color
  ?>
  --topbar_color: <?php echo esc_html( $topbar_color ); ?>;
  --topbar_accent_color: <?php echo esc_html( $topbar_accent_color ); ?>;
  --topbar_background_color: <?php echo esc_html( $topbar_background_color ); ?>;



  <?php 
  // Light theme menu color
  ?>
  --menu_color: <?php echo esc_html( $menu_color ); ?>;
  --menu_accent_color: <?php echo esc_html( $menu_accent_color ); ?>;
  --menu_background_color: <?php echo esc_html( $menu_background_color ); ?>;



  <?php 
  // Dark theme menu color
  ?>
  --dark_theme_menu_color: <?php echo esc_html( $dark_theme_menu_color ); ?>;
  --dark_theme_menu_accent_color: <?php echo esc_html( $dark_theme_menu_accent_color ); ?>;
  --dark_theme_menu_background_color: <?php echo esc_html( $dark_theme_menu_background_color ); ?>;

  <?php 
  // Transparent Light theme menu color
  ?>
  --transparent_menu_color: <?php echo esc_html( $transparent_menu_color ); ?>;
  --transparent_menu_accent_color: <?php echo esc_html( $transparent_menu_accent_color ); ?>;
  --transparent_menu_background_color: <?php echo esc_html( $transparent_menu_background_color ); ?>;

  <?php 
  // Transparent Dark theme menu color
  ?>
  --dark_theme_transparent_menu_color: <?php echo esc_html( $dark_theme_transparent_menu_color ); ?>;
  --dark_theme_transparent_menu_accent_color: <?php echo esc_html( $dark_theme_transparent_menu_accent_color ); ?>;
  --dark_theme_transparent_menu_background_color: <?php echo esc_html( $dark_theme_transparent_menu_background_color ); ?>;

  --sticky_menu_color: <?php echo esc_html( $sticky_menu_color ); ?>;
  --sticky_menu_accent_color: <?php echo esc_html( $sticky_menu_accent_color ); ?>;
  --sticky_menu_background_color: <?php echo esc_html( $sticky_menu_background_color ); ?>;

  --submenu_color: <?php echo esc_html( $submenu_color ); ?>;
  --submenu_background_color: <?php echo esc_html( $submenu_background_color ); ?>;
  --submenu_hover_color: <?php echo esc_html( $submenu_hover_color ); ?>;
  --submenu_hover_background_color: <?php echo esc_html( $submenu_hover_background_color ); ?>;

  --accent_color_rgb: <?php echo esc_html( $accent_color_rgb ); ?>;
  --primary_color_rgb: <?php echo esc_html( $primary_color_rgb ); ?>;

}





