<?php
/*
Plugin Name: Testimonial
Plugin URI: 
Description: Fully responsive and mobile ready testimonial grid for wordpress.
Version: 1.0
Author: wpkids
Author URI: http://paratheme.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

define('testimonial_plugin_url', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );
define('testimonial_plugin_dir', plugin_dir_path( __FILE__ ) );
define('testimonial_wp_url', 'https://wordpress.org/plugins/testimonial/' );
define('testimonial_pro_url', '' );
define('testimonial_demo_url', '' );


require_once( plugin_dir_path( __FILE__ ) . 'includes/testimonial-meta.php');
require_once( plugin_dir_path( __FILE__ ) . 'includes/testimonial-functions.php');


//Themes php files
require_once( plugin_dir_path( __FILE__ ) . 'themes/flat/index.php');



function testimonial_init_scripts()
	{
		wp_enqueue_script('jquery');
		wp_enqueue_script('testimonial_js', plugins_url( '/js/scripts.js' , __FILE__ ) , array( 'jquery' ));
		
		wp_enqueue_style('testimonial_style', testimonial_plugin_url.'css/style.css');

		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_script( 'testimonial_color_picker', plugins_url('/js/color-picker.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
		
		wp_enqueue_script('owl.carousel', plugins_url( '/js/owl.carousel.js' , __FILE__ ) , array( 'jquery' ));
		wp_enqueue_style('owl.carousel', testimonial_plugin_url.'css/owl.carousel.css');
		wp_enqueue_style('owl.theme', testimonial_plugin_url.'css/owl.theme.css');
		
		// Style for themes
		wp_enqueue_style('testimonial-style-flat', testimonial_plugin_url.'themes/flat/style.css');			

		
	}
add_action("init","testimonial_init_scripts");







register_activation_hook(__FILE__, 'testimonial_activation');


function testimonial_activation()
	{
		$testimonial_version= "1.0";
		update_option('testimonial_version', $testimonial_version); //update plugin version.
		
		$testimonial_customer_type= "free"; //customer_type "free"
		update_option('testimonial_customer_type', $testimonial_customer_type); //update plugin version.
	}


function testimonial_display($atts, $content = null ) {
		$atts = shortcode_atts(
			array(
				'id' => "",

				), $atts);


			$post_id = $atts['id'];

			$testimonial_themes = get_post_meta( $post_id, 'testimonial_themes', true );

			$testimonial_display ="";

			if($testimonial_themes== "flat")
				{
					$testimonial_display.= testimonial_body_flat($post_id);
				}

return $testimonial_display;



}

add_shortcode('testimonial_sc', 'testimonial_display');





add_action('admin_menu', 'testimonial_menu_init');


	
function testimonial_menu_help(){
	include('testimonial-help.php');	
}


function testimonial_menu_settings(){
	include('testimonial-settings.php');	
}



function testimonial_menu_init()
	{
		//add_submenu_page('edit.php?post_type=testimonial_sc', __('Settings','menu-wpt'), __('Settings','menu-wpt'), 'manage_options', 'testimonial_menu_settings', 'testimonial_menu_settings');	
			
		add_submenu_page('edit.php?post_type=testimonial_sc', __('Help & Upgrade','menu-testimonial'), __('Help & Upgrade','menu-testimonial'), 'manage_options', 'testimonial_menu_help', 'testimonial_menu_help');

	}





?>