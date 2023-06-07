<?php
/*
Plugin Name: Ferreindustrial
Plugin URI: http://jhonabril.com/
Description: Plugin personalizado para Ferreindustrial ltda.
Version: 1.0.1
Author: Jhon Abril
Author URI: http://jhonabril.com
License: A "Slug" license name e.g. GPL2
*/



require_once dirname(__FILE__) . '/classes/shortcode.class.php';

function activate_plugin_crm() {

}

function deactivate_plugin_crm() {

}

register_activation_hook(__FILE__,'activate_plugin_crm');
register_deactivation_hook(__FILE__,'deactivate_plugin_crm');

function printShortcode($atts) {
    $class = new Shortcode();
    global $wpdb;

    return $class -> make_content();
}

add_shortcode("keyword", "printShortcode");
