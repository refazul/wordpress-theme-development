<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;

use Elementor\Plugin;

class Scripts {

	public $version;

	public function __construct()
  {
		$this->version = Constants::$theme_version;
		add_action( 'wp_enqueue_scripts',    [$this, 'register_scripts'], 8 );
		add_action( 'wp_enqueue_scripts',    [$this, 'enqueue_scripts'], 15 );
		add_action( 'admin_enqueue_scripts', [ $this, 'admin_enqueue_scripts' ], 20 );
		add_action( 'after_setup_theme',     [$this, 'editor_style_support']);
		add_action( 'wp_print_styles',       [$this, 'dequeue_conflicting_style_script'], 100 );
  }

  public function register_scripts()
  {
    //css
    wp_register_style( 'normalize',                 Helper::get_css( 'normalize' ), [], $this->version );
    //html5 boilerplate main
    wp_register_style( 'main',                      Helper::maybe_rtl_css( 'main' ), [], $this->version );
    wp_register_style( 'bootstrap',                 Helper::maybe_rtl_css( 'bootstrap' ), [], $this->version );
    wp_register_style( 'font-awesome-all',          Helper::get_asset_file( 'vendor/font-awesome/css/fontawesome-all.min.css' ), [], $this->version );
    wp_register_style( 'v4-shims',                  Helper::get_asset_file( 'vendor/font-awesome/css/v4-shims.min.css' ), [], $this->version );
    wp_register_style( 'flaticon',                  Helper::get_asset_file( 'vendor/flaticon/flaticon.css' ), [], $this->version );
    wp_register_style( 'animate',                   Helper::maybe_rtl_css( 'animate' ), [], $this->version );
    wp_register_style( 'optimax-gfonts',            $this->fonts_url(), [], $this->version ); // Google fonts
    wp_register_style( 'owl-carousel',              Helper::get_asset_file( 'vendor/OwlCarousel/owl.carousel.min.css' ), [], $this->version );
    wp_register_style( 'owl-theme-default',         Helper::get_asset_file( 'vendor/OwlCarousel/owl.theme.default.min.css' ), [], $this->version );
    wp_register_style( 'optimax-colors',            Helper::get_css( 'colors' ), [], $this->version );
    wp_register_style( 'optimax-default',           Helper::maybe_rtl_css( 'default' ), ['optimax-colors'], $this->version );
    wp_register_style( 'optimax-style',             Helper::maybe_rtl_css( 'style' ), ['optimax-colors'], $this->version );
    wp_register_style( 'slick',                     Helper::get_asset_file( 'vendor/slick/slick.css' ), [], $this->version );
    wp_register_style( 'slick-theme',               Helper::get_asset_file( 'vendor/slick/slick-theme.css' ), [], $this->version );
    wp_register_style( 'magnific-popup',            Helper::get_asset_file( 'vendor/magnific-popup/magnific-popup.css' ), [], $this->version);
	
    //js
    wp_register_script( 'waypoints',                Helper::get_asset_file( 'js/waypoints.min.js' ), array('jquery'), $this->version , true);
    wp_register_script( 'jquery-counterup',         Helper::get_asset_file( 'js/jquery.counterup.min.js' ), array('jquery', 'waypoints'), $this->version);
    wp_register_script( 'bootstrap-bundle',         Helper::get_asset_file( 'js/bootstrap.bundle.js' ), ['jquery'], $this->version , true);
    wp_register_script( 'optimax-plugins',          Helper::get_asset_file( 'js/plugins.js' ), ['jquery'], $this->version , true);
    wp_register_script( 'isotope-pkgd',             Helper::get_asset_file( 'js/isotope.pkgd.min.js' ), ['jquery','imagesloaded'], $this->version , true);
    wp_register_script( 'magnific-popup',           Helper::get_asset_file( 'vendor/magnific-popup/magnific-popup.min.js' ), ['jquery'], $this->version , true);
    wp_register_script( 'owl-carousel',             Helper::get_asset_file( 'vendor/OwlCarousel/owl.carousel.min.js' ), ['jquery'], $this->version , true);
    wp_register_script( 'slick',                    Helper::get_asset_file( 'vendor/slick/slick.min.js' ), ['jquery'], $this->version , true);
    wp_register_script( 'theia-sticky-sidebar',     Helper::get_asset_file( 'js/theia-sticky-sidebar.min.js' ), ['jquery'], $this->version , true);
    wp_register_script( 'optimax-main',             Helper::get_asset_file( 'js/main.js' ), ['jquery', 'theia-sticky-sidebar', 'bootstrap-bundle', 'css-vars-ponyfill'], $this->version , true);
    wp_register_script( 'css-vars-ponyfill',        Helper::get_asset_file( 'vendor/css-vars-ponyfill/css-vars-ponyfill.min.js' ), $this->version , true);


    wp_register_script( 'jquery-countdown',         Helper::get_js( 'jquery.countdown.min' ), array( 'jquery' ), $this->version );

    wp_register_script( 'jquery-navpoints',         Helper::get_js( 'jquery.navpoints' ), array( 'jquery' ), $this->version );
	
	wp_register_script( 'rt-wow',             		Helper::get_asset_file( 'js/wow.min.js' ), ['jquery'], $this->version , true);

  }

