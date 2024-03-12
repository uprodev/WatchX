<?php

$title = get_sub_field('title');
$text = get_sub_field('text');
$testimonials = get_sub_field('testimonials');

?>

<section class="testimonials">
    <div class="content-width">
        <div class="title-wrap">
            <div class="title">
                <?php if($title):?>
                    <h2 class="title-h2"><?= $title;?></h2>
                <?php endif;?>

                <?php if($text):?>
                    <p><?= $text;?></p>
                <?php endif;?>
            </div>
            <div class="nav-wrap">
                <div class="swiper-button-prev testimonials-prev"><img src="<?= get_template_directory_uri();?>/img/icon-5.svg" alt=""></div>
                <div class="swiper-button-next testimonials-next"><img src="<?= get_template_directory_uri();?>/img/icon-5.svg" alt=""></div>

            </div>
        </div>

    </div>

    <?php if( $testimonials ): ?>

        <div class="content-width-slider">
            <div class="content-width ">
                <div class="swiper testimonials-slider">
                    <div class="swiper-wrapper">

                        <?php foreach( $testimonials as $post): setup_postdata($post);

                            get_template_part('parts/testimonial');

                        endforeach; wp_reset_postdata(); ?>

                    </div>
                </div>
            </div>
        </div>

    <?php endif; ?>

</section>
