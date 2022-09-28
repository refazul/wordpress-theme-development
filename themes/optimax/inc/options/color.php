<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;

use \Redux;

$opt_name = Constants::$theme_options;

Redux::setSection( $opt_name,
  [
    'title'   => esc_html__( 'Colors', 'optimax' ),
    'id'      => 'color_section',
    'heading' => '',
    'icon'    => 'el el-eye-open',
    'fields'  => [
      [
        'id'       => 'section-color-sitewide',
        'type'     => 'section',
        'title'    => esc_html__( 'Sitewide Colors', 'optimax' ),
        'indent'   => true,
      ],
      [
        'id'       => 'primary_color',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Primary Color', 'optimax' ),
        'default'  => '#4a3bca',
		'subtitle' => esc_html__( 'Theme Default: #4a3bca', 'optimax' ),
      ],
      [
        'id'       => 'dark_primary_color',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Secondary Color', 'optimax' ),
        'default'  => '#2b1e68',
      ],
      [
        'id'       => 'accent_color',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Accent Color', 'optimax' ),
        'default'  => '#ff7617',
      ],
      [
        'id'       => 'dark_primary_text_color',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Text Color Dark', 'optimax' ),
        'default'  => '#313845',
      ],
      [
        'id'       => 'light_primary_text_color',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Text color light', 'optimax' ),
        'default'  => '#fff',
      ],
      // gradient color
      [
        'id'       => 'section-color-gradient',
        'type'     => 'section',
        'title'    => esc_html__( 'Gradient Color', 'optimax' ),
        'indent'   => true,
      ],
      [
        'id'       => 'gradient_dark',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Gradient Dark Color', 'optimax' ),
        'default'  => '#ff5917',
      ],
      [
        'id'       => 'gradient_light',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Gradient Light Color', 'optimax' ),
        'default'  => '#ff7617',
      ],
      [
        'id'       => 'gradient_2_dark',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Gradient 2 Dark Color', 'optimax' ),
        'default'  => '#483bc9',
      ],
      [
        'id'       => 'gradient_2_light',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Gradient Light Color', 'optimax' ),
        'default'  => '#7458db',
      ],
      // topbar
      [
        'id'       => 'section-color-topbar',
        'type'     => 'section',
        'title'    => esc_html__( 'Topbar', 'optimax' ),
        'indent'   => true,
      ],

      [
        'id'       => 'topbar_color',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Topbar Color', 'optimax' ),
        'default'  => '#fff',
      ],
      [
        'id'       => 'topbar_accent_color',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Topbar Hover Color', 'optimax' ),
        'default'  => '#ff7617',
      ],
      [
        'id'       => 'topbar_background_color',
        'type'     => 'color',
        'transparent' => true,
        'title'    => esc_html__( 'Topbar Background Color', 'optimax' ),
        'default'  => '#4a3bca',
      ],

      // Main menu
      [
        'id'       => 'section-color-menu',
        'type'     => 'section',
        'title'    => esc_html__( 'Main Menu - (Light Theme)', 'optimax' ),
        'indent'   => true,
      ],

      [
        'id'       => 'menu_color',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Menu Color', 'optimax' ),
        'default'  => '#111111',
      ],
      [
        'id'       => 'menu_accent_color',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Menu Accent/Hover Color', 'optimax' ),
        'default'  => '#ff7617',
      ],
      [
        'id'       => 'menu_background_color',
        'type'     => 'color',
        'transparent' => true,
        'title'    => esc_html__( 'Menu Background Color', 'optimax' ),
        'default'  => '#fff',
      ],


      // Main menu - Dark Theme
      [
        'id'       => 'section-color-menu-dark-theme',
        'type'     => 'section',
        'title'    => esc_html__( 'Main Menu - (Dark Theme)', 'optimax' ),
        'indent'   => true,
      ],

      [
        'id'       => 'dark_theme_menu_color',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Menu Color', 'optimax' ),
        'default'  => '#fff',
      ],
      [
        'id'       => 'dark_theme_menu_accent_color',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Menu Accent / Hover Color', 'optimax' ),
        'default'  => '#ff7617',
      ],
      [
        'id'       => 'dark_theme_menu_background_color',
        'type'     => 'color',
        'transparent' => true,
        'title'    => esc_html__( 'Menu Background Color', 'optimax' ),
        'default'  => '#382a7c',
      ],

      // transparent menu
      [
        'id'       => 'section-color-transparent-menu',
        'type'     => 'section',
        'title'    => esc_html__( 'Transparent Menu  - Light Theme', 'optimax' ),
        'indent'   => true,
      ],
      [
        'id'       => 'transparent_menu_color',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Transparent Menu Color', 'optimax' ),
        'default'  => '#111',
      ],
      [
        'id'       => 'transparent_menu_accent_color',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Transparent Menu Accent/Hover Color', 'optimax' ),
        'default'  => '#ff7617',
      ],
      [
        'id'       => 'transparent_menu_background_color',
        'type'     => 'color',
        'transparent' => true,
        'title'    => esc_html__( 'Transparent Menu Background Color', 'optimax' ),
        'default'  => 'transparent',
      ],

      // transparent Dark menu
      [
        'id'       => 'section-color-transparent-menu-dark-theme',
        'type'     => 'section',
        'title'    => esc_html__( 'Transparent Menu  - Dark Theme', 'optimax' ),
        'indent'   => true,
      ],
      [
        'id'       => 'dark_theme_transparent_menu_color',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Transparent Menu Color', 'optimax' ),
        'default'  => '#fff',
      ],
      [
        'id'       => 'dark_theme_transparent_menu_accent_color',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Transparent Menu Accent / Hover Color', 'optimax' ),
        'default'  => '#ff7617',
      ],
      [
        'id'       => 'dark_theme_transparent_menu_background_color',
        'type'     => 'color',
        'transparent' => true,
        'title'    => esc_html__( 'Transparent Menu Background Color', 'optimax' ),
        'default'  => 'transparent',
      ],
      // sticky menu
      [
        'id'       => 'section-color-sticky-menu',
        'type'     => 'section',
        'title'    => esc_html__( 'Sticky Menu', 'optimax' ),
        'indent'   => true,
      ],
      [
        'id'       => 'sticky_menu_color',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Sticky Menu Color', 'optimax' ),
        'default'  => '#fff',
      ],
      [
        'id'       => 'sticky_menu_accent_color',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Sticky Menu Accent / Hover Color', 'optimax' ),
        'default'  => '#ff7617',
      ],
      [
        'id'       => 'sticky_menu_background_color',
        'type'     => 'color',
        'transparent' => true,
        'title'    => esc_html__( 'Sticky Menu Background Color', 'optimax' ),
        'default'  => '#382a7c',
      ],

      // submenu
      [
        'id'       => 'section-color-submenu',
        'type'     => 'section',
        'title'    => esc_html__( 'Sub Menu', 'optimax' ),
        'indent'   => true,
      ],
      [
        'id'       => 'submenu_color',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Submenu Color', 'optimax' ),
        'default'  => '#313845',
      ],
      [
        'id'       => 'submenu_background_color',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Submenu Background Color', 'optimax' ),
        'default'  => '#fff',
      ],
      [
        'id'       => 'submenu_hover_color',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Submenu Accent / Hover Color', 'optimax' ),
        'default'  => '#fff',
      ],
      [
        'id'       => 'submenu_hover_background_color',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Submenu Hover Background Color', 'optimax' ),
        'default'  => '#4a3bca',
      ],


      [
        'id'       => 'section-color-banner',
        'type'     => 'section',
        'title'    => esc_html__( 'Banner', 'optimax' ),
        'indent'   => true,
      ],
      [
        'id'       => 'banner_title',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Banner Title Color', 'optimax' ),
        'default'  => '#fff',
      ],


      [
        'id'       => 'section-color-breadcrumb',
        'type'     => 'section',
        'title'    => esc_html__( 'Breadcrumb', 'optimax' ),
        'indent'   => true,
      ],
      [
        'id'       => 'breadcrumb_link_color',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Breadcrumb Link Color', 'optimax' ),
        'default'  => '#ffffff',
      ],
      [
        'id'       => 'breadcrumb_link_hover_color',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Breadcrumb Link Hover Color', 'optimax' ),
        'default'  => '#e3d3ff',
      ],
      [
        'id'       => 'breadcrumb_active_color',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Active Breadcrumb Color', 'optimax' ),
        'default'  => '#e3d3ff',
      ],
      [
        'id'       => 'breadcrumb_seperator_color',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Breadcrumb Seperator Color', 'optimax' ),
        'default'  => '#ff7617',
      ],
      [
        'id'       => 'section-color-footer',
        'type'     => 'section',
        'title'    => esc_html__( 'Footer Area', 'optimax' ),
        'indent'   => true,
      ],
      [
        'id'       => 'footer_bgcolor1',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Footer Background Color 1', 'optimax' ),
        'default'  => '#040b3f',
      ],
	  [
        'id'       => 'footer_bgcolor2',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Footer Background Color 2', 'optimax' ),
        'default'  => '#202547',
      ],
	  [
        'id'       => 'copyright_bgcolor',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Copyright Background Color', 'optimax' ),
        'default'  => '#090d2b',
      ],
      [
        'id'       => 'footer_title_color',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Footer Title Text Color', 'optimax' ),
        'default'  => '#ffffff',
      ],
      [
        'id'       => 'footer_color',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Footer Body Text Color', 'optimax' ),
        'default'  => '#c2c4d0',
      ],
      [
        'id'       => 'footer_link_color',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Footer Body Link Color', 'optimax' ),
        'default'  => '#c2c4d0',
      ],
      [
        'id'       => 'footer_link_hover_color',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Footer Body Link Hover Color', 'optimax' ),
        'default'  => '#ff7617',
      ],
      
    ]
  ]
);
