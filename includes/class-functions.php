<?php

/*
* @Author 		ParaTheme
* @Folder	 	testimonial/Includes

* Copyright: 	2015 ParaTheme
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 	


class class_testimonial_functions  {
	
	
    public function __construct(){
		

    }
	

		
		
	public function testimonial_grid_items($grid_items = array())
		{

			$grid_items = array(
								'title'=>'Title',
								'thumbnail'=>'Thumbnail',
								'content'=>'Content',
								'position'=>'Position',
								'social'=>'Social',
								'star-rate'=>'Star Rate',								
												
								);

			foreach(apply_filters( 'testimonial_grid_items', $grid_items ) as $item_key=> $item_name)
				{
					$grid_items_list[$item_key] = $item_name;
				}

			
			return $grid_items_list;




			}




		
	public function testimonial_themes($themes = array())
		{

			$themes = array(
							'flat'=>'Slider - Flat',
							'rounded'=>'Slider - Rounded',
							'rounded-vertical'=>'Slider - Rounded Vertical',
							'simple'=>'Gird - Simple',
												
							);

			
			return $themes;

		}
	
		
	public function testimonial_themes_dir($themes_dir = array())
		{
			$main_dir = testimonial_plugin_dir.'themes/';
			
			$themes_dir = array(
							'flat'=>$main_dir.'flat',
							'rounded'=>$main_dir.'rounded',
							'rounded-vertical'=>$main_dir.'rounded-vertical',
							'simple'=>$main_dir.'simple',
						
							);

			
			return $themes_dir;

		}


	public function testimonial_themes_url($themes_url = array())
		{
			$main_url = testimonial_plugin_url.'themes/';
			
			$themes_url = array(
							'flat'=>$main_url.'flat',
							'rounded'=>$main_url.'rounded',
							'rounded-vertical'=>$main_url.'rounded-vertical',
							'simple'=>$main_url.'simple',
						
							);

			return $themes_url;

		}



}


new class_testimonial_functions();

