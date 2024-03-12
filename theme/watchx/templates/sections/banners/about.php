<?php

$title = get_sub_field('title');
$link = get_sub_field('link');
$image = get_sub_field('image');

?>

<section class="about-banner">
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

            <?php if( $link ):
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <div class="btn-wrap">
                    <a class="btn-default" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>
