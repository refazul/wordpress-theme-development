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
    'title'   => esc_html__( 'Post Settings', 'optimax' ),
    'id'      => 'post_settings_section',
    'icon'    => 'el el-file-edit',
    'heading' => '',
    'fields'  => [
      [
        'id'      => 'post_date',
        'type'    => 'switch',
        'title'   => esc_html__( 'Display Post Date', 'optimax' ),
        'on'      => esc_html__( 'On', 'optimax' ),
        'off'     => esc_html__( 'Off', 'optimax' ),
        'default' => true,
      ],
      [
        'id'      => 'post_author_name',
        'type'    => 'switch',
        'title'   => esc_html__( 'Display Author Name', 'optimax' ),
        'on'      => esc_html__( 'On', 'optimax' ),
        'off'     => esc_html__( 'Off', 'optimax' ),
        'default' => true,
      ],
      [
        'id'      => 'post_comment_num',
        'type'    => 'switch',
        'title'   => esc_html__( 'Display Comment Number', 'optimax' ),
        'on'      => esc_html__( 'On', 'optimax' ),
        'off'     => esc_html__( 'Off', 'optimax' ),
        'default' => true,
      ],
      [
        'id'      => 'post_cats',
        'type'    => 'switch',
        'title'   => esc_html__( 'Display Categories', 'optimax' ),
        'on'      => esc_html__( 'On', 'optimax' ),
        'off'     => esc_html__( 'Off', 'optimax' ),
        'default' => true,
      ],
      [
        'id'      => 'post_tags',
        'type'    => 'switch',
        'title'   => esc_html__( 'Display Tags', 'optimax' ),
        'on'      => esc_html__( 'On', 'optimax' ),
        'off'     => esc_html__( 'Off', 'optimax' ),
        'default' => true,
      ],
      [
        'id'      => 'post_social',
        'type'    => 'switch',
        'title'   => esc_html__( 'Display Social Sharing', 'optimax' ),
        'on'      => esc_html__( 'On', 'optimax' ),
        'off'     => esc_html__( 'Off', 'optimax' ),
        'default' => true,
      ],
      [
        'id'      => 'post_author_social',
        'type'    => 'switch',
        'title'   => esc_html__( 'Display Autor Social Profile', 'optimax' ),
        'on'      => esc_html__( 'On', 'optimax' ),
        'off'     => esc_html__( 'Off', 'optimax' ),
        'default' => true,
      ],
      [
        'id'      => 'post_share',
        'type'    => 'checkbox',
        'class'   => 'redux-custom-inline',
        'title'   => esc_html__( 'Social Sharing Icons', 'optimax'),
        'options' => [
          'facebook'  => 'Facebook',
          'twitter'   => 'Twitter',
          'linkedin'  => 'Linkedin',
          'pinterest' => 'Pinterest',
          'tumblr'    => 'Tumblr',
          'reddit'    => 'Reddit',
          'vk'        => 'Vk',
        ],
        'default' => [
          'facebook'  => '1',
          'twitter'   => '1',
          'linkedin'  => '1',
          'pinterest' => '1',
          'tumblr'    => '0',
          'reddit'    => '0',
          'vk'        => '0',
        ],
        'required' => ['post_social', '=', true]
      ],
      [
        'id'      => 'post_about_author',
        'type'    => 'switch',
        'title'   => esc_html__( 'Display About Author', 'optimax' ),
        'on'      => esc_html__( 'On', 'optimax' ),
        'off'     => esc_html__( 'Off', 'optimax' ),
        'default' => true,
      ],
    ]
  ]
);
