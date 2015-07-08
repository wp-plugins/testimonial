<?php

/*
* @Author 		ParaTheme
* @Folder	 	testimonial/Includes


* Copyright: 	2015 ParaTheme
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 	


class testimonial_class_settings  {
	
	
    public function __construct(){

		add_action( 'admin_menu', array( $this, 'admin_menu' ), 12 );
    }
	
	
	public function admin_menu() {

		add_submenu_page('edit.php?post_type=testimonial_sc', __('Help & Upgrade','testimonial'), __('Help & Upgrade','testimonial'), 'manage_options', 'testimonial_menu_help', array( $this, 'help_page' ));


	}
	

	
	public function help_page(){
		
		include( 'menu/help.php' );	
		
		}	

	
	
	
	
	
	

}


new testimonial_class_settings();

