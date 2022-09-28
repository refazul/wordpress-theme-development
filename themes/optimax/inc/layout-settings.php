<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;

class Layouts {

  protected static $instance = null;

  public $prefix;
  public $type;
  public $meta_value;

  public function __construct() {
    $this->prefix  = Constants::$theme_prefix;

    add_action( 'template_redirect', [$this, 'layout_settings']);
  }

  public static function optimax_instance() {
    if ( null == self::$instance ) {
      self::$instance = new self;
    }
    return self::$instance;
  }

  public function layout_settings() {
    // Single Pages
    if( ( is_single() || is_page() ) ) {
      $post_type        = get_post_type();
      $post_id          = get_the_id();
      $this->meta_value = get_post_meta( $post_id, "{$this->prefix}_layout_settings", true );
      switch( $post_type ) {
        case 'page':
        $this->type = 'page';
        break;
        case 'post':
        $this->type = 'single_post';
        break;
        case 'product':
        $this->type = 'product';
        break;
        case $this->prefix . '_team':
        $this->type = 'team_single';
        break;
        case $this->prefix . '_case':
        $this->type = 'case_single';
        break;
        case $this->prefix . '_service':
        $this->type = 'service_single';
        break;
        default:
        $this->type = 'page';
      }

      RDTheme::$layout                   = $this->meta_layout_option( 'layout' );
      RDTheme::$sidebar                  = $this->meta_layout_option( 'sidebar' );
	  	  
      RDTheme::$has_top_bar              = $this->meta_layout_global_option( 'top_bar', true );
      RDTheme::$top_bar_style            = $this->meta_layout_global_option( 'top_bar_style' );
      RDTheme::$header_style             = $this->meta_layout_global_option( 'header_style' );
      RDTheme::$has_banner               = $this->meta_layout_global_option( 'banner', true );
      RDTheme::$has_breadcrumb           = $this->meta_layout_global_option( 'breadcrumb', true );
      RDTheme::$bgtype                   = $this->meta_layout_global_option( 'bgtype' );
      RDTheme::$transparent_header       = $this->meta_layout_global_option( 'transparent_header', true );
      RDTheme::$transparent_top_bar      = $this->meta_layout_global_option( 'transparent_top_bar', true );

      RDTheme::$content_top_padding      = $this->meta_layout_global_option( 'content_top_padding' );
      RDTheme::$content_bottom_padding   = $this->meta_layout_global_option( 'content_bottom_padding' );
      RDTheme::$icon_area_width          = $this->meta_layout_global_option( 'icon_area_width' );

      RDTheme::$menu_button              = $this->meta_layout_global_option( 'menu_button', true );
      RDTheme::$search_icon              = $this->meta_layout_global_option( 'search_icon', true );
      RDTheme::$cart_icon                = $this->meta_layout_global_option( 'cart_icon', true );
      RDTheme::$offcanvas_menu           = $this->meta_layout_global_option( 'offcanvas_menu', true );
      RDTheme::$page_offcanvas_menu      = $this->meta_option( 'page_offcanvas_menu', true );
      RDTheme::$page_merge_menu          = $this->meta_option( 'page_merge_menu', true );
      RDTheme::$header_type              = $this->meta_layout_global_option( 'header_type' );
      RDTheme::$menu_theme               = $this->meta_layout_global_option( 'menu_theme' );
      RDTheme::$footer_cta               = $this->meta_layout_global_option( 'footer_cta', true );
      RDTheme::$footer_cta_style         = $this->meta_layout_global_option( 'footer_cta_style' );

      RDTheme::$bgimg                    = $this->bgimg_option( 'bgimg' );
      RDTheme::$bgcolor                  = $this->meta_layout_global_option( 'bgcolor' );
      RDTheme::$page_menu                = $this->meta_option( 'page_menu' );
	  
    }

    // Blog and Archive
    elseif( is_home() || is_archive() || is_search() || is_404() ) {

      if( is_search() ) {
        $this->type = 'search';
      }
      elseif( is_404() ) {
        $this->type = 'error';
        RDTheme::$options[$this->type . '_layout'] = 'full-width';
      }

      elseif( is_post_type_archive( "{$this->prefix}_team" ) || is_tax( "{$this->prefix}_team_category" ) ) {
        $this->type = 'team_archive';
      }
      elseif( is_post_type_archive( "{$this->prefix}_case" ) || is_tax( "{$this->prefix}_case_category" ) ) {
        $this->type = 'case_archive';
      }
      elseif( is_post_type_archive( "{$this->prefix}_service" ) || is_tax( "{$this->prefix}_service_category" ) ) {
        $this->type = 'service_archive';
      }


      else {
        $this->type = 'blog';
      }

      RDTheme::$layout                   = $this->meta_layout_option( 'layout' );
      RDTheme::$sidebar                  = $this->meta_layout_option( 'sidebar' );
      RDTheme::$has_top_bar              = $this->layout_global_option( 'top_bar', true );
      RDTheme::$top_bar_style            = $this->layout_global_option( 'top_bar_style' );
      RDTheme::$header_style             = $this->layout_global_option( 'header_style' );
      RDTheme::$has_banner               = $this->layout_global_option( 'banner', true );
      RDTheme::$has_breadcrumb           = $this->layout_global_option( 'breadcrumb', true );
      RDTheme::$bgtype                   = $this->layout_global_option( 'bgtype' );
      RDTheme::$bgimg                    = $this->bgimg_option( 'bgimg', false );
      RDTheme::$bgcolor                  = $this->layout_global_option( 'bgcolor' );

      RDTheme::$content_top_padding      = $this->meta_layout_global_option( 'content_top_padding' );
      RDTheme::$content_bottom_padding   = $this->meta_layout_global_option( 'content_bottom_padding' );
      RDTheme::$icon_area_width          = $this->meta_layout_global_option( 'icon_area_width' );

      RDTheme::$menu_button              = $this->meta_layout_global_option( 'menu_button', true );
      RDTheme::$search_icon              = $this->meta_layout_global_option( 'search_icon', true );
      RDTheme::$cart_icon                = $this->meta_layout_global_option( 'cart_icon', true );
      RDTheme::$offcanvas_menu           = $this->meta_layout_global_option( 'offcanvas_menu', true );
      RDTheme::$page_offcanvas_menu      = $this->meta_option( 'page_offcanvas_menu', true );
      RDTheme::$page_merge_menu          = $this->meta_option( 'page_merge_menu', true );
      RDTheme::$header_type              = $this->meta_layout_global_option( 'header_type' );
      RDTheme::$menu_theme               = $this->meta_layout_global_option( 'menu_theme' );
      RDTheme::$footer_cta               = $this->meta_layout_global_option( 'footer_cta', true );
      RDTheme::$footer_cta_style         = $this->meta_layout_global_option( 'footer_cta_style' );


      RDTheme::$transparent_header       = $this->layout_global_option( 'transparent_header', true );
      RDTheme::$transparent_top_bar      = $this->layout_global_option( 'transparent_top_bar', true );
    }

    RDTheme::$bgimg = $this->bgimg_option( 'bgimg' );
    RDTheme::$hamburger_image = $this->single_page_meta_image( 'hamburger_image' );
    RDTheme::$logo_type = $this->single_page_meta_value( 'logo_type' );

    RDTheme::$topbar_color = $this->meta_global_option('topbar_color');
    RDTheme::$topbar_accent_color = $this->meta_global_option('topbar_accent_color');
    RDTheme::$topbar_background_color = $this->meta_global_option('topbar_background_color');
    
  }

