<?php

defined( 'ABSPATH' ) || exit;

global $product;

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

