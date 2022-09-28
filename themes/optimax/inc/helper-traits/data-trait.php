<?php

namespace radiustheme\Optimax;

trait DataTrait {
  public static function team_socials_post_meta(){
    $team_socials = [
      'facebook' => [
        'label' => esc_html__( 'Facebook', 'optimax' ),
        'type'  => 'text',
      ],
      'twitter' => [
        'label' => esc_html__( 'Twitter', 'optimax' ),
        'type'  => 'text',
      ],
      'linkedin' => [
        'label' => esc_html__( 'Linkedin', 'optimax' ),
        'type'  => 'text',
      ],
      'youtube' => [
        'label' => esc_html__( 'Youtube', 'optimax' ),
        'type'  => 'text',
      ],
      'pinterest' => [
        'label' => esc_html__( 'Pinterest', 'optimax' ),
        'type'  => 'text',
      ],
      'instagram' => [
        'label' => esc_html__( 'Instagram', 'optimax' ),
        'type'  => 'text',
      ],
      'github' => [
        'label' => esc_html__( 'Github', 'optimax' ),
        'type'  => 'text',
      ],
      'stackoverflow' => [
        'label' => esc_html__( 'Stackoverflow', 'optimax' ),
        'type'  => 'text',
      ],
    ];

    return apply_filters( 'team_socials', $team_socials );
  }
  public static function team_social_infos() {
    return [
      [
        'key' => 'facebook',
        'icon' => 'fab fa-facebook-f',
      ],
      [
        'key' => 'twitter',
        'icon' => 'fab fa-twitter',
      ],
      [
        'key' => 'linkedin',
        'icon' => 'fab fa-linkedin-in',
      ],
      [
        'key' => 'instagram',
        'icon' => 'fab fa-instagram',
      ],
      [
        'key' => 'youtube',
        'icon' => 'fab fa-youtube',
      ],
      [
        'key' => 'github',
        'icon' => 'fab fa-github',
      ],
      [
        'key' => 'pinterest',
        'icon' => 'fab fa-pinterest-p',
      ],
      [
        'key' => 'stackoverflow',
        'icon' => 'fab fa-stack-overflow',
      ],
    ];
  }

}

