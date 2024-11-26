<?php
/*
Plugin Name: cc-woo
Plugin URI: https://github.com/your-username/cc-woo
Description: Custom plugin for WooCommerce and Pods integration
Version: 1.0.0
Author: Your Name
Author URI: https://yourwebsite.com
Text Domain: cc-woo
Domain Path: /languages
WC requires at least: 5.0
WC tested up to: 8.0
*/

if (!defined('ABSPATH')) {
    exit;
}

// Define plugin constants
define('CC_WOO_VERSION', '1.0.0');
define('CC_WOO_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('CC_WOO_PLUGIN_URL', plugin_dir_url(__FILE__));

// Plugin activation hook
register_activation_hook(__FILE__, 'cc_woo_activate');

function cc_woo_activate() {
    // Activation code here
}

// Plugin deactivation hook
register_deactivation_hook(__FILE__, 'cc_woo_deactivate');

function cc_woo_deactivate() {
    // Deactivation code here
}

// Enqueue scripts and styles
function cc_woo_enqueue_scripts() {
    // Bootstrap
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.0', true);
    
    // Plugin custom styles and scripts
    wp_enqueue_style('cc-woo-style', CC_WOO_PLUGIN_URL . 'assets/css/style.css');
    wp_enqueue_script('cc-woo-script', CC_WOO_PLUGIN_URL . 'assets/js/script.js', array('jquery'), CC_WOO_VERSION, true);
}
add_action('wp_enqueue_scripts', 'cc_woo_enqueue_scripts');
