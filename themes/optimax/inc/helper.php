<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;

use \WP_Query;
use radiustheme\Optimax\RDTheme;

class Helper {
  use IconTrait;
  use ImageTrait;
  use ResourceLoadTrait;
  use LayoutTrait;
  use CustomQueryTrait;
  use UtilityTrait;
  use Elementor_Helper_Trait;
  use DataTrait;
  use MenuTrait;
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

  public static function get_img( $img ){
    $img = get_stylesheet_directory_uri() . '/assets/img/' . $img;
    return $img;
  }

  public static function comments_callback( $comment, $args, $depth ){
    $args2 = get_defined_vars();
    self::get_template_part( 'template-parts/comments-callback', $args2 );
  }
  public static function the_breadcrumb() {
    if ( function_exists( 'bcn_display') ) {
      bcn_display();
    } else {
      $prefix = Constants::$theme_prefix;
      self::requires( 'breadcrumbs.php' );
      $args = [
        'show_browse'   => false,
        'post_taxonomy' => [
          "{$prefix}_team"      => "{$prefix}_team_category",
          "{$prefix}_case"      => "{$prefix}_case_category",
          "{$prefix}_case"      => "{$prefix}_case_tag",
          "{$prefix}_testimony" => "{$prefix}_testimony_category",
          "{$prefix}_service"   => "{$prefix}_service_category",
        ]
      ];
      $breadcrumb = new RDTheme_Breadcrumb( $args );
      return $breadcrumb->trail();
    }
  }

  public static function the_title() {
    if ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) {
      $title = esc_html__( 'Products', 'optimax' );
    } 
    elseif ( is_404() ) {
      $title = esc_html__( 'Page not Found', 'optimax' );
    }
    elseif ( is_search() ) {
      $title = esc_html__( 'Search Results for : ', 'optimax' ) . get_search_query();
    }
    elseif ( is_home() ) {
      if ( get_option( 'page_for_posts' ) ) {
        $title = get_the_title( get_option( 'page_for_posts' ) );
      }
      else {
        $title = apply_filters( "rdtheme_blog_title", esc_html__( 'All Posts', 'optimax' ) );
      }
    }
    elseif ( is_archive() ) {
      $title = get_the_archive_title();
    }
    elseif ( is_page() ) {
      $title = get_the_title();
    }
    else{
      $title = get_the_title();
    }

    echo wp_kses( $title , 'alltext_allow' );
  }

  public static function filter_content( $content ){
    // wp filters
    $content = wptexturize( $content );
    $content = convert_smilies( $content );
    $content = convert_chars( $content );
    $content = wpautop( $content );
    $content = shortcode_unautop( $content );

    // remove shortcodes
    $pattern= '/\[(.+?)\]/';
    $content = preg_replace( $pattern,'',$content );

    // remove tags
    $content = strip_tags( $content );

    return $content;
  }

  public static function get_current_post_content( $post = false ) {
    if ( !$post ) {
      $post = get_post();
    }
    $content = has_excerpt( $post->ID ) ? $post->post_excerpt : $post->post_content;
    $content = self::filter_content( $content );
    return $content;
  }

  public static function socials(){
    $rdtheme_socials = [
      'social_facebook' => [
        'icon' => 'fab fa-facebook-f',
        'url'  => RDTheme::$options['social_facebook'],
      ],
      'social_twitter'   => [
        'icon' => 'fab fa-twitter',
        'url'  => RDTheme::$options['social_twitter'],
      ],
      'social_linkedin'  => [
        'icon' => 'fa fa-linkedin',
        'url'  => RDTheme::$options['social_linkedin'],
      ],
      'social_youtube'   => [
        'icon' => 'fab fa-youtube',
        'url'  => RDTheme::$options['social_youtube'],
      ],
      'social_pinterest' => [
        'icon' => 'fab fa-pinterest',
        'url'  => RDTheme::$options['social_pinterest'],
      ],
      'social_instagram' => [
        'icon' => 'fab fa-instagram',
        'url'  => RDTheme::$options['social_instagram'],
      ],
      'social_skype'     => [
        'icon' => 'fab fa-skype',
        'url'  => RDTheme::$options['social_skype'],
      ],
      'social_rss'       => [
        'icon' => 'fas fa-rss',
        'url'  => RDTheme::$options['social_rss'],
      ],
    ];
    return array_filter( $rdtheme_socials, [__CLASS__ , 'filter_social']);
  }

  public static function filter_social( $args ){
    return ( $args['url'] != '' );
  }

  public static function top_bar_contacts1()
  {
    $top_bar_contacts_for_common_layout = [
      'phone' => [
        'icon'  => 'fas fa-phone-alt',
        'text'  => RDTheme::$options['phone'],
      ],
      'email' => [
        'icon'  => 'fas fa-envelope',
        'text'  => RDTheme::$options['email'],
      ],
    ];
    return array_filter( $top_bar_contacts_for_common_layout, [__CLASS__ , 'filter_top_bar_contacts']);
  }

  public static function filter_top_bar_contacts($args)
  {
    return ( $args['text'] != '' );
  }

  /**
   * main topbar args query
   */
  public static function nav_menu_args(){
    $pagemenu = false;
    if ( ( is_single() || is_page() ) ) {
      $menuid = RDTheme::$page_menu;
      if ( !empty( $menuid ) && $menuid != 'default' ) {
        $pagemenu = $menuid;
      }
    }
    $common_args = [
      'container' => 'nav',
     ];
    if ( $pagemenu ) {
      $nav_menu_args = ['menu' => $pagemenu];
    }
    else {
      $nav_menu_args = ['theme_location' => 'primary'];
    }
    $nav_menu_args = array_merge($nav_menu_args, $common_args);
    return $nav_menu_args;
  }

  public static function custom_sidebar_fields() {
    $prefix = Constants::$theme_prefix;
    $sidebar_fields = [];

    $sidebar_fields['sidebar'] = esc_html__( 'Sidebar', 'optimax' );

    $sidebars = get_option( "{$prefix}_custom_sidebars", []);
    if ( $sidebars ) {
      foreach ( $sidebars as $sidebar ) {
        $sidebar_fields[$sidebar['id']] = $sidebar['name'];
      }
    }

    return $sidebar_fields;
  }

  public static function optimax_post_date($date_string)
  {
    $time = strtotime( $date_string );
     return date( 'F j, Y', $time );
  }

  public static function generate_excerpt($post, $length = 55, $dot = false)
  {
    if (has_excerpt($post)) {
      $final_content =  wp_trim_words( get_the_excerpt($post), $length, '');
    } else {
      $post = get_post($post);
      $content = wp_strip_all_tags($post->post_content);
      $final_content = wp_trim_words( $content, $length, '' );
    }


    if ($dot) {
      $final_content = "$final_content $dot";
    } 
    return $final_content;
  }

  public static function pagination() {
      
      if( is_singular() )
        return;

      global $wp_query;

      /** Stop execution if there's only 1 page */
      if( $wp_query->max_num_pages <= 1 )
        return;
      
      $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
      $max   = intval( $wp_query->max_num_pages );

      /** Add current page to the array */
      if ( $paged >= 1 )
        $links[] = $paged;

      /** Add the pages around the current page to the array */
      if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
      }

      if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
      } ?>
      <div class="pagination-layout1"><?php get_template_part( 'template-parts/pagination' ); ?></div>
   <?php  }

}
