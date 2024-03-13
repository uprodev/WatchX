<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header();

woocommerce_output_all_notices();

$shop_page_url = get_permalink( wc_get_page_id( 'shop' ) );
$shop_page_title = get_the_title( wc_get_page_id( 'shop' ) );

$cat_url = get_term_link(get_queried_object_id());
$cat_title = get_queried_object()->name;

$img = get_field('category_image', get_queried_object()->taxonomy . '_'.get_queried_object()->term_id);
?>

    <?php if(!is_shop()):?>

        <section class="category-inner-banner">
            <div class="bg">
                <img src="<?= $img?$img['url']:get_template_directory_uri().'/img/bg-6.jpg';?>" alt="<?= get_queried_object()->name;?>">
            </div>
            <div class="content-width">
                <div class="text-wrap">
                    <h1><?= get_queried_object()->name;?></h1>
                </div>
            </div>
        </section>

    <?php endif;?>

    <section class="product-search<?= is_shop()?' shop':'';?>">
        <div class="sort-line-wrap">
            <div class="content-width">
                <div class="sort-line">
                    <ul class="breadcrumb">
                        <li><a href="<?= get_home_url();?>"><?= __('Home', 'watchx');?></a></li>
                        <li><a href="<?= is_shop()?$shop_page_url:$cat_url;?>"><span>></span> <?= is_shop()?$shop_page_title:$cat_title;?></a></li>
                        <?php woocommerce_result_count();?>
                    </ul>
                    <div class="right-wrap">

                        <?php woocommerce_catalog_ordering();?>

                        <div class="filer-btn">
                            <a href="#filter" class="fancybox-filter"><img src="<?= get_template_directory_uri();?>/img/icon-17.svg" alt="filter"><?= __('view filters', 'watchx');?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-width content-top">

            <?php if ( wc_get_loop_prop( 'total' ) ): ?>

                <div class="content products-catalog">

                    <?php while ( have_posts() ): the_post();

                        /**
                         * Hook: woocommerce_shop_loop.
                         */
                        do_action( 'woocommerce_shop_loop' );

                        wc_get_template_part( 'content', 'product' );

                    endwhile;?>

                </div>

                <?php 	/**
                     * Hook: woocommerce_after_shop_loop.
                     *
                     * @hooked woocommerce_pagination - 10
                     */
                    do_action( 'woocommerce_after_shop_loop' );

            else:?>

                <div class="content">
                    <?php /**
                    * Hook: woocommerce_no_products_found.
                    *
                    * @hooked wc_no_products_found - 10
                    */
                    do_action( 'woocommerce_no_products_found' );?>
                </div>

            <?php endif;?>


        </div>
    </section>


    <div class="filter-popup" id="filter-popup" style="display: none">
        <div class="main">
            <div class="top">
                <h6><?= __('filters', 'watchx');?></h6>
                <div class="close-menu">
                    <a href="#"><img src="<?= get_template_directory_uri();?>/img/close.svg" alt=""></a>
                </div>
            </div>
            <div class="wrap">
                <?= do_shortcode('[br_filters_group group_id=324]');?>
            </div>
        </div>
    </div>

<?php get_footer();