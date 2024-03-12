<?php

$sn = get_field('social_networks', 'options');

if($sn):
?>

    <section class="soc-block">
        <div class="content-width">
            <ul>
                <?php foreach($sn as $item):?>
                    <li><a href="<?= $item['link'];?>" target="_blank"><img src="<?= $item['icon']['url'];?>" alt="<?= $item['icon']['alt'];?>"></a></li>
                <?php endforeach;?>
            </ul>
        </div>
    </section>

<?php endif;