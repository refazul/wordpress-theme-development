<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;

// load vendor/third party script
require Constants::$theme_vendor_dir . 'init.php';

// all helper loads
require Constants::$theme_inc_dir . 'helper-traits/icon-trait.php';
require Constants::$theme_inc_dir . 'helper-traits/image-trait.php';
require Constants::$theme_inc_dir . 'helper-traits/resource-load-trait.php';
require Constants::$theme_inc_dir . 'helper-traits/layout-trait.php';
require Constants::$theme_inc_dir . 'helper-traits/custom-query-trait.php';
require Constants::$theme_inc_dir . 'helper-traits/utility-trait.php';
require Constants::$theme_inc_dir . 'helper-traits/elementor-helper-trait.php';
require Constants::$theme_inc_dir . 'helper-traits/data-trait.php';
require Constants::$theme_inc_dir . 'helper-traits/menu-trait.php';
require Constants::$theme_inc_dir . 'helper.php';

Helper::requires( 'class-tgm-plugin-activation.php' );
Helper::requires( 'tgm-config.php' );
Helper::requires( 'options/init.php' );
Helper::requires( 'rdtheme.php' );
Helper::requires( 'general.php' );
Helper::requires( 'scripts.php' );
Helper::requires( 'layout-settings.php' );

if ( class_exists( 'WooCommerce' ) ) {
    require Constants::$theme_woo_dir . 'custom/functions.php';
}