<?php

$title = get_sub_field('title');
$link = get_sub_field('link');
$text = get_sub_field('text');
$image = get_sub_field('image');
$title_faqs = get_sub_field('title_faqs');
$faqs = get_sub_field('faqs');
$text_faqs = get_sub_field('text_faqs');
$list = get_sub_field('list');
$button = get_sub_field('button');

?>

<section class="exchange exchange-sell">
    <div class="content-width">
        <div class="content">
            <div class="aside">
                <?php if($image):?>
                    <figure>
                        <img src="<?= $image['url'];?>" alt="<?= $image['alt'];?>">
                    </figure>
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
            <div class="main">
                <?php if($title):?>
                    <h2 class="title-h2"><?= $title;?></h2>
                <?php endif;?>

                <?php if($text):?>
                    <p><?= $text;?></p>
                <?php endif;?>

                <?php if($list):?>
                    <ul class="list-block">
                        <?php foreach($list as $li):?>
                            <li>
                                <?php if($li['icon']):?>
                                    <div class="icon-wrap">
                                        <img src="<?= $li['icon']['url'];?>" alt="<?= $li['icon']['alt'];?>">
                                    </div>
                                <?php endif;?>
                                <?php if($li['title']):?>
                                    <h6 class="title"><?= $li['title'];?></h6>
                                <?php endif;?>
                                <?php if($li['text']):?>
                                    <p><?= $li['text'];?></p>
                                <?php endif;?>
                            </li>
                        <?php endforeach;?>
                    </ul>
                <?php endif;?>

                <?php if( $button ):
                    $button_url = $button['url'];
                    $button_title = $button['title'];
                    $button_target = $button['target'] ? $button['target'] : '_self';
                    ?>
                    <div class="btn-wrap">
                        <a class="btn-default" href="<?= esc_url($button_url); ?>" target="<?= esc_attr($button_target); ?>"><?= esc_html($button_title); ?></a>
                    </div>
                <?php endif; ?>

                <div class="faq">
                    <?php if($title_faqs):?>
                        <h2 class="title-h2"><?= $title_faqs;?></h2>
                    <?php endif;?>

                    <?php if($text_faqs):?>
                        <?= $text_faqs;?>
                    <?php endif;?>

                    <?php if($faqs):?>

                        <ul class="accordion">

                            <?php foreach( $faqs as $post): setup_postdata($post); ?>

                                <li class="accordion-item">
                                    <div class="accordion-thumb"><p><?php the_title(); ?></p></div>
                                    <div class="accordion-panel">
                                        <div class="wrap">
                                            <?php the_content();?>
                                        </div>
                                    </div>
                                </li>

                            <?php endforeach; wp_reset_postdata(); ?>

                        </ul>

                    <?php endif;?>

                </div>


            </div>

        </div>
    </div>
</section>