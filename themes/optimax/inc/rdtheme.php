<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;

use \Redux;
use \ReduxFrameworkPlugin;

class RDTheme {

	protected static $instance;

	// Sitewide static variables
	public static $options;

	// Template specific variables
	public static $layout;
	public static $sidebar;
	public static $has_top_bar;
	public static $top_bar_style;
	public static $header_style = 1;
	public static $has_banner;
	public static $has_breadcrumb;
	public static $bgtype;
	public static $bgimg;
	public static $bgcolor;
	public static $transparent_header;
	public static $transparent_top_bar;
	public static $content_top_padding = 0;
	public static $content_bottom_padding = 0;
	public static $page_menu;

	public static $menu_button = 'default';
	public static $search_icon = 'default';
	public static $cart_icon = 'default';
	public static $offcanvas_menu = 'default';
	public static $page_offcanvas_menu = 'default';
	public static $page_merge_menu = 'default';
	public static $header_type = 'default';
	public static $icon_area_width = 3;
	public static $footer_cta = false;
	public static $footer_cta_style = 1;

	public static $menu_theme = 'default';
	public static $hamburger_image = '';
	public static $logo_type = 'default';

	// color
	public static $topbar_color = "#fff";
	public static $topbar_accent_color = "#ff7617";
	public static $topbar_background_color = "#040b3f";

	private function __construct() {
    add_action( 'after_setup_theme', [$this, 'optimax_set_options']);
    add_action( 'after_setup_theme', [$this, 'optimax_set_redux_compability_options']);

		$this->optimax_redux_init();
		$this->optimax_layerslider_init();
	}

	public static function optimax_instance() {
		if ( null == self::$instance ) {
			self::$instance = new self;
		}
		return self::$instance;
	}

	public function optimax_redux_init() {
		$options = Constants::$theme_options;
		add_action( 'admin_menu', [$this, 'optimax_remove_redux_menu'], 12 ); // Remove Redux Menu
		add_filter( "redux/{$options}/aURL_filter", '__return_empty_string' ); // Remove Redux Ads
		add_action( 'redux/loaded', [$this, 'optimax_remove_redux_demo']); // If Redux is running as a plugin, this will remove the demo notice and links
	}

	public function optimax_set_options(){
    include Constants::$theme_inc_dir . 'redux-predefined-data.php';
		$options    = json_decode( $predefined_options, true );
		if ( class_exists( 'Redux' ) && isset( $GLOBALS[Constants::$theme_options] ) ) {
			$options    = wp_parse_args( $GLOBALS[Constants::$theme_options], $options );
		}
		self::$options  = $options;
	}

	public function optimax_remove_redux_menu() {
		remove_submenu_page( 'tools.php','redux-about' );
	}

	public function optimax_remove_redux_demo() {
		if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
			add_filter( 'plugin_row_meta', [$this, 'optimax_redux_remove_extra_meta'], 12, 2 );
			remove_action( 'admin_notices', [ReduxFrameworkPlugin::instance(), 'admin_notices']);
		}
	}

	public function optimax_redux_remove_extra_meta( $links, $file ){
		if ( strpos( $file, 'redux-framework.php' ) !== false ) {
			$links = array_slice( $links, 0, 3 );
		}

		return $links;
	}

	public function optimax_layerslider_init() {
		if( function_exists( 'layerslider_set_as_theme' ) ) {
		  layerslider_set_as_theme();
		}

		if( function_exists( 'layerslider_hide_promotions' ) ) {
		  layerslider_hide_promotions();
		}

		// Add more skins
		if ( class_exists( '\LS_Sources' ) ) {
		  \LS_Sources::addSkins( Constants::$theme_inc_dir. 'layerslider-skins/' );
		}

		// Remove purchase notice from plugins page
		add_action( 'admin_init', function(){
		  if ( defined( 'LS_PLUGIN_BASE' ) ) {
			remove_action( 'after_plugin_row_' . LS_PLUGIN_BASE, 'layerslider_plugins_purchase_notice', 10, 3 );
		  }
		} );
	}
    // Backward compability for newly added options
    public function optimax_set_redux_compability_options(){
      $new_options = [
        'some_option_will_be_add_after_theme_submit_for_backward_compatibility'      => true,
      ];
      foreach ( $new_options as $key => $value ) {
        if ( !isset( self::$options[$key] ) ) {
          self::$options[$key] = $value;
        }
      }
    }
}

RDTheme::optimax_instance();
