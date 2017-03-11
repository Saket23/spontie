<?php 

	/*
	*
	*	Theme Customizer Options
	*	------------------------------------------------
	*	Themes Awesome Framework
	* 	Copyright Themes Awesome 2013 - http://www.themesawesome.com
	*
	*	rinjani_customize_register()
	*	rinjani_customize_preview()
	*
	*/
	
	if (!function_exists('rinjani_customize_register')) {
		function rinjani_customize_register($wp_customize) {
		
			$wp_customize->get_setting('blogname')->transport='postMessage';
			$wp_customize->get_setting('blogdescription')->transport='postMessage';
			$wp_customize->get_setting('header_textcolor')->transport='postMessage';

			/* HEADER STYLING
			================================================== */
			
			$wp_customize->add_section( 'header_styling', array(
				'title'		=>	__( 'Header', 'rinjani' ),
				'priority'	=>	200,
			) );
			
			//SECTION

			$wp_customize->add_setting( 'bg_top_header', array(
				'default'		=> 	'#111111',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'bg_submenu', array(
				'default'		=> 	'#111111',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'bg_submenu_hov', array(
				'default'		=> 	'#222222',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'bord_top_header', array(
				'default'		=> 	'#2f3035',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'icon_search', array(
				'default'		=> 	'#ffffff',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'bg_search', array(
				'default'		=> 	'#2d2d2d',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'menu_list', array(
				'default'		=> 	'#ffffff',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'sub_menu', array(
				'default'		=> 	'#ffffff',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'icon_sosmed', array(
				'default'		=> 	'#ffffff',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'icon_sosmed_hover', array(
				'default'		=> 	'#ffffff',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'icon_sosmed_bg_hover', array(
				'default'		=> 	'#2f2f2f',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'bg_logo', array(
				'default'		=> 	'#ffffff',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'bord_head', array(
				'default'		=> 	'#eaeaea',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'menu_list2', array(
				'default'		=> 	'#222222',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			
			//CONTROL
			
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_top_header', array(
				'label'		=>	__( 'Background Header Top Color', 'rinjani' ),
				'section'	=>	'header_styling',
				'settings'	=>	'bg_top_header',
				'priority'	=>	1,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_submenu', array(
				'label'		=>	__( 'Submenu Background Color', 'rinjani' ),
				'section'	=>	'header_styling',
				'settings'	=>	'bg_submenu',
				'priority'	=>	2,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_submenu_hov', array(
				'label'		=>	__( 'Submenu Background Hover Color', 'rinjani' ),
				'section'	=>	'header_styling',
				'settings'	=>	'bg_submenu_hov',
				'priority'	=>	3,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bord_top_header', array(
				'label'		=>	__( 'Border Submenu Header Top Color', 'rinjani' ),
				'section'	=>	'header_styling',
				'settings'	=>	'bord_top_header',
				'priority'	=>	4,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'icon_search', array(
				'label'		=>	__( 'Icon Search Color', 'rinjani' ),
				'section'	=>	'header_styling',
				'settings'	=>	'icon_search',
				'priority'	=>	5,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_search', array(
				'label'		=>	__( 'Background Search Color', 'rinjani' ),
				'section'	=>	'header_styling',
				'settings'	=>	'bg_search',
				'priority'	=>	6,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_list', array(
				'label'		=>	__( 'Menu List Top Header Color', 'rinjani' ),
				'section'	=>	'header_styling',
				'settings'	=>	'menu_list',
				'priority'	=>	7,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sub_menu', array(
				'label'		=>	__( 'Submenu Text  Color', 'rinjani' ),
				'section'	=>	'header_styling',
				'settings'	=>	'sub_menu',
				'priority'	=>	8,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'icon_sosmed', array(
				'label'		=>	__( 'Icon Social Media Color', 'rinjani' ),
				'section'	=>	'header_styling',
				'settings'	=>	'icon_sosmed',
				'priority'	=>	9,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'icon_sosmed_hover', array(
				'label'		=>	__( 'Icon Social Media Hover Color', 'rinjani' ),
				'section'	=>	'header_styling',
				'settings'	=>	'icon_sosmed_hover',
				'priority'	=>	10,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'icon_sosmed_bg_hover', array(
				'label'		=>	__( 'Icon Social Media Background Hover Color', 'rinjani' ),
				'section'	=>	'header_styling',
				'settings'	=>	'icon_sosmed_bg_hover',
				'priority'	=>	11,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_logo', array(
				'label'		=>	__( 'Header Bottom Background Color', 'rinjani' ),
				'section'	=>	'header_styling',
				'settings'	=>	'bg_logo',
				'priority'	=>	12,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bord_head', array(
				'label'		=>	__( 'Header Bottom Border Color', 'rinjani' ),
				'section'	=>	'header_styling',
				'settings'	=>	'bord_head',
				'priority'	=>	13,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_list2', array(
				'label'		=>	__( 'Menu List Header Bottom Color', 'rinjani' ),
				'section'	=>	'header_styling',
				'settings'	=>	'menu_list2',
				'priority'	=>	14,
			) ) );


			/* CONTENT STYLING
			================================================== */
			
			$wp_customize->add_section( 'content_styling', array(
				'title'		=>	__( 'Content', 'rinjani' ),
				'priority'	=>	200,
			) );
			
			//SECTION

			$wp_customize->add_setting( 'bg_loop', array(
				'default'		=> 	'#ffffff',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'bg_forlink', array(
				'default'		=> 	'#48D8F9',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'text_forlink', array(
				'default'		=> 	'#ffffff',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'bord_loop', array(
				'default'		=> 	'#48D8F9',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'title_post', array(
				'default'		=> 	'#333333',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'category_post', array(
				'default'		=> 	'#333333',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'date_post', array(
				'default'		=> 	'#888888',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'content_post', array(
				'default'		=> 	'#666666',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'btn_post', array(
				'default'		=> 	'#48D8F9',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'btn_text', array(
				'default'		=> 	'#ffffff',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'btn_hove_bg', array(
				'default'		=> 	'#f1f1f1',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'btn_hove_txt', array(
				'default'		=> 	'#222222',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'bg_share', array(
				'default'		=> 	'#f1f1f1',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'tex_share', array(
				'default'		=> 	'#333333',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'icon_share', array(
				'default'		=> 	'#000000',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'icon_share_hov', array(
				'default'		=> 	'#999999',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'arrow_gallery', array(
				'default'		=> 	'#ffffff',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'arrow_icon', array(
				'default'		=> 	'#222222',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'pagination_bg', array(
				'default'		=> 	'#48D8F9',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'pagination_bg_hov', array(
				'default'		=> 	'#ffffff',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'pagination_text', array(
				'default'		=> 	'#ffffff',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'pagination_hov', array(
				'default'		=> 	'#333333',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'link_color', array(
				'default'		=> 	'#48D8F9',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'link_hov', array(
				'default'		=> 	'#222222',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'btn_comment', array(
				'default'		=> 	'#48D8F9',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'btn_comment_tex', array(
				'default'		=> 	'#ffffff',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'bord_title_widget', array(
				'default'		=> 	'#d3d3d3',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'text_widget', array(
				'default'		=> 	'#333333',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'bord_author', array(
				'default'		=> 	'#333333',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'bord_title_post', array(
				'default'		=> 	'#48D8F9',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );


			//CONTROL
			
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_loop', array(
				'label'		=>	__( 'Background Loop Content (Post) Color', 'rinjani' ),
				'section'	=>	'content_styling',
				'settings'	=>	'bg_loop',
				'priority'	=>	1,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_forlink', array(
				'label'		=>	__( 'Background Loop Post Format Link Color', 'rinjani' ),
				'section'	=>	'content_styling',
				'settings'	=>	'bg_forlink',
				'priority'	=>	2,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_forlink', array(
				'label'		=>	__( 'Text Post Format Link Color', 'rinjani' ),
				'section'	=>	'content_styling',
				'settings'	=>	'text_forlink',
				'priority'	=>	3,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bord_loop', array(
				'label'		=>	__( 'Border Loop Content (Post) Color', 'rinjani' ),
				'section'	=>	'content_styling',
				'settings'	=>	'bord_loop',
				'priority'	=>	4,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_post', array(
				'label'		=>	__( 'Title Color', 'rinjani' ),
				'section'	=>	'content_styling',
				'settings'	=>	'title_post',
				'priority'	=>	5,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_post', array(
				'label'		=>	__( 'Post Category Color', 'rinjani' ),
				'section'	=>	'content_styling',
				'settings'	=>	'category_post',
				'priority'	=>	6,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'date_post', array(
				'label'		=>	__( 'Post Date Color', 'rinjani' ),
				'section'	=>	'content_styling',
				'settings'	=>	'date_post',
				'priority'	=>	7,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'content_post', array(
				'label'		=>	__( 'Post Content Color', 'rinjani' ),
				'section'	=>	'content_styling',
				'settings'	=>	'content_post',
				'priority'	=>	8,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_post', array(
				'label'		=>	__( 'Button Color', 'rinjani' ),
				'section'	=>	'content_styling',
				'settings'	=>	'btn_post',
				'priority'	=>	9,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_text', array(
				'label'		=>	__( 'Button Text Color', 'rinjani' ),
				'section'	=>	'content_styling',
				'settings'	=>	'btn_text',
				'priority'	=>	10,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_hove_bg', array(
				'label'		=>	__( 'Button Background Hover Color', 'rinjani' ),
				'section'	=>	'content_styling',
				'settings'	=>	'btn_hove_bg',
				'priority'	=>	11,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_hove_txt', array(
				'label'		=>	__( 'Button Text Hover Color', 'rinjani' ),
				'section'	=>	'content_styling',
				'settings'	=>	'btn_hove_txt',
				'priority'	=>	12,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_share', array(
				'label'		=>	__( 'Button Share Background Color', 'rinjani' ),
				'section'	=>	'content_styling',
				'settings'	=>	'bg_share',
				'priority'	=>	13,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tex_share', array(
				'label'		=>	__( 'Button Share Text Color', 'rinjani' ),
				'section'	=>	'content_styling',
				'settings'	=>	'tex_share',
				'priority'	=>	14,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'icon_share', array(
				'label'		=>	__( 'Social Media Icon Share Color', 'rinjani' ),
				'section'	=>	'content_styling',
				'settings'	=>	'icon_share',
				'priority'	=>	15,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'icon_share_hov', array(
				'label'		=>	__( 'Social Media Icon Share Color', 'rinjani' ),
				'section'	=>	'content_styling',
				'settings'	=>	'icon_share_hov',
				'priority'	=>	16,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'arrow_gallery', array(
				'label'		=>	__( 'Arrow Button Gallery Post Background Color', 'rinjani' ),
				'section'	=>	'content_styling',
				'settings'	=>	'arrow_gallery',
				'priority'	=>	17,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'arrow_icon', array(
				'label'		=>	__( 'Arrow Button Gallery Post Icon Color', 'rinjani' ),
				'section'	=>	'content_styling',
				'settings'	=>	'arrow_icon',
				'priority'	=>	18,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'pagination_bg', array(
				'label'		=>	__( 'Navigation Previous and Next Color', 'rinjani' ),
				'section'	=>	'content_styling',
				'settings'	=>	'pagination_bg',
				'priority'	=>	19,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'pagination_bg_hov', array(
				'label'		=>	__( 'Navigation Previous and Next Hover Color', 'rinjani' ),
				'section'	=>	'content_styling',
				'settings'	=>	'pagination_bg_hov',
				'priority'	=>	20,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'pagination_text', array(
				'label'		=>	__( 'Navigation Text Color', 'rinjani' ),
				'section'	=>	'content_styling',
				'settings'	=>	'pagination_text',
				'priority'	=>	21,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'pagination_hov', array(
				'label'		=>	__( 'Navigation Text Hover Color', 'rinjani' ),
				'section'	=>	'content_styling',
				'settings'	=>	'pagination_hov',
				'priority'	=>	22,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
				'label'		=>	__( 'Link Text Blue Color', 'rinjani' ),
				'section'	=>	'content_styling',
				'settings'	=>	'link_color',
				'priority'	=>	23,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_hov', array(
				'label'		=>	__( 'Link Text Blue Hover Color', 'rinjani' ),
				'section'	=>	'content_styling',
				'settings'	=>	'link_hov',
				'priority'	=>	24,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_comment', array(
				'label'		=>	__( 'Button Post Comment Color', 'rinjani' ),
				'section'	=>	'content_styling',
				'settings'	=>	'btn_comment',
				'priority'	=>	25,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_comment_tex', array(
				'label'		=>	__( 'Button Text Post Comment Color', 'rinjani' ),
				'section'	=>	'content_styling',
				'settings'	=>	'btn_comment_tex',
				'priority'	=>	26,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bord_title_widget', array(
				'label'		=>	__( 'Border Title Widget Color', 'rinjani' ),
				'section'	=>	'content_styling',
				'settings'	=>	'bord_title_widget',
				'priority'	=>	27,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_widget', array(
				'label'		=>	__( 'Text and Link Widget Color', 'rinjani' ),
				'section'	=>	'content_styling',
				'settings'	=>	'text_widget',
				'priority'	=>	28,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bord_author', array(
				'label'		=>	__( 'Author Picture Border Color', 'rinjani' ),
				'section'	=>	'content_styling',
				'settings'	=>	'bord_author',
				'priority'	=>	29,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bord_title_post', array(
				'label'		=>	__( 'Border Title Post Color', 'rinjani' ),
				'section'	=>	'content_styling',
				'settings'	=>	'bord_title_post',
				'priority'	=>	30,
			) ) );


			/* FOOTER STYLING
			================================================== */
			
			$wp_customize->add_section( 'footer_styling', array(
				'title'		=>	__( 'Footer', 'rinjani' ),
				'priority'	=>	200,
			) );
			
			//SECTION

			$wp_customize->add_setting( 'bg_footer', array(
				'default'		=> 	'#ffffff',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'copyright_text', array(
				'default'		=> 	'#333333',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'sosmed_footer', array(
				'default'		=> 	'#a7a7a7',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'sosmed_footer_hov', array(
				'default'		=> 	'#48D8F9',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'footer_link', array(
				'default'		=> 	'#333333',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			//CONTROL
			
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_footer', array(
				'label'		=>	__( 'Background Footer Color', 'rinjani' ),
				'section'	=>	'footer_styling',
				'settings'	=>	'bg_footer',
				'priority'	=>	1,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'copyright_text', array(
				'label'		=>	__( 'Copyright Text Color', 'rinjani' ),
				'section'	=>	'footer_styling',
				'settings'	=>	'copyright_text',
				'priority'	=>	2,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sosmed_footer', array(
				'label'		=>	__( 'Social Icon Footer Color', 'rinjani' ),
				'section'	=>	'footer_styling',
				'settings'	=>	'sosmed_footer',
				'priority'	=>	3,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sosmed_footer_hov', array(
				'label'		=>	__( 'Social Icon Footer Hover Color', 'rinjani' ),
				'section'	=>	'footer_styling',
				'settings'	=>	'sosmed_footer_hov',
				'priority'	=>	4,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_link', array(
				'label'		=>	__( 'Footer Link Text Color', 'rinjani' ),
				'section'	=>	'footer_styling',
				'settings'	=>	'footer_link',
				'priority'	=>	5,
			) ) );
			
			

		}
		add_action( 'customize_register', 'rinjani_customize_register' );

	}
	
	
	function rinjani_customizer_live_preview() {
		wp_enqueue_script( 'akmanda-customizer',	get_template_directory_uri().'/js/akmanda-customizer.js', array( 'jquery','customize-preview' ), NULL, true);
	}
	add_action( 'customize_preview_init', 'rinjani_customizer_live_preview' );
	


	function rinjani_customizer_header_output() {	

	//header styling

	$bg_top_header				=	get_option('bg_top_header', '#111111');
	$bg_submenu					=	get_option('bg_submenu', '#111111');
	$bg_submenu_hov				=	get_option('bg_submenu_hov', '#222222');
	$bord_top_header			=	get_option('bord_top_header', '#2f3035');
	$bg_search					=	get_option('bg_search', '#2d2d2d');
	$icon_search				=	get_option('icon_search', '#ffffff');
	$menu_list					=	get_option('menu_list', '#ffffff');
	$sub_menu					=	get_option('sub_menu', '#ffffff');
	$icon_sosmed				=	get_option('icon_sosmed', '#ffffff');
	$icon_sosmed_hover			=	get_option('icon_sosmed_hover', '#ffffff');
	$icon_sosmed_bg_hover		=	get_option('icon_sosmed_bg_hover', '#2f2f2f');
	$bg_logo					=	get_option('bg_logo', '#ffffff');
	$bord_head					=	get_option('bord_head', '#eaeaea');
	$menu_list2					=	get_option('menu_list2', '#222222');

	//Content styling

	$bg_loop					=	get_option('bg_loop', '#ffffff');
	$bg_forlink					=	get_option('bg_forlink', '#48D8F9');
	$text_forlink				=	get_option('text_forlink', '#ffffff');
	$bord_loop					=	get_option('bord_loop', '#48D8F9');
	$title_post					=	get_option('title_post', '#333333');
	$category_post				=	get_option('category_post', '#333333');
	$date_post					=	get_option('date_post', '#888888');
	$content_post				=	get_option('content_post', '#666666');
	$btn_post					=	get_option('btn_post', '#48D8F9');
	$btn_text					=	get_option('btn_text', '#ffffff');
	$btn_hove_bg				=	get_option('btn_hove_bg', '#f1f1f1');
	$btn_hove_txt				=	get_option('btn_hove_txt', '#222222');
	$bg_share					=	get_option('bg_share', '#f1f1f1');
	$tex_share					=	get_option('tex_share', '#333333');
	$icon_share					=	get_option('icon_share', '#000000');
	$icon_share_hov				=	get_option('icon_share_hov', '#999999');
	$arrow_gallery				=	get_option('arrow_gallery', '#ffffff');
	$arrow_icon					=	get_option('arrow_icon', '#222222');
	$pagination_bg				=	get_option('pagination_bg', '#48D8F9');
	$pagination_bg_hov			=	get_option('pagination_bg_hov', '#ffffff');
	$pagination_text			=	get_option('pagination_text', '#ffffff');
	$pagination_hov				=	get_option('pagination_hov', '#333333');
	$link_color					=	get_option('link_color', '#48D8F9');
	$link_hov					=	get_option('link_hov', '#222222');
	$btn_comment				=	get_option('btn_comment', '#48D8F9');
	$btn_comment_tex			=	get_option('btn_comment_tex', '#ffffff');
	$bord_title_widget			=	get_option('bord_title_widget', '#d3d3d3');
	$text_widget				=	get_option('text_widget', '#333333');
	$bord_author				=	get_option('bord_author', '#333333');
	$bord_title_post			=	get_option('bord_title_post', '#48D8F9');

	//Footer styling

	$bg_footer					=	get_option('bg_footer', '#ffffff');
	$copyright_text				=	get_option('copyright_text', '#333333');
	$sosmed_footer				=	get_option('sosmed_footer', '#a7a7a7');
	$sosmed_footer_hov			=	get_option('sosmed_footer_hov', '#48D8F9');
	$footer_link				=	get_option('footer_link', '#333333');
	

	echo '<style type="text/css">';

	//=========HEADER STYLING======//

	echo '.site-header-top{background-color:'.$bg_top_header.'}' ;
	echo '.menus ul.sub-menu li a, .menus ul{background-color:'.$bg_submenu.'}' ;
	echo '.menus ul.sub-menu li a:hover{background-color:'.$bg_submenu_hov.'}' ;
	echo '.menus ul.sub-menu li{border-top-color:'.$bord_top_header.'}' ;
	echo '.menus ul.sub-menu li{border-bottom-color:'.$bord_top_header.'}' ;
	echo '.sb-search-input{background-color:'.$bg_search.'}' ;
	echo '.sb-icon-search i{color:'.$icon_search.'}' ;
	echo '.site-header-top .secondary-nav li a, .menus li.menu-item-has-children:hover ul li a, .menus .children li a, .menus .sub-menu li a{color:'.$menu_list.'}' ;
	echo '.menus li.menu-item-has-children:before{color:'.$menu_list.'}' ;
	echo '.menus li.menu-item-has-children:hover ul li a{color:'.$sub_menu.'}' ;
	echo '.site-header-social li a{color:'.$icon_sosmed.'}' ;
	echo '.site-header-social li:hover a{color:'.$icon_sosmed_hover.'}' ;
	echo '.site-header-social li:hover{background-color:'.$icon_sosmed_bg_hover.'}' ;
	echo '#header{background-color:'.$bg_logo.'}' ;
	echo '.site-header-logo{border-bottom-color:'.$bord_head.'}' ;
	echo '.menus a, .site-header-bottom .menus li.menu-item-has-children:before{color:'.$menu_list2.'}' ;


	//=========CONTENT STYLING======//

	echo '.loop-content{background-color:'.$bg_loop.'}' ;
	echo '.post.format-link .link-content, .post.format-link .link-icon:before{background-color:'.$bg_forlink.'}' ;
	echo '.post.format-link .link-content a{color:'.$text_forlink.'}' ;
	echo '.loop-content .category:after{background-color:'.$bord_loop.'}' ;
	echo '.sticky .top-info:before{color:'.$bord_loop.'}' ;
	echo '.loop-content h3.title, .single-post .post-title, .author-wrapper .author-name a, .widget-title, .author-wrapper .author-name, .related-content h4, .related-title a, .comments-title h4, #respond h3{color:'.$title_post.'}' ;
	echo '.loop-content .category a, .post-meta, .post-meta a, .separate-dot{color:'.$category_post.'}' ;
	echo '.loop-content .date{color:'.$date_post.'}' ;
	echo '.loop-content p, .post-content{color:'.$content_post.'}' ;
	echo 'a.more{background-color:'.$btn_post.'}' ;
	echo 'a.more{color:'.$btn_text.'}' ;
	echo 'a.more:hover{background-color:'.$btn_hove_bg.'}' ;
	echo 'a.more:hover{color:'.$btn_hove_txt.'}' ;
	echo '.share{background-color:'.$bg_share.'}' ;
	echo '.share{color:'.$tex_share.'}' ;
	echo '.social-share a{color:'.$icon_share.'}' ;
	echo '.social-share a:hover{color:'.$icon_share_hov.'}' ;
	echo '.post.format-gallery .flex-direction-nav a{background-color:'.$arrow_gallery.'}' ;
	echo '.post.format-gallery .flex-direction-nav a:before{color:'.$arrow_icon.'}' ;
	echo '.nav-previous a, .nav-next a{background-color:'.$pagination_bg.'}' ;
	echo '.nav-previous a, .nav-next a{border-bottom-color:'.$pagination_bg.'}' ;
	echo '.nav-previous a:hover, .nav-next a:hover{background-color:'.$pagination_bg_hov.'}' ;
	echo '.nav-previous a{color:'.$pagination_text.'}' ;
	echo '.nav-previous a:hover{color:'.$pagination_hov.'}' ;
	echo '.tag-wrapper a, .edit-link a, .logged-in-as a{color:'.$link_color.'}' ;
	echo 'a:hover, .comment-action a:hover{color:'.$link_hov.'}' ;
	echo '.form-submit .submit{background-color:'.$btn_comment.'}' ;
	echo '.form-submit .submit{color:'.$btn_comment_tex.'}' ;
	echo '.widget-title:before{background-color:'.$bord_title_widget.'}' ;
	echo '.widget-area .widget li a, .recent-post-content p, .widget li, .rinjani_author_bio{color:'.$text_widget.'}' ;
	echo '.rinjani_author_img img{border-color:'.$bord_author.'}' ;
	echo '.single-meta-line{background-color:'.$bord_title_post.'}' ;

	//=========FOOTER STYLING======//

	echo '.site-footer{background-color:'.$bg_footer.'}' ;
	echo '.copyright-text{color:'.$copyright_text.'}' ;
	echo '.site-footer-social li a{color:'.$sosmed_footer.'}' ;
	echo '.site-footer-social li a:hover{color:'.$sosmed_footer_hov.'}' ;
	echo '.copyright-text a{color:'.$footer_link.'}' ;

	
	echo '</style> ';

	}

	add_action( 'wp_head', 'rinjani_customizer_header_output');