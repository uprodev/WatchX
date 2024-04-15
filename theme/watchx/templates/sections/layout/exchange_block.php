<?php

$title = get_sub_field('title');
$link = get_sub_field('link');
$popup_link = get_sub_field('popup_link');
$text = get_sub_field('text');
$image = get_sub_field('image');
$title_faqs = get_sub_field('title_faqs');
$faqs = get_sub_field('faqs');
$text_faqs = get_sub_field('text_faqs');

?>


<section class="exchange">
    <div class="content-width">
        <div class="content">
            <div class="main">

                <?php if($title):?>
                    <h2 class="title-h2"><?= $title;?></h2>
                <?php endif;?>

                <?php if($text):?>
                    <?= $text;?>
                <?php endif;?>

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
                        <a class="btn-default<?= $popup_link?' fancybox':'';?>" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
