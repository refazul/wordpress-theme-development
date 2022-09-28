<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;

class General_Setup {

	public function __construct() {
		add_action( 'after_setup_theme',        [ $this, 'theme_setup' ] );
		add_filter( 'body_class',               [ $this, 'optimax_body_classes' ] );
		add_filter( 'comment_form_fields',      [ $this, 'rt_move_comment_form_below' ] );
		add_action( 'widgets_init',             [ $this, 'register_sidebars' ] );
		add_action( 'wp_head',                  [ $this, 'noscript_hide_preloader' ], 1 );
		add_filter( 'get_search_form',          [ $this, 'search_form' ] );
		add_filter( 'excerpt_more',             [ $this, 'excerpt_more' ] );
		add_filter( 'wp_kses_allowed_html', 	[ $this, 'optimax_kses_allowed_html' ], 10, 2);
		add_action('admin_head',                [ $this, 'fix_svg_thumb_display' ] );
		add_action( 'pre_get_posts',            [ $this, 'posts_per_page_for_custom_post_type' ], 999);
		add_action('get_header',                [ $this, 'remove_admin_login_header' ] );
		add_action( 'wp_head',                  [ $this, 'pingback_url_for_singularly_identifiable' ] );
		add_action( 'template_include',         [ $this, 'under_construction_mode_enable'], 999 );
		remove_action( 'wp_head',               'adjacent_posts_rel_link_wp_head', 10, 0);

		// following 3 field for changing title in archive page
		add_filter( 'get_the_archive_title',   array( $this, 'change_archive_title'), 11 );
		add_filter( 'document_title_parts',    array( $this, 'change_page_title'), 11 );
		add_filter( 'rt_framework_post_types', array( $this, 'change_post_type_title'), 11 );
		add_filter('elementor/widgets/wordpress/widget_args', array( $this, 'theme_elementor_widgets_wordpress_widget_args_cb' ));

	}
	
	/*Wordpress widget header h3 tag for Elementor */
	public function theme_elementor_widgets_wordpress_widget_args_cb($widget_args) {

		$widget_args['before_title'] = '<h3>';
		$widget_args['after_title'] = '</h3>';

		return $widget_args;
	}
	
	public function change_archive_title($title) {
		if ( is_post_type_archive( 'optimax_case' ) ) {
		  $title = RDTheme::$options['case_archive_title'];
		} else if ( is_post_type_archive( 'optimax_service' )   ) {
		  $title = RDTheme::$options['service_archive_title'];
		} else if ( is_post_type_archive( 'optimax_team' )   ) {
		  $title = RDTheme::$options['team_archive_title'];
		} 
		return $title;
	}

  public function change_page_title( $titles ) {
    $title = $titles['title'];
    if ( is_post_type_archive( 'optimax_case' ) ) {
      $title = RDTheme::$options['case_page_title'];
    } else if ( is_post_type_archive( 'optimax_service' )   ) {
      $title = RDTheme::$options['service_page_title'];
    } else if ( is_post_type_archive( 'optimax_team' )   ) {
      $title = RDTheme::$options['team_page_title'];
    } 
    $titles['title']  = $title;
    return $titles;
  }
  public function change_post_type_title($post_types_array)
  {
    if ( isset( $post_types_array['optimax_case'] ) ) {
      $post_types_array['optimax_case']['labels']['name']     = RDTheme::$options['case_page_title'];
      $post_types_array['optimax_service']['labels']['name']  = RDTheme::$options['service_page_title'];
      $post_types_array['optimax_team']['labels']['name']     = RDTheme::$options['team_page_title'];
    }
    return $post_types_array;
  }

  function under_construction_mode_enable( $template ) {
    $new_template = locate_template( array( 'under-construction.php' ) );
    if ( Helper::is_under_construction_mode()  && '' != $new_template ) {
      return $new_template;
    } else {
      return $template;
    }
  }

