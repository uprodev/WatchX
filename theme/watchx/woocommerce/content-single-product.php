<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}

$brand = get_the_terms(get_the_ID(), 'pa_brand');

$info = get_field('info_list', 'options');
$pay = get_field('payments_info', 'options');

$date = strtotime('+3 days');

?>
<section class="product">
    <div class="content-width">
        <div class="content">
            <?php
                remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
                do_action( 'woocommerce_before_single_product_summary' );
            ?>

            <div class="text-wrap">

                <?php if($brand):?>
                    <p class="brand"><?= $brand[0]->name;?></p>
                <?php endif;?>

                <?php woocommerce_template_single_title();?>

                <?php woocommerce_template_single_price();?>

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

                <?= $product->get_description();?>

                <div class="btn-wrap">

                    <?php woocommerce_template_single_add_to_cart();?>

                    <a href="#" class="btn-default btn-grey"><img src="<?= get_template_directory_uri();?>/img/icon-12.svg" alt=""><?= __('Order now to receive', 'watchx'). ' '. date('D, M j', $date);?></a>
                </div>
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


            </div>
        </div>
    </div>
</section>

<?php woocommerce_output_related_products();?>

<?php do_action( 'woocommerce_after_single_product' ); ?>
