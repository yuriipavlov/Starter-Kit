<?php

/**
 * Toggles Shortcode
 **/

use StarterKit\Base\Shortcode;
use StarterKit\Helper\View;

if ( ! class_exists( 'StarterKitShortcode_Toggles' ) ) {
	class StarterKitShortcode_Toggles extends Shortcode {
		
		public function content( $atts, $content = null ) {
			
			$atts = shortcode_atts( [
				'el_id'   => '',
				'classes' => 'accordion'
			], $this->atts( $atts ), $this->shortcode );
			
			$data = $this->data( [
				'atts'    => $atts,
				'content' => $content
			] );
			
			return View::load( '/view/view', $data, true, $this->shortcode_dir );
		}
		
	}
}