  public function posts_per_page_for_custom_post_type( $query )
  {
    $prefix = Constants::$theme_prefix;
    $post_types = ['case', 'service', 'team'];
    foreach ($post_types as $post_type) {
      $post_type_full           = "{$prefix}_{$post_type}";
      $taxonomy                 = "{$prefix}_{$post_type}_category";
      $redux_posts_per_page_id  = "{$post_type}_archive_number";
      $redux_order_by_id        = "{$post_type}_archive_orderby";
      $archive_or_tax           =  ( is_post_type_archive( $post_type_full ) || is_tax( $taxonomy ) );

      if ( ! is_admin() && $archive_or_tax &  $query->is_main_query() ) {
        $query->set( 'posts_per_page', RDTheme::$options[ $redux_posts_per_page_id ]);;
        $query->set( 'orderby', RDTheme::$options[ $redux_order_by_id ]);;
      }
    }
  }

  public function fix_svg_thumb_display() {
    echo '
    <style>
      td.media-icon img[src$=".svg"], img[src$=".svg"].attachment-post-thumbnail {
        width: 100% !important;
        height: auto !important;
      }
    </style>
    ';
  }

	public function theme_setup() {
		// Theme supports
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'html5', ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption']);
		/*Gutenberg Support*/
		add_theme_support( 'align-wide' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'wp-block-styles' );		
		
		// Gutenberg Color		
        add_theme_support('align-wide');
        add_theme_support('editor-color-palette', array(
            array(
                'name'  => esc_html__('Primary Color', 'optimax'),
                'slug'  => 'opt-primary-color',
                'color' => '#4a3bca',
            ),
            array(
                'name'  => esc_html__('Secondary Color', 'optimax'),
                'slug'  => 'opt-secondary-color',
                'color' => '#2b1e68',
            ),
            array(
                'name'  => esc_html__('Accent Color', 'optimax'),
                'slug'  => 'opt-accent-color',
                'color' => '#ff7617',
            ),
            array(
                'name'  => esc_html__('Text Color Dark', 'optimax'),
                'slug'  => 'opt-text-dark-color',
                'color' => '#111111',
            ),
            array(
                'name'  => esc_html__('Text color light', 'optimax'),
                'slug'  => 'opt-text-light-color',
                'color' => '#ffffff',
            ),
            array(
                'name'  => esc_html__('Gradient Dark Color(Orange)', 'optimax'),
                'slug'  => 'opt-gradient-color',
                'color' => '#ff5917',
            ),
            array(
                'name'  => esc_html__('Gradient Light Color(Orange)', 'optimax'),
                'slug'  => 'opt-gradient-dark-color',
                'color' => '#ff7616',
            ),
            array(
                'name'  => esc_html__('Gradient 2 Dark Color(Blue)', 'optimax'),
                'slug'  => 'opt-gradient-2-color',
                'color' => '#483bc9',
            ),
            array(
                'name'  => esc_html__('Gradient 2 Light Color(Blue)', 'optimax'),
                'slug'  => 'opt-gradient-2-dark-color',
                'color' => '#7458db',
            ),
            array(
                'name'  => esc_html__('Rose Bud', 'optimax'),
                'slug'  => 'rose-bud',
                'color' => '#faa8ac',
            ),
            array(
                'name'  => esc_html__('very light gray', 'optimax'),
                'slug'  => 'very-light-gray',
                'color' => '#eee',
            ),
            array(
                'name'  => esc_html__('very dark gray', 'optimax'),
                'slug'  => 'very-dark-gray',
                'color' => '#444',
            ),
        ));		
		add_theme_support( 'editor-gradient-presets', array(
			array(
				'name'     => esc_html__( 'Orange dark light color', 'optimax' ),
				'gradient' => 'linear-gradient(135deg, rgba(255, 89, 23, 1) 0%, rgba(255, 118, 22, 1) 100%)',
				'slug'     => 'opt-orange-dark-light',
			),
			array(
                'name'  => esc_html__('Blue dark light color', 'optimax'),
				'gradient' => 'linear-gradient(135deg, rgba(72, 59, 201, 1) 0%, rgba(116, 88, 219, 1) 100%)',
				'slug'     => 'opt-blue-dark-light',
            ),
		));		
        add_theme_support('editor-font-sizes', array(
            array(
                'name' => esc_html__('Small', 'optimax'),
                'size' => 12,
                'slug' => 'small'
            ),
            array(
                'name' => esc_html__('Normal', 'optimax'),
                'size' => 16,
                'slug' => 'normal'
            ),
            array(
                'name' => esc_html__('Large', 'optimax'),
                'size' => 36,
                'slug' => 'large'
            ),
            array(
                'name' => esc_html__('Huge', 'optimax'),
                'size' => 50,
                'slug' => 'huge'
            )
        ));		

		add_image_size( "optimax-size1", 1200, 600, true ); // case, service, blog single page
		add_image_size( "optimax-size2", 490,  340, ['center', 'top']); // Blog 1, case 3, Service 1
		add_image_size( "optimax-size3", 500,  400, true ); // Gallery, case 1-2, case featured
		add_image_size( "optimax-size4", 320,  320, ['center', 'top']); // for making 50% round image
		add_image_size( "optimax-size5", 450,  600, ['center', 'top']); //team member portrait
		add_image_size( "optimax-size6", 230,  350, true ); // Portrait list/single image
		add_image_size( "optimax-size7", 320,  440, true ); // Portrait single image
		add_image_size( "optimax-size8", 600,  400, true ); // Gallery, case 1-2, case featured
		add_image_size( "optimax-size9", 900,  600, array( 'center', 'top' ) ); //team member portrait
		add_image_size( "optimax-size10", 600,  600, true ); //team member portrait

		// Register menus
		register_nav_menus( [
		'primary'   => esc_html__( 'Primary', 'optimax' ),
		'offcanvas' => esc_html__( 'Offcanvas Menu', 'optimax' ),
		'mergemenu' => esc_html__( 'Mobile Menu Or Merge Menu( primary + Offcanvas menu)', 'optimax' ),
    ]);
	}

