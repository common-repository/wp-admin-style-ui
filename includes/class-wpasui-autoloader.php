<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if( !class_exists('WPASUI_Autoloader') ) {

/**
 * Class Autoloader
 * 
 * @version 1.0
 * @author Italo Izaac
 * @since 1.0
 */
class WPASUI_Autoloader{

	/**
	 * Path to include
	 * 
	 * @var string
	 */
	private $path_inc = '';

	/**
	 * The construct
	 */
	public function __construct() {
		if ( function_exists( "__autoload" ) ) {
			spl_autoload_register( "__autoload" );
		}

		spl_autoload_register( array( $this, 'autoload' ) );

		// inc path
		$this->path_inc = trailingslashit( WPASUI_INC );
	}

	/**
	 * Autoload Method
	 * 
	 * @param string $class
	 */
	public function autoload( $class ) {

		// to lowercase
		$class = strtolower( $class );

		// not wpasui_ class
		if( strpos( $class, 'wpasui_') !== 0 ) {
			return;
		}

		// file
		$file        = $this->filename( $class );
		$path        = '';
		$instanciate = '';

		if( strpos( $class, 'wpasui_admin_page_') === 0 ) {
			$path        = $this->path_inc . 'pages/';
		}
		elseif( strpos( $class, 'wpasui_element_') === 0 ) {
			$path        = $this->path_inc . 'elements/';
		}

		if( empty( $path ) || !$this->load_file( $path . $file, $class ) ){
			$this->load_file( $this->path_inc . $file, $class );
		}
	}

	/**
	 * Load file
	 */
	private function load_file( $path, $class = '' ) {
		if ( $path && is_readable( $path ) ) {
			// include
			include_once( $path );

			// instanciate
			/*if( method_exists( $class, '__construct' ) ) {
				$instance = new $class();
			}*/

			return true;
		}
		return false;
	}

	/**
	 * File name
	 */
	private function filename( $class ){
		return 'class-' . str_replace( '_', '-', $class ) . '.php';
	}

}

return new WPASUI_Autoloader();

}