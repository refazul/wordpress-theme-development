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
    'title'   => esc_html__( 'Blog Settings', 'optimax' ),
    'id'      => 'blog_settings_section',
    'icon'    => 'el el-tags',
    'heading' => '',
    'fields'  => [
      [
        'id'       => 'blog_date',
        'type'     => 'switch',
        'title'    => esc_html__( 'Display Date', 'optimax' ),
        'on'       => esc_html__( 'On', 'optimax' ),
        'off'      => esc_html__( 'Off', 'optimax' ),
        'default'  => true,
      ],
      [
        'id'       => 'blog_author_name',
        'type'     => 'switch',
        'title'    => esc_html__( 'Display Author Name', 'optimax' ),
        'on'       => esc_html__( 'On', 'optimax' ),
        'off'      => esc_html__( 'Off', 'optimax' ),
        'default'  => true,
      ],
      [
        'id'       => 'blog_comment_num',
        'type'     => 'switch',
        'title'    => esc_html__( 'Display Comment Number', 'optimax' ),
        'on'       => esc_html__( 'On', 'optimax' ),
        'off'      => esc_html__( 'Off', 'optimax' ),
        'default'  => true,
      ],
      [
        'id'      => 'blog_cats',
        'type'    => 'switch',
        'title'   => esc_html__( 'Display Categories', 'optimax' ),
        'on'      => esc_html__( 'On', 'optimax' ),
        'off'     => esc_html__( 'Off', 'optimax' ),
        'default' => true,
      ],
      [
        'id'       => 'blog_read_more_text',
        'type'     => 'text',
        'title'    => esc_html__( 'Blog ', 'optimax' ),
        'title'    => esc_html__( 'Read more text for blog archive page', 'optimax' ),
        'default'  => 'Continue Reading',
      ],
    ]
  ]
);
