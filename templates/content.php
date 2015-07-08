<?php

/*
* @Author 		ParaTheme
* @Folder	 	testimonial/Includes

* Copyright: 	2015 ParaTheme
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 	

	$html.= '<p style="color:'.$testimonial_items_content_color.';font-size:'.$testimonial_items_content_font_size.'"><span class="quote"></span>'.get_the_content().'</p>';