<?php

$title = get_sub_field('title');
$text = get_sub_field('text');
$insights = get_sub_field('insights');

?>

<section class="item-4x">
    <div class="content-width">
        <div class="title-wrap">
            <?php if($title):?>
                <h2 class="title-h2"><?= $title;?></h2>
            <?php endif;?>

            <?php if($text):?>
                <p><?= $text;?></p>
            <?php endif;?>
        </div>
        <?php if($insights):?>
            <div class="swiper market-slider">
                <div class="swiper-wrapper">
                    <?php foreach ($insights as $ins):
                    $link = $ins['link'];

                    if( $link ) {
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    }
                    ?>
                        <div class="swiper-slide">
                            <figure>
                                <a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>">
                                    <?php if($ins['image']):?>
                                        <img src="<?= $ins['image']['url'];?>" alt="<?= $ins['image']['alt'];?>">
                                    <?php endif;?>
                                </a>
                            </figure>
                            <div class="text">
                                <?php if($ins['title']):?>
                                <p class="label"><?= $ins['title'];?></p>
                                <?php endif;?>
                                <?php if($ins['description']):?>
                                    <p class="title"><?= $ins['description'];?></p>
                                <?php endif;?>
                                <div class="link-wrap">
                                    <a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        <?php endif;?>
    </div>
</section>