    public function optimax_body_classes( $classes ) {

    $classes[]       = 'non-sticky';
    $classes[]       = 'header-style-'. RDTheme::$header_style;

    if ( RDTheme::$has_top_bar == 1 || RDTheme::$has_top_bar == 'on' ){
      $classes[]     = 'has-topbar topbar-style-'. RDTheme::$top_bar_style;
    }


    if ( RDTheme::$transparent_header == 1 || RDTheme::$transparent_header == 'on' ){
      $classes[]     = 'transparent-header';

      // only require when transparent header is active
      if ( RDTheme::$transparent_top_bar == 1 || RDTheme::$transparent_top_bar == 'on' ){
        $classes[]   = 'transparent-top-bar';
      }
    }

    if ( RDTheme::$menu_theme == 'dark_theme' ){
      $classes[]     = 'dark-theme';
    } else {
      $classes[]     = 'light-theme';
    }

    if (RDTheme::$options['sticky_menu'] == 1) {
      $classes[]     = 'sticky-header';
    }
	

    // Header menu icon 
    $has_header_icon = RDTheme::$search_icon || RDTheme::$cart_icon || RDTheme::$offcanvas_menu ;
    if ( $has_header_icon ) {
      $classes[]     = 'has-header-icon';
    }

        // Sidebar
    if ( RDTheme::$layout == 'left-sidebar' ) {
      $classes[]     = 'has-sidebar left-sidebar';
    }
    elseif ( RDTheme::$layout == 'right-sidebar' ) {
      $classes[]     = 'has-sidebar right-sidebar';
    }
    else {
      $classes[]     = 'no-sidebar';
    }
    
     // Shop layout view
    if ( function_exists( 'is_shop' ) && is_shop() ) {
      if( isset( $_COOKIE["shopview"] ) && $_COOKIE["shopview"] == 'list' ) {
        $classes[]   = 'product-list-view';
      } else {
        $classes[]   = 'product-grid-view';
      }
    }

    return $classes;
  }

