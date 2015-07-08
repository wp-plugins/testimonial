<?php
/*
Plugin Name: Testimonial
Plugin URI: http://paratheme.com
Description: Fully responsive and mobile ready testimonial slider for wordpress.
Version: 1.3.1
Author: paratheme
Author URI: http://paratheme.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

if ( ! defined('ABSPATH')) exit;


class testimonial{

	public function __construct(){
		
		define('testimonial_plugin_url', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );
		define('testimonial_plugin_dir', plugin_dir_path( __FILE__ ) );
		define('testimonial_wp_url', 'https://wordpress.org/plugins/testimonial/' );
		define('testimonial_pro_url', '' );
		define('testimonial_wp_reviews', 'http://wordpress.org/support/view/plugin-reviews/testimonial' );
		define('testimonial_demo_url', '' );
		define('testimonial_conatct_url', 'http://paratheme.com/contact' );
		define('testimonial_qa_url', 'http://paratheme.com/qa/' );
		define('testimonial_plugin_name', 'Testimonial' );
		define('testimonial_plugin_version', '1.3.1' );
		define('testimonial_customer_type', 'pro' );	 // pro & free	
		define('testimonial_share_url', 'http://wordpress.org/plugins/testimonial/' );
		define('testimonial_tutorial_video_url', '//www.youtube.com/embed/8OiNCDavSQg?rel=0' );
		define('testimonial_tutorial_doc_url', '' );	


		require_once( plugin_dir_path( __FILE__ ) . 'includes/testimonial-meta.php');
		require_once( plugin_dir_path( __FILE__ ) . 'includes/testimonial-functions.php');
		
		include( 'includes/class-settings.php' );		
		include( 'includes/class-functions.php' );
		include( 'includes/class-shortcodes.php' );
		
		
		add_action( 'wp_enqueue_scripts', array( $this, 'testimonial_front_scripts' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'testimonial_admin_scripts' ) );
		
		}
		
		
	public function testimonial_install(){
		
		do_action( 'testimonial_action_install' );
		
		}
		
	public function testimonial_uninstall(){
		
		do_action( 'testimonial_action_uninstall' );
		}		
		
	public function testimonial_deactivation(){
		
		do_action( 'testimonial_action_deactivation' );
		}
		
	public function testimonial_front_scripts(){
		wp_enqueue_script('jquery');
		wp_enqueue_script('testimonial_js', plugins_url( '/js/scripts.js' , __FILE__ ) , array( 'jquery' ));
		
		wp_enqueue_style('testimonial_style', testimonial_plugin_url.'css/style.css');

		wp_enqueue_script('owl.carousel', plugins_url( '/js/owl.carousel.js' , __FILE__ ) , array( 'jquery' ));
		wp_enqueue_style('owl.carousel', testimonial_plugin_url.'css/owl.carousel.css');
		wp_enqueue_style('owl.theme', testimonial_plugin_url.'css/owl.theme.css');
		

	
		
		}
		
		
	public function testimonial_admin_scripts(){
		
		wp_enqueue_script('jquery');
		wp_enqueue_script('jquery-ui-core');
		wp_enqueue_script('jquery-ui-sortable');
		wp_enqueue_script('jquery-ui-droppable');
						
		wp_enqueue_script('testimonial_admin_js', plugins_url( '/admin/js/scripts.js' , __FILE__ ) , array( 'jquery' ));
		wp_localize_script( 'testimonial_admin_js', 'testimonial_ajax', array( 'testimonial_ajaxurl' => admin_url( 'admin-ajax.php')));
		
		
		wp_enqueue_style('testimonial_admin_style', testimonial_plugin_url.'admin/css/style.css');

		//ParaAdmin
		wp_enqueue_style('ParaAdmin', testimonial_plugin_url.'ParaAdmin/css/ParaAdmin.css');
		wp_enqueue_script('ParaAdmin', plugins_url( 'ParaAdmin/js/ParaAdmin.js' , __FILE__ ) , array( 'jquery' ));
		
		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_script( 'testimonial_color_picker', plugins_url('/admin/js/color-picker.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
		
		}

	}


	new testimonial();
