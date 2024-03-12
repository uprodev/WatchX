<?php

    get_template_part('parts/social');

    get_template_part('parts/download');

$foot_title1 = get_field('title_footer_menu_1', 'options');
$foot_title2 = get_field('title_footer_menu_2', 'options');
$foot_title3 = get_field('title_footer_menu_3', 'options');
$foot_title4 = get_field('title_footer_menu_4', 'options');
$copyright = get_field('copyright_text', 'options');
$pays = get_field('pays_images', 'options');

?>
</main>

<footer>
    <div class="content-width">
        <div class="content">
            <div class="item item-1">
                <ul>
                    <?php if($foot_title1):?>
                        <li><h6><?= $foot_title1;?></h6></li>
                    <?php endif;

                    wp_nav_menu([
                        'theme_location' => 'foot-menu',
                        'container' => false,
                        'menu_class' => '',
                        'items_wrap' => '%3$s',
                    ]);?>
                </ul>
            </div>
            <div class="item item-2">
                <ul>
                    <?php if($foot_title2):?>
                        <li><h6><?= $foot_title2;?></h6></li>
                    <?php endif;

                    wp_nav_menu([
                        'theme_location' => 'foot-menu2',
                        'container' => false,
                        'menu_class' => '',
                        'items_wrap' => '%3$s',
                    ]);?>
                </ul>
            </div>
            <div class="item item-3">
                <ul>
                    <?php if($foot_title3):?>
                        <li><h6><?= $foot_title3;?></h6></li>
                    <?php endif;

                    wp_nav_menu([
                        'theme_location' => 'foot-menu3',
                        'container' => false,
                        'menu_class' => '',
                        'items_wrap' => '%3$s',
                    ]);?>
                </ul>
            </div>
            <div class="item item-4">
                <ul>
                    <?php if($foot_title4):?>
                        <li><h6><?= $foot_title4;?></h6></li>
                    <?php endif;

                    wp_nav_menu([
                        'theme_location' => 'foot-menu4',
                        'container' => false,
                        'menu_class' => '',
                        'items_wrap' => '%3$s',
                    ]);?>
                </ul>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="content-width">
            <?php wp_nav_menu([
                'theme_location' => 'foot-bottom',
                'container' => false,
                'menu_class' => 'menu',
            ]);?>
            <div class="cart-wrap">
                <?php if($pays):?>
                    <ul class="list">
                        <?php foreach( $pays as $im ): ?>
                            <li><img src="<?= $im['url'];?>" alt="<?= $im['alt'];?>"></li>
                        <?php endforeach;?>
                    </ul>
                <?php endif;?>

                <?php if($copyright):?>
                    <p><?= $copyright;?></p>
                <?php endif;?>

            </div>
        </div>
    </div>
</footer>

  <?php wp_footer(); ?>
	</body>
</html>
