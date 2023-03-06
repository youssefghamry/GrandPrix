<?php
/**
 * Adds options to the customizer.
 */
defined( 'ABSPATH' ) || exit;

/**
 * GrandPrixMikadoClassCustomizer class.
 */
class GrandPrixMikadoClassCustomizer {
	
	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'customize_register', array( $this, 'add_sections' ) );
	}
	
	/**
	 * Get item name.
	 */
	public function get_item_name( $item ) {
		return ucwords( str_replace( '-', ' ', basename( $item ) ) );
	}
	
	/**
	 * Get item class name.
	 */
	public function get_item_class( $item ) {
		return str_replace( '-', '_', basename( $item ) );
	}
	
	/**
	 * Sanitize callback function for checkbox
	 */
	public function sanitize_checkbox( $checked ) {
		return isset( $checked ) && $checked === true;
	}
	
	/**
	 * Add settings to the customizer.
	 *
	 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
	 */
	public function add_sections( $wp_customize ) {
		
		$wp_customize->add_panel(
			'grandprix_performance',
			array(
				'priority' => 250,
				'title'    => esc_html__( 'GrandPrix Performance', 'grandprix' )
			)
		);
		
		$wp_customize->add_section(
			'grandprix_performance_icon_packs_section',
			array(
				'panel'       => 'grandprix_performance',
				'priority'    => 10,
				'title'       => esc_html__( 'Icon Packs', 'grandprix' ),
				'description' => esc_html__( 'Here you can select specific features to disable. Note that disabling certain features and functionalities which you will not be needing or which you are otherwise not utilizing in any way can have a positive effect to the overall performance of your site.', 'grandprix' )
			)
		);
		
		foreach ( glob( GRANDPRIX_MIKADO_FRAMEWORK_ICONS_ROOT_DIR . '/*', GLOB_ONLYDIR ) as $item ) {
			$wp_customize->add_setting(
				'grandprix_performance_disable_icon_pack_' . $this->get_item_class( $item ),
				array(
					'default'           => false,
					'type'              => 'option',
					'sanitize_callback' => array( $this, 'sanitize_checkbox' )
				)
			);
			
			$wp_customize->add_control(
				'grandprix_performance_disable_icon_pack_' . $this->get_item_class( $item ),
				array(
					'section'  => 'grandprix_performance_icon_packs_section',
					'settings' => 'grandprix_performance_disable_icon_pack_' . $this->get_item_class( $item ),
					'type'     => 'checkbox',
					'label'    => $this->get_item_name( $item ),
				)
			);
		}
		
		if ( grandprix_mikado_is_plugin_installed( 'core' ) ) {
			$wp_customize->add_section(
				'grandprix_performance_cpt_section',
				array(
					'panel'       => 'grandprix_performance',
					'priority'    => 20,
					'title'       => esc_html__( 'Custom Post Types', 'grandprix' ),
					'description' => esc_html__( 'Here you can select specific features to disable. Note that disabling certain features and functionalities which you will not be needing or which you are otherwise not utilizing in any way can have a positive effect to the overall performance of your site.', 'grandprix' )
				)
			);
			
			foreach ( glob( GRANDPRIX_CORE_CPT_PATH . '/*', GLOB_ONLYDIR ) as $item ) {
				$wp_customize->add_setting(
					'grandprix_performance_disable_cpt_' . $this->get_item_class( $item ),
					array(
						'default'           => false,
						'type'              => 'option',
						'sanitize_callback' => array( $this, 'sanitize_checkbox' )
					)
				);
				
				$wp_customize->add_control(
					'grandprix_performance_disable_cpt_' . $this->get_item_class( $item ),
					array(
						'section'  => 'grandprix_performance_cpt_section',
						'settings' => 'grandprix_performance_disable_cpt_' . $this->get_item_class( $item ),
						'type'     => 'checkbox',
						'label'    => $this->get_item_name( $item ),
					)
				);
			}
			
			$wp_customize->add_section(
				'grandprix_performance_shortcodes_section',
				array(
					'panel'       => 'grandprix_performance',
					'priority'    => 30,
					'title'       => esc_html__( 'Shortcodes', 'grandprix' ),
					'description' => esc_html__( 'Here you can select specific features to disable. Note that disabling certain features and functionalities which you will not be needing or which you are otherwise not utilizing in any way can have a positive effect to the overall performance of your site.', 'grandprix' )
				)
			);
			
			$shortcodes = array();
			
			foreach ( glob( GRANDPRIX_MIKADO_FRAMEWORK_MODULES_ROOT_DIR . '/blog/shortcodes/*', GLOB_ONLYDIR ) as $item ) {
				$shortcodes[ $this->get_item_class( $item ) ] = $this->get_item_name( $item );
			}
			
			if ( grandprix_mikado_is_plugin_installed( 'woocommerce' ) ) {
				foreach ( glob( GRANDPRIX_MIKADO_FRAMEWORK_MODULES_ROOT_DIR . '/woocommerce/shortcodes/*', GLOB_ONLYDIR ) as $item ) {
					$shortcodes[ $this->get_item_class( $item ) ] = $this->get_item_name( $item );
				}
			}
			
			foreach ( glob( GRANDPRIX_CORE_SHORTCODES_PATH . '/*', GLOB_ONLYDIR ) as $item ) {
				$shortcodes[ $this->get_item_class( $item ) ] = $this->get_item_name( $item );
			}
			
			if ( ! empty( $shortcodes ) ) {
				ksort( $shortcodes );
				
				foreach ( $shortcodes as $key => $value ) {
					$wp_customize->add_setting(
						'grandprix_performance_disable_shortcode_' . $key,
						array(
							'default'           => false,
							'type'              => 'option',
							'sanitize_callback' => array( $this, 'sanitize_checkbox' )
						)
					);
					
					$wp_customize->add_control(
						'grandprix_performance_disable_cpt_' . $key,
						array(
							'section'  => 'grandprix_performance_shortcodes_section',
							'settings' => 'grandprix_performance_disable_shortcode_' . $key,
							'type'     => 'checkbox',
							'label'    => $value,
						)
					);
				}
			}
		}
	}
}

new GrandPrixMikadoClassCustomizer();
