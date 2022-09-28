<?php

namespace radiustheme\Optimax;

trait UtilityTrait {
  static function hex2rgb($hex)
  {
    $hex = str_replace("#", "", $hex);
    if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
    } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
    }
    $rgb = "$r, $g, $b";
    return $rgb;
  }
  static function taxonomy_first_term($post_id, $taxonomy='category')
  {
    $terms       =  get_the_terms( $post_id, $taxonomy);
    if ( ! $terms || is_wp_error( $terms ) ) {
        $terms = array();
    }
    if ($terms) {
      $first_term = array_shift($terms);
      $term_name  = esc_html( $first_term->name );
      $term_url   = get_term_link( $first_term, $taxonomy );
      $term_url  = esc_attr( $term_url );
      $term_html      = sprintf( '<%1$s href="%2$s">%3$s</%1$s>', 'a', $term_url, $term_name );
      return $term_html;
    }
  }

  // optimax function 
  static function rt_post_first_category($post_id)
  {
    $categories       =  get_the_category( $post_id );
    if ($categories) {
      $first_category = array_shift($categories);
      $category_name  = $first_category->cat_name;
      $category_url   = get_category_link($first_category);
      ?>
      <a href="<?php echo esc_url( $category_url ); ?>"><?php echo esc_html( $category_name ); ?></a>
      <?php
    }
  }
  static function generate_array_iterator_postfix($array, $index, $postfix = ', ')
  {
    $length = count($array);
    if ($length) {
      $last_index = $length - 1;
      return $index < $last_index ? $postfix : '';
    }
  }

  static function get_attachment_alt( $attachment_ID )
  {
    // Get ALT
    $thumb_alt = get_post_meta( $attachment_ID, '_wp_attachment_image_alt', true );
    
    // No ALT supplied get attachment info
    if ( empty( $thumb_alt ) ) {
      $attachment = get_post( $attachment_ID );
    }
    
    // Use caption if no ALT supplied
    if ( empty( $thumb_alt ) ) {
      $thumb_alt = $attachment->post_excerpt;
    }
    
    // Use title if no caption supplied either
    if ( empty( $thumb_alt ) ) {
      $thumb_alt = $attachment->post_title;
    }
   
    // Return ALT
    return esc_attr( trim( strip_tags( $thumb_alt ) ) );
  }

  static function filter_filled_team_socials ( $socials )
  {
    if ( ! is_array( $socials ) ) {
      return [];
    }
    $filtered = array_filter($socials, function ( $single_social ) {
      return (bool) $single_social;
    });
    return $filtered;
  }
  static function is_under_construction_mode () {
    if ( ! class_exists( 'ReduxFramework' ) ) {
      return false;
    }
    $mode   = RDTheme::$options['under_construction_mode_enable'] ;
    if ( is_user_logged_in() || 'off' === $mode ) {
      return false;
    }
    return true;
  }
  static function generate_random_string($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }


}

