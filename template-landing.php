<?php 
// Template Name: landing
?>
<?php 
get_header('landing');

while(have_posts()): the_post();
?>
<?php Global $sections, $index;
	$sections=get_field('sections');
?>
<?php 
	for($index=0;$index<count($sections);$index++){
		if($sections[$index]['acf_fc_layout']=='hero_section'){
			get_template_part('templates/landing/section','hero'); 
		}else if($sections[$index]['acf_fc_layout']=='realtor'){
			get_template_part('templates/landing/section','reltor');
		}else if($sections[$index]['acf_fc_layout']=='slider_section'){
			get_template_part('templates/landing/section','slider');
		}else if($sections[$index]['acf_fc_layout']=='promotion'){
			get_template_part('templates/landing/section','promotion');
		}else if($sections[$index]['acf_fc_layout']=='duel_content'){
			get_template_part('templates/landing/section','duel-content');
		}else if($sections[$index]['acf_fc_layout']=='centered_content'){
			get_template_part('templates/landing/section','centered-content');
		}else if($sections[$index]['acf_fc_layout']=='content_with_image'){
			get_template_part('templates/landing/section','content-with-image');
		}else if($sections[$index]['acf_fc_layout']=='promotion_overlay'){
			get_template_part('templates/landing/section','promotion-overlay');
		}else if($sections[$index]['acf_fc_layout']=='content_with_side_image'){
			get_template_part('templates/landing/section','content-with-side-image');
		}else if($sections[$index]['acf_fc_layout']=='form_section'){
			get_template_part('templates/landing/section','form');
		}
	}
?>
<?php 
endwhile;
get_footer('landing'); ?>