<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if( !class_exists('WPASUI_Element_Accordions', false) ) {

/**
 * Button Elements
 * 
 * @version 1.0
 * @author Italo Izaac
 * @since 1.0
 */
class WPASUI_Element_Accordions extends WPASUI_Elements{

	/**
	 * Constructor.
	 */
	public function __construct() {
		
		// Set
		$this->id          = 'native-accordions';
		$this->label       = __( 'Lista em Accordions', 'wp-admin-style-ui' );
		$this->description = $this->get_description();
		$this->menu_title  = __( 'Accordions', 'wp-admin-style-ui' );

		// Hooks
		add_action('wpas_ui-add_element_page', array($this, 'element_accordion_html'), 20);
		add_action('admin_menu', array($this, 'add_element_submenu'), 20);
		
		// filters
		add_filter('get_array_data_' . $this->id, array($this, 'set_array_data'));
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
		<p><?php _e( 'Começaremos a trabalhar com <strong>Accordions</strong>, essa é uma ótima ideia para fazer algumas listas com conteúdos oculto, que ao clicar serão mostrados, como esta que você está vendo nesta página. Este item envolve um nível de complexidade um pouco maior que o estudo dos botões nativos, mas não se preoculpe ajudaremos da melhor forma possível.', 'wp-admin-style-ui' );?></p>
		<p><a href="<?php echo $this->get_page_uri();?>" class="button button-primary"><?php _e('Estudar...', 'wp-admin-style-ui');?></a></p>
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
		echo wpasui_get_template_html( 'accordions-html.php', $this->get_data_array(), $this->get_element_views_path() );
	}

	/**
	 * Set new array data
	 */
	public function set_array_data( $data ) {
		// example
		$data['example'] = htmlentities( $this->get_example_html() );
		return $data;
	}

	/**
	 * Get Example HTML
	 */
	private function get_example_html() {
		ob_start();
	?>
<ul class="accordion-container">
	<!-- <?php echo __('{{ Item 1 }}', 'wp-admin-style-ui'); ?> -->
	<li class="menu-item accordion-section">
		<div class="menu-item-bar"> 
		  <div class="menu-item-handle accordion-section-title"> 
		    <span class="item-title"> 
		      <span class="menu-item-title"><?php _e('{{ Titulo Aqui }}', 'wp-admin-style-ui'); ?></span> 
		    </span> 
		  </div> 
		</div>

		<div class="menu-item-settings accordion-section-content">
		</div>
	</li>

	<!-- <?php echo __('{{ Item 2 }}', 'wp-admin-style-ui'); ?> -->
	<li class="menu-item accordion-section">
		<div class="menu-item-bar"> 
		  <div class="menu-item-handle accordion-section-title"> 
		    <span class="item-title"> 
		      <span class="menu-item-title"><?php _e('{{ Titulo Aqui }}', 'wp-admin-style-ui'); ?></span> 
		    </span> 
		  </div> 
		</div>

		<div class="menu-item-settings accordion-section-content">
		</div>
	</li>	
</ul>
	<?php
		return ob_get_clean();
	}


}

return new WPASUI_Element_Accordions();

}