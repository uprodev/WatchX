<?php

/*

Template Name: Brands

*/

$alpha = range("a","z");

get_header();

$desc = get_field('description');
$title = get_field('title');
$text = get_field('text');
$brands = get_field('brands');

?>

    <section class="category-banner">
        <div class="content-width">
            <div class="text-wrap">
                <h1><?php the_title();?></h1>
                <?php if($desc):?>
                    <p><?= $desc;?></p>
                <?php endif;?>
                <?php if($desc):?>
                    <ul class="list-brand">
                        <?php foreach($brands as $brand):
                            $img = get_field('thumbnail','pa_brand_'.$brand);

                        ?>
                            <li>
                                <a href="<?= get_term_link($brand);?>">
                                    <figure>
                                        <img src="<?= $img?$img['url']:get_template_directory_uri().'/img/img-10.png';?>" alt="">
                                    </figure>
                                    <div class="text">
                                        <p><?= get_term( $brand )->name;?></p>
                                    </div>
                                </a>
                            </li>
                        <?php endforeach;?>
                    </ul>
                <?php endif;?>
            </div>
        </div>
    </section>

    <section class="search-brand">
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
                <div class="form-wrap form-search">
                    <form action="#">
                        <label for="search"></label>
                        <input type="search" name="search" id="search" placeholder="<?= __('Search all brands...', 'watchx');?>">
                        <button type="submit" class="btn"><img src="<?= get_template_directory_uri();?>/img/icon-search.svg" alt=""></button>
                    </form>
                </div>
            </div>
            <div class="content search-br">
                <?php foreach ($alpha as $letr):
                    $terms = get_terms( array(
                        'taxonomy' => 'pa_brand',
                        '__first_letter' => $letr,
                        'hide_empty' => false
                    ) );

                    if($terms):?>

                        <div class="item" data-lettre="<?= $letr;?>">
                            <h6 class="title-item"><?= $letr;?></h6>
                            <ul>
                                <?php foreach($terms as $term):?>

                                    <li data-name="<?= strtolower($term->name);?>">
                                        <a href="<?= get_term_link($term->term_id);?>"><?= $term->name;?></a>
                                    </li>

                                <?php endforeach;?>
                            </ul>
                        </div>

                    <?php endif;

                endforeach;?>

            </div>
        </div>
    </section>

<?php get_footer();
