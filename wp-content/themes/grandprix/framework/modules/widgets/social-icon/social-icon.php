<?php

if ( class_exists( 'GrandPrixCoreClassWidget' ) ) {
	class GrandPrixMikadoClassSocialIconWidget extends GrandPrixCoreClassWidget {
		
		public function __construct() {
			parent::__construct(
				'mkdf_social_icon_widget',
				esc_html__( 'GrandPrix Social Icon Widget', 'grandprix' ),
				array( 'description' => esc_html__( 'Add social network icons to widget areas', 'grandprix' ) )
			);
			
			$this->setParams();
		}
		
		protected function setParams() {
			$this->params = array_merge(
				array(
					array(
						'type'        => 'dropdown',
						'name'        => 'icon_text',
						'title'       => esc_html__( 'Display Icon or Text', 'grandprix' ),
						'description' => esc_html__( 'Choose whether you want to display social icon or text instead', 'grandprix' ),
						'options'     => array(
							'icon' => esc_html__( 'Icon', 'grandprix' ),
							'text' => esc_html__( 'Text', 'grandprix' )
						)
					),
					array(
						'type'        => 'textfield',
						'name'        => 'social_text',
						'title'       => esc_html__( 'Social Text', 'grandprix' ),
						'description' => esc_html__( 'Instert text which will describe desired social network', 'grandprix' )
					)
				),
				grandprix_mikado_icon_collections()->getSocialIconWidgetParamsArray(),
				array(
					array(
						'type'  => 'textfield',
						'name'  => 'link',
						'title' => esc_html__( 'Link', 'grandprix' )
					),
					array(
						'type'    => 'dropdown',
						'name'    => 'target',
						'title'   => esc_html__( 'Target', 'grandprix' ),
						'options' => grandprix_mikado_get_link_target_array()
					),
					array(
						'type'  => 'textfield',
						'name'  => 'icon_size',
						'title' => esc_html__( 'Icon Size (px)', 'grandprix' )
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
			
			if ( ! empty( $instance['color'] ) ) {
				$icon_styles[] = 'color: ' . $instance['color'] . ';';
			}
			
			if ( ! empty( $instance['icon_size'] ) ) {
				$icon_styles[] = 'font-size: ' . grandprix_mikado_filter_px( $instance['icon_size'] ) . 'px';
			}
			
			if ( ! empty( $instance['margin'] ) ) {
				$icon_styles[] = 'margin: ' . $instance['margin'] . ';';
			}
			
			$link        = ! empty( $instance['link'] ) ? $instance['link'] : '#';
			$target      = ! empty( $instance['target'] ) ? $instance['target'] : '_self';
			$hover_color = ! empty( $instance['hover_color'] ) ? $instance['hover_color'] : '';
			
			$icon_holder_html = '';
			if ( ! empty( $instance['icon_pack'] ) ) {
				$icon_class   = array( 'mkdf-social-icon-widget' );
				$icon_class[] = ! empty( $instance['fa_icon'] ) && $instance['icon_pack'] === 'font_awesome' ? $instance['fa_icon'] : '';
				$icon_class[] = ! empty( $instance['fe_icon'] ) && $instance['icon_pack'] === 'font_elegant' ? $instance['fe_icon'] : '';
				$icon_class[] = ! empty( $instance['ion_icon'] ) && $instance['icon_pack'] === 'ion_icons' ? $instance['ion_icon'] : '';
				$icon_class[] = ! empty( $instance['linea_icon'] ) && $instance['icon_pack'] === 'linea_icons' ? $instance['linea_icon'] : '';
				$icon_class[] = ! empty( $instance['linear_icon'] ) && $instance['icon_pack'] === 'linear_icons' ? 'lnr ' . $instance['linear_icon'] : '';
				$icon_class[] = ! empty( $instance['simple_line_icon'] ) && $instance['icon_pack'] === 'simple_line_icons' ? $instance['simple_line_icon'] : '';
				$icon_class[] = ! empty( $instance['dripicon'] ) && $instance['icon_pack'] === 'dripicons' ? $instance['dripicon'] : '';
				
				$icon_class = implode( ' ', $icon_class );
				
				$icon_holder_html = '<span class="' . $icon_class . '"></span>';
			}
			?>
			<a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" <?php echo grandprix_mikado_get_inline_attr( $hover_color, 'data-hover-color' ); ?> <?php grandprix_mikado_inline_style( $icon_styles ) ?> href="<?php echo esc_url( $link ); ?>" target="<?php echo esc_attr( $target ); ?>">
				<?php if ( isset( $instance['icon_text'] ) && $instance['icon_text'] === 'text' && isset( $instance['social_text'] ) && $instance['social_text'] !== '' ) { ?>
					<span><?php echo esc_html( $instance['social_text'] ); ?></span>
				<?php } else {
					echo wp_kses_post( $icon_holder_html );
				} ?>
			</a>
			<?php
		}
	}
}