<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.9.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' );

$recently = recently_viewed_products();

?>


<section class="checkout">
    <div class="content-width">
        <h1><?php the_title();?> <span class="counts_cart">(<?= WC()->cart->get_cart_contents_count();?>)</span></h1>
        <form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
            <?php do_action( 'woocommerce_before_cart_table' ); ?>
            <div class="content">
                <div class="left">
                    <?php do_action( 'woocommerce_before_cart_contents' ); ?>

                    <?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                        $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                        $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
                        /**
                         * Filter the product name.
                         *
                         * @since 2.1.0
                         * @param string $product_name Name of the product in the cart.
                         * @param array $cart_item The product in the cart.
                         * @param string $cart_item_key Key for the product in the cart.
                         */
                        $product_name = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );

                        $brand = get_the_terms($product_id, 'pa_brand');

                        if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                            $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                            ?>

                                <div class="item">
                                    <figure>
                                        <?php
                                        $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

                                        if ( ! $product_permalink ) {
                                            echo $thumbnail; // PHPCS: XSS ok.
                                        } else {
                                            printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
                                        }
                                        ?>
                                    </figure>
                                    <div class="text">
                                        <div class="brand-name">
                                            <?php if($brand):?>
                                                <p class="title"><?= $brand[0]->name;?></p>
                                            <?php endif;?>
                                            <p><?= $_product->get_name();?></p>
                                        </div>
                                        <div class="cost">
                                            <p><?php
                                                echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                                                ?></p>
                                        </div>
                                        <div class="delete">
                                            <?= apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                                'woocommerce_cart_item_remove_link',
                                                sprintf(
                                                    '<a href="%s" class="remove-item" aria-label="%s" data-product_id="%s" data-product_key="'.$cart_item_key.'"><img src="'.get_template_directory_uri().'/img/close.svg" alt="close"></a>',
                                                    esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                                                    /* translators: %s is the product name */
                                                    esc_attr( sprintf( __( 'Remove %s from cart', 'woocommerce' ), wp_strip_all_tags( $product_name ) ) ),
                                                    esc_attr( $product_id )
                                                ),
                                                $cart_item_key
                                            );
                                            ?>
                                        </div>
                                    </div>
                                </div>

                            <?php
                        }
                    }
                    ?>

                </div>
                <div class="cart-collaterals total-wrap">

                    <?php woocommerce_cart_totals();?>

                </div>
            </div>
            <?php do_action( 'woocommerce_after_cart_table' ); ?>
        </form>

        <?php do_action( 'woocommerce_after_cart' ); ?>
    </div>
</section>

<?php if(!empty($recently)):?>

    <section class="product-search see-product">
        <div class="content-width">
            <h2 class="title-h3"><?= __('Recently viewed', 'watchx');?></h2>
            <div class="content">
                <?php foreach($recently as $rec):
                    $_prod =  wc_get_product( $rec );
                    $br = get_the_terms($rec, 'pa_brand');
                ?>
                    <div class="product-item ">
                        <figure>
                            <a href="<?= get_permalink($rec);?>"> <img src="<?= get_the_post_thumbnail_url($rec);?>" alt=""></a>
                        </figure>
                        <div class="text">
                            <?php if($br):?>
                                <h6 class="title"><?= $br[0]->name;?></h6>
                            <?php endif;?>

                            <p class="info"><?= get_the_title($rec);?></p>
                            <p class="cost"><?= $_prod->get_price_html();?></p>
                            <div class="btn-wrap">
                                <a href="<?= get_permalink($rec);?>" class="btn-default"><?= __('Enquire now', 'watchx');?></a>
                            </div>
                        </div>
                    </div>

                <?php endforeach;?>
            </div>
        </div>
    </section>

<?php endif;
