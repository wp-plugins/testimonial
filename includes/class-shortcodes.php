<?php

/*
* @Author 		ParaTheme
* @Folder	 	testimonial/Includes
* @version     3.0.5

* Copyright: 	2015 ParaTheme
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 	


class class_testimonial_shortcodes  {
	
	
    public function __construct(){
		
		add_shortcode( 'testimonial_sc', array( $this, 'testimonial_display' ) );

    }
	
	public function testimonial_display($atts, $content = null ) {
			$atts = shortcode_atts(
				array(
					'id' => "",
	
					), $atts);
	
				$html = '';
				$post_id = $atts['id'];
	
				$testimonial_themes = get_post_meta( $post_id, 'testimonial_themes', true );
				$testimonial_license_key = get_option('testimonial_license_key');
				
/*

				if(empty($testimonial_license_key))
					{
						return '<b>"'.testimonial_plugin_name.'" Error:</b> Please activate your license.';
					}

*/
				
				$class_testimonial_functions = new class_testimonial_functions();
				$testimonial_themes_dir = $class_testimonial_functions->testimonial_themes_dir();
				$testimonial_themes_url = $class_testimonial_functions->testimonial_themes_url();

				//var_dump($testimonial_themes_url);
				
				
				$html.= '<link  type="text/css" media="all" rel="stylesheet"  href="'.$testimonial_themes_url[$testimonial_themes].'/style.css" >';				

				include $testimonial_themes_dir[$testimonial_themes].'/index.php';				
	
				return $html;
	
	
	}

}


new class_testimonial_shortcodes();

