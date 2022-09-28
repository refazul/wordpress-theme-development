<?php

namespace radiustheme\Optimax;

trait Elementor_Helper_Trait {


  /**
   * @description  typography default field for elementor addon
   * @param  [array]$args like $default inside function
   * @return [array]$typography 
   */
  static function fields_options_elementor( $args ) {
    $default = [
      'font_size'        => '4',
      'font_weight'      => '500',
      'line_height'      => '4.8',
      'font_size_unit'   => 'rem',
      'line_height_unit' => 'rem',
    ];

    $final_args = wp_parse_args( $args, $default );

    return [
      'font_size' => [
        'default' => [
          'unit' => $final_args['font_size_unit'],
          'size' => $final_args['font_size'],
        ],
      ],
      'font_weight' => [
        'default' => $final_args['font_weight'],
      ],
      'line_height' => [
        'default' => [
          'unit' => $final_args['line_height_unit'],
          'size' => $final_args['line_height'],
        ],
      ],
    ];
  }
  static function generate_elementor_anchor_attributes($anchor, $classes = '', $include_hrf = true) {
    if ( ! empty( $anchor['url'] ) ) {
      $class_attribute = '';
      if ( $classes ) {
        $class_attribute = "class='{$classes}'";
      }

      $target_attribute = ""; 
      if ( $anchor['is_external'] ) {
        $target_attribute = 'target="_blank"';
      }

      $rel_attribute = "";
      if ( $anchor['nofollow'] ) {
        $rel_attribute = 'rel="nofollow"';
      }
      $href_attributes = "";
      if ($include_hrf) {
        $anchor_url = $anchor['url'];
        $href_attributes = "href='{$anchor_url}'";
      }

      $all_attributes = "$class_attribute $target_attribute $rel_attribute $href_attributes";
      return $all_attributes;
    }
    return null;
  }

  static function generate_elementor_anchor($anchor, $anchor_text="Read More", $classes='') {
    if ( $all_attributes = self::generate_elementor_anchor_attributes($anchor, $classes) ) {
      $a   = sprintf( '<%1$s %2$s>%3$s</%1$s>', 'a', $all_attributes, $anchor_text );
      return $a;
    }
    return null;
  }


}

