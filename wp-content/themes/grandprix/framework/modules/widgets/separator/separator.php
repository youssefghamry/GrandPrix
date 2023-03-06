<?php

if ( class_exists( 'GrandPrixCoreClassWidget' ) ) {
	class GrandPrixMikadoClassSeparatorWidget extends GrandPrixCoreClassWidget {
		public function __construct() {
			parent::__construct(
				'mkdf_separator_widget',
				esc_html__( 'GrandPrix Separator Widget', 'grandprix' ),
				array( 'description' => esc_html__( 'Add a separator element to your widget areas', 'grandprix' ) )
			);
			
			$this->setParams();
		}
		
		protected function setParams() {
			$this->params = array(
				array(
					'type'    => 'dropdown',
					'name'    => 'type',
					'title'   => esc_html__( 'Type', 'grandprix' ),
					'options' => array(
						'normal'     => esc_html__( 'Normal', 'grandprix' ),
						'full-width' => esc_html__( 'Full Width', 'grandprix' )
					)
				),
				array(
					'type'    => 'dropdown',
					'name'    => 'position',
					'title'   => esc_html__( 'Position', 'grandprix' ),
					'options' => array(
						'center' => esc_html__( 'Center', 'grandprix' ),
						'left'   => esc_html__( 'Left', 'grandprix' ),
						'right'  => esc_html__( 'Right', 'grandprix' )
					)
				),
				array(
					'type'    => 'dropdown',
					'name'    => 'border_style',
					'title'   => esc_html__( 'Style', 'grandprix' ),
					'options' => array(
						'solid'  => esc_html__( 'Solid', 'grandprix' ),
						'dashed' => esc_html__( 'Dashed', 'grandprix' ),
						'dotted' => esc_html__( 'Dotted', 'grandprix' )
					)
				),
				array(
					'type'  => 'colorpicker',
					'name'  => 'color',
					'title' => esc_html__( 'Color', 'grandprix' )
				),
				array(
					'type'  => 'textfield',
					'name'  => 'width',
					'title' => esc_html__( 'Width (px or %)', 'grandprix' )
				),
				array(
					'type'  => 'textfield',
					'name'  => 'thickness',
					'title' => esc_html__( 'Thickness (px)', 'grandprix' )
				),
				array(
					'type'  => 'textfield',
					'name'  => 'top_margin',
					'title' => esc_html__( 'Top Margin (px or %)', 'grandprix' )
				),
				array(
					'type'  => 'textfield',
					'name'  => 'bottom_margin',
					'title' => esc_html__( 'Bottom Margin (px or %)', 'grandprix' )
				)
			);
		}
		
		public function widget( $args, $instance ) {
			if ( ! is_array( $instance ) ) {
				$instance = array();
			}
			
			//prepare variables
			$params = '';
			
			//is instance empty?
			if ( is_array( $instance ) && count( $instance ) ) {
				//generate shortcode params
				foreach ( $instance as $key => $value ) {
					$params .= " $key='$value' ";
				}
			}
			
			echo '<div class="widget mkdf-separator-widget">';
			echo do_shortcode( "[mkdf_separator $params]" ); // XSS OK
			echo '</div>';
		}
	}
}