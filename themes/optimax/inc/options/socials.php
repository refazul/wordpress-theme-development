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
    'title'   => esc_html__( 'Contact & Socials', 'optimax' ),
    'id'      => 'socials_section',
    'heading' => '',
    'icon'    => 'el el-twitter',
    'fields'  => [
      [
        'id'       => 'phone',
        'type'     => 'text',
        'title'    => esc_html__( 'Phone', 'optimax' ),
        'default'  => '+ 00 58000 0000',
      ],
      [
        'id'       => 'office_time',
        'type'     => 'text',
        'title'    => esc_html__( 'Office Time', 'optimax' ),
        'default'  => 'Sat- Mon : 09am - 10.00 am',
      ],
      [
        'id'       => 'email',
        'type'     => 'text',
        'title'    => esc_html__( 'Email', 'optimax' ),
        'validate' => 'email',
        'default'  => 'optimax@gmail.com',
      ],
      [
        'id'       => 'social_facebook',
        'type'     => 'text',
        'title'    => esc_html__( 'Facebook', 'optimax' ),
        'default'  => 'https://facebook.com/',
      ],
      [
        'id'       => 'social_twitter',
        'type'     => 'text',
        'title'    => esc_html__( 'Twitter', 'optimax' ),
        'default'  => 'https://twitter.com/',
      ],
      [
        'id'       => 'social_linkedin',
        'type'     => 'text',
        'title'    => esc_html__( 'Linkedin', 'optimax' ),
        'default'  => '',
      ],
      [
        'id'       => 'social_youtube',
        'type'     => 'text',
        'title'    => esc_html__( 'Youtube', 'optimax' ),
        'default'  => 'https://www.youtube.com/',
      ],
      [
        'id'       => 'social_pinterest',
        'type'     => 'text',
        'title'    => esc_html__( 'Pinterest', 'optimax' ),
        'default'  => 'https://www.pinterest.com/',
      ],
      [
        'id'       => 'social_instagram',
        'type'     => 'text',
        'title'    => esc_html__( 'Instagram', 'optimax' ),
        'default'  => 'https://www.instagram.com/',
      ],
      [
        'id'       => 'social_skype',
        'type'     => 'text',
        'title'    => esc_html__( 'Skype', 'optimax' ),
        'default'  => '',
      ],
      [
        'id'       => 'social_rss',
        'type'     => 'text',
        'title'    => esc_html__( 'RSS', 'optimax' ),
        'default'  => '',
      ],
    ]
  ]
);
