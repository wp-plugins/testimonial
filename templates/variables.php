<?php

/*
* @Author 		ParaTheme
* @Folder	 	testimonial/Includes

* Copyright: 	2015 ParaTheme
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 	

		$testimonial_bg_img = get_post_meta( $post_id, 'testimonial_bg_img', true );
		$testimonial_themes = get_post_meta( $post_id, 'testimonial_themes', true );
		$testimonial_item_text_align = get_post_meta( $post_id, 'testimonial_item_text_align', true );
				
		$testimonial_total_items = get_post_meta( $post_id, 'testimonial_total_items', true );		
		$testimonial_column_number = get_post_meta( $post_id, 'testimonial_column_number', true );

		$testimonial_auto_play = get_post_meta( $post_id, 'testimonial_auto_play', true );
		$testimonial_stop_on_hover = get_post_meta( $post_id, 'testimonial_stop_on_hover', true );
		$testimonial_slider_navigation = get_post_meta( $post_id, 'testimonial_slider_navigation', true );
		$testimonial_slide_speed = get_post_meta( $post_id, 'testimonial_slide_speed', true );
				
		$testimonial_slider_pagination = get_post_meta( $post_id, 'testimonial_slider_pagination', true );
		$testimonial_pagination_slide_speed = get_post_meta( $post_id, 'testimonial_pagination_slide_speed', true );
		$testimonial_slider_pagination_count = get_post_meta( $post_id, 'testimonial_slider_pagination_count', true );
		
		$testimonial_slider_pagination_bg = get_post_meta( $post_id, 'testimonial_slider_pagination_bg', true );
		$testimonial_slider_pagination_text_color = get_post_meta( $post_id, 'testimonial_slider_pagination_text_color', true );		
		
		$testimonial_slider_touch_drag = get_post_meta( $post_id, 'testimonial_slider_touch_drag', true );
		$testimonial_slider_mouse_drag = get_post_meta( $post_id, 'testimonial_slider_mouse_drag', true );
		
		$testimonial_content_source = get_post_meta( $post_id, 'testimonial_content_source', true );
		$testimonial_content_year = get_post_meta( $post_id, 'testimonial_content_year', true );
		$testimonial_content_month = get_post_meta( $post_id, 'testimonial_content_month', true );
		$testimonial_content_month_year = get_post_meta( $post_id, 'testimonial_content_month_year', true );
		
		$testimonial_taxonomy = 'testimonial_group';
		$testimonial_taxonomy_category = get_post_meta( $post_id, 'testimonial_taxonomy_category', true );	
		
		$testimonial_posttype = 'testimonial';
		
		
		$testimonial_post_ids = get_post_meta( $post_id, 'testimonial_post_ids', true );


		$testimonial_items_title_color = get_post_meta( $post_id, 'testimonial_items_title_color', true );			
		$testimonial_items_title_font_size = get_post_meta( $post_id, 'testimonial_items_title_font_size', true );		

		$testimonial_items_position_color = get_post_meta( $post_id, 'testimonial_items_position_color', true );
		$testimonial_items_position_font_size = get_post_meta( $post_id, 'testimonial_items_position_font_size', true );

		$testimonial_items_content_color = get_post_meta( $post_id, 'testimonial_items_content_color', true );
		$testimonial_items_content_font_size = get_post_meta( $post_id, 'testimonial_items_content_font_size', true );
		$testimonial_star_icon_url = get_post_meta( $post_id, 'testimonial_star_icon_url', true );
		
		$testimonial_items_thumb_size = get_post_meta( $post_id, 'testimonial_items_thumb_size', true );
		$testimonial_items_max_width = get_post_meta( $post_id, 'testimonial_items_max_width', true );		
		$testimonial_items_thumb_max_hieght = get_post_meta( $post_id, 'testimonial_items_thumb_max_hieght', true );
		$testimonial_items_thumb_max_hieght = get_post_meta( $post_id, 'testimonial_items_thumb_max_hieght', true );		