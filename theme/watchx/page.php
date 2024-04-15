<?php 

get_header(); 


if(get_the_content()) {?>

    <section class="about about-text">
        <div class="content-width">
            <div class="content">
                <div class="main-about">

	                <?php the_content();?>

                </div>
            </div>
        </div>
    </section>

<?php }else{

	get_template_part('templates/flexible');

}


get_footer();