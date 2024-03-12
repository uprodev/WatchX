<?php

$title = get_sub_field('title');
$text = get_sub_field('text');
$image = get_sub_field('image');
$logos = get_sub_field('logos');
$btn1 = get_sub_field('button_1');
$btn2 = get_sub_field('button_2');

?>

<section class="home-banner">
    <div class="bg">
        <?php if($image):?>
            <img src="<?= $image['url'];?>" alt="<?= $image['alt'];?>">
        <?php endif;?>
    </div>
    <div class="content-width">
        <div class="text-wrap">
            <?php if($title):?>
                <h1><?= $title;?></h1>
            <?php endif;?>

            <?php if($text):?>
                <p><?= $text;?></p>
            <?php endif;?>
            <div class="btn-wrap">
                <?php if( $btn1 ):
                    $btn1_url = $btn1['url'];
                    $btn1_title = $btn1['title'];
                    $btn1_target = $btn1['target'] ? $btn1['target'] : '_self';
                    ?>
                    <a class="btn-default" href="<?= esc_url($btn1_url); ?>" target="<?= esc_attr($btn1_target); ?>"><?= esc_html($btn1_title); ?></a>
                <?php endif; ?>
                <?php if( $btn2 ):
                    $btn2_url = $btn2['url'];
                    $btn2_title = $btn2['title'];
                    $btn2_target = $btn2['target'] ? $btn2['target'] : '_self';
                    ?>
                    <a class="btn-default btn-black" href="<?= esc_url($btn2_url); ?>" target="<?= esc_attr($btn2_target); ?>"><?= esc_html($btn2_title); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php if($logos):?>
        <div class="slider-wrap">
            <div class="swiper logo-slider">
                <div class="swiper-wrapper">

                    <?php foreach($logos as $logo):?>

                        <div class="swiper-slide">
                            <img src="<?= $logo['url'];?>" alt="<?= $logo['alt'];?>">
                        </div>

                    <?php endforeach;?>

                </div>
            </div>
        </div>
    <?php endif;?>
</section>
