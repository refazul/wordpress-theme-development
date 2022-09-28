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
    'title'  => esc_html__( 'Typography', 'optimax' ),
    'id'     => 'typo_section',
    'icon'   => 'el el-text-width',
    'fields' => [
      [
        'id'          => 'typo_body',
        'type'        => 'typography',
        'title'       => esc_html__( 'Body', 'optimax' ),
        'text-align'  => false,
        'font-weight' => false,
        'color'       => false,
        'subsets'     => false,
        'default'     => [
          'google'      => true,
          'font-family' => 'Roboto',
          'font-weight' => '400',
          'font-size'   => '16px',
          'line-height' => '28px',
        ],
      ],
      [
        'id'          => 'typo_h1',
        'type'        => 'typography',
        'title'       => esc_html__( 'Header h1', 'optimax' ),
        'text-align'  => false,
        'font-weight' => false,
        'color'       => false,
        'subsets'     => false,
        'default'     => [
          'google'      => true,
          'font-family' => 'Nunito',
          'font-weight' => '700',
          'font-size'   => '46px',
          'line-height' => '52px',
        ],
      ],
      [
        'id'          => 'typo_h2',
        'type'        => 'typography',
        'title'       => esc_html__( 'Header h2', 'optimax' ),
        'text-align'  => false,
        'font-weight' => false,
        'color'       => false,
        'subsets'     => false,
        'default'     => [
          'google'      => true,
          'font-family' => 'Nunito',
          'font-weight' => '700',
          'font-size'   => '36px',
          'line-height' => '42px',
        ],
      ],
      [
        'id'          => 'typo_h3',
        'type'        => 'typography',
        'title'       => esc_html__( 'Header h3', 'optimax' ),
        'text-align'  => false,
        'font-weight' => false,
        'color'       => false,
        'subsets'     => false,
        'default'     => [
          'google'      => true,
          'font-family' => 'Nunito',
          'font-weight' => '700',
          'font-size'   => '28px',
          'line-height' => '35px',
        ],
      ],
      [
        'id'          => 'typo_h4',
        'type'        => 'typography',
        'title'       => esc_html__( 'Header h4', 'optimax' ),
        'text-align'  => false,
        'font-weight' => false,
        'color'       => false,
        'subsets'     => false,
        'default'     => [
          'google'      => true,
          'font-family' => 'Nunito',
          'font-weight' => '700',
          'font-size'   => '22px',
          'line-height' => '30px',
        ],
      ],
      [
        'id'          => 'typo_h5',
        'type'        => 'typography',
        'title'       => esc_html__( 'Header h5', 'optimax' ),
        'text-align'  => false,
        'font-weight' => false,
        'color'       => false,
        'subsets'     => false,
        'default'     => [
          'google'      => true,
          'font-family' => 'Nunito',
          'font-weight' => '700',
          'font-size'   => '18px',
          'line-height' => '26px',
        ],
      ],
      [
        'id'          => 'typo_h6',
        'type'        => 'typography',
        'title'       => esc_html__( 'Header h6', 'optimax' ),
        'text-align'  => false,
        'font-weight' => false,
        'color'       => false,
        'subsets'     => false,
        'default'     => [
          'google'      => true,
          'font-family' => 'Nunito',
          'font-weight' => '400',
          'font-size'   => '14px',
          'line-height' => '26px',
        ],
      ],
      [
        'id'       => 'section-mainmenu',
        'type'     => 'section',
        'title'    => esc_html__( 'Main Menu Items', 'optimax' ),
        'indent'   => true,
      ],
      [
        'id'             => 'menu_typo',
        'type'           => 'typography',
        'title'          => esc_html__( 'Menu Font', 'optimax' ),
        'text-align'     => false,
        'color'          => false,
        'subsets'        => false,
        'text-transform' => true,
        'default'        => [
          'google'         => true,
          'font-family'    => 'Nunito',
          'font-weight'    => '700',
          'font-size'      => '15px',
          'line-height'    => '24px',
          'text-transform' => 'uppercase',
        ],
      ],
      [
        'id'       => 'section-submenu',
        'type'     => 'section',
        'title'    => esc_html__( 'Sub Menu Items', 'optimax' ),
        'indent'   => true,
      ],
      [
        'id'             => 'submenu_typo',
        'type'           => 'typography',
        'title'          => esc_html__( 'Submenu Font', 'optimax' ),
        'text-align'     => false,
        'color'          => false,
        'subsets'        => false,
        'text-transform' => true,
        'default'        => [
          'google'         => true,
          'font-family'    => 'Nunito',
          'font-weight'    => '700',
          'font-size'      => '15px',
          'line-height'    => '24px',
          'text-transform' => 'none',
        ],
      ],
      [
        'id'       => 'section-offcanvas_menu',
        'type'     => 'section',
        'title'    => esc_html__( 'Offcanvas Menu', 'optimax' ),
        'indent'   => true,
      ],
      [
        'id'             => 'offcanvas_menu_typo',
        'type'           => 'typography',
        'title'          => esc_html__( 'Offcanvas Menu Font', 'optimax' ),
        'text-align'     => false,
        'color'          => false,
        'subsets'        => false,
        'text-transform' => true,
        'default'        => [
          'google'         => true,
          'font-family'    => 'Nunito',
          'font-weight'    => '700',
          'font-size'      => '15px',
          'line-height'    => '24px',
          'text-transform' => 'none',
        ],
      ],
    ]
  ]
);
