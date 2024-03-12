<?php 

get_header(); 


if(get_the_content()) {

	the_content();

}else{

	get_template_part('templates/flexible');

}


get_footer();