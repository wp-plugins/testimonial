<?php

/*
* @Author 		ParaTheme
* @Folder	 	testimonial/Includes

* Copyright: 	2015 ParaTheme
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 	

	$html.= '<div class="star-rate" style="color:'.$testimonial_items_content_color.';font-size:'.$testimonial_items_content_font_size.'">';
	
	if(!empty($testimonial_star_icon_url)){
		
		$icon_style = 'background:url('.$testimonial_star_icon_url.') repeat scroll 0 0 / 100% auto rgba(0, 0, 0, 0)';
		
		
		
		}
	else
		{
			$icon_style = '';
		}
	
	for($i=1; $i<=$testimonial_ratings; $i++){
		
		$html.= '<span class="ratings" style="'.$icon_style.'"></span>';
	
	}
	
	$html.= '</div>';
		