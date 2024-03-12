<?php

$title = get_sub_field('title');
$text = get_sub_field('text');
$link = get_sub_field('link');

?>

<section class="products-tabs">
    <div class="content-width tabs">
        <div class="title-wrap">
            <div class="title">
                <?php if($title):?>
                    <h2 class="title-h2"><?= $title;?></h2>
                <?php endif;?>

                <?php if($text):?>
                    <p><?= $text;?></p>
                <?php endif;?>
            </div>

            <ul class="tabs-menu table-menu-styles">
                <li>All</li>
                <li>Rolex</li>
                <li>Patek Philippe</li>
                <li>Audemars piguet</li>
            </ul>
        </div>



        <div class="content">
            <div class="tab-content">
                <div class="tab-item product-container">
                    <div class="swiper product-slider">
                        <div class="swiper-wrapper">
                            <div class="product-item swiper-slide">
                                <figure>
                                    <a href="#"><img src="img/img-2-1.jpg" alt=""></a>
                                </figure>
                                <div class="text">
                                    <h6 class="title">ROLEX</h6>
                                    <p class="info">GMT-Master II Pepsi</p>
                                    <p class="cost">POA</p>
                                    <div class="btn-wrap">
                                        <a href="#" class="btn-default">Enquire now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item swiper-slide">
                                <figure>
                                    <a href="#"><img src="img/img-2-2.jpg" alt=""></a>
                                </figure>
                                <div class="text">
                                    <h6 class="title">RICHARD MILLE</h6>
                                    <p class="info">Rn029 Le Mans</p>
                                    <p class="cost">£55,240.00
                                        <sup>Incl. VAT</sup></p>
                                    <div class="btn-wrap">
                                        <a href="#" class="btn-default">Enquire now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item swiper-slide">
                                <figure>
                                    <a href="#"><img src="img/img-2-3.jpg" alt=""></a>
                                </figure>
                                <div class="text">
                                    <h6 class="title">AUDEMARS PIGUET</h6>
                                    <p class="info">Royal Oak 26331ST</p>
                                    <p class="cost">£55,240.00
                                        <sup>Incl. VAT</sup></p>
                                    <div class="btn-wrap">
                                        <a href="#" class="btn-default">Enquire now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item swiper-slide">
                                <figure>
                                    <a href="#"><img src="img/img-2-4.jpg" alt=""></a>
                                </figure>
                                <div class="text">
                                    <h6 class="title">RICHARD MILLE</h6>
                                    <p class="info">67-01 Rose Gold</p>
                                    <p class="cost">£55,240.00
                                        <sup>Incl. VAT</sup></p>
                                    <div class="btn-wrap">
                                        <a href="#" class="btn-default">Enquire now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-item product-container">
                    <div class="swiper product-slider">
                        <div class="swiper-wrapper">
                            <div class="product-item swiper-slide">
                                <figure>
                                    <a href="#"><img src="img/img-2-2.jpg" alt=""></a>
                                </figure>
                                <div class="text">
                                    <h6 class="title">RICHARD MILLE</h6>
                                    <p class="info">Rn029 Le Mans</p>
                                    <p class="cost">£55,240.00
                                        <sup>Incl. VAT</sup></p>
                                    <div class="btn-wrap">
                                        <a href="#" class="btn-default">Enquire now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item swiper-slide">
                                <figure>
                                    <a href="#"><img src="img/img-2-3.jpg" alt=""></a>
                                </figure>
                                <div class="text">
                                    <h6 class="title">AUDEMARS PIGUET</h6>
                                    <p class="info">Royal Oak 26331ST</p>
                                    <p class="cost">£55,240.00
                                        <sup>Incl. VAT</sup></p>
                                    <div class="btn-wrap">
                                        <a href="#" class="btn-default">Enquire now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item swiper-slide">
                                <figure>
                                    <a href="#"><img src="img/img-2-4.jpg" alt=""></a>
                                </figure>
                                <div class="text">
                                    <h6 class="title">RICHARD MILLE</h6>
                                    <p class="info">67-01 Rose Gold</p>
                                    <p class="cost">£55,240.00
                                        <sup>Incl. VAT</sup></p>
                                    <div class="btn-wrap">
                                        <a href="#" class="btn-default">Enquire now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item swiper-slide">
                                <figure>
                                    <a href="#"><img src="img/img-2-1.jpg" alt=""></a>
                                </figure>
                                <div class="text">
                                    <h6 class="title">ROLEX</h6>
                                    <p class="info">GMT-Master II Pepsi</p>
                                    <p class="cost">POA</p>
                                    <div class="btn-wrap">
                                        <a href="#" class="btn-default">Enquire now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-item product-container">
                    <div class="swiper product-slider">
                        <div class="swiper-wrapper">
                            <div class="product-item swiper-slide">
                                <figure>
                                    <a href="#"><img src="img/img-2-3.jpg" alt=""></a>
                                </figure>
                                <div class="text">
                                    <h6 class="title">AUDEMARS PIGUET</h6>
                                    <p class="info">Royal Oak 26331ST</p>
                                    <p class="cost">£55,240.00
                                        <sup>Incl. VAT</sup></p>
                                    <div class="btn-wrap">
                                        <a href="#" class="btn-default">Enquire now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item swiper-slide">
                                <figure>
                                    <a href="#"><img src="img/img-2-4.jpg" alt=""></a>
                                </figure>
                                <div class="text">
                                    <h6 class="title">RICHARD MILLE</h6>
                                    <p class="info">67-01 Rose Gold</p>
                                    <p class="cost">£55,240.00
                                        <sup>Incl. VAT</sup></p>
                                    <div class="btn-wrap">
                                        <a href="#" class="btn-default">Enquire now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item swiper-slide">
                                <figure>
                                    <a href="#"><img src="img/img-2-1.jpg" alt=""></a>
                                </figure>
                                <div class="text">
                                    <h6 class="title">ROLEX</h6>
                                    <p class="info">GMT-Master II Pepsi</p>
                                    <p class="cost">POA</p>
                                    <div class="btn-wrap">
                                        <a href="#" class="btn-default">Enquire now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item swiper-slide">
                                <figure>
                                    <a href="#"><img src="img/img-2-2.jpg" alt=""></a>
                                </figure>
                                <div class="text">
                                    <h6 class="title">RICHARD MILLE</h6>
                                    <p class="info">Rn029 Le Mans</p>
                                    <p class="cost">£55,240.00
                                        <sup>Incl. VAT</sup></p>
                                    <div class="btn-wrap">
                                        <a href="#" class="btn-default">Enquire now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-item product-container">
                    <div class="swiper product-slider">
                        <div class="swiper-wrapper">
                            <div class="product-item swiper-slide">
                                <figure>
                                    <a href="#"><img src="img/img-2-4.jpg" alt=""></a>
                                </figure>
                                <div class="text">
                                    <h6 class="title">RICHARD MILLE</h6>
                                    <p class="info">67-01 Rose Gold</p>
                                    <p class="cost">£55,240.00
                                        <sup>Incl. VAT</sup></p>
                                    <div class="btn-wrap">
                                        <a href="#" class="btn-default">Enquire now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item swiper-slide">
                                <figure>
                                    <a href="#"><img src="img/img-2-1.jpg" alt=""></a>
                                </figure>
                                <div class="text">
                                    <h6 class="title">ROLEX</h6>
                                    <p class="info">GMT-Master II Pepsi</p>
                                    <p class="cost">POA</p>
                                    <div class="btn-wrap">
                                        <a href="#" class="btn-default">Enquire now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item swiper-slide">
                                <figure>
                                    <a href="#"><img src="img/img-2-2.jpg" alt=""></a>
                                </figure>
                                <div class="text">
                                    <h6 class="title">RICHARD MILLE</h6>
                                    <p class="info">Rn029 Le Mans</p>
                                    <p class="cost">£55,240.00
                                        <sup>Incl. VAT</sup></p>
                                    <div class="btn-wrap">
                                        <a href="#" class="btn-default">Enquire now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item swiper-slide">
                                <figure>
                                    <a href="#"><img src="img/img-2-3.jpg" alt=""></a>
                                </figure>
                                <div class="text">
                                    <h6 class="title">AUDEMARS PIGUET</h6>
                                    <p class="info">Royal Oak 26331ST</p>
                                    <p class="cost">£55,240.00
                                        <sup>Incl. VAT</sup></p>
                                    <div class="btn-wrap">
                                        <a href="#" class="btn-default">Enquire now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <?php if( $link ):
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <div class="btn-wrap-all">
                    <a class="btn-default btn-border" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>
