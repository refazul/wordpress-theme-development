<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;

trait ResourceLoadTrait {
  public static function requires( $filename, $dir = false ){
    if ( $dir) {
      $child_file = get_stylesheet_directory() . '/' . $dir . '/' . $filename;

      if ( file_exists( $child_file ) ) {
        $file = $child_file;
      }
      else {
        $file = get_template_directory() . '/' . $dir . '/' . $filename;
      }
    }
    else {
      $child_file = get_stylesheet_directory() . '/inc/' . $filename;

      if ( file_exists( $child_file ) ) {
        $file = $child_file;
      }
      else {
        $file = Constants::$theme_inc_dir . $filename;
      }
    }
    require_once $file;
  }
  public static function get_asset_file($file) {
    return get_template_directory_uri() . '/assets/' . $file;
  }

  public static function maybe_rtl_css( $filename ){
    if ( is_rtl() ) {
       return get_template_directory_uri() . '/assets/rtl-generated-css/' . $filename . '.css';
    }
    else {
      return get_template_directory_uri() . '/assets/css/' . $filename . '.css';
    }
  }

  public static function get_file( $path ){
    $file = get_stylesheet_directory_uri() . $path;
    if ( !file_exists( $file ) ) {
      $file = get_template_directory_uri() . $path;
    }
    return $file;
  }

  public static function get_img( $filename ){
    $path = '/assets/img/' . $filename;
    return self::get_file( $path );
  }

  public static function get_css( $filename ){
    $path = '/assets/css/' . $filename . '.css';
    return self::get_file( $path );
  }

  public static function get_js( $filename ){
    $path = '/assets/js/' . $filename . '.js';
    return self::get_file( $path );
  }

  public static function get_template_part( $template, $args = []){
    extract( $args );
    $template = '/' . $template . '.php';

    if ( file_exists( get_stylesheet_directory() . $template ) ) {
      $file = get_stylesheet_directory() . $template;
    }
    else {
      $file = get_template_directory() . $template;
    }

    require $file;
  }

}