	public function register_sidebars() {

		$footer_widget_titles = [
			'1' => esc_html__( 'Footer 1', 'optimax' ),
			'2' => esc_html__( 'Footer 2', 'optimax' ),
			'3' => esc_html__( 'Footer 3', 'optimax' ),
			'4' => esc_html__( 'Footer 4', 'optimax' ),
		];

    register_sidebar( [
      'name'          => esc_html__('General Sidebar', 'optimax'),
      'id'            => 'sidebar',
      'before_widget' => '<div id="%1$s" class="widget %2$s sidebar-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="title title-bar-xl1">',
      'after_title'   => '</h3>',
    ]);
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Top 1', 'optimax' ),
		'id'            => 'footer_top1',
		'before_widget' => '<div id="%1$s" class="widget %2$s main-footer-box">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="title title-bar-lg1">',
		'after_title'   => '</h3>',
		) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Top 2', 'optimax' ),
		'id'            => 'footer_top2',
		'before_widget' => '<div id="%1$s" class="widget %2$s custom-widget main-footer-box">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
		) );

	for ( $i = 1; $i <= RDTheme::$options['footer_column'] ; $i++ ) {
		register_sidebar( [
			'name'          => $footer_widget_titles[$i],
			'id'            => 'footer-'. $i,
			'before_widget' => '<div id="%1$s" class="widget %2$s main-footer-box">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="title title-bar-lg1">',
			'after_title'   => '</h3>',
		]);
	}

	register_sidebar( array(
		'name'          => esc_html__( 'Case Sidebar', 'optimax' ),
		'id'            => 'sidebar-case',
		'before_widget' => '<div id="%1$s" class="widget %2$s custom-widget ">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
		) );
	}

	public function noscript_hide_preloader() {
		// Hide preloader if js is disabled
		echo '<noscript><style>#preloader{display:none;}</style></noscript>';
	}

	public function scroll_to_top_html() {
		// Back-to-top link
		if ( RDTheme::$options['back_to_top'] ){
			echo '<a href="#" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>';
		}
	}

	public function search_form() {
    $output = '
        <div class="widget-search-box">
          <form role="search" method="get" class="search-form" action="' . esc_url( home_url( '/' ) ) . '">
            <div class="input-group stylish-input-group">
                <input type="text" class="form-control" name="s" placeholder="' . esc_attr__( 'Search here ...', 'optimax' ) . '" value="' . get_search_query() . '">
                <span class="input-group-addon">
                    <button type="submit">
                        <span class="flaticon-magnifying-glass" aria-hidden="true"></span>
                    </button>
                </span>
            </div>
          </form>
        </div>
    ';
    return $output;
	}
	public function excerpt_more() {
		return '...';
	}

  /**
   * to remove css from admin header
   * @return void
   */
  public function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
  }

  /**
   * Add a pingback url auto-discovery header for singularly identifiable articles.
   * @return void
   */
  public function pingback_url_for_singularly_identifiable() {
    if ( is_singular() && pings_open() ) {
      printf( '<link rel="pingback" href="%s">' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
    }
  }

  public function rt_move_comment_form_below( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
  }
  
  /*Allow HTML for the kses post*/
	public function optimax_kses_allowed_html($tags, $context) {
		switch($context) {
			case 'social':
				$tags = array(
					'a' => array('href' => array()),
					'b' => array()
				);
			return $tags;
			case 'allow_link':
				$tags = array(
					'a' => array(
						'class' => array(),
						'href'  => array(),
						'rel'   => array(),
						'title' => array(),
						'target' => array(),
					),
					'b' => array()
				);
			return $tags;
			case 'alltext_allow':
				$tags = array(
					'a' => array(
						'class' => array(),
						'href'  => array(),
						'rel'   => array(),
						'title' => array(),
						'target' => array(),
					),
					'abbr' => array(
						'title' => array(),
					),
					'b' => array(),
					'br' => array(),
					'blockquote' => array(
						'cite'  => array(),
					),
					'cite' => array(
						'title' => array(),
					),
					'code' => array(),
					'del' => array(
						'datetime' => array(),
						'title' => array(),
					),
					'dd' => array(),
					'div' => array(
						'class' => array(),
						'title' => array(),
						'style' => array(),
						'id' 	=> array(),
					),
					'dl' => array(),
					'dt' => array(),
					'em' => array(),
					'h1' => array(),
					'h2' => array(),
					'h3' => array(),
					'h4' => array(),
					'h5' => array(),
					'h6' => array(),
					'i' => array(),
					'img' => array(
						'alt'    => array(),
						'class'  => array(),
						'height' => array(),
						'src'    => array(),
						'srcset' => array(),
						'width'  => array(),
					),
					'li' => array(
						'class' => array(),
					),
					'ol' => array(
						'class' => array(),
					),
					'p' => array(
						'class' => array(),
					),
					'q' => array(
						'cite' => array(),
						'title' => array(),
					),
					'span' => array(
						'class' => array(),
						'title' => array(),
						'style' => array(),
					),
					'strike' => array(),
					'strong' => array(),
					'ul' => array(
						'class' => array(),
					),
				);
				return $tags;
			default:
			return $tags;
		}
	}

}

new General_Setup;

if ( ! function_exists( 'wp_body_open' ) ) {
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}
