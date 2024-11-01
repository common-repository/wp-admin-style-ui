<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if( !class_exists('WPASUI_Elements', false) ) {

/**
 * Class Element
 * 
 * @version 1.0
 * @author Italo Izaac
 * @since 1.0
 */
abstract class WPASUI_Elements{

	/**
	 * ID
	 * 
	 * @access protected
	 * @var string
	 */
	protected $id = '';	

	/**
	 * Label
	 * 
	 * @access protected
	 * @var string
	 */
	protected $label = '';

	/**
	 * Description
	 * 
	 * @access protected
	 * @var string
	 */
	protected $description = '';

	/**
	 * Menu title
	 * 
	 * @access protected
	 * @var string
	 */
	protected $menu_title = '';

	/**
	 * The Construct
	 */
	public function __construct() {
		add_action('wpas_ui-add_element_page', array($this, 'element_accordion_html'));
		add_action('admin_menu', array($this, 'add_element_submenu'));
	}

	/**
	 * Element Accordion HTML
	 * 
	 * @access public
	 * @author Italo Izaac
	 * @since 1.0
	 */
	public function element_accordion_html() {
		// output html
		echo wpasui_get_template_html( 'element-accordion.php', $this->get_data_array(), trailingslashit( WPASUI_INC ) . 'elements/templates/' );
	}

	/**
	 * Get Label
	 */
	public function get_label() {
		return $this->label;
	}

	/**
	 * Get menu title
	 */
	public function get_menu_title() {
		return $this->menu_title;
	}

	/**
	 * Get page URI
	 * 
	 * @access public
	 * @since 1.0
	 */
	public function get_page_uri() {
		return admin_url( 'admin.php?page=wpasui_' . $this->id );
	}

	/**
	 * Get data Array
	 * 
	 * @access public
	 * @since 1.0
	 */
	public function get_data_array() {
		return apply_filters("get_array_data_{$this->id}", array(
			'id'          => $this->id,
			'label'       => $this->get_label(),
			'description' => $this->description,
			'page_uri'    => $this->get_page_uri()
		));
	}	 

	/**
	 * Get Element Views Path
	 * 
	 * @access public
	 * @since 1.0
	 */
	public function get_element_views_path() {
		return trailingslashit( WPASUI_INC ) . 'elements/views/';
	}

	/**
	 * Element in Menu
	 * 
	 * @access public
	 * @author Italo Izaac
	 * @since 1.0
	 */
	public function add_element_submenu() {
		add_submenu_page(
			'wp-admin-style-ui',
			$this->get_label(),
			$this->get_menu_title(),
			'manage_options',
			'wpasui_' . $this->id,
			array($this, 'page_output_html')
		);
	}

}

}