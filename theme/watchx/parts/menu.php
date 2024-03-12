<div class="menu-responsive" id="menu-responsive" style="display: none">
    <div class="top">
        <div class="close-menu">
            <a href="#"><img src="<?= get_template_directory_uri();?>/img/close-popup.svg" alt=""></a>
        </div>
    </div>
    <div class="wrap">
        <div class="logo-wrap">
            <?php $logo = get_field('logo', 'options');?>
            <a href="<?= get_home_url();?>">
                <?php if($logo):?>
                    <img src="<?= $logo['url'];?>" alt="<?= $logo['alt'];?>">
                <?php endif;?>
            </a>
        </div>
        <nav class="mob-menu-land">
            <?php wp_nav_menu([
                'theme_location' => 'main-menu',
                'container' => false,
                'menu_class' => '',
            ]);?>

        </nav>
    </div>
</div>