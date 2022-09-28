<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;

class Constants {

	public static $theme_version;
	public static $theme_author_uri;
	public static $theme_prefix;
	public static $theme_options;
	public static $theme_ad_options;
	public static $widget_prefix;
	public static $theme_namespace;

	public static $theme_base_dir;
	public static $theme_inc_dir;
	public static $theme_woo_dir;
	public static $theme_vendor_dir;
	public static $theme_plugins_bundle_dir;

	public function __construct() {
		$theme_data = wp_get_theme( get_template() );
		self::$theme_version             = ( WP_DEBUG ) ? time() : $theme_data->get( 'Version' );
		self::$theme_author_uri          = $theme_data->get( 'AuthorURI' );
		self::$theme_prefix              = 'optimax';
		self::$widget_prefix             = 'optimax';
		self::$theme_options             = 'optimax';
		self::$theme_ad_options          = 'optimax_ads';
		self::$theme_namespace           = "radiustheme\\Optimax\\";
		self::$theme_base_dir            = get_template_directory(). '/';
		self::$theme_inc_dir             = self::$theme_base_dir . 'inc/';
		self::$theme_woo_dir             = self::$theme_base_dir . 'woocommerce/';
		self::$theme_vendor_dir          = self::$theme_inc_dir . 'vendor/';
		self::$theme_plugins_bundle_dir  = self::$theme_inc_dir . 'plugin-bundle/';
	}
}

new Constants;
