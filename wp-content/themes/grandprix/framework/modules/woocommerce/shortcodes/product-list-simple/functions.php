<?php

if ( ! function_exists( 'grandprix_mikado_add_product_list_simple_shortcode' ) ) {
	function grandprix_mikado_add_product_list_simple_shortcode( $shortcodes_class_name ) {
		$shortcodes = array(
			'GrandPrixCore\CPT\Shortcodes\ProductListSimple\ProductListSimple',
		);
		
		$shortcodes_class_name = array_merge( $shortcodes_class_name, $shortcodes );
		
		return $shortcodes_class_name;
	}
	
	add_filter( 'grandprix_core_filter_add_vc_shortcode', 'grandprix_mikado_add_product_list_simple_shortcode' );
}

if ( ! function_exists( 'grandprix_mikado_set_product_list_simple_icon_class_name_for_vc_shortcodes' ) ) {
	/**
	 * Function that set custom icon class name for product list simple shortcode to set our icon for Visual Composer shortcodes panel
	 */
	function grandprix_mikado_set_product_list_simple_icon_class_name_for_vc_shortcodes( $shortcodes_icon_class_array ) {
		$shortcodes_icon_class_array[] = '.icon-wpb-product-list-simple';
		
		return $shortcodes_icon_class_array;
	}
	
	add_filter( 'grandprix_core_filter_add_vc_shortcodes_custom_icon_class', 'grandprix_mikado_set_product_list_simple_icon_class_name_for_vc_shortcodes' );
}

if ( ! function_exists( 'grandprix_mikado_add_product_list_simple_into_shortcodes_list' ) ) {
	function grandprix_mikado_add_product_list_simple_into_shortcodes_list( $woocommerce_shortcodes ) {
		$woocommerce_shortcodes[] = 'mkdf_product_list_simple';
		
		return $woocommerce_shortcodes;
	}
	
	add_filter( 'grandprix_mikado_filter_woocommerce_shortcodes_list', 'grandprix_mikado_add_product_list_simple_into_shortcodes_list' );
}