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
    'title'   => esc_html__( 'Error Page Settings', 'optimax' ),
    'id'      => 'error_settings_section',
    'heading' => '',
    'icon'    => 'el el-error-alt',
    'fields'  => [
      [
        'id'       => 'error_image',
        'type'     => 'media',
        'title'    => esc_html__( 'Error Image', 'optimax' ),
        'default'  => [
          'url'=> Helper::get_img( '404.png' )
        ],
      ],
      [
        'id'       => 'error_text',
        'type'     => 'text',
        'title'    => esc_html__( 'Error Text', 'optimax' ),
        'default'  => esc_html__( "Oops! That page cannot be found", 'optimax' ),
      ],
      [
        'id'       => 'error_sub_text',
        'type'     => 'text',
        'title'    => esc_html__( 'Error Sub Text', 'optimax' ),
        'default'  => esc_html__( "Sorry, but the page you are looking for does not existing", 'optimax' ),
      ],
      [
        'id'       => 'error_button_text',
        'type'     => 'text',
        'title'    => esc_html__( 'Button Text', 'optimax' ),
        'default'  => esc_html__( 'Go To Home Page', 'optimax' ),
      ]
    ]
  ]
);

do_action( 'rt_after_redux_options_loaded', 'optimax' );