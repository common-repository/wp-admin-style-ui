<?php
/**
 * WP Admin Style UI - Core Functions
 * 
 * @since 1.0
 * @author Italo Izaac
 * @version 1.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Get Template
 * 
 * @version 1.0
 * @author Italo Izaac
 */
function wpasui_get_template( $template_name, $args = array(), $template_path = '' ) 
{
	if( !empty( $args ) && is_array( $args ) ) {
		extract( $args );
	}

	// located
	$located = wpasui_locate_template( $template_name, $template_path );

	// no exists file
	if( !file_exists( $located ) ) {
		return;
	}

	// include
	include( $located );
}

/**
 * Get Template HTML
 * 
 * @version 1.0
 * @author Italo Izaac
 * @param string $template
 */
function wpasui_get_template_html( $template_name, $args = array(), $template_path = '' )
{
	ob_start();
	wpasui_get_template( $template_name, $args, $template_path );
	return ob_get_clean();
}


/**
 * Locate Template
 * 
 * @version 1.0
 * @author Italo Izaac
 * @param string $template_name
 */
function wpasui_locate_template( $template_name, $template_path = '' ) 
{
	if( empty( $template_path ) ) {
		$template_path = WPASUI_INC;
	}

	// trailingslashit template path
	$template_path = trailingslashit( $template_path );

	// template
	$template = '';

	// search
	foreach( (array) $template_name as $tpl_name ):
		if( !$tpl_name ){
			continue;
		}

		if( file_exists( trailingslashit( WPASUI_INC ) . 'views/' . $template_name ) ) {
			$template = trailingslashit( WPASUI_INC ) . 'views/' . $template_name;
			break;
		}
		elseif( file_exists( trailingslashit( WPASUI_INC ) . 'pages/views/' . $template_name ) ) {
			$template = trailingslashit( WPASUI_INC ) . 'pages/views/' . $template_name;
			break;
		}
		elseif( file_exists( $template_path . $template_name ) ) {
			$template = $template_path . $template_name;
			break;
		}
	endforeach;

	// not found
	if( !$template ){
		return false;
	}

	// we found
	return $template;
}

/**
 * Get PayPal Donate Link by Country
 */
function wpasui_get_paypal_donate_link() {
	$locale   = get_user_locale();
	$btn_url  = 'https://www.paypal-brasil.com.br/logocenter/util/img/botao-checkout_horizontal_doecom_ap.png';
	
	if( $locale != 'pt_BR' ){
		// response exists
		$get_btn_url   = sprintf('https://www.paypalobjects.com/%s/i/btn/btn_donateCC_LG.gif', $locale);
		$response      = wp_remote_get( $get_btn_url );
		$response_code = wp_remote_retrieve_response_code( $response );

		// result
		if( $response_code === 200 ) {
			$btn_url = esc_url( $get_btn_url );
		}
	}

	return $btn_url;
}