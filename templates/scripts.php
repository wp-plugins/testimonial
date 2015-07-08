<?php

/*
* @Author 		ParaTheme
* @Folder	 	testimonial/Includes

* Copyright: 	2015 ParaTheme
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 	

		$html.='<script>
		jQuery(document).ready(function($)
		{
			$("#testimonial-'.$post_id.'").owlCarousel({
				
				items : '.$testimonial_column_number.', //10 items above 1000px browser width
				itemsDesktop : [1000,1], //5 items between 1000px and 901px
				itemsDesktopSmall : [900,1], // betweem 900px and 601px
				itemsTablet: [600,1], //2 items between 600 and 0
				itemsMobile : false, 
				navigationText : ["",""],
				';
				
			
		if($testimonial_auto_play=="true")
			{
				
		$html.='autoPlay: '.$testimonial_auto_play.',';
		
			}	
		
		if($testimonial_stop_on_hover=="true")
			{
				
		$html.='stopOnHover: '.$testimonial_stop_on_hover.',';
		
			}				
				
		if($testimonial_slider_navigation=="true")
			{
				
		$html.='navigation: '.$testimonial_slider_navigation.',';
		
			}				
				
		if(!empty($testimonial_slider_pagination))
			{
				
		$html.='pagination: '.$testimonial_slider_pagination.',';
		
			}
		else
			{
			$html.='pagination: false,';
			}
				
				
		if(!empty($testimonial_slider_pagination_count))
			{
				
		$html.='paginationNumbers: true,';
		
			}
		else
			{
			$html.='paginationNumbers: false,';
			}				
				
				
				
		if(!empty($testimonial_slide_speed))
			{
				
		$html.='slideSpeed: '.$testimonial_slide_speed.',';
		
			}
			
				
		if(!empty($testimonial_pagination_slide_speed))
			{
				
		$html.='paginationSpeed: '.$testimonial_pagination_slide_speed.',';
		
			}			
			
			
		if(!empty($testimonial_slider_touch_drag))
			{
				
		$html.='touchDrag : true,';
		
			}			
		else
			{
			$html.='touchDrag: false,';
			}
			
			
			
		if(!empty($testimonial_slider_mouse_drag ))
			{
				
		$html.='mouseDrag  : true,';
		
			}			
		else
			{
			$html.='mouseDrag : false,';
			}			
			
			
			
			
							
				
				
				
		$html.='});
		
		});</script>';

