<?php

$title = get_sub_field('title');
$link = get_sub_field('link');
$text = get_sub_field('text');

?>

<section class="exchange-banner">
    <div class="bg"></div>
    <div class="content-width">
        <div class="text-wrap">

            <?php if($title):?>
                <h1><?= $title;?></h1>
            <?php endif;?>

            <?php if($text):?>
                <p><?= $text;?></p>
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
