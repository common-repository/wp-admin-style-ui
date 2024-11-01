<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if( !class_exists('WPASUI_Assets') ) {

/**
 * Class Assets
 * 
 * @version 1.0
 * @author Italo Izaac
 * @since 1.0
 */
class WPASUI_Assets{

	/**
	 * Construct
	 */
	public function __construct() {

		// register scripts
		add_action( 'admin_enqueue_scripts', array($this, 'register_scripts'), 1);

	}

	/**
	 * Register Scripts
	 * 
	 * @author Italo Izaac
	 * @since 1.0
	 */
	public function register_scripts(){

		/**
		 * ACE Editor
		 */
		wp_register_script('wpasui-ace', $this->get_assets_url( 'js' ) . '/ace/ace.js', array(), null );
		wp_register_script('wpasui-ace-editor', $this->get_assets_url( 'js' ) . '/ace-editor.js', array('wpasui-ace'), null );

		/**
		 * Clipboard
		 */
		wp_register_script('wpasui-clipboard-core', $this->get_assets_url( 'js' ) . '/clipboard.min.js', array(), null );
		wp_register_script('wpasui-clipboard', $this->get_assets_url( 'js' ) . '/code-copy.js', array('wpasui-clipboard-core'), null );

		/**
		 * Stylesheet Plugin
		 */
		wp_register_style( 'wpasui', $this->get_assets_url( 'css' ) . '/global.css', null, null );
		wp_enqueue_style( 'wpasui' );

	}

	/**
	 * Assets URL
	 * 
	 * @author Italo Izaac
	 * @since 1.0
	 * @return string
	 */
	private function get_assets_url( $folder = '' ) {
		return trailingslashit( WPASUI_ASSETS ) . untrailingslashit( $folder );
	}

}

return new WPASUI_Assets();

}