<?php

$actions = [
    'remove_from_cart',
];

if(!empty($actions)):
foreach($actions as $action) {
    add_action('wp_ajax_' . $action, $action);
    add_action('wp_ajax_nopriv_' . $action, $action);
}
endif;

/**
 * remove_from_cart
 */



function remove_from_cart() {

    WC()->cart->remove_cart_item( $_GET['key'] );

    die();
}
