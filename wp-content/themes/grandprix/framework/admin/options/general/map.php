<?php

if ( ! function_exists( 'grandprix_mikado_general_options_map' ) ) {
	/**
	 * General options page
	 */
	function grandprix_mikado_general_options_map() {
		
		grandprix_mikado_add_admin_page(
			array(
				'slug'  => '',
				'title' => esc_html__( 'General', 'grandprix' ),
				'icon'  => 'fa fa-institution'
			)
		);
		
		$panel_design_style = grandprix_mikado_add_admin_panel(
			array(
				'page'  => '',
				'name'  => 'panel_design_style',
				'title' => esc_html__( 'Design Style', 'grandprix' )
			)
		);
		
		grandprix_mikado_add_admin_field(
			array(
				'name'          => 'google_fonts',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Google Font Family', 'grandprix' ),
				'description'   => esc_html__( 'Choose a default Google font for your site', 'grandprix' ),
				'parent'        => $panel_design_style
			)
		);
		
		grandprix_mikado_add_admin_field(
			array(
				'name'          => 'additional_google_fonts',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Additional Google Fonts', 'grandprix' ),
				'parent'        => $panel_design_style
			)
		);
		
		$additional_google_fonts_container = grandprix_mikado_add_admin_container(
			array(
				'parent'          => $panel_design_style,
				'name'            => 'additional_google_fonts_container',
				'dependency' => array(
					'show' => array(
						'additional_google_fonts'  => 'yes'
					)
				)
			)
		);
		
		grandprix_mikado_add_admin_field(
			array(
				'name'          => 'additional_google_font1',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'grandprix' ),
				'description'   => esc_html__( 'Choose additional Google font for your site', 'grandprix' ),
				'parent'        => $additional_google_fonts_container
			)
		);
		
		grandprix_mikado_add_admin_field(
			array(
				'name'          => 'additional_google_font2',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'grandprix' ),
				'description'   => esc_html__( 'Choose additional Google font for your site', 'grandprix' ),
				'parent'        => $additional_google_fonts_container
			)
		);
		
		grandprix_mikado_add_admin_field(
			array(
				'name'          => 'additional_google_font3',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'grandprix' ),
				'description'   => esc_html__( 'Choose additional Google font for your site', 'grandprix' ),
				'parent'        => $additional_google_fonts_container
			)
		);
		
		grandprix_mikado_add_admin_field(
			array(
				'name'          => 'additional_google_font4',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'grandprix' ),
				'description'   => esc_html__( 'Choose additional Google font for your site', 'grandprix' ),
				'parent'        => $additional_google_fonts_container
			)
		);
		
		grandprix_mikado_add_admin_field(
			array(
				'name'          => 'additional_google_font5',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'grandprix' ),
				'description'   => esc_html__( 'Choose additional Google font for your site', 'grandprix' ),
				'parent'        => $additional_google_fonts_container
			)
		);
		
		grandprix_mikado_add_admin_field(
			array(
				'name'          => 'google_font_weight',
				'type'          => 'checkboxgroup',
				'default_value' => '',
				'label'         => esc_html__( 'Google Fonts Style & Weight', 'grandprix' ),
				'description'   => esc_html__( 'Choose a default Google font weights for your site. Impact on page load time', 'grandprix' ),
				'parent'        => $panel_design_style,
				'options'       => array(
					'100'  => esc_html__( '100 Thin', 'grandprix' ),
					'100i' => esc_html__( '100 Thin Italic', 'grandprix' ),
					'200'  => esc_html__( '200 Extra-Light', 'grandprix' ),
					'200i' => esc_html__( '200 Extra-Light Italic', 'grandprix' ),
					'300'  => esc_html__( '300 Light', 'grandprix' ),
					'300i' => esc_html__( '300 Light Italic', 'grandprix' ),
					'400'  => esc_html__( '400 Regular', 'grandprix' ),
					'400i' => esc_html__( '400 Regular Italic', 'grandprix' ),
					'500'  => esc_html__( '500 Medium', 'grandprix' ),
					'500i' => esc_html__( '500 Medium Italic', 'grandprix' ),
					'600'  => esc_html__( '600 Semi-Bold', 'grandprix' ),
					'600i' => esc_html__( '600 Semi-Bold Italic', 'grandprix' ),
					'700'  => esc_html__( '700 Bold', 'grandprix' ),
					'700i' => esc_html__( '700 Bold Italic', 'grandprix' ),
					'800'  => esc_html__( '800 Extra-Bold', 'grandprix' ),
					'800i' => esc_html__( '800 Extra-Bold Italic', 'grandprix' ),
					'900'  => esc_html__( '900 Ultra-Bold', 'grandprix' ),
					'900i' => esc_html__( '900 Ultra-Bold Italic', 'grandprix' )
				)
			)
		);
		
		grandprix_mikado_add_admin_field(
			array(
				'name'          => 'google_font_subset',
				'type'          => 'checkboxgroup',
				'default_value' => '',
				'label'         => esc_html__( 'Google Fonts Subset', 'grandprix' ),
				'description'   => esc_html__( 'Choose a default Google font subsets for your site', 'grandprix' ),
				'parent'        => $panel_design_style,
				'options'       => array(
					'latin'        => esc_html__( 'Latin', 'grandprix' ),
					'latin-ext'    => esc_html__( 'Latin Extended', 'grandprix' ),
					'cyrillic'     => esc_html__( 'Cyrillic', 'grandprix' ),
					'cyrillic-ext' => esc_html__( 'Cyrillic Extended', 'grandprix' ),
					'greek'        => esc_html__( 'Greek', 'grandprix' ),
					'greek-ext'    => esc_html__( 'Greek Extended', 'grandprix' ),
					'vietnamese'   => esc_html__( 'Vietnamese', 'grandprix' )
				)
			)
		);
		
		grandprix_mikado_add_admin_field(
			array(
				'name'        => 'first_color',
				'type'        => 'color',
				'label'       => esc_html__( 'First Main Color', 'grandprix' ),
				'description' => esc_html__( 'Choose the most dominant theme color. Default color is #00bbb3', 'grandprix' ),
				'parent'      => $panel_design_style
			)
		);
		
		grandprix_mikado_add_admin_field(
			array(
				'name'        => 'page_background_color',
				'type'        => 'color',
				'label'       => esc_html__( 'Page Background Color', 'grandprix' ),
				'description' => esc_html__( 'Choose the background color for page content. Default color is #ffffff', 'grandprix' ),
				'parent'      => $panel_design_style
			)
		);
		
		grandprix_mikado_add_admin_field(
			array(
				'name'        => 'page_background_image',
				'type'        => 'image',
				'label'       => esc_html__( 'Page Background Image', 'grandprix' ),
				'description' => esc_html__( 'Choose the background image for page content', 'grandprix' ),
				'parent'      => $panel_design_style
			)
		);
		
		grandprix_mikado_add_admin_field(
			array(
				'name'          => 'page_background_image_repeat',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Page Background Image Repeat', 'grandprix' ),
				'description'   => esc_html__( 'Enabling this option will set the background image as a repeating pattern throughout the page, otherwise the image will appear as the cover background image', 'grandprix' ),
				'parent'        => $panel_design_style
			)
		);
		
		grandprix_mikado_add_admin_field(
			array(
				'name'        => 'selection_color',
				'type'        => 'color',
				'label'       => esc_html__( 'Text Selection Color', 'grandprix' ),
				'description' => esc_html__( 'Choose the color users see when selecting text', 'grandprix' ),
				'parent'      => $panel_design_style
			)
		);
		
		/***************** Passepartout Layout - begin **********************/
		
		grandprix_mikado_add_admin_field(
			array(
				'name'          => 'boxed',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Boxed Layout', 'grandprix' ),
				'parent'        => $panel_design_style
			)
		);
		
			$boxed_container = grandprix_mikado_add_admin_container(
				array(
					'parent'          => $panel_design_style,
					'name'            => 'boxed_container',
					'dependency' => array(
						'show' => array(
							'boxed'  => 'yes'
						)
					)
				)
			);
		
				grandprix_mikado_add_admin_field(
					array(
						'name'        => 'page_background_color_in_box',
						'type'        => 'color',
						'label'       => esc_html__( 'Page Background Color', 'grandprix' ),
						'description' => esc_html__( 'Choose the page background color outside box', 'grandprix' ),
						'parent'      => $boxed_container
					)
				);
				
				grandprix_mikado_add_admin_field(
					array(
						'name'        => 'boxed_background_image',
						'type'        => 'image',
						'label'       => esc_html__( 'Background Image', 'grandprix' ),
						'description' => esc_html__( 'Choose an image to be displayed in background', 'grandprix' ),
						'parent'      => $boxed_container
					)
				);
				
				grandprix_mikado_add_admin_field(
					array(
						'name'        => 'boxed_pattern_background_image',
						'type'        => 'image',
						'label'       => esc_html__( 'Background Pattern', 'grandprix' ),
						'description' => esc_html__( 'Choose an image to be used as background pattern', 'grandprix' ),
						'parent'      => $boxed_container
					)
				);
				
				grandprix_mikado_add_admin_field(
					array(
						'name'          => 'boxed_background_image_attachment',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Background Image Attachment', 'grandprix' ),
						'description'   => esc_html__( 'Choose background image attachment', 'grandprix' ),
						'parent'        => $boxed_container,
						'options'       => array(
							''       => esc_html__( 'Default', 'grandprix' ),
							'fixed'  => esc_html__( 'Fixed', 'grandprix' ),
							'scroll' => esc_html__( 'Scroll', 'grandprix' )
						)
					)
				);
		
		/***************** Boxed Layout - end **********************/
		
		/***************** Passepartout Layout - begin **********************/
		
		grandprix_mikado_add_admin_field(
			array(
				'name'          => 'paspartu',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Passepartout', 'grandprix' ),
				'description'   => esc_html__( 'Enabling this option will display passepartout around site content', 'grandprix' ),
				'parent'        => $panel_design_style
			)
		);
		
			$paspartu_container = grandprix_mikado_add_admin_container(
				array(
					'parent'          => $panel_design_style,
					'name'            => 'paspartu_container',
					'dependency' => array(
						'show' => array(
							'paspartu'  => 'yes'
						)
					)
				)
			);
		
				grandprix_mikado_add_admin_field(
					array(
						'name'        => 'paspartu_color',
						'type'        => 'color',
						'label'       => esc_html__( 'Passepartout Color', 'grandprix' ),
						'description' => esc_html__( 'Choose passepartout color, default value is #ffffff', 'grandprix' ),
						'parent'      => $paspartu_container
					)
				);
				
				grandprix_mikado_add_admin_field(
					array(
						'name'        => 'paspartu_width',
						'type'        => 'text',
						'label'       => esc_html__( 'Passepartout Size', 'grandprix' ),
						'description' => esc_html__( 'Enter size amount for passepartout', 'grandprix' ),
						'parent'      => $paspartu_container,
						'args'        => array(
							'col_width' => 2,
							'suffix'    => 'px or %'
						)
					)
				);
		
				grandprix_mikado_add_admin_field(
					array(
						'name'        => 'paspartu_responsive_width',
						'type'        => 'text',
						'label'       => esc_html__( 'Responsive Passepartout Size', 'grandprix' ),
						'description' => esc_html__( 'Enter size amount for passepartout for smaller screens (tablets and mobiles view)', 'grandprix' ),
						'parent'      => $paspartu_container,
						'args'        => array(
							'col_width' => 2,
							'suffix'    => 'px or %'
						)
					)
				);
				
				grandprix_mikado_add_admin_field(
					array(
						'parent'        => $paspartu_container,
						'type'          => 'yesno',
						'default_value' => 'no',
						'name'          => 'disable_top_paspartu',
						'label'         => esc_html__( 'Disable Top Passepartout', 'grandprix' )
					)
				);
		
				grandprix_mikado_add_admin_field(
					array(
						'parent'        => $paspartu_container,
						'type'          => 'yesno',
						'default_value' => 'no',
						'name'          => 'enable_fixed_paspartu',
						'label'         => esc_html__( 'Enable Fixed Passepartout', 'grandprix' ),
						'description' => esc_html__( 'Enabling this option will set fixed passepartout for your screens', 'grandprix' )
					)
				);
		
		/***************** Passepartout Layout - end **********************/
		
		/***************** Content Layout - begin **********************/
		
		grandprix_mikado_add_admin_field(
			array(
				'name'          => 'initial_content_width',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Initial Width of Content', 'grandprix' ),
				'description'   => esc_html__( 'Choose the initial width of content which is in grid (Applies to pages set to "Default Template" and rows set to "In Grid")', 'grandprix' ),
				'parent'        => $panel_design_style,
				'options'       => array(
					'mkdf-grid-1100' => esc_html__( '1100px - default', 'grandprix' ),
					'mkdf-grid-1300' => esc_html__( '1300px', 'grandprix' ),
					'mkdf-grid-1200' => esc_html__( '1200px', 'grandprix' ),
					'mkdf-grid-1000' => esc_html__( '1000px', 'grandprix' ),
					'mkdf-grid-800'  => esc_html__( '800px', 'grandprix' )
				)
			)
		);
		
		grandprix_mikado_add_admin_field(
			array(
				'name'          => 'preload_pattern_image',
				'type'          => 'image',
				'label'         => esc_html__( 'Preload Pattern Image', 'grandprix' ),
				'description'   => esc_html__( 'Choose preload pattern image to be displayed until images are loaded', 'grandprix' ),
				'parent'        => $panel_design_style
			)
		);
		
		/***************** Content Layout - end **********************/
		
		$panel_settings = grandprix_mikado_add_admin_panel(
			array(
				'page'  => '',
				'name'  => 'panel_settings',
				'title' => esc_html__( 'Settings', 'grandprix' )
			)
		);
		
		/***************** Smooth Scroll Layout - begin **********************/
		
		grandprix_mikado_add_admin_field(
			array(
				'name'          => 'page_smooth_scroll',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Smooth Scroll', 'grandprix' ),
				'description'   => esc_html__( 'Enabling this option will perform a smooth scrolling effect on every page (except on Mac and touch devices)', 'grandprix' ),
				'parent'        => $panel_settings
			)
		);
		
		/***************** Smooth Scroll Layout - end **********************/
		
		/***************** Smooth Page Transitions Layout - begin **********************/
		
		grandprix_mikado_add_admin_field(
			array(
				'name'          => 'smooth_page_transitions',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Smooth Page Transitions', 'grandprix' ),
				'description'   => esc_html__( 'Enabling this option will perform a smooth transition between pages when clicking on links', 'grandprix' ),
				'parent'        => $panel_settings
			)
		);
		
			$page_transitions_container = grandprix_mikado_add_admin_container(
				array(
					'parent'          => $panel_settings,
					'name'            => 'page_transitions_container',
					'dependency' => array(
						'show' => array(
							'smooth_page_transitions'  => 'yes'
						)
					)
				)
			);
		
				grandprix_mikado_add_admin_field(
					array(
						'name'          => 'page_transition_preloader',
						'type'          => 'yesno',
						'default_value' => 'no',
						'label'         => esc_html__( 'Enable Preloading Animation', 'grandprix' ),
						'description'   => esc_html__( 'Enabling this option will display an animated preloader while the page content is loading', 'grandprix' ),
						'parent'        => $page_transitions_container
					)
				);
				
				$page_transition_preloader_container = grandprix_mikado_add_admin_container(
					array(
						'parent'          => $page_transitions_container,
						'name'            => 'page_transition_preloader_container',
						'dependency' => array(
							'show' => array(
								'page_transition_preloader'  => 'yes'
							)
						)
					)
				);
				
					grandprix_mikado_add_admin_field(
						array(
							'name'   => 'smooth_pt_bgnd_color',
							'type'   => 'color',
							'label'  => esc_html__( 'Page Loader Background Color', 'grandprix' ),
							'parent' => $page_transition_preloader_container
						)
					);
					
					$group_pt_spinner_animation = grandprix_mikado_add_admin_group(
						array(
							'name'        => 'group_pt_spinner_animation',
							'title'       => esc_html__( 'Loader Style', 'grandprix' ),
							'description' => esc_html__( 'Define styles for loader spinner animation', 'grandprix' ),
							'parent'      => $page_transition_preloader_container
						)
					);
					
					$row_pt_spinner_animation = grandprix_mikado_add_admin_row(
						array(
							'name'   => 'row_pt_spinner_animation',
							'parent' => $group_pt_spinner_animation
						)
					);
					
					grandprix_mikado_add_admin_field(
						array(
							'type'          => 'selectsimple',
							'name'          => 'smooth_pt_spinner_type',
							'default_value' => '',
							'label'         => esc_html__( 'Spinner Type', 'grandprix' ),
							'parent'        => $row_pt_spinner_animation,
							'options'       => array(
								'grandprix_spinner'        => esc_html__( 'Grandprix', 'grandprix' ),
								'rotate_circles'        => esc_html__( 'Rotate Circles', 'grandprix' ),
								'pulse'                 => esc_html__( 'Pulse', 'grandprix' ),
								'double_pulse'          => esc_html__( 'Double Pulse', 'grandprix' ),
								'cube'                  => esc_html__( 'Cube', 'grandprix' ),
								'rotating_cubes'        => esc_html__( 'Rotating Cubes', 'grandprix' ),
								'stripes'               => esc_html__( 'Stripes', 'grandprix' ),
								'wave'                  => esc_html__( 'Wave', 'grandprix' ),
								'two_rotating_circles'  => esc_html__( '2 Rotating Circles', 'grandprix' ),
								'five_rotating_circles' => esc_html__( '5 Rotating Circles', 'grandprix' ),
								'atom'                  => esc_html__( 'Atom', 'grandprix' ),
								'clock'                 => esc_html__( 'Clock', 'grandprix' ),
								'mitosis'               => esc_html__( 'Mitosis', 'grandprix' ),
								'lines'                 => esc_html__( 'Lines', 'grandprix' ),
								'fussion'               => esc_html__( 'Fussion', 'grandprix' ),
								'wave_circles'          => esc_html__( 'Wave Circles', 'grandprix' ),
								'pulse_circles'         => esc_html__( 'Pulse Circles', 'grandprix' )
							)
						)
					);
					
					grandprix_mikado_add_admin_field(
						array(
							'type'          => 'colorsimple',
							'name'          => 'smooth_pt_spinner_color',
							'default_value' => '',
							'label'         => esc_html__( 'Spinner Color', 'grandprix' ),
							'parent'        => $row_pt_spinner_animation
						)
					);
		
					grandprix_mikado_add_admin_field(
						array(
							'type'          => 'colorsimple',
							'name'          => 'spinner_background_color',
							'default_value' => '',
							'label'         => esc_html__( 'Spinner Background Color', 'grandprix' ),
							'parent'        => $row_pt_spinner_animation,
							'dependency'    => array(
								'show' => array(
									'smooth_pt_spinner_type' => 'grandprix_spinner'
								)
							)
						)
					);
		
					grandprix_mikado_add_admin_field(
						array(
							'type'          => 'text',
							'name'          => 'smooth_pt_spinner_text',
							'default_value' => esc_html__('grand prix', 'grandprix'),
							'label'         => esc_html__( 'Preloader Text', 'grandprix' ),
							'parent'        => $row_pt_spinner_animation,
							'dependency'    => array(
								'show' => array(
									'smooth_pt_spinner_type' => 'grandprix_spinner'
								)
							)
						)
					);
					
					grandprix_mikado_add_admin_field(
						array(
							'name'          => 'page_transition_fadeout',
							'type'          => 'yesno',
							'default_value' => 'no',
							'label'         => esc_html__( 'Enable Fade Out Animation', 'grandprix' ),
							'description'   => esc_html__( 'Enabling this option will turn on fade out animation when leaving page', 'grandprix' ),
							'parent'        => $page_transitions_container
						)
					);
		
		/***************** Smooth Page Transitions Layout - end **********************/
		
		grandprix_mikado_add_admin_field(
			array(
				'name'          => 'show_back_button',
				'type'          => 'yesno',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Show "Back To Top Button"', 'grandprix' ),
				'description'   => esc_html__( 'Enabling this option will display a Back to Top button on every page', 'grandprix' ),
				'parent'        => $panel_settings
			)
		);
		
		grandprix_mikado_add_admin_field(
			array(
				'name'          => 'responsiveness',
				'type'          => 'yesno',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Responsiveness', 'grandprix' ),
				'description'   => esc_html__( 'Enabling this option will make all pages responsive', 'grandprix' ),
				'parent'        => $panel_settings
			)
		);
		
		$panel_custom_code = grandprix_mikado_add_admin_panel(
			array(
				'page'  => '',
				'name'  => 'panel_custom_code',
				'title' => esc_html__( 'Custom Code', 'grandprix' )
			)
		);
		
		grandprix_mikado_add_admin_field(
			array(
				'name'        => 'custom_js',
				'type'        => 'textarea',
				'label'       => esc_html__( 'Custom JS', 'grandprix' ),
				'description' => esc_html__( 'Enter your custom Javascript here', 'grandprix' ),
				'parent'      => $panel_custom_code
			)
		);
		
		$panel_google_api = grandprix_mikado_add_admin_panel(
			array(
				'page'  => '',
				'name'  => 'panel_google_api',
				'title' => esc_html__( 'Google API', 'grandprix' )
			)
		);
		
		grandprix_mikado_add_admin_field(
			array(
				'name'        => 'google_maps_api_key',
				'type'        => 'text',
				'label'       => esc_html__( 'Google Maps Api Key', 'grandprix' ),
				'description' => esc_html__( 'Insert your Google Maps API key here. For instructions on how to create a Google Maps API key, please refer to our to our documentation.', 'grandprix' ),
				'parent'      => $panel_google_api
			)
		);
	}
	
	add_action( 'grandprix_mikado_action_options_map', 'grandprix_mikado_general_options_map', grandprix_mikado_set_options_map_position( 'general' ) );
}

