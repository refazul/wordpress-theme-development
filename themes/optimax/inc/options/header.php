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
    'title'   => esc_html__( 'Header', 'optimax' ),
    'id'      => 'header_section',
    'heading' => '',
    'icon'    => 'el el-flag',
    'fields'  => [
      [
        'id'       => 'logo_main',
        'type'     => 'media',
        'title'    => esc_html__( 'Main Logo for Light Background', 'optimax' ),
        'default'  => [
          'url'=> Helper::get_img( 'logo_main.png' )
        ],
      ],
      [
        'id'       => 'logo_transparent_header',
        'type'     => 'media',
        'title'    => esc_html__( 'Main Logo for Dark Background ( Please upload transparent logo)', 'optimax' ),
        'default'  => [
          'url'=> Helper::get_img( 'logo_transparent_header.png' )
        ],
        'subtitle' => esc_html__( 'Used when Dark Header is enabled', 'optimax' ),
      ],
      [
        'id'       => 'logo_sticky',
        'type'     => 'media',
        'title'    => esc_html__( 'Sticky Menu Logo', 'optimax' ),
        'default'  => [
          'url'=> Helper::get_img( 'logo_sticky.png' )
        ],
        'subtitle' => esc_html__( 'Used for sticky menu', 'optimax' ),
      ],
      [
        'id'       => 'hamburger_for_dark_background',
        'type'     => 'media',
        'title'    => esc_html__( 'Hamburger menu Dark background' , 'optimax' ),
        'default'  => [
          'url'=> Helper::get_img( 'header/hamburger_for_dark_background.png' )
        ],
        'subtitle' => esc_html__( 'Hamburger Menu for Dark Background', 'optimax' ),
      ],
      [
        'id'       => 'hamburger_for_light_background',
        'type'     => 'media',
        'title'    => esc_html__( 'Hamburger menu light background' , 'optimax' ),
        'default'  => [
          'url'=> Helper::get_img( 'header/hamburger_for_light_background.png' )
        ],
        'subtitle' => esc_html__( 'Hamburger Menu for Light Background', 'optimax' ),
      ],
      [
        'id'       => 'resmenu_width',
        'type'     => 'slider',
        'title'    => esc_html__( 'Responsive Header Screen Width', 'optimax' ),
        'subtitle' => esc_html__( 'Screen width in which mobile menu activated. Recommended value is: 992', 'optimax' ),
        'default'  => 1200,
        'min'      => 0,
        'step'     => 1,
        'max'      => 2000,
      ],
      [
        'id'       => 'logo_width',
        'type'     => 'select',
        'title'    => esc_html__( 'Logo Area Width', 'optimax'),
        'subtitle' => esc_html__( 'Width is defined by the number of bootstrap columns. Please note, navigation menu width will be decreased with the increase of logo width', 'optimax' ),
        'options'  => [
          '1' => esc_html__( '1 Column', 'optimax' ),
          '2' => esc_html__( '2 Column', 'optimax' ),
          '3' => esc_html__( '3 Column', 'optimax' ),
          '4' => esc_html__( '4 Column', 'optimax' ),
        ],
        'default'  => '2',
      ],
      [
        'id'       => 'icon_area_width',
        'type'     => 'select',
        'title'    => esc_html__( 'Icon Area Width', 'optimax'),
        'subtitle' => esc_html__( 'Width is defined by the number of bootstrap columns. Please note, navigation menu width will be decreased with the increase of icon area width', 'optimax' ),
        'options'  => [
          '1' => esc_html__( '1 Column', 'optimax' ),
          '2' => esc_html__( '2 Column', 'optimax' ),
          '3' => esc_html__( '3 Column', 'optimax' ),
          '4' => esc_html__( '4 Column', 'optimax' ),
        ],
        'default'  => '2',
      ],
      [
        'id'             => 'menu_theme',
        'title'          => esc_html__( 'Menu Theme', 'optimax' ),
        'type'           => 'select',
        'options'        => [
          'light_theme'  => esc_html__( 'Light theme', 'optimax' ),
          'dark_theme'   => esc_html__( 'Dark theme', 'optimax' ),
        ],
        'default'        => 'light_theme',
      ],
      [
        'id'             => 'header_type',
        'title'          => esc_html__( 'Header type', 'optimax' ),
        'description'    => esc_html__( 'Apply container / container-fluid class in header content', 'optimax' ),
        'type'           => 'select',
        'options'        => [
          'fluid_header'   => esc_html__( 'Fluid Header', 'optimax' ),
          'box_header'     => esc_html__( 'Box Header', 'optimax' ),
        ],
        'default'        => 'box_header',
      ], 
	 
      [
        'id'       => 'sticky_menu',
        'type'     => 'switch',
        'title'    => esc_html__( 'Sticky Header', 'optimax' ),
        'on'       => esc_html__( 'Enabled', 'optimax' ),
        'off'      => esc_html__( 'Disabled', 'optimax' ),
        'default'  => true,
        'subtitle' => esc_html__( 'Show header at the top when scrolling down', 'optimax' ),
      ],
      [
        'id'       => 'transparent_header',
        'type'     => 'switch',
        'title'    => esc_html__( 'Transparent Header', 'optimax' ),
        'on'       => esc_html__( 'Enabled', 'optimax' ),
        'off'      => esc_html__( 'Disabled', 'optimax' ),
        'default'  => false,
        'subtitle' => esc_html__( 'To Enable Transparent Header', 'optimax' ),
      ],
      [
        'id'       => 'transparent_top_bar',
        'type'     => 'switch',
        'title'    => esc_html__( 'Transparent Top Bar', 'optimax' ),
        'on'       => esc_html__( 'Enabled', 'optimax' ),
        'off'      => esc_html__( 'Disabled', 'optimax' ),
        'default'  => false,
        'subtitle' => esc_html__( 'To Enable Transparent Top Bar. Work when transparent header is Enabled', 'optimax' ),
      ],
      [
        'id'       => 'top_bar',
        'type'     => 'switch',
        'title'    => esc_html__( 'Top Bar', 'optimax' ),
        'on'       => esc_html__( 'Enabled', 'optimax' ),
        'off'      => esc_html__( 'Disabled', 'optimax' ),
        'default'  => false,
      ],
      [
        'id'             => 'top_bar_style',
        'title'          => esc_html__( 'Top Bar Layout', 'optimax' ),
        'type'           => 'select',
        'required' => ['top_bar', '=', true],
        'options'        => [
          '1'  => esc_html__( 'Top Bar Layout 1', 'optimax' ),
          '2'  => esc_html__( 'Top Bar Layout 2', 'optimax' ),
          '3'  => esc_html__( 'Top Bar Layout 3', 'optimax' ),
          '4'  => esc_html__( 'Top Bar Layout 4', 'optimax' ),
        ],
        'default'        => '1',
      ],
      [
        'id'       => 'header_style',
        'type'     => 'image_select',
        'title'    => esc_html__( 'Header Layout', 'optimax' ),
        'default'  => '1',
        'options' => [
          '1' => [
            'title' => '<b>'. esc_html__( 'Layout 1', 'optimax' ) . '</b>',
            'img'   => Helper::get_img( 'redux/header-style-1.png' ),
          ],
          '2' => [
            'title' => '<b>'. esc_html__( 'Layout 2', 'optimax' ) . '</b>',
            'img'   => Helper::get_img( 'redux/header-style-2.png' ),
          ],
          '3' => [
            'title' => '<b>'. esc_html__( 'Layout 3', 'optimax' ) . '</b>',
            'img'   => Helper::get_img( 'redux/header-style-3.png' ),
          ],
          '4' => [
            'title' => '<b>'. esc_html__( 'Layout 4', 'optimax' ) . '</b>',
            'img'   => Helper::get_img( 'redux/header-style-4.png' ),
          ],

        ],
      ],

      [
        'id'       => 'menu_button',
        'type'     => 'switch',
        'title'    => esc_html__( 'Menu Button', 'optimax' ),
		'subtitle' => esc_html__( 'Used for header style 4', 'optimax' ),
        'on'       => esc_html__( 'Enabled', 'optimax' ),
        'off'      => esc_html__( 'Disabled', 'optimax' ),
        'default'  => false,
		'required' => array( 'header_style', 'equals', '4' ),
      ],
      [
        'id'       => 'menu_button_text',
        'type'     => 'text',
        'title'    => esc_html__( 'Menu Button Text', 'optimax' ),
        'default'  => "FREE ANALYSIS",
		'required' => array( 
			array('header_style','equals','4'), 
			array('menu_button','equals','1'), 
		),
      ],
      [
        'id'       => 'menu_button_url',
        'type'     => 'text',
        'title'    => esc_html__( 'Menu Button url', 'optimax' ),
        'default'  => "#",
        'required' => array( 
			array('header_style','equals','4'), 
			array('menu_button','equals','1'), 
		),
      ],
      [
        'id'       => 'search_icon',
        'type'     => 'switch',
        'title'    => esc_html__( 'Search Icon', 'optimax' ),
        'on'       => esc_html__( 'Enabled', 'optimax' ),
        'off'      => esc_html__( 'Disabled', 'optimax' ),
        'default'  => true,
      ],
      [
        'id'       => 'offcanvas_menu',
        'type'     => 'switch',
        'title'    => esc_html__( 'Offcanvas Menu', 'optimax' ),
        'on'       => esc_html__( 'Enabled', 'optimax' ),
        'off'      => esc_html__( 'Disabled', 'optimax' ),
        'default'  => true,
      ],
      [
        'id'       => 'offcanvas_menu_footer',
        'type'     => 'switch',
        'title'    => esc_html__( 'Offcanvas footer', 'optimax' ),
        'on'       => esc_html__( 'Enabled', 'optimax' ),
        'off'      => esc_html__( 'Disabled', 'optimax' ),
        'default'  => true,
        'required' => ['offcanvas_menu', 'equals', true]
      ],
      [
        'id'       => 'offcanvas_menu_footer_title',
        'type'     => 'textarea',
        'title'    => esc_html__( 'Offcanvas menu footer social title ', 'optimax' ),
        'default'  => 'Follow Us',
        'required' => ['offcanvas_menu_footer', 'equals', true]
      ],
      [
        'id'       => 'banner',
        'type'     => 'switch',
        'title'    => esc_html__( 'Banner', 'optimax' ),
        'on'       => esc_html__( 'Enabled', 'optimax' ),
        'off'      => esc_html__( 'Disabled', 'optimax' ),
        'default'  => true,
      ],
      [
        'id'       => 'breadcrumb',
        'type'     => 'switch',
        'title'    => esc_html__( 'Breadcrumb', 'optimax' ),
        'on'       => esc_html__( 'Enabled', 'optimax' ),
        'off'      => esc_html__( 'Disabled', 'optimax' ),
        'default'  => true,
        'required' => ['banner', 'equals', true]
      ],
      [
        'id'       => 'bgtype',
        'type'     => 'button_set',
        'title'    => esc_html__( 'Banner Background Type', 'optimax' ),
        'options'  => [
          'bgcolor'  => esc_html__( 'Background Color', 'optimax' ),
          'bgimg'    => esc_html__( 'Background Image', 'optimax' ),
        ],
        'default'  => 'bgimg',
        'required' => ['banner', 'equals', true]
      ],
      [
        'id'       => 'bgcolor',
        'type'     => 'color',
        'title'    => esc_html__( 'Banner Background Color', 'optimax'),
        'validate' => 'color',
        'transparent' => false,
        'default' => '#0529a4',
        'required' => ['bgtype', 'equals', 'bgcolor']
      ],
      [
        'id'       => 'bgimg',
        'type'     => 'media',
        'title'    => esc_html__( 'Banner Background Image', 'optimax' ),
        'default'  => [
          'url'=> Helper::get_img( 'essential/breadcumb.jpg' )
        ],
        'required' => ['bgtype', 'equals', 'bgimg']
      ],

    ]
  ]
);
