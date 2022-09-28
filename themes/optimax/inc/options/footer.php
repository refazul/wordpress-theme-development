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
    'title'   => esc_html__( 'Footer', 'optimax' ),
    'id'      => 'footer_section',
    'heading' => '',
    'icon'    => 'el el-caret-down',
    'fields'  => [
      [ 
        'id'       => 'footer_column',
        'type'     => 'select',
        'title'    =>esc_html__( 'Number of Columns', 'optimax' ),
        'options'  => [
            '1' =>esc_html__( '1 Column', 'optimax' ),
            '2' =>esc_html__( '2 Columns', 'optimax' ),
            '3' =>esc_html__( '3 Columns', 'optimax' ),
            '4' =>esc_html__( '4 Columns', 'optimax' ),
        ],
        'default'  => '4',
      ],
      [
        'id'       => 'section-copyright-area',
        'type'     => 'section',
        'title'    => esc_html__( 'Copyright Area', 'optimax' ),
        'indent'   => true,
      ],
      [
        'id'       => 'copyright_area',
        'type'     => 'switch',
        'title'    => esc_html__( 'Display Copyright Area', 'optimax' ),
        'on'       => esc_html__( 'Enabled', 'optimax' ),
        'off'      => esc_html__( 'Disabled', 'optimax' ),
        'default'  => true,
      ],
	  [
        'id'       => 'footer_shape',
        'type'     => 'switch',
        'title'    => esc_html__( 'Shape show / hide', 'optimax' ),
        'on'       => esc_html__( 'Enabled', 'optimax' ),
        'off'      => esc_html__( 'Disabled', 'optimax' ),
        'default'  => true,
      ],
      [
        'id'       => 'copyright_text',
        'type'     => 'textarea',
        'title'    => esc_html__( 'Copyright Text', 'optimax' ),
        'default'  => '&copy; Copyright Optimax 2020. Designed and Developed by <a rel="nofollow" target="_blank" href="#">RadiusTheme</a>',
        'required' => ['copyright_area', 'equals', true]
      ],
      [
        'id'       => 'section-footer-call-to-action',
        'type'     => 'section',
        'title'    => esc_html__( 'Footer Top Call To Action', 'optimax' ),
        'subtitle' => esc_html__( 'Footer Top Call to action', 'optimax' ),
        'indent'   => true,
      ],
      [
        'id'       => 'footer_cta',
        'type'     => 'switch',
        'title'    => esc_html__( 'Footer Call To Action', 'optimax' ),
        'on'       => esc_html__( 'Enabled', 'optimax' ),
        'off'      => esc_html__( 'Disabled', 'optimax' ),
        'default'  => false,
      ],
      [
        'id'       => 'footer_cta_style',
        'type'     => 'select',
        'title'    => esc_html__( 'Footer Call To Action Style', 'optimax'),
        'options'  => [
          '1'       => esc_html__( 'Style 1', 'optimax' ),
          '2'       => esc_html__( 'Style 2', 'optimax' ),
        ],
        'required' => ['footer_cta', 'equals', true],
        'default'  => '1',
      ],
      [
        'id'       => 'footer_cta_bgtype',
        'type'     => 'button_set',
        'title'    => esc_html__( 'Footer Call To Action Background Type', 'optimax' ),
        'options'  => [
          'bgcolor'  => esc_html__( 'Background Color', 'optimax' ),
          'bgimg'    => esc_html__( 'Background Image', 'optimax' ),
        ],
        'default' => 'bgcolor',
        'required' => ['footer_cta', 'equals', true]
      ],
      [
        'id'       => 'footer_cta_bgcolor',
        'type'     => 'color',
        'title'    => esc_html__( 'Footer Call To Action Background Color', 'optimax'),
        'validate' => 'color',
        'transparent' => false,
        'default' => '#174daf',
        'required' => ['footer_cta_bgtype', 'equals', 'bgcolor']
      ],
      [
        'id'       => 'footer_cta_bgimg',
        'type'     => 'media',
        'title'    => esc_html__( 'Footer Call To Action Background Image', 'optimax' ),
        'default'  => [
          'url'=> Helper::get_img( 'essential/breadcumb.jpg' )
        ],
        'required' => ['footer_cta_bgtype', 'equals', 'bgimg']
      ],
      [
        'id'       => 'footer_cta_title',
        'type'     => 'textarea',
        'title'    => esc_html__( 'Footer Call To Action Title', 'optimax' ),
        'default'  => 'Are you Interested To Get Our Featured Services',
        'required' => ['footer_cta', 'equals', true]
      ],
      [
        'id'       => 'footer_cta_subtitle',
        'type'     => 'textarea',
        'title'    => esc_html__( 'Footer Call To Action Subtitle', 'optimax' ),
        'default'  => 'Enjoy Your Free Trial Now',
        'required' => ['footer_cta', 'equals', true]
      ],
      [
        'id'       => 'footer_cta_btn_text',
        'type'     => 'text',
        'title'    => esc_html__( 'Footer Call To Action Button Text', 'optimax' ),
        'default'  => 'TAKE OUR SERVICES',
        'required' => ['footer_cta', 'equals', true]
      ],
      [
        'id'       => 'footer_cta_btn_url',
        'type'     => 'text',
        'title'    => esc_html__( 'Footer Call To Action Button Url', 'optimax' ),
        'default'  => '#',
        'required' => ['footer_cta', 'equals', true]
      ],
      [
        'id'       => 'footer_cta_title_color',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Footer Call To Action Title Color', 'optimax' ),
        'default'  => '#fff',
        'required' => ['footer_cta', 'equals', true]
      ],
      [
        'id'       => 'footer_cta_subtitle_color',
        'type'     => 'color',
        'transparent' => false,
        'title'    => esc_html__( 'Footer Call To Action Subtitle Color', 'optimax' ),
        'default'  => '#fff',
        'required' => ['footer_cta', 'equals', true]
      ],


    ]
  ]
);
