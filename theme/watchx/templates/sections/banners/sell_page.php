<?php

$title = get_sub_field('title');
$text = get_sub_field('text');
$image = get_sub_field('image');
$list = get_sub_field('list');
$link = get_sub_field('link');

?>

<section class="home-banner sell-banner">
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

            <?php if( $link ):
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <div class="btn-wrap">
                    <a class="btn-default fancybox" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
                </div>
            <?php endif; ?>

        </div>
    </div>

    <?php if($list):?>

        <ul class="list-info">

            <?php foreach ($list as $li):?>

                <li>
                    <figure>
                        <?php if($li['icon']):?>
                            <img src="<?= $li['icon']['url'];?>" alt="<?= $li['icon']['alt'];?>">
                        <?php endif;?>
                    </figure>
                    <div class="text-info">
                        <p><?= $li['bold_text']?'<b>'.$li['bold_text'].'</b>':'';?> <?= $li['text']?$li['text']:'';?></p>
                    </div>
                </li>

            <?php endforeach;?>

        </ul>

    <?php endif;?>

</section>
