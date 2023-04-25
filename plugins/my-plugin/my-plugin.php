<?php

/**
 * Plugin Name: Min Plugin
 * Description: Ett egenutvecklat plugin med valfri funktion.
 * Version: 1.0
 */

// Här kan skrivas egen kod för plugin-funktionenadd_action( 'wp_footer', 'min_plugin_function' );


function my_plugin_footer()
{
    get_footer();
}
add_action('my_single_product_footer', 'my_plugin_footer');



// Ändrat kommentar vid checkout.
add_filter('woocommerce_checkout_fields', 'checkout_function');

function checkout_function($fields)
{
    $fields['order']['order_comments']['placeholder'] = 'Denna text kommer från en add_filter funktoin, i en egen plugin';
    return $fields;
}
