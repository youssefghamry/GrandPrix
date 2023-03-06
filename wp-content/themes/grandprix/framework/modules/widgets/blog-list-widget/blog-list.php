<?php

if ( class_exists( 'GrandPrixCoreClassWidget' ) ) {
	class GrandPrixMikadoClassBlogListWidget extends GrandPrixCoreClassWidget {
		public function __construct() {
			parent::__construct(
				'mkdf_blog_list_widget',
				esc_html__( 'GrandPrix Blog List Widget', 'grandprix' ),
				array( 'description' => esc_html__( 'Display a list of your blog posts', 'grandprix' ) )
			);
			
			$this->setParams();
		}
		
		protected function setParams() {
			$this->params = array(
				array(
					'type'  => 'textfield',
					'name'  => 'widget_bottom_margin',
					'title' => esc_html__( 'Widget Bottom Margin (px)', 'grandprix' )
				),
				array(
					'type'  => 'textfield',
					'name'  => 'widget_title',
					'title' => esc_html__( 'Widget Title', 'grandprix' )
				),
				array(
					'type'  => 'textfield',
					'name'  => 'widget_title_bottom_margin',
					'title' => esc_html__( 'Widget Title Bottom Margin (px)', 'grandprix' )
				),
				array(
					'type'    => 'dropdown',
					'name'    => 'type',
					'title'   => esc_html__( 'Type', 'grandprix' ),
					'options' => array(
						'simple'  => esc_html__( 'Simple', 'grandprix' ),
						'minimal' => esc_html__( 'Minimal', 'grandprix' )
					)
				),
				array(
					'type'  => 'textfield',
					'name'  => 'number_of_posts',
					'title' => esc_html__( 'Number of Posts', 'grandprix' )
				),
				array(
					'type'    => 'dropdown',
					'name'    => 'space_between_items',
					'title'   => esc_html__( 'Space Between Items', 'grandprix' ),
					'options' => grandprix_mikado_get_space_between_items_array()
				),
				array(
					'type'    => 'dropdown',
					'name'    => 'orderby',
					'title'   => esc_html__( 'Order By', 'grandprix' ),
					'options' => grandprix_mikado_get_query_order_by_array()
				),
				array(
					'type'    => 'dropdown',
					'name'    => 'order',
					'title'   => esc_html__( 'Order', 'grandprix' ),
					'options' => grandprix_mikado_get_query_order_array()
				),
				array(
					'type'        => 'textfield',
					'name'        => 'category',
					'title'       => esc_html__( 'Category Slug', 'grandprix' ),
					'description' => esc_html__( 'Leave empty for all or use comma for list', 'grandprix' )
				),
				array(
					'type'    => 'dropdown',
					'name'    => 'title_tag',
					'title'   => esc_html__( 'Title Tag', 'grandprix' ),
					'options' => grandprix_mikado_get_title_tag( true )
				),
				array(
					'type'    => 'dropdown',
					'name'    => 'title_transform',
					'title'   => esc_html__( 'Title Text Transform', 'grandprix' ),
					'options' => grandprix_mikado_get_text_transform_array( true )
				),
			);
		}
		
		public function widget( $args, $instance ) {
			if ( ! is_array( $instance ) ) {
				$instance = array();
			}
			
			$instance['image_size']        = 'thumbnail';
			$instance['post_info_section'] = 'yes';
			$instance['number_of_columns'] = 'one';
			
			// Filter out all empty params
			$instance         = array_filter( $instance, function ( $array_value ) {
				return trim( $array_value ) != '';
			} );
			$instance['type'] = ! empty( $instance['type'] ) ? $instance['type'] : 'simple';
			
			$params = '';
			//generate shortcode params
			foreach ( $instance as $key => $value ) {
				$params .= " $key='$value' ";
			}
			
			$widget_styles = array();
			if ( isset( $instance['widget_bottom_margin'] ) && $instance['widget_bottom_margin'] !== '' ) {
				$widget_styles[] = 'margin-bottom: ' . grandprix_mikado_filter_px( $instance['widget_bottom_margin'] ) . 'px';
			}
			
			$widget_title_styles = array();
			if ( isset( $instance['widget_title_bottom_margin'] ) && $instance['widget_title_bottom_margin'] !== '' ) {
				$widget_title_styles[] = 'margin-bottom: ' . grandprix_mikado_filter_px( $instance['widget_title_bottom_margin'] ) . 'px';
			}
			
			echo '<div class="widget mkdf-blog-list-widget" ' . grandprix_mikado_get_inline_style( $widget_styles ) . '>';
			if ( ! empty( $instance['widget_title'] ) ) {
				if ( ! empty( $widget_title_styles ) ) {
					$args['before_title'] = grandprix_mikado_widget_modified_before_title( $args['before_title'], $widget_title_styles );
				}
				
				echo wp_kses_post( $args['before_title'] ) . esc_html( $instance['widget_title'] ) . wp_kses_post( $args['after_title'] );
			}
			
			echo do_shortcode( "[mkdf_blog_list $params]" ); // XSS OK
			echo '</div>';
		}
	}
}