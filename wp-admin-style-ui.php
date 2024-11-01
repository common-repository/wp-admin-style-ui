<?php
/**
 * Plugin Name: WP Admin Style UI
 * Version: 1.1.0
 * Description: O WP Admin Style UI foi desenvolvido para auxiliar os desenvolvedores iniciantes ou veteranos a criar tela de administração WordPress nativa, utilizando ferramentas e classes, sem a necessidade de importar ou adicionar arquivos externos.
 * Plugin URI: https://github.com/iiandrade/wp-admin-style-ui
 * Author: Italo Izaac
 * Author URI: https://github.com/iiandrade/
 * License: Apache-2.0
 * Text Domain: wp-admin-style-ui
 * Domain Path: /languages
 * 
 * Requires at least: 4.0
 * Tested up to: 4.7
 * Stable tag: 1.1.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if( !class_exists( 'WP_Admin_Style_UI' ) ) {

/**
 * Main class
 * 
 * @class WP_Admin_Style_UI
 * @version 1.0
 */
final class WP_Admin_Style_UI 
{

	public function __construct() {

		$this->define_constants();
		$this->includes();
		$this->hook_actions();
	}

	/**
	 * Contants
	 */
	private function define_constants() {
		$this->define('WPASUI_INC', $this->plugin_path() . '/includes' ); // include path
		$this->define('WPASUI_URL', $this->plugin_url() ); // plugin url
		$this->define('WPASUI_ASSETS', trailingslashit( WPASUI_URL ) . 'assets/' ); // assets url
	}

	/**
	 * Plugin URL
	 */
	public function plugin_url() {
		return untrailingslashit( plugin_dir_url( __FILE__ ) );
	}

	/**
	 * Plugin PATH
	 */
	public function plugin_path() {
		return untrailingslashit( plugin_dir_path( __FILE__ ) );
	}

	/**
	 * Define
	 * 
	 * @param string $name
	 * @param string $value
	 */
	private function define($name, $value = ''){
		if(!defined($name)){
			define($name, $value);
		}
	}

	/**
	 * Hook WordPress Actions
	 * 
	 * @access private
	 * @since 1.0
	 */
	private function hook_actions() {

		// Init
		add_action('init', array($this, 'init'),0);

		// Add menus
		add_action('admin_menu', array($this, 'wpas_ui_menus'));

	}

	/**
	 * Includes
	 */
	private function includes() {
		include_once( WPASUI_INC . '/class-wpasui-autoloader.php' ); // Class autoloader
		include_once( WPASUI_INC . '/wpasui-core-functions.php' ); // Core functions
		include_once( WPASUI_INC . '/class-wpasui-assets.php'); // Assets Class
	}

	/**
	 * Elements
	 */
	private function include_elements() {
		// abstract
		//include_once( WPASUI_INC . '/class-wpasui-elements.php' );

		include( WPASUI_INC . '/elements/class-wpasui-element-buttons.php' ); // Native buttons
		include( WPASUI_INC . '/elements/class-wpasui-element-accordions.php' ); // Native accordions
	}

	/**
	 * Internationalization
	 * 
	 * @access public
	 * @since 1.0
	 */
	public function init() {
		// Load languages
		load_plugin_textdomain( 'wp-admin-style-ui', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );
		// elements
		$this->include_elements();
	}

	/**
	 * Admin Menus
	 * 
	 * @access public
	 * @since 1.0
	 */
	public function wpas_ui_menus() {

		// Primary plugin menu
		add_menu_page( 
			__('Admin Style UI', 'wp-admin-style-ui'),
			__('Admin Style UI', 'wp-admin-style-ui'), 
			'manage_options', 
			'wp-admin-style-ui', 
			array( 'WPASUI_Admin_Page_Main', 'admin_page_output' ),
			'dashicons-admin-customizer',
			'60.1'
		);

		// fix duplicate the main menu
		add_submenu_page(
			'wp-admin-style-ui',
			__('Admin Style UI', 'wp-admin-style-ui'),
			__('Apresentação', 'wp-admin-style-ui'),
			'manage_options',
			'wp-admin-style-ui', 
			array( 'WPASUI_Admin_Page_Main', 'admin_page_output' )
		);

	}

}

return new WP_Admin_Style_UI();

}