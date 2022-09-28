<?php
/**
 * Template Name: Blank Template
 * Template require when user want to make custom
 * header footer using elementor pro
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="<?php echo esc_attr( RDTheme::$options['primary_color'] ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php do_action( 'wp_body_open' );?>
  <?php get_template_part( 'template-parts/preloader' ); ?>
  <?php
    while ( have_posts() ) : the_post();
      the_content();
    endwhile;
  ?>
<?php wp_footer();?>
</body>
</html>
