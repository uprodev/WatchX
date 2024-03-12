<?php

$title = get_sub_field('timeline_title');
$text = get_sub_field('description');
$list = get_sub_field('timeline');

?>

<section class="about">
    <div class="content-width">
        <div class="content">
            <div class="main-about">
                <?= $text;?>
            </div>
            <div class="aside-about">
                <?php if($title):?>
                    <h2 class="title-h2"><?= $title;?></h2>
                <?php endif;?>
                <?php if($list):?>
                    <ul class="list-history">
                        <?php foreach($list as $li):?>
                            <li>
                                <?php if($li['year']):?>
                                    <h6><?= $li['year'];?></h6>
                                <?php endif;?>
                                <?php if($li['text']):?>
                                    <p><?= $li['text'];?></p>
                                <?php endif;?>
                            </li>
                        <?php endforeach;?>
                    </ul>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>
