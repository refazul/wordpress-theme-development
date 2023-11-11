<?php
// Function to display a notice in the admin dashboard
function onushiloni_admin_notice() {
    $required_plugins = array(
        'woocommerce/woocommerce.php' => 'WooCommerce',
        'elementor/elementor.php' => 'Elementor',
        'contact-form-7/wp-contact-form-7.php' => 'Contact Form 7',
    );

    $missing_plugins = array();

    foreach ($required_plugins as $plugin_slug => $plugin_name) {
        if (!is_plugin_active($plugin_slug)) {
            $missing_plugins[] = $plugin_name;
        }
    }

    if (!empty($missing_plugins)) {
        ?>
        <div class="notice notice-error is-dismissible">
            <p><?php printf(__('The %s theme requires the following plugins: %s. Please <a href="%s">install and activate them</a>.', 'onushiloni'), 'Onushiloni', implode(', ', $missing_plugins), admin_url('themes.php?page=install-plugins')); ?></p>
        </div>
        <?php
    }
}

// Function to display the install plugins page
// Function to display the install plugins page
function onushiloni_install_plugins_page() {
    ?>
    <div class="wrap">
        <h1>Install Required Plugins</h1>
        <p>Please install and activate the following required plugins for the Onushiloni theme:</p>

        <ul>
            <li><strong>WooCommerce:</strong> <a href="<?php echo admin_url('themes.php?page=install-plugins&action=install-woocommerce'); ?>">Install WooCommerce</a></li>
            <li><strong>Elementor:</strong> <a href="<?php echo admin_url('themes.php?page=install-plugins&action=install-elementor'); ?>">Install Elementor</a></li>
            <li><strong>Contact Form 7:</strong> <a href="<?php echo admin_url('themes.php?page=install-plugins&action=install-contact-form-7'); ?>">Install Contact Form 7</a></li>
        </ul>

        <p>After installing and activating the plugins, you can <a href="<?php echo admin_url('themes.php?page=install-plugins&action=refresh'); ?>">refresh this page</a> to check the activation status.</p>
    </div>
    <?php
}


// Hook the notice function into the admin_notices action
add_action('admin_notices', 'onushiloni_admin_notice');

// Hook the install plugins page function into the admin_menu action
add_action('admin_menu', 'onushiloni_add_menu_page');

// Function to add a menu page for installing plugins
function onushiloni_add_menu_page() {
    add_submenu_page(
        'themes.php',
        'Install Plugins',
        'Install Plugins',
        'manage_options',
        'install-plugins',
        'onushiloni_install_plugins_page'
    );
}