  public function enqueue_scripts()
  {
    
    // essential
    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'font-awesome-all' );
    wp_enqueue_style( 'v4-shims' );
    wp_enqueue_style( 'flaticon' );
    wp_enqueue_style( 'optimax-gfonts' );
    wp_enqueue_style( 'optimax-default' );
    wp_enqueue_style( 'optimax-style' );
    wp_enqueue_style( 'optimax-style2' );
    wp_enqueue_style( 'optimax-style3' );
    wp_enqueue_style( 'optimax-style4' );

    wp_enqueue_style( 'animate' );
    wp_enqueue_script( 'rt-wow' );
    wp_enqueue_script( 'imagesloaded' );

    wp_enqueue_script( 'bootstrap-bundle' );
    wp_enqueue_script( 'isotope-pkgd' );
    wp_enqueue_script( 'optimax-plugins' );
    wp_enqueue_script( 'optimax-main' );
    wp_enqueue_script( 'css-vars-ponyfill' ); 
    wp_enqueue_script( 'jquery-navpoints' ); 
    
    

    // scripting through other function 
    $this->conditional_scripts();
    $this->elementor_scripts();
    $this->localized_scripts();
    $this->dynamic_style();
  }

  public function dequeue_conflicting_style_script()
  {
    wp_dequeue_style   ( 'layerslider-font-awesome' );
    wp_deregister_style( 'layerslider-font-awesome' );

    wp_dequeue_style   ( 'yith-wcwl-font-awesome' );
    wp_deregister_style( 'yith-wcwl-font-awesome' );


    wp_dequeue_style   ( 'elementor-icons-shared-0' );
    wp_deregister_style( 'elementor-icons-shared-0' );

    wp_dequeue_style   ( 'elementor-icons-fa-solid' );
    wp_deregister_style( 'elementor-icons-fa-solid' );

  }

  public function admin_enqueue_scripts()
  {
    wp_enqueue_style( 'optimax-colors',            Helper::get_css( 'colors' ), [], $this->version );
    wp_enqueue_style( 'select2',                   Helper::get_asset_file( 'vendor/select2/select2.css' ), array(), $this->version , true);
    wp_enqueue_style( 'optimax-gfonts',            $this->fonts_url(), [], $this->version ); // Google fonts
    wp_enqueue_style( 'font-awesome-all',          Helper::get_asset_file( 'vendor/font-awesome/css/fontawesome-all.min.css' ), [], $this->version );
    wp_enqueue_style( 'v4-shims',                  Helper::get_asset_file( 'vendor/font-awesome/css/v4-shims.min.css' ), [], $this->version );
    wp_enqueue_style( 'main-admin',                Helper::get_css( 'main-admin' ), [], $this->version );
    wp_enqueue_style( 'flaticon',                  Helper::get_asset_file( 'vendor/flaticon/flaticon.css' ), [], $this->version );

    wp_enqueue_script( 'select2',                  Helper::get_asset_file( 'vendor/select2/select2.js' ), array('jquery'), $this->version , true);
    wp_enqueue_script( 'optimax-main-admin',       Helper::get_asset_file( 'js/main.admin.js' ), array('jquery'), $this->version , true);
    $this->dynamic_style_admin();
  }

  public function elementor_scripts()
  {
    if ( !did_action( 'elementor/loaded' ) ) {
      return;
    }
    if ( Plugin::$instance->preview->is_preview_mode() ) {
      //css
      wp_enqueue_style( 'owl-carousel' );
      wp_enqueue_style( 'slick' );
      wp_enqueue_style( 'slick-theme' );
      wp_enqueue_style( 'magnific-popup' );

      //js
      wp_enqueue_script( 'owl-carousel' );
      wp_enqueue_script( 'isotope-pkgd' );
      wp_enqueue_script( 'waypoints' );
      wp_enqueue_script( 'jquery-counterup' );
      wp_enqueue_script( 'magnific-popup' );
      wp_enqueue_script( 'slick' );
    }
  }

  private function conditional_scripts()
  {
    if ( Helper::has_sidebar() ) {
      wp_enqueue_script('theia-sticky-sidebar');
    }

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }

    if (is_singular( "optimax_case" ) || is_singular( "optimax_service" ) ) {
      wp_enqueue_style( 'owl-carousel' );
      wp_enqueue_script( 'owl-carousel' );
    }
    if ( is_post_type_archive( "optimax_project" ) ) {
      wp_enqueue_script('isotope-pkgd');
    }
    if (is_home()) {
      wp_enqueue_script( 'isotope-pkgd' );
    }
    if ( Helper::is_under_construction_mode() ) {
      wp_enqueue_script( 'jquery-countdown' );
    }
  }
  
	

  public function fonts_url()
  {
    $fonts_url = '';
    if ( 'off' !== _x( 'on', 'Google fonts - Nunito and Roboto : on or off', 'optimax' ) ) {
      $fonts_url = add_query_arg( 'family', urlencode( 'Nunito:300,400,600,700,800,900|Roboto:300,400,500,700,900' ), "//fonts.googleapis.com/css" );
    }
    return $fonts_url;
  }

  private function dynamic_style()
  {
    $dynamic_css  = $this->content_padding();
    ob_start();
    Helper::requires( 'dynamic-style/dynamic-frontend.php' );
    $dynamic_css .= ob_get_clean();
    wp_register_style( 'optimax-dynamic', false );
    wp_enqueue_style( 'optimax-dynamic' );
    wp_add_inline_style( 'optimax-dynamic', $dynamic_css );
  }

  private function dynamic_style_admin()
  {
    ob_start();
    Helper::requires( 'dynamic-style/dynamic-admin.php' );
    $dynamic_css = ob_get_clean();
    wp_register_style( 'optimax-dynamic-admin', false );
    wp_enqueue_style( 'optimax-dynamic-admin' );
    wp_add_inline_style( 'optimax-dynamic-admin', $dynamic_css );
  }

  public function editor_style_support()
  {
    add_theme_support( 'editor-styles' );
  }

  private function sanitize_css_size_unit($value)
  {
    $allowed_units = ['px', 'em', 'rem', 'pt', '%'];
    $allowed_bool = false;
    foreach ( $allowed_units as $allowed_unit ) {
      if ( strpos($value, $allowed_unit) !== false ) {
        $allowed_bool = true;
        break;
      }
    }
    $value = $allowed_bool ? $value : (int) $value . 'px';
    return $value;
  }

  private function content_padding()
  {
    $top    = RDTheme::$content_top_padding;
    $bottom = RDTheme::$content_bottom_padding;
    $top    = $this->sanitize_css_size_unit($top);
    $bottom = $this->sanitize_css_size_unit($bottom);
    return "
    .content-padding {
      padding-top: $top;
      padding-bottom: $bottom;
    }
    ";
  }

  private function localized_scripts() {
    $hasBackToTopArrow = RDTheme::$options['back_to_top'] ;
    $appendHtml = $icon = '';
	
	if ( !empty( RDTheme::$options['logo_main']['url'] ) ) {
			$logo = '<img width="500" height="132" class="logo-small" src="'. esc_url( empty( RDTheme::$options['logo_main']['url'] ) ? Helper::get_img( 'logo_main.png' ) : RDTheme::$options['logo_main']['url'] ).'" />';
		} else {
			$logo = '<img width="500" height="132" class="logo-small" src="'. esc_url( Helper::get_img( 'logo_main.png' ) ) . '" />';
		}	

    $localize_data = [
	  'stickyMenu' 		  => RDTheme::$options['sticky_menu'],
      'is_rtl'            => is_rtl(),
      'hasBackToTopArrow' => $hasBackToTopArrow,
      'hasStickyMenu'     => RDTheme::$options['sticky_menu'],
	    'siteLogo'   	      => '<a href="' . esc_url( home_url( '/' ) ) . '" alt="' . esc_attr( get_bloginfo( 'title' ) ) . '">' . esc_html ( $logo ) . '</a>',
      'extraOffset' => RDTheme::$options['sticky_menu'] ? 70 : 0,
      'extraOffsetMobile' => RDTheme::$options['sticky_menu'] ? 52 : 0,
      'day'               => esc_html__('Day' , 'optimax'),
      'hour'              => esc_html__('Hour' , 'optimax'),
      'minute'            => esc_html__('Minute' , 'optimax'),
      'second'            => esc_html__('Second' , 'optimax'), 
	  'ajaxURL' => admin_url('admin-ajax.php'),
    ];
    wp_localize_script( 'optimax-main', 'optimaxObject', $localize_data );
	
	
  }
}
new Scripts;