  public function single_page_meta_image($key)
  {
    $meta = !empty( $this->meta_value[$key] ) ? $this->meta_value[$key] : '';
    $img = '';
    if ( $meta ) {
      $src = wp_get_attachment_image_src( $meta, 'full', true );
      $img = $src[0];
    }
    return $img;
  }
  public function single_page_meta_value($key)
  {
    $meta   = !empty( $this->meta_value[$key] ) ? $this->meta_value[$key] : 'default';
    return $meta;
  }
  public function meta_global_option( $key )
  {
    $meta   = !empty( $this->meta_value[$key] ) ? $this->meta_value[$key] : '';
    if ($meta) {
      return $meta;
    }
    return RDTheme::$options[$key];
  }

  private function bgimg_option( $key, $is_single = true ){
    $layout_key = $this->type.'_'.$key;

    if ( $is_single ) {
      $meta = !empty( $this->meta_value[$key] ) ? $this->meta_value[$key] : '';
    }
    else {
      $meta = '';
    }

    $op_layout  = RDTheme::$options[$layout_key];
    $op_global  = RDTheme::$options[$key];

    if ( $meta ) {
      $src = wp_get_attachment_image_src( $meta, 'full', true );
      $img = $src[0];
    }
    elseif ( !empty( $op_layout['url'] ) ) {
      $img = $op_layout['url'];
    }
    elseif ( !empty( $op_global['url'] ) ) {
      $img = $op_global['url'];
    }
    else {
      $img = Helper::get_img( 'essential/breadcumb.jpg' );
    }

    return $img;
  }

  // Single
  private function meta_layout_global_option( $key, $is_bool = false  ) {
    $layout_key = $this->type.'_'.$key;

    $meta       = !empty( $this->meta_value[$key] ) ? $this->meta_value[$key] : 'default';
    $op_layout  = RDTheme::$options[$layout_key] ? RDTheme::$options[$layout_key] : 'default';
    $op_global  = RDTheme::$options[$key];

    if ( $meta != 'default' ) {
      $result = $meta;
    }
    elseif ( $op_layout != 'default' ) {
      $result = $op_layout;
    }
    else {
      $result = $op_global;
    }

    if ( $is_bool ) {
      $result = ( $result == 1 || $result == 'on' ) ? true : false;
    }

    return $result;
  }
  // only meta options
  private function meta_option( $key ) {
    $result       = !empty( $this->meta_value[$key] ) ? $this->meta_value[$key] : 'default';
    return $result;
  }

  // Single
  private function meta_layout_option( $key, $is_bool = false) {
    $layout_key = $this->type.'_'.$key;

    $meta       = !empty( $this->meta_value[$key] ) ? $this->meta_value[$key] : 'default';
    $op_layout  = RDTheme::$options[$layout_key];

    if ( $meta != 'default' ) {
      $result = $meta;
    }
    else {
      $result = $op_layout;
    }

    if ( $is_bool ) {
      $result = ( $result == 1 || $result == 'on' ) ? true : false;
    }

    return $result;
  }

  // Archive
  private function layout_global_option( $key, $is_bool = false  ) {
    $layout_key = $this->type.'_'.$key;

    $op_layout  = RDTheme::$options[$layout_key] ? RDTheme::$options[$layout_key] : 'default';
    $op_global  = RDTheme::$options[$key];

    if ( $op_layout != 'default' ) {
      $result = $op_layout;
    }
    else {
      $result = $op_global;
    }

    if ( $is_bool ) {
      $result = ( $result == 1 || $result == 'on' ) ? true : false;
    }

    return $result;
  }

  // Archive
  private function layout_option( $key  ) {
    $layout_key = $this->type.'_'.$key;
    $op_layout  = RDTheme::$options[$layout_key];

    return $op_layout;
  }
}

Layouts::optimax_instance();
