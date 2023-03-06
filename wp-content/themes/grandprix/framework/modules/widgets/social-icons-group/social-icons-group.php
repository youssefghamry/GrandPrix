<?php

if ( class_exists( 'GrandPrixCoreClassWidget' ) ) {
	class GrandPrixMikadoClassClassIconsGroupWidget extends GrandPrixCoreClassWidget {
		public function __construct() {
			parent::__construct(
				'mkdf_social_icons_group_widget',
				esc_html__( 'GrandPrix Social Icons Group Widget', 'grandprix' ),
				array( 'description' => esc_html__( 'Use this widget to add a group of up to 6 social icons to a widget area.', 'grandprix' ) )
			);
			
			$this->setParams();
		}
		
		protected function setParams() {
			$this->params = array_merge(
				array(
					array(
						'type'  => 'textfield',
						'name'  => 'widget_title',
						'title' => esc_html__( 'Widget Title', 'grandprix' )
					)
				),
				grandprix_mikado_icon_collections()->getSocialIconWidgetMultipleParamsArray( 6 ),
				array(
					array(
						'type'    => 'dropdown',
						'name'    => 'layout',
						'title'   => esc_html__( 'Icons Layout', 'grandprix' ),
						'options' => array(
							''             => esc_html__( 'Default', 'grandprix' ),
							'square-icons' => esc_html__( 'Square', 'grandprix' ),
						)
					),
					array(
						'type'        => 'dropdown',
						'name'        => 'skin',
						'title'       => esc_html__( 'Square Icons Skin', 'grandprix' ),
						'description' => esc_html__( 'This applies to the square layout', 'grandprix' ),
						'options'     => array(
							''           => esc_html__( 'Dark Skin', 'grandprix' ),
							'light-skin' => esc_html__( 'Light Skin', 'grandprix' ),
						)
					),
					array(
						'type'    => 'dropdown',
						'name'    => 'alignment',
						'title'   => esc_html__( 'Text Alignment', 'grandprix' ),
						'options' => array(
							'left'   => esc_html__( 'Left', 'grandprix' ),
							'center' => esc_html__( 'Center', 'grandprix' ),
							'right'  => esc_html__( 'Right', 'grandprix' )
						)
					),
					array(
						'type'  => 'textfield',
						'name'  => 'icon_size',
						'title' => esc_html__( 'Icons Size (px)', 'grandprix' )
					),
					array(
						'type'  => 'colorpicker',
						'name'  => 'color',
						'title' => esc_html__( 'Color', 'grandprix' )
					),
					array(
						'type'  => 'colorpicker',
						'name'  => 'hover_color',
						'title' => esc_html__( 'Hover Color', 'grandprix' )
					),
					array(
						'type'        => 'textfield',
						'name'        => 'margin',
						'title'       => esc_html__( 'Margin', 'grandprix' ),
						'description' => esc_html__( 'Insert margin in format: top right bottom left (e.g. 10px 5px 10px 5px)', 'grandprix' )
					)
				)
			);
		}
		
		public function widget( $args, $instance ) {
			$icon_styles = array();
			$class       = array();
			
			if ( ! empty( $instance['skin'] ) ) {
				$class[] = 'mkdf-' . $instance['skin'];
			}
			
			if ( ! empty( $instance['layout'] ) ) {
				$class[] = 'mkdf-' . $instance['layout'];
			}
			
			if ( ! empty( $instance['alignment'] ) ) {
				$class[] = 'text-align-' . $instance['alignment'];
			}
			
			if ( ! empty( $instance['color'] ) ) {
				$icon_styles[] = 'color: ' . $instance['color'] . ';';
			}
			
			if ( ! empty( $instance['icon_size'] ) ) {
				$icon_styles[] = 'font-size: ' . grandprix_mikado_filter_px( $instance['icon_size'] ) . 'px';
			}
			
			if ( ! empty( $instance['margin'] ) ) {
				$icon_styles[] = 'margin: ' . $instance['margin'] . ';';
			}
			
			$hover_color = ! empty( $instance['hover_color'] ) ? $instance['hover_color'] : '';
			$class       = implode( ' ', $class );
			
			echo '<div class="widget mkdf-social-icons-group-widget ' . esc_attr( $class ) . '">';
			
			if ( ! empty( $instance['widget_title'] ) ) {
				echo wp_kses_post( $args['before_title'] ) . esc_html( $instance['widget_title'] ) . wp_kses_post( $args['after_title'] );
			}
			
			for ( $n = 1; $n <= 6; $n ++ ) {
				$link   = ! empty( $instance[ 'link_' . $n ] ) ? $instance[ 'link_' . $n ] : '#';
				$target = ! empty( $instance[ 'target_' . $n ] ) ? $instance[ 'target_' . $n ] : '_self';
				
				$icon_holder_html = '';
				if ( ! empty( $instance['icon_pack'] ) ) {
					$icon_class = array( 'mkdf-social-icon-widget' );
					if ( ! empty( $instance[ 'fa_icon_' . $n ] ) && $instance['icon_pack'] === 'font_awesome' ) {
						$icon_class[] = $instance[ 'fa_icon_' . $n ];
					}
					
					if ( ! empty( $instance[ 'fe_icon_' . $n ] ) && $instance['icon_pack'] === 'font_elegant' ) {
						$icon_class[] = $instance[ 'fe_icon_' . $n ];
					}
					
					if ( ! empty( $instance[ 'ion_icon_' . $n ] ) && $instance['icon_pack'] === 'ion_icons' ) {
						$icon_class[] = $instance[ 'ion_icon_' . $n ];
					}
					
					if ( ! empty( $instance[ 'simple_line_icon_' . $n ] ) && $instance['icon_pack'] === 'simple_line_icons' ) {
						$icon_class[] = $instance[ 'simple_line_icon_' . $n ];
					}
					
					if ( ! empty( $icon_class ) && isset( $icon_class[1] ) && ! empty( $icon_class[1] ) ) {
						$icon_class       = implode( ' ', $icon_class );
						$icon_holder_html = '<span class="' . $icon_class . '"></span>';
					} else {
						$icon_holder_html = '';
					}
				}
				?>
				<?php if ( ! empty( $icon_holder_html ) ) { ?>
					<a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" <?php echo grandprix_mikado_get_inline_attr( $hover_color, 'data-hover-color' ); ?> <?php grandprix_mikado_inline_style( $icon_styles ) ?> href="<?php echo esc_url( $link ); ?>" target="<?php echo esc_attr( $target ); ?>">
						<?php echo wp_kses_post( $icon_holder_html ); ?>
					</a>
				<?php }
			}
			echo '</div>';
		}
	}
}