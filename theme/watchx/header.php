<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo wp_get_document_title(); ?></title>
		<?php wp_head();?>
</head>

<body <?php body_class() ?>>
    <header>
        <div class="top-info-line">
            <div class="content-width">
                <div class="lang-wrap">
                    
                    <?= do_shortcode('[yaycurrency-switcher]');?>

                </div>
                <div class="top-info">

                    <?php $top_info = get_field('top_info', 'options');
                    $hb = get_field('header_button', 'options');
                    $hbi = get_field('header_button_icon', 'options');

                    if($top_info):?>

                        <ul>
                            <?php foreach($top_info as $ti):
                                $icon = $ti['icon'];
                                $link = $ti['link'];

                                if( $link ):
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <li>
                                        <a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>">
                                            <?php if($icon):?>
                                                <img src="<?= $icon['url'];?>" alt="<?= $icon['alt'];?>">
                                            <?php endif;?>
                                            <?= esc_html($link_title); ?>
                                        </a>
                                    </li>
                                <?php endif;

                            endforeach;?>

                        </ul>
                    <?php endif;?>
                </div>
                <?php if( $hb ):
                    $hb_url = $hb['url'];
                    $hb_title = $hb['title'];
                    $hb_target = $hb['target'] ? $hb['target'] : '_self';
                    ?>
                    <div class="tel-wrap">
                        <a href="<?= esc_url($hb_url); ?>" target="<?= esc_attr($hb_target); ?>">
                            <?php if($hbi):?>
                                <img src="<?= $hbi['url'];?>" alt="<?= $hbi['alt'];?>">
                            <?php endif;?>
                            <?= esc_html($hb_title); ?>
                        </a>
                    </div>
                <?php endif; ?>

            </div>
        </div>
        <div class="top-line">
            <div class="content-width">
                <div class="open-menu">
                    <a href="#">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
                <div class="logo-wrap">
                    <?php
                        $logo = get_field('logo', 'options');
                        $logo_mob = get_field('logo_mob', 'options');
                        ?>
                    <a href="<?= get_home_url();?>">
                        <?php if($logo):?>
                            <img src="<?= $logo['url'];?>" alt="<?= $logo['alt'];?>">
                        <?php endif;?>
                        <?php if($logo_mob):?>
                            <img src="<?= $logo_mob['url'];?>" alt="<?= $logo_mob['alt'];?>" class="mob">
                        <?php endif;?>
                    </a>
                </div>
                <nav class="top-menu">
                    <?php wp_nav_menu([
                        'theme_location' => 'main-menu',
                        'container' => false,
                        'menu_class' => '',
                    ]);?>
                </nav>
                <div class="icon-wrap">
                    <div class="search-wrap">
                        <a href="#">
                            <img src="<?= get_template_directory_uri();?>/img/icon-3-1.svg" alt="">
                        </a>
                    </div>
                    <div class="user-wrap">
                        <a href="<?= get_permalink(get_option( 'woocommerce_myaccount_page_id' ));?>">
                            <img src="<?= get_template_directory_uri();?>/img/icon-3-2.svg" alt="">
                        </a>
                    </div>
                    <div class="cart-wrap">
                        <a href="<?= wc_get_cart_url();?>">
                            <img src="<?= get_template_directory_uri();?>/img/icon-3-3.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-block">
            <div class="content-width">
                <?= do_shortcode('[fibosearch]'); ?>
            </div>
        </div>
    </header>

    <?php get_template_part('parts/menu');?>

    <main>