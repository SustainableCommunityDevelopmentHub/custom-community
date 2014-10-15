<?php
/**
 * A few helper functions and function wrappers for the Color Scheme implementation
 * @author Fabian Wolf
 * @since 2.0r2
 * @package cc2
 */

if( !function_exists('cc2_get_current_color_scheme') ) {
	function cc2_get_current_color_scheme() {
		$return = false;
		global $cc2_color_schemes;
		
		if( !isset( $cc2_color_schemes ) && class_exists('cc2_ColorSchemes') ) {
			$cc2_color_schemes = new cc2_ColorSchemes(); // should be unset-table / replaceable via plugin / filter hooks
		}
		
		
		$return = apply_filters('cc2_get_current_color_scheme', $cc2_color_schemes->get_current_color_scheme() );
				
		return $return;
	}
	
}
