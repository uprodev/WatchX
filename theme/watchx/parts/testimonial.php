<?php

$text = get_the_content();
$img = get_the_post_thumbnail_url();
$plchld = get_field('placeholder_user', 'options');
$starspl = get_field('stars', 'options');
$stars = get_field('stars');
$date = get_field('date');

if($img){
    $src = $img;
}else{
    $src = $plchld;
}

if($stars){
    $pls = $stars;
}else{
    $pls = $starspl;
}

?>

<div class="swiper-slide">
    <div class="user-wrap">
        <?php if($src):?>
            <figure>
                <img src="<?= $src;?>" alt="testimonial">
            </figure>
        <?php endif;?>
        <div class="text">
            <p class="name"><?php the_title();?></p>
            <?php if($date):?>
                <p><?= $date;?></p>
            <?php else:?>
                <p><?= human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago';?></p>
            <?php endif;?>
        </div>
    </div>

    <?php if($text):?>
        <div class="wrap">
            <?= $text;?>
        </div>
    <?php endif;?>

    <?php if($pls):?>
        <div class="stars-wrap">
                <img src="<?= $pls;?>" alt="stars">
        </div>
    <?php endif;?>

</div>
