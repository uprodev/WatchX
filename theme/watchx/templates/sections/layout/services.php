<?php

$title = get_sub_field('title');
$text = get_sub_field('text');
$link = get_sub_field('link');
$services = get_sub_field('services');

?>


<section class="service-block">
    <div class="content-width">
        <div class="title-wrap">
            <?php if($title):?>
                <h2 class="title-h2"><?= $title;?></h2>
            <?php endif;?>

            <?php if($text):?>
                <p><?= $text;?></p>
            <?php endif;?>
        </div>

        <?php if($services): $s=1;?>
            <div class="content">
                <?php foreach ($services as $service):?>
                    <div class="item item-<?= $s==2?'2':'1';?>-<?= ($s==1 || $s==2)?'3':'2';?>">
                        <?php if($service['image']):?>
                            <div class="bg">
                                <img src="<?= $service['image']['url'];?>" alt="<?= $service['image']['alt'];?>">
                            </div>
                        <?php endif;?>
                        <div class="wrap">
                            <?php if($service['title']):?>
                                <p class="title"><?= $service['title'];?></p>
                            <?php endif;?>
                            <?php if($service['text']):?>
                                <p><?= $service['text'];?></p>
                            <?php endif;?>
                            <?php $link = $service['link'];

                            if( $link ):
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <div class="link-wrap">
                                    <a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                <?php $s++; endforeach;?>
            </div>
        <?php endif;?>

        <?php if( $link ):
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <div class="btn-wrap">
                <a class="btn-default btn-border btn-big" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><img src="<?= get_template_directory_uri();?>/img/icon-6.svg" alt="<?= esc_html($link_title); ?>"><?= esc_html($link_title); ?></a>
            </div>
        <?php endif; ?>

    </div>
</section>
