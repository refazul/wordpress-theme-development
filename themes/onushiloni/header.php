<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
}

// Hook for adding anything you need to the very top of the website.
do_action( 'wp_body_open' );

// This action hook is essential for WooCommerce to work properly.
do_action( 'woocommerce_before_header' );

// You can add your own header template parts here if not using Elementor.
// Example: get_template_part( 'template-parts/header/content', 'header' );

// This action hook is useful for adding elements right before the main content.
do_action( 'woocommerce_before_main_content' );