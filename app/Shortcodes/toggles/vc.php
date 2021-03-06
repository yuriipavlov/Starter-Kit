<?php

/**
 * Shortcode: Toggles / VC Support
 **/

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
	class WPBakeryShortCode_Toggles extends WPBakeryShortCodesContainer {
		
		protected function content( $atts, $content = null ) {
			
			$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
			
			return Starter_Kit()->getShortcodesManager()->content( $this->settings['base'], $atts, $content );
		}
		
	}
}