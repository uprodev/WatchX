<?php


/* catalog ordering */

add_filter( 'woocommerce_get_catalog_ordering_args', 'custom_woocommerce_get_catalog_ordering_name_args' );

function custom_woocommerce_get_catalog_ordering_name_args( $args ) {
    $orderby_value = isset( $_GET['orderby'] ) ? wc_clean( $_GET['orderby'] ) : apply_filters( 'woocommerce_default_catalog_orderby', get_option( 'woocommerce_default_catalog_orderby' ) );
    if ( 'name_desc' == $orderby_value ) {
        $args['orderby'] = 'name';
        $args['order'] = 'DESC';
        $args['meta_key'] = '';
    }elseif('name_asc' == $orderby_value ){
        $args['orderby'] = 'name';
        $args['order'] = 'ASC';
        $args['meta_key'] = '';
    }
    return $args;
}

add_filter( 'woocommerce_default_catalog_orderby_options', 'custom_woocommerce_catalog_name_orderby' );
add_filter( 'woocommerce_catalog_orderby', 'custom_woocommerce_catalog_name_orderby', 1 );

function custom_woocommerce_catalog_name_orderby( $sortby ) {
    unset( $sortby[ 'menu_order' ] );
    unset( $sortby[ 'rating' ] );
    unset( $sortby[ 'date' ] );
    unset( $sortby[ 'price' ] );
    unset( $sortby[ 'price-desc' ] );

    $sortby[ 'popularity' ] = 'Best selling';
    $sortby['name_asc'] = 'A-Z';
    $sortby['name_desc'] = 'Z-A';

    return $sortby;
}


/* fragments */

function add_points_widget_to_fragment( $fragments ) {

//    ob_start();



    $fragments['.counts_cart'] =  '('.  WC()->cart->get_cart_contents_count() . ')';


//    $fragments['.counts_cart'] = ob_get_clean();

    return $fragments;
}
add_filter('add_to_cart_fragments', 'add_points_widget_to_fragment');



/* recently products */

add_action( 'template_redirect', 'recently_viewed_product_cookie', 20 );

function recently_viewed_product_cookie() {

    if ( ! is_product() ) {
        return;
    }


    if ( empty( $_COOKIE[ 'woocommerce_recently_viewed_2' ] ) ) {
        $viewed_products = array();
    } else {
        $viewed_products = (array) explode( '|', $_COOKIE[ 'woocommerce_recently_viewed_2' ] );
    }


    if ( ! in_array( get_the_ID(), $viewed_products ) ) {
        $viewed_products[] = get_the_ID();
    }

    if ( sizeof( $viewed_products ) > 10 ) {
        array_shift( $viewed_products );
    }


    wc_setcookie( 'woocommerce_recently_viewed_2', join( '|', $viewed_products ) );

}

function recently_viewed_products() {

    if( empty( $_COOKIE[ 'woocommerce_recently_viewed_2' ] ) ) {
        $viewed_products = array();
    } else {
        $viewed_products = (array) explode( '|', $_COOKIE[ 'woocommerce_recently_viewed_2' ] );
    }

    if ( empty( $viewed_products ) ) {
        return;
    }

    $product_id = [];

    foreach ( WC()->cart->get_cart() as $cart_item ) {

        $product_id[] = $cart_item['product_id'];

    }

    $viewed_products = array_reverse( array_map( 'absint', $viewed_products ) );

    $result = array_diff($viewed_products, $product_id);
    $first = array_shift($result);

    return $first;

}
