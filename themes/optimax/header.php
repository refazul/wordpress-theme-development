<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */
namespace radiustheme\Optimax;
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="<?php echo esc_attr( RDTheme::$options['primary_color'] ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
	<?php wp_body_open(); ?>
  <code></code>
  <a href="#wrapper" data-type="section-switch" class="scrollup">
      <i class="fas fa-angle-double-up"></i>
  </a>
  <?php
  get_template_part( 'template-parts/preloader' );
  ?>

  <!-- Start Wrapper-->
  <div class="wrapper" id="wrapper">
     <!-- Header Area Start Here -->
    <div class='main-header-area'>
      <div class="main-header-block">
         <?php
          if( RDTheme::$has_top_bar || RDTheme::$options['top_bar'] == true ) {
				get_template_part( 'template-parts/header/topbar'); 
          }

          $header_style = RDTheme::$header_style;
          get_template_part( 'template-parts/header/header', $header_style );
          ?>
		  
      </div>
      <?php get_template_part('template-parts/header/mobile', 'menu');?>
    </div>
    <?php get_template_part('template-parts/content-banner'); ?>