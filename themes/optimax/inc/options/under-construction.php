<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;

use \Redux;
use radiustheme\Optimax\Helper;

$opt_name = Constants::$theme_options;
Redux::setSection($opt_name,
  [
    'title' => esc_html__('Under Construction', 'optimax'),
    'id' => 'under_construction_sttings_section',
    'heading' => '',
    'icon' => 'el el-warning-sign',
    'fields' => [
      [
        'id'         => 'under_construction_mode_enable',
        'type'       => 'button_set',
        'title'      => esc_html__('Under Construction / Coming Soon Mode', 'optimax'),
        'subtitle'   => esc_html__('If enable, Unauthenticated user will get the frontend  maintenance / coming soon page only.', 'optimax'),
        'default'    => 'off',
        'options'    => [
          'on'    => 'Enable',
          'off'   => 'Disable'
        ],
      ],
      [
        'id'        => 'under_construction_page_logo',
        'type'      => 'media',
        'title'     => esc_html__( 'Under Construction Logo / Image', 'optimax' ),
        'required'  => ['under_construction_mode_enable','equals', 'on'],
        'default'   => [
          'url'   => Helper::get_img( 'logo_transparent_header.png' )
        ],
      ],

      [
        'id'             => 'under_construction_title_text',
        'type'           => 'text',
        'title'          => esc_html__('Page Title', 'optimax'),
        'default'        => esc_html__('Will Open Soon . . . ', 'optimax'),
        'required'       => ['under_construction_mode_enable','equals', 'on'],
      ], 
      [
        'id'            => 'under_construction_title_countdown_date',
        'type'          => 'date',
        'default'       =>  '',
        'title'         => esc_html__('Countdown Date', 'optimax'),               
        'required'      => ['under_construction_mode_enable','equals', 'on'],
      ],
      [
        'id'       => 'under_construction_social_profile',
        'type'     => 'switch',
        'title'    => esc_html__( 'Show Social profile', 'optimax' ),
        'on'       => esc_html__( 'On', 'optimax' ),
        'off'      => esc_html__( 'Off', 'optimax' ),
        'default'  => true,
        'required' => ['under_construction_mode_enable','equals', 'on'],
      ],

      [
        'id'       => 'under_construction_page_image',
        'type'     => 'media',
        'title'    => esc_html__( 'Under Construction Image', 'optimax' ),
        'required' => ['under_construction_mode_enable','equals', 'on'],
        'default'  => [
          'url'  => Helper::get_img( 'coming-soon.jpg' )
        ],
      ],

    ]
  ]
);

