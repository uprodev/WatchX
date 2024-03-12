<?php

$title = get_field('title_download', 'options');
$text = get_field('text_download', 'options');
$form = get_field('form_download', 'options');
$image = get_field('image_download', 'options');

?>

<section class="download-block">
    <div class="content-width">
        <div class="content">
            <?php if($image):?>
                <figure>
                    <img src="<?= $image['url'];?>" alt="<?= $image['alt'];?>">
                </figure>
            <?php endif;?>
            <div class="text">
                <?php if($title):?>
                    <h2 class="title-h3"><?= $title;?></h2>
                <?php endif;?>

                <?php if($text):?>
                    <p><?= $text;?></p>
                <?php endif;?>

                <?php if($form){
                    echo do_shortcode('[contact-form-7 id="'.$form.'"]');
                }?>

            </div>
        </div>
    </div>
</section>
