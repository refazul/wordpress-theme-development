<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;

trait MenuTrait {

  /**
   * generate arguments for wprt_nav_menu_2_tree
   * @return array  args for wprt_nav_menu_2_tree
   */
  static function main_menu_args ( $args = [] ) {
    // early return
    $default = [
      'container'       => 'nav',
      'container_class' => 'template-main-menu',
      'theme_location'  => 'primary',      
    ];
    $args = wp_parse_args($args, $default);
    $menu_id = RDTheme::$page_menu;
    if ( !empty( $menu_id ) && $menu_id != 'default' ) {
      unset( $args['theme_location'] );
      $args['menu'] = $menu_id;
    }
    return $args;
  }

  /**
   * generate arguments for wprt_nav_menu_2_tree
   * @param  string $location of the offcanvasmenu
   * @return array  args for wprt_nav_menu_2_tree
   */
  static function offcanvas_menu_args ( $args = [] )
  {
    // early return
    $default = [
      'container'       => 'div',
      'container_class' => 'offcanvas-menu',
      'theme_location'  => 'offcanvas',      
    ];
    $args = wp_parse_args($args, $default);
    $menu_id = RDTheme::$page_offcanvas_menu;
    if ( !empty( $menu_id ) && $menu_id != 'default' ) {
      unset( $args['theme_location'] );
      $args['menu'] = $menu_id;
    } 
    return $args;
  }
  static function merge_menu_args ( $args = [] )
  {
    // early return
    $default = [
      'container'       => 'div',
      'container_class' => 'offcanvas-menu',
      'theme_location'  => 'offcanvas',
    ];
    $args = wp_parse_args($args, $default);
    $menu_id = RDTheme::$page_merge_menu;
    if ( !empty( $menu_id ) && $menu_id != 'default' ) {
      unset( $args['theme_location'] );
      $args['menu'] = $menu_id;
    } 
    return $args;
  }
}
