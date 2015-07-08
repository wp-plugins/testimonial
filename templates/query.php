<?php

/*
* @Author 		ParaTheme
* @Folder	 	testimonial/Includes

* Copyright: 	2015 ParaTheme
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 	

	
		global $wp_query;
		


		
		if(($testimonial_content_source=="latest"))
			{
			
				$wp_query = new WP_Query(
					array (
						'post_type' => $testimonial_posttype,
						'orderby' => 'date',
						'order' => 'DESC',
						'posts_per_page' => $testimonial_total_items,
						
						) );
			
			
			}		
		
		elseif(($testimonial_content_source=="older"))
			{
			
				$wp_query = new WP_Query(
					array (
						'post_type' => $testimonial_posttype,
						'orderby' => 'date',
						'order' => 'ASC',
						'posts_per_page' => $testimonial_total_items,
						
						) );

			}		

		elseif(($testimonial_content_source=="year"))
			{
			
				$wp_query = new WP_Query(
					array (
						'post_type' => $testimonial_posttype,
						'year' => $testimonial_content_year,
						'posts_per_page' => $testimonial_total_items,
						) );

			}

		elseif(($testimonial_content_source=="month"))
			{
			
				$wp_query = new WP_Query(
					array (
						'post_type' => $testimonial_posttype,
						'year' => $testimonial_content_month_year,
						'monthnum' => $testimonial_content_month,
						'posts_per_page' => $testimonial_total_items,
						
						) );

			}

		elseif($testimonial_content_source=="taxonomy")
			{
				$wp_query = new WP_Query(
					array (
						'post_type' => $testimonial_posttype,							
						'posts_per_page' => $testimonial_total_items,
						
						'tax_query' => array(
							array(
								   'taxonomy' => $testimonial_taxonomy,
								   'field' => 'id',
								   'terms' => $testimonial_taxonomy_category,
							)
						)
						
						) );
			}


		
		elseif($testimonial_content_source=="post_id")
			{
			
				$wp_query = new WP_Query(
					array (
						'post__in' => $testimonial_post_ids,
						'post_type' => $testimonial_posttype,
						'posts_per_page' => $testimonial_total_items,
						) );
			
			
			}
			
		else
			{
				$wp_query = new WP_Query(
					array (
						'post_type' => $testimonial_posttype,
						'orderby' => 'date',
						'order' => 'DESC',
						'posts_per_page' => $testimonial_total_items,
						
						) );
			
			}
			