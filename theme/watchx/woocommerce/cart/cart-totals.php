<?php
/**
 * Cart totals
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-totals.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.3.6
 */

defined( 'ABSPATH' ) || exit;

$info = get_field('info_list', 'options');
$pay = get_field('payments_info', 'options');
$text = get_field('cart_text', 'options');

$date = strtotime('+7 days');

$ship = WC()->cart->get_cart_shipping_total();

?>

    <ul class="total-list cart-totals">
        <li class="cart-subtotal">
            <p class="title-p"><?= __('SUBTOTAL', 'watchx');?></p>
            <p class="cost-p" data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>"><?php wc_cart_totals_subtotal_html(); ?></p>
        </li>
        <?php if($ship>0):?>
            <li>
                <p class="title-p"><?= __('SHIPPING', 'watchx');?></p>
                <p class="cost-p"><?php wc_cart_totals_shipping_html(); ?></p>
            </li>
        <?php endif;?>
        <li>
            <p class="title-p"><?= __('VAT (20%)', 'watchx');?></p>
            <p class="cost-p"><?php wc_cart_totals_taxes_total_html(); ?></p>
        </li>
        <li class="total-li">
            <p class="title-p"><?= __('TOTAL PRICE', 'watchx');?></p>
            <p class="cost-p"><?php wc_cart_totals_order_total_html(); ?></p>
        </li>
    </ul>
    <div class="info">
        <?php if($pay['icon']):?>
            <span class="logo"><img src="<?= $pay['icon']['url'];?>" alt="<?= $pay['icon']['alt'];?>"></span>
        <?php endif;?>

        <?= $pay['text'];?>

        <?php if($pay['icon_2']):?>
            <span class="img"><img src="<?= $pay['icon_2']['url'];?>" alt="<?= $pay['icon_2']['alt'];?>"></span>
        <?php endif;?>
        <?php $link = $pay['link'];

        if( $link ):
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
        <?php endif; ?>
    </div>
    <div class="btn-wrap">
        <?php do_action( 'woocommerce_proceed_to_checkout' ); ?>

        <p class="btn-default btn-grey"><img src="<?= get_template_directory_uri();?>/img/icon-12.svg" alt=""><?= __('Order now to receive', 'watchx'). ' '. date('D, M j', $date);?></p>
    </div>

    <?php if($text):?>
        <p class="text"><?= $text;?></p>
    <?php endif;?>

    <?php if($info):?>
        <ul class="info-list">
            <?php foreach($info as $in):?>
                <li>
                    <?php if($in['icon']):?>
                        <figure>
                            <img src="<?= $in['icon']['url'];?>" alt="<?= $in['icon']['alt'];?>">
                        </figure>
                    <?php endif;?>
                    <?php if($in['text'] || $in['text_bold']):?>
                        <p><?= $in['text_bold']?'<b>'.$in['text_bold'].'</b>':'';?><?= $in['text']?' '.$in['text']:'';?></p>
                    <?php endif;?>
                </li>
            <?php endforeach;?>
        </ul>
    <?php endif;?>

