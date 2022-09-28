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
    'title'   => esc_html__( 'General', 'optimax' ),
    'id'      => 'general_section',
    'heading' => '',
    'icon'    => 'el el-network',
    'fields'  => [
      
      [
        'id'       => 'breadcrumb',
        'type'     => 'switch',
        'title'    => esc_html__( 'Breadcrumb', 'optimax' ),
        'on'       => esc_html__( 'Enabled', 'optimax' ),
        'off'      => esc_html__( 'Disabled', 'optimax' ),
        'default'  => true,
      ],
      [
        'id'       => 'preloader',
        'type'     => 'switch',
        'title'    => esc_html__( 'Preloader', 'optimax' ),
        'on'       => esc_html__( 'Enabled', 'optimax' ),
        'off'      => esc_html__( 'Disabled', 'optimax' ),
        'default'  => true,
      ],
      [
        'id'       => 'preloader_image',
        'type'     => 'media',
        'title'    => esc_html__( 'Preloader Image', 'optimax' ),
        'subtitle' => esc_html__( 'Please upload your choice of preloader image. Transparent GIF format is recommended', 'optimax' ),
        'default'  => [
          'url'=> Helper::get_img( 'preloader.gif' )
        ],
        'required' => ['preloader', 'equals', true]
      ],
      [
        'id'       => 'back_to_top',
        'type'     => 'switch',
        'title'    => esc_html__( 'Back to Top Arrow', 'optimax' ),
        'on'       => esc_html__( 'Enabled', 'optimax' ),
        'off'      => esc_html__( 'Disabled', 'optimax' ),
        'default'  => true,
      ],

      [
        'id'      => 'content_top_padding',
        'title'   => esc_html__( 'Content Padding Top', 'optimax' ),
        'type'    => 'text',
        'default' => '100px',
      ],
      [
        'id'      =>   'content_bottom_padding',
        'title'   => esc_html__( 'Content Padding Bottom', 'optimax' ),
        'type'    => 'text',
        'default' => '80px',
      ],

      [
        'id'       => 'team_slug',
        'type'     => 'text',
        'title'    => esc_html__( 'Team Slug', 'optimax' ),
        'subtitle' => esc_html__( 'Will be used in URL', 'optimax' ),
        'default'  => 'teams',
      ],
      [
        'id'       => 'team_cat_slug',
        'type'     => 'text',
        'title'    => esc_html__( 'Team Category Slug', 'optimax' ),
        'subtitle' => esc_html__( 'Will be used in URL', 'optimax' ),
        'default'  => 'team-categories',
      ],
      [
        'id'       => 'case_slug',
        'type'     => 'text',
        'title'    => esc_html__( 'Case Study Slug', 'optimax' ),
        'subtitle' => esc_html__( 'Will be used in URL', 'optimax' ),
        'default'  => 'case-studies',
      ],
      [
        'id'       => 'case_tag_slug',
        'type'     => 'text',
        'title'    => esc_html__( 'Case Study Tags Slug', 'optimax' ),
        'subtitle' => esc_html__( 'Will be used in URL', 'optimax' ),
        'default'  => 'case-study-tags',
      ],
      [
        'id'       => 'case_cat_slug',
        'type'     => 'text',
        'title'    => esc_html__( 'Case Study Category Slug', 'optimax' ),
        'subtitle' => esc_html__( 'Will be used in URL', 'optimax' ),
        'default'  => 'case-study-categories',
      ],
      [
        'id'       => 'service_slug',
        'type'     => 'text',
        'title'    => esc_html__( 'Service Slug', 'optimax' ),
        'subtitle' => esc_html__( 'Will be used in URL', 'optimax' ),
        'default'  => 'services',
      ],
      [
        'id'       => 'service_cat_slug',
        'type'     => 'text',
        'title'    => esc_html__( 'Service Category Slug', 'optimax' ),
        'subtitle' => esc_html__( 'Will be used in URL', 'optimax' ),
        'default'  => 'service-categories',
      ],
       [
        'id'       => 'service_archive_title',
        'type'     => 'text',
        'title'    => esc_html__( 'Service Archive Title', 'optimax' ),
        'default'  => 'Services',
      ],
      [
        'id'       => 'case_archive_title',
        'type'     => 'text',
        'title'    => esc_html__( 'Case Study Archive Title', 'optimax' ),
        'default'  => 'Case Studies',
      ],
      [
        'id'       => 'team_archive_title',
        'type'     => 'text',
        'title'    => esc_html__( 'Team Archive Title', 'optimax' ),
        'default'  => 'Teams',
      ],
      [
        'id'       => 'service_page_title',
        'type'     => 'text',
        'title'    => esc_html__( 'Service Page Title', 'optimax' ),
        'default'  => 'Services',
      ],
      [
        'id'       => 'case_page_title',
        'type'     => 'text',
        'title'    => esc_html__( 'Case study Page Title', 'optimax' ),
        'default'  => 'Case Studies',
      ],
      [
        'id'       => 'team_page_title',
        'type'     => 'text',
        'title'    => esc_html__( 'Team Page Title', 'optimax' ),
        'default'  => 'Teams',
      ],
      [
        'id'       => 'no_preview_image',
        'type'     => 'media',
        'title'    => esc_html__( 'Alternative Preview Image', 'optimax' ),
        'subtitle' => esc_html__( 'This image will be used as preview image in some archive pages if no featured image exists', 'optimax' ),
        'default'  => [
          'url'=> Helper::get_img( 'noimage/noimage.jpg' )
        ],
      ],

    ]
  ]
);
