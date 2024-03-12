<?php

$title = get_sub_field('title');
$text = get_sub_field('text');
$link = get_sub_field('link');
$image = get_sub_field('image');
$getlink = get_sub_field('get_touch_link');

?>

<section class="img-text">
    <div class="content-width">
        <div class="content">
            <?php if($image):?>
                <figure>
                    <img src="<?= $image['url'];?>" alt="<?= $image['alt'];?>">
                </figure>
            <?php endif;?>
            <div class="text">
                <?php if($title):?>
                    <h2 class="title-h2"><?= $title;?></h2>
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
        <?php if( $getlink ):
            $getlink_url = $getlink['url'];
            $getlink_title = $getlink['title'];
            $getlink_target = $getlink['target'] ? $getlink['target'] : '_self';
            ?>
            <div class="btn-wrap-full">
                <a class="btn-default btn-border btn-big" href="<?= esc_url($getlink_url); ?>" target="<?= esc_attr($getlink_target); ?>"><img src="<?= get_template_directory_uri();?>/img/icon-6.svg" alt="icon"><?= esc_html($getlink_title); ?></a>
            </div>
        <?php endif; ?>
    </div>
</section>
