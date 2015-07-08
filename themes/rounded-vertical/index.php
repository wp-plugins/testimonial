<?php

/*
* @Author 		ParaTheme
* @Folder	 	testimonial/Includes

* Copyright: 	2015 ParaTheme
*/

if ( ! defined('ABSPATH')) exit;
		
		
		include testimonial_plugin_dir.'/templates/variables.php';
		
		$html.= '
		<div  class="testimonial-container" style="background-image:url('.$testimonial_bg_img.')">
		<ul  id="testimonial-'.$post_id.'" class="owl-carousel testimonial-items testimonial-'.$testimonial_themes.'">';
		include testimonial_plugin_dir.'/templates/query.php';

								
		
		if ( $wp_query->have_posts() ) :
		
		
		
		$i=0;
		
		while ( $wp_query->have_posts() ) : $wp_query->the_post();
		
			$testimonial_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), $testimonial_items_thumb_size );
		$testimonial_thumb_url = $testimonial_thumb['0'];
		
		
		
		
		if($i%2==0)
			{
				$even_odd = "even";
			}
		else
			{
				$even_odd = "odd";
			}
			
			
		
		$html.= '<li style="width:'.$testimonial_items_max_width.'; text-align:'.$testimonial_item_text_align.';" class="testimonial-item '.$even_odd.'" >';
		$html.= '<div class="testimonial-post">';		
		

		
		if(!empty($testimonial_thumb_url))
			{
					$html.= '
		<div style="max-height:'.$testimonial_items_thumb_max_hieght.';" class="testimonial-thumb">
			<img src="'.$testimonial_thumb_url.'" />
		</div>';
			}


	$testimonial_member_position = get_post_meta(get_the_ID(), 'testimonial_member_position', true );
	$testimonial_fb = get_post_meta(get_the_ID(), 'testimonial_fb', true );
	$testimonial_twitter = get_post_meta( get_the_ID(), 'testimonial_twitter', true );
	$testimonial_google = get_post_meta( get_the_ID(), 'testimonial_google', true );
	$testimonial_pinterest = get_post_meta( get_the_ID(), 'testimonial_pinterest', true );	
	$testimonial_ratings = get_post_meta( get_the_ID(), 'testimonial_ratings', true );	

	
			


			
			
			
			$html.= '<div class="testimonial-content" >';
			
			include testimonial_plugin_dir.'/templates/title.php';


			if(!empty($testimonial_member_position))
				{
					include testimonial_plugin_dir.'/templates/position.php';
				}



			$html.= '<div class="testimonial-social" >';
			
			if(!empty($testimonial_fb))
				{
					$html.= '<span class="fb">
						<a target="_blank" href="'.$testimonial_fb.'"> </a>
					</span>';
				}

			if(!empty($testimonial_twitter))
				{
					$html.= '<span class="twitter">
						<a target="_blank" href="'.$testimonial_twitter.'"></a>
					</span>';
				}
				
			if(!empty($testimonial_google))
				{
					$html.= '<span class="gplus">
						<a target="_blank" href="'.$testimonial_google .'"></a>
					</span>';
				}
				
			if(!empty($testimonial_pinterest))
				{
					$html.= '<span class="pinterest">
						<a target="_blank" href="'.$testimonial_pinterest .'"></a>
					</span>';
				}
			$html.= '</div>';
			


			include testimonial_plugin_dir.'/templates/content.php';
			include testimonial_plugin_dir.'/templates/star-rate.php';	
			
			$html.= '</div>			
			
			</div>

		</li>';
		
		
		$i++;
		
		endwhile;
		
		wp_reset_query();
		endif;
		

			
		$html.= '</ul></div>';
		
		include testimonial_plugin_dir.'/templates/scripts.php';