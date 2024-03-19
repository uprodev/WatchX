<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
    return;
}

$brand = get_the_terms(get_the_ID(), 'pa_brand');


?>
<div class="product-item swiper-slide">
    <figure>
        <?php

        do_action( 'woocommerce_before_shop_loop_item' );

        woocommerce_template_loop_product_thumbnail();

        woocommerce_template_loop_product_link_close();

        ?>

    </figure>
    <div class="text">
        <?php if($brand):?>
            <h6 class="title"><?= $brand[0]->name;?></h6>
        <?php endif;?>

        <p class="info"><?= get_the_title();?></p>

        <?php woocommerce_template_loop_price();?>

        <?php woocommerce_template_loop_add_to_cart();?>

    </div>
</div>
