<?php

$title = get_sub_field('title');
$text = get_sub_field('text');
$links = get_sub_field('links');
$sn = get_sub_field('socials_links');
$title_form = get_sub_field('title_form');
$form = get_sub_field('form');

?>

<section class="contact">
    <div class="content-width">
        <div class="content">
            <div class="title-wrap">
                <?php if($title):?>
                    <h1><?= $title;?></h1>
                <?php endif;?>

                <?php if($text):?>
                    <p><?= $text;?></p>
                <?php endif;?>
                <?php if($links):?>
                    <div class="btn-wrap">
                        <?php foreach($links as $li):
                            $icon = $li['icon'];
                            $link = $li['link'];

                            if( $link ):
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="btn-default btn-border" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>">
                                    <?php if($icon):?>
                                        <img src="<?= $icon['url'];?>" alt="<?= $icon['alt'];?>">
                                    <?php endif;?>
                                    <?= esc_html($link_title); ?>
                                </a>
                            <?php endif; ?>
                        <?php endforeach;?>
                    </div>
                <?php endif;?>
                <?php if($sn):?>
                    <ul class="soc-list">
                        <?php foreach($sn as $item):?>
                            <li><a href="<?= $item['link'];?>" target="_blank"><img src="<?= $item['icon']['url'];?>" alt="<?= $item['icon']['alt'];?>"></a></li>
                        <?php endforeach;?>
                    </ul>
                <?php endif;?>
            </div>
            <div class="form form-default">
                <?php if($title_form):?>
                <h3 class="title-h3"><?= $title_form;?></h3>
                <?php endif;?>

                <?php if($form){
                    echo do_shortcode('[contact-form-7 id="'.$form.'"]');
                }?>

            </div>
        </div>
    </div>
</section>
