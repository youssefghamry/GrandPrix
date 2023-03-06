<?php

if ( ! function_exists( 'grandprix_mikado_register_required_plugins' ) ) {
	/**
	 * Registers theme required and optional plugins. Hooks to tgmpa_register hook
	 */
	function grandprix_mikado_register_required_plugins() {
		$plugins = array(
			array(
				'name'               => esc_html__( 'WPBakery Visual Composer', 'grandprix' ),
				'slug'               => 'js_composer',
				'source'             => get_template_directory() . '/includes/plugins/js_composer.zip',
				'version'            => '6.8.0',
				'required'           => true,
				'force_activation'   => false,
				'force_deactivation' => false
			),
			array(
				'name'               => esc_html__( 'Revolution Slider', 'grandprix' ),
				'slug'               => 'revslider',
				'source'             => get_template_directory() . '/includes/plugins/revslider.zip',
				'version'            => '6.5.19',
				'required'           => true,
				'force_activation'   => false,
				'force_deactivation' => false
			),
			array(
				'name'               => esc_html__( 'GrandPrix Core', 'grandprix' ),
				'slug'               => 'grandprix-core',
				'source'             => get_template_directory() . '/includes/plugins/grandprix-core.zip',
				'version'            => '1.1',
				'required'           => true,
				'force_activation'   => false,
				'force_deactivation' => false
			),
			array(
				'name'               => esc_html__( 'GrandPrix Instagram Feed', 'grandprix' ),
				'slug'               => 'grandprix-instagram-feed',
				'source'             => get_template_directory() . '/includes/plugins/grandprix-instagram-feed.zip',
				'version'            => '2.1',
				'required'           => true,
				'force_activation'   => false,
				'force_deactivation' => false
			),
			array(
				'name'               => esc_html__( 'GrandPrix Twitter Feed', 'grandprix' ),
				'slug'               => 'grandprix-twitter-feed',
				'source'             => get_template_directory() . '/includes/plugins/grandprix-twitter-feed.zip',
				'version'            => '1.0',
				'required'           => true,
				'force_activation'   => false,
				'force_deactivation' => false
			),
			array(
				'name'     => esc_html__( 'WooCommerce plugin', 'grandprix' ),
				'slug'     => 'woocommerce',
				'required' => false
			),
			array(
				'name'     => esc_html__( 'Contact Form 7', 'grandprix' ),
				'slug'     => 'contact-form-7',
				'required' => false
			),
			array(
				'name'     => esc_html__( 'Envato Market', 'grandprix' ),
				'slug'     => 'envato-market',
				'source'   => 'https://envato.github.io/wp-envato-market/dist/envato-market.zip',
				'required' => false
			)
		);
		
		$config = array(
			'domain'       => 'grandprix',
			'default_path' => '',
			'parent_slug'  => 'themes.php',
			'capability'   => 'edit_theme_options',
			'menu'         => 'install-required-plugins',
			'has_notices'  => true,
			'is_automatic' => false,
			'message'      => '',
			'strings'      => array(
				'page_title'                      => esc_html__( 'Install Required Plugins', 'grandprix' ),
				'menu_title'                      => esc_html__( 'Install Plugins', 'grandprix' ),
				'installing'                      => esc_html__( 'Installing Plugin: %s', 'grandprix' ),
				'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'grandprix' ),
				'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'grandprix' ),
				'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'grandprix' ),
				'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'grandprix' ),
				'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'grandprix' ),
				'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'grandprix' ),
				'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'grandprix' ),
				'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'grandprix' ),
				'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'grandprix' ),
				'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'grandprix' ),
				'activate_link'                   => _n_noop( 'Activate installed plugin', 'Activate installed plugins', 'grandprix' ),
				'return'                          => esc_html__( 'Return to Required Plugins Installer', 'grandprix' ),
				'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'grandprix' ),
				'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'grandprix' ),
				'nag_type'                        => 'updated'
			)
		);
		
		tgmpa( $plugins, $config );
	}
	
	add_action( 'tgmpa_register', 'grandprix_mikado_register_required_plugins' );
}
