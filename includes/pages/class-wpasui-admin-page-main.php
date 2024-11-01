<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if( !class_exists('WPASUI_Admin_Page_Main') ) {

/**
 * Main page of the plugin
 * 
 * @version 1.0
 * @author Italo Izaac
 * @since 1.0
 */
class WPASUI_Admin_Page_Main{

	/**
	 * The Construct
	 */
	public function __construct() {

		/// admin print scripts
		$this->enqueue_scripts();

	}

	/**
	 * Enqueue Scripts
	 */
	private function enqueue_scripts() {
		//wp_enqueue_script('accordion'); // Accordion js
		wp_enqueue_script('wpasui-ace-editor'); // Ace Editor
	}

	/**
	 * Admin Page HTML
	 */
	public static function admin_page_output(){
		// output
		echo wpasui_get_template_html( 'admin-page-main.php' ); 	
	}

}

}