<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if( !class_exists('WPASUI_Element_Buttons', false) ) {

/**
 * Button Elements
 * 
 * @version 1.0
 * @author Italo Izaac
 * @since 1.0
 */
class WPASUI_Element_Buttons extends WPASUI_Elements{

	/**
	 * Constructor.
	 */
	public function __construct() {

		// Set
		$this->id          = 'native-buttons';
		$this->label       = _x( 'Trabalhando com Botões do WordPress', 'Name Element', 'wp-admin-style-ui' );
		$this->description = $this->get_description();
		$this->menu_title  = _x( 'Botões', 'Menu Title', 'wp-admin-style-ui' );

		// Hooks
		add_action('wpas_ui-add_element_page', array($this, 'element_accordion_html'), 20);
		add_action('admin_menu', array($this, 'add_element_submenu'), 20);
		add_action('admin_enqueue_scripts', array($this, 'enqueue_scripts_and_styles'));
		
	}

	/**
	 * Scripts and Styles
	 */
	public function enqueue_scripts_and_styles() {

		wp_enqueue_script('accordion'); // WP Accordion
		wp_enqueue_script('wpasui-ace-editor'); // ACE Editor
		wp_enqueue_script('wpasui-clipboard');

	}

	/**
	 * Description
	 */
	private function get_description() {
		/**
		 * Output HTML
		 */
		ob_start();
		?>
		<p>
		<?php 
		echo __( 'Aqui mostraremos como é fácil criar botões com características nativas do WordPress. Super fácil de aprender, se estiver com muita pressa, é só copiar todo código e colar onde for necessário.', 'wp-admin-style-ui' );
		?>
		</p>
		<p><a href="<?php echo $this->get_page_uri();?>" class="button button-primary"><?php echo __('Estudar...', 'wp-admin-style-ui'); ?></a></p>
		<?php
		return ob_get_clean();
	}

	/**
	 * Page HTML
	 */
	public function page_output_html() {
		/**
		 * HTML
		 */
		echo wpasui_get_template_html( 'buttons-html.php', $this->get_data_array(), $this->get_element_views_path() );
	}


}

return new WPASUI_Element_Buttons();

}