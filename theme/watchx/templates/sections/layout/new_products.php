<?php

$title = get_sub_field('title');
$text = get_sub_field('text');
$link = get_sub_field('link');
$brands = get_sub_field('brands');

?>

<section class="products-tabs">
    <div class="content-width tabs">
        <div class="title-wrap">
            <div class="title">
                <?php if($title):?>
                    <h2 class="title-h2"><?= $title;?></h2>
                <?php endif;?>

                <?php if($text):?>
                    <p><?= $text;?></p>
                <?php endif;?>
            </div>

            <ul class="tabs-menu table-menu-styles">
                <li><?= __('All', 'watchx');?></li>
                <?php if($brands):
                    foreach ($brands as $brand):?>
                        <li><?= get_term($brand)->name;?></li>
                    <?php endforeach;
                endif;?>
            </ul>
        </div>



        <div class="content">
            <div class="tab-content">
                <div class="tab-item product-container">
                    <?php $prods = new WP_Query([
                        'post_type' => 'product',
                        'posts_per_page' => 4,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    ]);?>
                    <?php if($prods->have_posts()): ?>
                        <div class="swiper product-slider">
                            <div class="swiper-wrapper">
                                <?php while($prods->have_posts()): $prods->the_post();
                                    get_template_part('parts/product');
                                endwhile; wp_reset_postdata();?>
                            </div>
                        </div>
                    <?php endif;?>

                </div>
                <?php if($brands):
                    foreach ($brands as $brand):
                        $prods = new WP_Query([
                            'post_type' => 'product',
                            'posts_per_page' => 4,
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'tax_query' => [
                                [
                                    'taxonomy' => 'pa_brand',
                                    'field' => 'id',
                                    'terms' => $brand,
                                ]
                            ]
                        ]);?>
                        <div class="tab-item product-container">
                            <?php if($prods->have_posts()): ?>
                                <div class="swiper product-slider">
                                    <div class="swiper-wrapper">
                                        <?php while($prods->have_posts()): $prods->the_post();
                                            get_template_part('parts/product');
                                        endwhile; wp_reset_postdata();?>
                                    </div>
                                </div>
                            <?php endif;?>
                        </div>
                    <?php endforeach;
                endif;?>
            </div>
            <?php if( $link ):
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <div class="btn-wrap-all">
                    <a class="btn-default btn-border" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>
