<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\optimax;

class TGM_Config {
	public $theme_prefix;
	public $path;

	public function __construct() {
    $this->theme_prefix = Constants::$theme_prefix;
    $this->path         = Constants::$theme_plugins_bundle_dir;
		add_action( 'tgmpa_register', [$this, 'register_required_plugins']);
	}

	public function register_required_plugins(){
		$plugins = [
			// Bundled
			[
				'name'         => 'Optimax Core',
				'slug'         => 'optimax-core',
				'source'       => 'optimax-core.zip',
				'required'     =>  true,
				'version'      => '1.5'
			],
			[
				'name'         => 'RT Framework',
				'slug'         => 'rt-framework',
				'source'       => 'rt-framework.zip',
				'required'     =>  true,
				'version'      => '2.4'
			],
			[
				'name'         => 'RT Demo Importer',
				'slug'         => 'rt-demo-importer',
				'source'       => 'rt-demo-importer.zip',
				'required'     =>  false,
				'version'      => '4.3'
			],
			[
				'name'         => 'LayerSlider WP',
				'slug'         => 'LayerSlider',
				'source'       => 'LayerSlider.zip',
				'required'     => false,
				'external_url' => 'https://layerslider.kreaturamedia.com',
				'version'      => '7.1.4'
			],
			// Repository
			[
				'name'     => 'Redux Framework',
				'slug'     => 'redux-framework',
				'required' => true,
			],
			[
				'name'     => 'Elementor Page Builder',
				'slug'     => 'elementor',
				'required' => true,
			],
			[
				'name'     => 'Contact Form 7',
				'slug'     => 'contact-form-7',
				'required' => false,
			],
			[
				'name'     => 'Svg Support',
				'slug'     => 'svg-support',
				'required' => false,
			],
			[
				'name'     => 'Mailchimp for wp',
				'slug'     => 'mailchimp-for-wp',
				'required' => false,
			],
			[
				'name'     => 'WordPress Review & Structure Data Schema Plugin – Review Schema',
				'slug'     => 'review-schema',
				'required' => false,
			],
			[
				'name'     => 'WooCommerce',
				'slug'     => 'woocommerce',
				'required' => false,
			],
		];

		$config = [
			'id'           => $this->theme_prefix,      // Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => $this->path,              // Default absolute path to bundled plugins.
			'menu'         => $this->theme_prefix . '-install-plugins', // Menu slug.
			'has_notices'  => true,                    // Show admin notices or not.
			'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => false,                    // Automatically activate plugins after installation or not.
			'message'      => '',                      // Message to output right before the plugins table.
		];

		tgmpa( $plugins, $config );
	}
}

new TGM_Config;