if ( ! function_exists( 'grandprix_mikado_page_general_style' ) ) {
	/**
	 * Function that prints page general inline styles
	 */
	function grandprix_mikado_page_general_style( $style ) {
		$current_style = '';
		$page_id       = grandprix_mikado_get_page_id();
		$class_prefix  = grandprix_mikado_get_unique_page_class( $page_id );
		
		$boxed_background_style = array();
		
		$boxed_page_background_color = grandprix_mikado_get_meta_field_intersect( 'page_background_color_in_box', $page_id );
		if ( ! empty( $boxed_page_background_color ) ) {
			$boxed_background_style['background-color'] = $boxed_page_background_color;
		}
		
		$boxed_page_background_image = grandprix_mikado_get_meta_field_intersect( 'boxed_background_image', $page_id );
		if ( ! empty( $boxed_page_background_image ) ) {
			$boxed_background_style['background-image']    = 'url(' . esc_url( $boxed_page_background_image ) . ')';
			$boxed_background_style['background-position'] = 'center 0px';
			$boxed_background_style['background-repeat']   = 'no-repeat';
		}
		
		$boxed_page_background_pattern_image = grandprix_mikado_get_meta_field_intersect( 'boxed_pattern_background_image', $page_id );
		if ( ! empty( $boxed_page_background_pattern_image ) ) {
			$boxed_background_style['background-image']    = 'url(' . esc_url( $boxed_page_background_pattern_image ) . ')';
			$boxed_background_style['background-position'] = '0px 0px';
			$boxed_background_style['background-repeat']   = 'repeat';
		}
		
		$boxed_page_background_attachment = grandprix_mikado_get_meta_field_intersect( 'boxed_background_image_attachment', $page_id );
		if ( ! empty( $boxed_page_background_attachment ) ) {
			$boxed_background_style['background-attachment'] = $boxed_page_background_attachment;
		}
		
		$boxed_background_selector = $class_prefix . '.mkdf-boxed .mkdf-wrapper';
		
		if ( ! empty( $boxed_background_style ) ) {
			$current_style .= grandprix_mikado_dynamic_css( $boxed_background_selector, $boxed_background_style );
		}
		
		$paspartu_style     = array();
		$paspartu_res_style = array();
		$paspartu_res_start = '@media only screen and (max-width: 1024px) {';
		$paspartu_res_end   = '}';
		
		$paspartu_header_selector                = array(
			'.mkdf-paspartu-enabled .mkdf-page-header .mkdf-fixed-wrapper.fixed',
			'.mkdf-paspartu-enabled .mkdf-sticky-header',
			'.mkdf-paspartu-enabled .mkdf-mobile-header.mobile-header-appear .mkdf-mobile-header-inner'
		);
		$paspartu_header_appear_selector         = array(
			'.mkdf-paspartu-enabled.mkdf-fixed-paspartu-enabled .mkdf-page-header .mkdf-fixed-wrapper.fixed',
			'.mkdf-paspartu-enabled.mkdf-fixed-paspartu-enabled .mkdf-sticky-header.header-appear',
			'.mkdf-paspartu-enabled.mkdf-fixed-paspartu-enabled .mkdf-mobile-header.mobile-header-appear .mkdf-mobile-header-inner'
		);
		
		$paspartu_header_style                   = array();
		$paspartu_header_appear_style            = array();
		$paspartu_header_responsive_style        = array();
		$paspartu_header_appear_responsive_style = array();
		
		$paspartu_color = grandprix_mikado_get_meta_field_intersect( 'paspartu_color', $page_id );
		if ( ! empty( $paspartu_color ) ) {
			$paspartu_style['background-color'] = $paspartu_color;
		}
		
		$paspartu_width = grandprix_mikado_get_meta_field_intersect( 'paspartu_width', $page_id );
		if ( $paspartu_width !== '' ) {
			if ( grandprix_mikado_string_ends_with( $paspartu_width, '%' ) || grandprix_mikado_string_ends_with( $paspartu_width, 'px' ) ) {
				$paspartu_style['padding'] = $paspartu_width;
				
				$paspartu_clean_width      = grandprix_mikado_string_ends_with( $paspartu_width, '%' ) ? grandprix_mikado_filter_suffix( $paspartu_width, '%' ) : grandprix_mikado_filter_suffix( $paspartu_width, 'px' );
				$paspartu_clean_width_mark = grandprix_mikado_string_ends_with( $paspartu_width, '%' ) ? '%' : 'px';
				
				$paspartu_header_style['left']              = $paspartu_width;
				$paspartu_header_style['width']             = 'calc(100% - ' . ( 2 * $paspartu_clean_width ) . $paspartu_clean_width_mark . ')';
				$paspartu_header_appear_style['margin-top'] = $paspartu_width;
			} else {
				$paspartu_style['padding'] = $paspartu_width . 'px';
				
				$paspartu_header_style['left']              = $paspartu_width . 'px';
				$paspartu_header_style['width']             = 'calc(100% - ' . ( 2 * $paspartu_width ) . 'px)';
				$paspartu_header_appear_style['margin-top'] = $paspartu_width . 'px';
			}
		}
		
		$paspartu_selector = $class_prefix . '.mkdf-paspartu-enabled .mkdf-wrapper';
		
		if ( ! empty( $paspartu_style ) ) {
			$current_style .= grandprix_mikado_dynamic_css( $paspartu_selector, $paspartu_style );
		}
		
		if ( ! empty( $paspartu_header_style ) ) {
			$current_style .= grandprix_mikado_dynamic_css( $paspartu_header_selector, $paspartu_header_style );
			$current_style .= grandprix_mikado_dynamic_css( $paspartu_header_appear_selector, $paspartu_header_appear_style );
		}
		
		$paspartu_responsive_width = grandprix_mikado_get_meta_field_intersect( 'paspartu_responsive_width', $page_id );
		if ( $paspartu_responsive_width !== '' ) {
			if ( grandprix_mikado_string_ends_with( $paspartu_responsive_width, '%' ) || grandprix_mikado_string_ends_with( $paspartu_responsive_width, 'px' ) ) {
				$paspartu_res_style['padding'] = $paspartu_responsive_width;
				
				$paspartu_clean_width      = grandprix_mikado_string_ends_with( $paspartu_responsive_width, '%' ) ? grandprix_mikado_filter_suffix( $paspartu_responsive_width, '%' ) : grandprix_mikado_filter_suffix( $paspartu_responsive_width, 'px' );
				$paspartu_clean_width_mark = grandprix_mikado_string_ends_with( $paspartu_responsive_width, '%' ) ? '%' : 'px';
				
				$paspartu_header_responsive_style['left']              = $paspartu_responsive_width;
				$paspartu_header_responsive_style['width']             = 'calc(100% - ' . ( 2 * $paspartu_clean_width ) . $paspartu_clean_width_mark . ')';
				$paspartu_header_appear_responsive_style['margin-top'] = $paspartu_responsive_width;
			} else {
				$paspartu_res_style['padding'] = $paspartu_responsive_width . 'px';
				
				$paspartu_header_responsive_style['left']              = $paspartu_responsive_width . 'px';
				$paspartu_header_responsive_style['width']             = 'calc(100% - ' . ( 2 * $paspartu_responsive_width ) . 'px)';
				$paspartu_header_appear_responsive_style['margin-top'] = $paspartu_responsive_width . 'px';
			}
		}
		
		if ( ! empty( $paspartu_res_style ) ) {
			$current_style .= $paspartu_res_start . grandprix_mikado_dynamic_css( $paspartu_selector, $paspartu_res_style ) . $paspartu_res_end;
		}
		
		if ( ! empty( $paspartu_header_responsive_style ) ) {
			$current_style .= $paspartu_res_start . grandprix_mikado_dynamic_css( $paspartu_header_selector, $paspartu_header_responsive_style ) . $paspartu_res_end;
			$current_style .= $paspartu_res_start . grandprix_mikado_dynamic_css( $paspartu_header_appear_selector, $paspartu_header_appear_responsive_style ) . $paspartu_res_end;
		}
		
		$current_style = $current_style . $style;
		
		return $current_style;
	}
	
	add_filter( 'grandprix_mikado_filter_add_page_custom_style', 'grandprix_mikado_page_general_style' );
}