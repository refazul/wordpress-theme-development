<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;

use \Redux;

$opt_name = Constants::$theme_options;

if (class_exists('WooCommerce')) {
  // Woocommerce Settings
  Redux::setSection(
    $opt_name,
    [
    'title'   => esc_html__('WooCommerce', 'optimax'),
    'id'      => 'woo_Settings_section',
    'heading' => '',
    'icon'    => 'el el-shopping-cart',
    'fields'  => [
      [
        'id'       => 'wc_sec_general',
        'type'     => 'section',
        'title'    => esc_html__('General', 'optimax'),
        'indent'   => true,
      ],
      [
        'id'       => 'products_per_page',
        'type'     => 'text',
        'title'    => esc_html__('Number of Products Per Page', 'optimax'),
        'default'  => '12',
      ],
      [
         'id'       => 'products_cols_width',
         'type'     => 'text',
         'title'    => esc_html__('Number of Columns on Shop Page', 'optimax'),
         'default'  => '4',
      ],
      [
        'id'       => 'wc_shop_quickview_icon',
        'type'     => 'switch',
        'title'    => esc_html__('Quickview', 'optimax'),
        'on'       => esc_html__('Enabled', 'optimax'),
        'off'      => esc_html__('Disabled', 'optimax'),
        'default'  => false,
      ],
      [
        'id'       => 'wc_shop_wishlist_icon',
        'type'     => 'switch',
        'title'    => esc_html__('Wishlist', 'optimax'),
        'on'       => esc_html__('Enabled', 'optimax'),
        'off'      => esc_html__('Disabled', 'optimax'),
        'default'  => false,
      ],
      [
        'id'       => 'wc_shop_compare_icon',
        'type'     => 'switch',
        'title'    => esc_html__('Compare', 'optimax'),
        'on'       => esc_html__('Enabled', 'optimax'),
        'off'      => esc_html__('Disabled', 'optimax'),
        'default'  => false,
      ],
      [
        'id'       => 'wc_shop_rating',
        'type'     => 'switch',
        'title'    => esc_html__('Rating', 'optimax'),
        'on'       => esc_html__('Enabled', 'optimax'),
        'off'      => esc_html__('Disabled', 'optimax'),
        'default'  => false,
      ],
      [
        'id'       => 'wc_sec_product',
        'type'     => 'section',
        'title'    => esc_html__('Product Single Page', 'optimax'),
        'indent'   => true,
      ],
      [
        'id'       => 'wc_product_wishlist_icon',
        'type'     => 'switch',
        'title'    => esc_html__("Wishlist", 'optimax'),
        'on'       => esc_html__('Enabled', 'optimax'),
        'off'      => esc_html__('Disabled', 'optimax'),
        'default'  => false,
      ],
      [
        'id'       => 'wc_product_compare_icon',
        'type'     => 'switch',
        'title'    => esc_html__('Compare', 'optimax'),
        'on'       => esc_html__('Show', 'optimax'),
        'off'      => esc_html__('Hide', 'optimax'),
        'default'  => false,
      ],
      [
        'id'       => 'wc_product_quickview_icon',
        'type'     => 'switch',
        'title'    => esc_html__('Quickview', 'optimax'),
        'on'       => esc_html__('Show', 'optimax'),
        'off'      => esc_html__('Hide', 'optimax'),
        'default'  => false,
      ],
    ],
  ]
  );
}