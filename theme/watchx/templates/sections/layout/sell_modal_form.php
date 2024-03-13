<?php

$title = get_sub_field('title');
$form = get_sub_field('form');

?>
<div class="sell-popup" id="sell" style="display: none;">
    <div class="main">
        <div class="top">
            <?php if($title):?>
                <h6><?= $title;?></h6>
            <?php endif;?>
            <div class="close-menu">
                <a href="#" data-fancybox-close><img src="<?= get_template_directory_uri();?>/img/close.svg" alt=""></a>
            </div>
        </div>
        <?php if($form):?>
            <div class="wrap">
                <?= do_shortcode('[contact-form-7 id="'.$form.'"]');?>
            </div>
        <?php endif;?>
    </div>
</div>


