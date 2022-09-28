<?php
/**
 * Preset headers data.
 */

return [
	'default' => [],
	'classic' => [
		'header_layout'          => 'smart-legacy',
		'header_width'           => 'full-wrap',
		'header_social_style'    => 'c',
		'header_search_type'     => 'form',
		
		'header_scheme_top'      => 'light',
		'header_items_top_left'  => ['ticker'],
		'header_items_top_right' => ['social-icons', 'search'],
		
		'header_scheme_mid'      => 'light',
		'header_items_mid_left'  => ['logo'],
		'header_items_mid_right' => ['text'],
		
		'header_width_bot'       => 'contain',
		'header_items_bot_left'  => ['nav-menu'],

		'header_nav_hov_style'   => 'b',

		'header_mob_scheme_mid'  => 'light'
	],

	'sports' => [
		// 'header_layout'            => 'smart-b',
		'header_width'             => 'full',
		// 'header_social_style'      => 'b',
		
		'header_items_top_left'   => ['nav-small'],
		'header_items_top_right'  => ['social-icons', 'search'],
		'css_header_height_top'   => '45',
		'css_header_bg_top'       => '#001526',

		'header_items_mid_left'    => ['hamburger', 'logo'],
		'header_items_mid_center'  => ['nav-menu'],
		'header_items_mid_right'   => ['button'],
		'css_header_height_mid'    => '86',
		'css_header_bg_sd_mid'     => '#081736',
		
		'header_search_overlay_scheme'  => '',
		
		'css_drop_bg_dark'         => '#081736',
		'css_nav_space'            => '16',
		'css_nav_typo_size'        => '15',
		'css_nav_typo_transform'   => 'uppercase',
		'css_nav_typo_weight'      => 'bold',
		'css_nav_small_first_nopad' => '1',
		'css_nav_typo_spacing'      => '0.05',
		'css_nav_color_dark'       => '#ffffff',
		'css_nav_hover_dark'       => '--c-main',
		'css_nav_arrow_color_dark' => '#aaaaaa',
		'css_nav_small_color_dark'      => '#dddddd',
		'header_offcanvas_desktop_menu' => 1,
		
		'header_mob_items_mid_right' => ['scheme-switch', 'search'],
		'css_header_mob_height_mid'  => '70',
		'css_header_mob_bg_sd_mid'   => '#081736',
		'css_header_offcanvas_bg_sd' => '#081736'

	],

	'news' => [
		'header_width'            => 'full',
		'header_items_top_left'   => ['nav-small'],
		'header_items_top_right'  => ['social-icons', 'scheme-switch', 'search'],
		'css_header_height_top'   => '45',
		'css_header_bg_sd_top'    => '#0b101b',

		'header_items_mid_left'     => ['hamburger', 'logo'],
		'header_items_mid_center'   => ['nav-menu'],
		'header_items_mid_right'    => ['button'],
		'css_header_height_mid'     => '84',
		'css_header_bg_sd_mid'      => '#081736',
		'css_header_grad_mid'       => 1,
		'css_header_grad_mid_c1'    => '#050e25',
		'css_header_grad_mid_c2'    => '#141c2b',
		'css_header_grad_mid_angle' => '-90',

		'header_search_overlay_scheme'  => '',
		'header_offcanvas_desktop_menu' => 1,

		'css_nav_space'              => '15',
		'css_nav_small_first_nopad'  => '1',
		'css_nav_typo_size'          => '16',
		'css_nav_typo_spacing'       => '0',
		'css_drop_bg_dark'           => '#0b1321',
		'header_nav_hov_style'       => 'b',
		'css_nav_hov_b_weight'       => '3',
		'css_nav_color_dark'         => '#ffffff',
		'css_nav_arrow_color_dark'   => '#969696',
		'css_hov_bg_dark'            => 'rgba(255,255,255,0.01)',
		'css_drop_hov_bg_dark'       => 'rgba(255,255,255,0.03)',
		
		'header_mob_items_mid_right' => ['scheme-switch', 'search'],
		'css_header_mob_height_mid'  => '70',
		'css_header_mob_bg_sd_mid'   => '#141c2b',
		'css_header_offcanvas_bg_sd' => '#0b1321'
	],

	'good-news' => [
		'header_layout'            => 'smart-b',
		'header_width'             => 'full-wrap',
		'header_social_style'      => 'b',
		
		'header_items_mid_left'    => ['social-icons'],
		'header_items_mid_center'  => ['logo'],
		'header_items_mid_right'   => ['button'],
		
		'header_items_bot_left'    => ['hamburger'],
		'header_items_bot_center'  => ['nav-menu'],
		'header_items_bot_right'   => ['search'],
	],

	'tech' => [
		// 'header_layout'            => 'smart-a',
		'header_width'             => 'full',
		// 'header_social_style'      => 'a',
		'css_header_c_shadow'      => 'rgba(0,0,0,0.05)',
		'header_items_top_left'    => ['nav-small'],
		'header_items_top_right'   => ['social-icons', 'scheme-switch', 'search'],
		'css_header_bg_top'        => '--c-main',
		'css_header_height_top'    => '36',
		
		'header_scheme_mid'        => 'light',
		'header_items_mid_left'    => ['hamburger'],
		'header_items_mid_center'  => ['logo'],
		'header_items_mid_right'   => ['button'],
		'css_header_height_mid'    => '85',
		
		'header_scheme_bot'         => 'light',
		// 'header_items_bot_left'     => [],
		'header_items_bot_center'   => ['nav-menu'],
		// 'header_items_bot_right'    => [],

		'css_header_border_top_bot'     => '0',
		'css_header_social_color'       => '#fff',
		'header_offcanvas_scheme'       => 'light',
		'header_search_overlay_scheme'  => '',
		'css_header_social_hov_color'   => '#f2f2f2',
		'css_header_search_hov_color'   => '#f2f2f2',
		'css_header_switcher_hov_color' => '#f2f2f2',
		'css_nav_arrow_color_light'     => '#353535',
		'css_nav_small_color_dark'      => 'rgba(255,255,255,0.92)',
		'css_nav_small_hover_dark'      => '#fff',

		'header_mob_scheme_mid'      => 'light',
		'header_mob_items_mid_right' => ['scheme-switch', 'search']
	],

	'tech-2' => [
		'header_width'             => 'full',
		
		'header_items_top_left'    => ['nav-small'],
		'header_items_top_right'   => ['social-icons'],
		'css_header_height_top'    => '34',

		'header_scheme_mid'        => 'light',
		'header_items_mid_left'    => ['logo', 'nav-menu'],
		'header_items_mid_right'   => ['scheme-switch', 'search'],
		'css_header_height_mid'    => '76',
		
		'header_scheme_bot'         => 'light',
		'css_header_c_shadow'       => 'rgba(0,0,0,0.05)',
		'css_header_border_top_bot' => '0',

		'header_offcanvas_scheme'       => 'light',
		'header_offcanvas_desktop_menu' => 1,
		'header_search_overlay_scheme'  => '',
		'css_header_social_hov_color'   => '#f2f2f2',

		'css_header_social_space'   => '5',

		'header_mob_scheme_mid'      => 'light',
		'header_mob_items_mid_right' => ['scheme-switch', 'search']
	],

	'zine' => [
		'header_sticky'             => 'bot',
		'header_items_top_left'    => ['date', 'nav-small'],
		'header_items_top_right'   => ['social-icons'],
		'css_header_height_top'    => '38',
		'css_header_c_shadow'      => 'rgba(10,10,10,0.04)',
		
		'header_items_mid_left'    => ['logo'],
		'header_items_mid_center'  => [],
		'header_items_mid_right'   => ['text'],
		'css_header_bg_sd_mid'     => '#181818',
		'css_header_height_mid'    => '140',
		
		'header_items_bot_left'        => ['hamburger', 'nav-menu'],
		'header_items_bot_center'      => [],
		'header_items_bot_right'       => ['search'],
		'css_header_height_bot'        => '52',
		'css_header_border_bottom_bot' => '0',
		'css_header_hamburger_scale'   => '0.69',
		// Would have trouble with hov-b.
		// 'css_header_border_bottom_bot' => '3',
		// 'css_header_c_border_bot_bot'  => '--c-main',

		'header_nav_hov_style'      => 'b',
		'css_nav_space'             => '16',
		'css_nav_typo_spacing'      => '0.02',
		'header_offcanvas_desktop_menu' => 1,

		'css_header_mob_border_top_mid' => '3',
	],

	'trendy' => [
		'header_items_top_left'    => ['date', 'nav-small'],
		'header_items_top_right'   => ['social-icons'],
		'css_header_height_top'    => '38',
		'css_header_c_shadow'      => 'rgba(10,10,10,0.04)',
		
		'header_scheme_mid'        => 'light',
		'header_items_mid_left'    => ['logo'],
		'header_items_mid_center'  => [],
		'header_items_mid_right'   => ['text'],
		'css_header_bg_sd_mid'     => '#181818',
		'css_header_height_mid'    => '146',
		
		'header_scheme_bot'          => 'light',
		'header_items_bot_left'      => ['hamburger', 'nav-menu'],
		'header_items_bot_center'    => [],
		'header_items_bot_right'     => ['search'],
		'css_header_height_bot'      => '52',
		'css_header_hamburger_scale' => '0.65',

		'css_nav_space'             => '16',
		'css_nav_typo_spacing'      => '0.02',

		'header_mob_scheme_mid'  => 'light'
	],

	'social-life' => [
		'header_layout'           => 'smart-b',
		'header_items_mid_left'   => ['social-icons'],
		'header_items_mid_center' => ['logo'],
		'header_items_mid_right'  => ['button'],
		'header_items_bot_left'   => ['hamburger'],
		'header_items_bot_center' => ['nav-menu'],
		'header_items_bot_right'  => ['search'],
		'header_scheme_bot'       => 'light',

		'css_header_c_shadow'            => 'rgba(10,0,0,0.06)',
		'css_header_height_bot'          => 66,
		'css_header_border_bottom_bot'   => 1,
		'css_header_bg_mid'              => '#921125',
		'css_header_bg_sd_mid'           => '#921125',
		'css_nav_typo_weight'            => 'bold',
		'css_nav_typo_size'              => 15,
		'css_nav_typo_spacing'           => '0.07',
		'css_nav_arrow_color_light'      => '#565656',

		'header_button_style'           => 'a',
		'header_social_style'           => 'b',
		'css_header_button_bg_sd'        => 'rgba(255,255,255,0.15)',
		'css_header_button_typo_size'    => 13,
		'css_header_button_typo_spacing' => '0.13',
		'css_header_social_hov_color_sd' => '#e5e5e5',
		'css_header_social_color_sd'     => 'rgba(255,255,255,0.9)',

		'header_offcanvas_desktop_menu' => 1,
		'css_header_offcanvas_menu_typo_transform' => 'uppercase',
		'css_header_offcanvas_menu_typo_spacing'   => [
			'main' => '.05',
			'medium' => '',
			'small'  => '',
			'limit'  => 0
		],

		'css_header_mob_bg_mid' => '#921125',
		'css_header_mob_border_bottom_mid' => 0,
	],

	'gaming' => [
		'header_width' => 'full',

		'header_items_mid_left'  => [],
		'header_items_mid_center' => ['logo'],
		'header_items_mid_right'  => [],
		'header_scheme_mid'      => 'light',
		'css_header_height_mid'  => '220',

		'header_items_bot_left'    => ['hamburger'],
		'header_items_bot_center'  => ['nav-menu'],
		'header_items_bot_right'   => ['social-icons', 'search'],
		'css_header_height_bot'    => '54',

		'css_header_social_hov_color_sd' => '#f2f2f2',
		'header_search_overlay_scheme'   => '',
		'header_offcanvas_desktop_menu'  => 1,

		'css_header_mob_height_mid'  => '70',
		'header_mob_scheme_mid'      => 'light',
		'header_mob_items_mid_right' => ['scheme-switch', 'search']
	],

	'informed' => [
		'header_width'  => 'full',
		'header_layout' => 'smart-b',
		'header_items_mid_left'    => ['hamburger', 'logo'],
		'header_items_mid_center'  => ['nav-menu'],
		'css_header_height_mid'    => '66',

		'header_social_style'        => 'b',
		'css_header_social_size'     => '16',
		'css_header_social_box_size' => '36',
		'css_header_search_size'     => '18',

		'css_nav_typo_weight'        => 'bold',
		'css_nav_typo_size'          => '16',
		'css_nav_typo_transform'     => 'uppercase',
		'css_nav_small_first_nopad'  => '1',
		'css_nav_typo_spacing'       => '0.03',
		'css_nav_hover_dark'         => '#dddddd',
		'css_drop_active_dark'       => '#a0a0a0',
		'css_header_social_hov_color_sd'    => '#bcbcbc',
		'css_header_search_hov_color_sd'    => '#bcbcbc',
		'css_header_hamburger_hov_color_sd' => '#bcbcbc',

		'css_header_mob_border_bottom_mid'  => 0,
		'css_header_mob_search_size'        => '19',
	],

	'geeks-empire' => [
		'header_items_mid_left'    => ['hamburger', 'button'],
		'header_items_mid_center'  => ['logo'],
		'header_items_bot_center'  => ['nav-menu'],
		
		'css_header_height_mid'        => 72,
		'css_header_bg_sd_mid'         => '#1a1b1d',
		'css_header_height_bot'        => 42,
		'css_header_bg_bot'            => '#1a1b1d',
		'css_header_border_top_bot'    => 1,
		'css_header_c_border_top_sd_bot' => '#383838',
		'css_header_border_bottom_bot'   => 0,
		'css_header_c_border_bot_sd_bot' => '#383838',

		'header_nav_hov_style'           => 'b',
		'css_hov_bg_dark'                => 'rgba(239,239,239,0)',
		'css_nav_hov_b_weight'           => 3,
		'css_nav_typo_size'              => 14,
		'css_nav_drop_typo_size'         => 13,
		'css_nav_typo_transform'         => 'uppercase',
		'css_nav_typo_spacing'           => '.01',
		'css_nav_space'                  => 20,
		'css_nav_arrow_color_dark'       => '#bababa',

		'css_header_social_color_sd'     => '#b2b2b2',
		'css_header_social_size'         => 16,
		'css_header_social_space'        => 5,

		'header_hamburger_style'         => 'b',
		'css_header_hamburger_line'      => 2,
		'css_header_hamburger_mr'        => 25,
		'css_header_button_typo_weight'  => 'bold',
		'css_header_button_typo_lheight' => '.8',
		'css_header_button_typo_spacing' => '0.08',

		'header_offcanvas_desktop_menu'  => 1,
	],

	'prime-mag' => [
		'header_items_top_left'  => ['ticker'],
		'header_items_top_right' => ['social-icons'],
		'header_scheme_top'      => 'light',

		'header_items_mid_left'  => ['logo'],
		'header_items_mid_right' => ['text'],
		'header_scheme_mid'      => 'light',

		'header_items_bot_left'  => ['hamburger', 'nav-menu'],
		'header_items_bot_right' => ['search'],
		'header_width_bot'       => 'contain',

		'css_header_c_shadow'    => 'rgba(10,10,10,0.06)',
		'css_header_height_top'  => 38,
		'css_header_height_mid'  => 110,
		'css_header_height_bot'  => 52,
		'css_header_border_bottom_bot' => 2,
		'css_header_c_border_bot_bot'  => '--c-main',
		'css_header_hamburger_scale'   => '.65',
		'css_header_bg_top'      => '#f2f2f2',
		'css_header_bg_sd_top'   => '#595959',
		'css_nav_space'          => 16,
		'css_nav_typo_spacing'   => '.011',
		'css_nav_typo_size'      => 15,
		'css_nav_typo_weight'    => 500,
		'css_nav_hover_dark'     => "#ffffff",
		'css_hov_bg_dark'        => 'rgba(255,255,255,0.1)',
		'css_header_social_size' => 15,

		'header_mob_scheme_mid'  => 'light',

		'header_offcanvas_scheme' => 'light',
		'header_offcanvas_desktop_menu' => 1,
	],

	'financial' => [
		'header_layout'           => 'smart-b',
		'header_items_mid_left'   => ['social-icons'],
		'header_items_mid_center' => ['logo'],
		'header_items_mid_right'  => ['button'],
		'header_items_bot_left'   => ['hamburger'],
		'header_items_bot_center' => ['nav-menu'],
		'header_items_bot_right'  => ['search'],
		'header_scheme_bot'       => 'light',
		
		'header_social_style'     => 'b',

		'css_header_height_bot'          => 66,
		'css_header_border_bottom_bot'   => 1,
		'css_header_c_border_bot_bot'    => '#e2e2e2',
		'css_header_c_border_bot_sd_bot' => '#222',
		'css_nav_typo_weight'            => 'bold',
		'css_nav_typo_size'              => 16,
		'css_nav_typo_spacing'           => '0.04',
		'css_nav_arrow_color_light'      => '#565656',

		'css_header_c_shadow' => 'rgba(10,10,10,0.03)',
		'header_offcanvas_desktop_menu' => 1
	],

	'citybuzz' => [
		'header_width'            => 'full',
		'header_items_mid_left'   => ['logo'],
		'header_items_mid_center' => ['nav-menu'],
		'header_social_style'     => 'b',
		'header_search_overlay_scheme '  => 'light',

		'css_header_height_mid'          => 80,
		'css_header_grad_mid'            => 1,
		'css_header_grad_mid_c1'         => '#7b4397',
		'css_header_grad_mid_c2'         => '#dc2430',
		'css_header_c_shadow'            => '#eaeaea',
		'css_nav_typo_size'              => 13,
		'css_nav_typo_weight'            => 'bold',
		'css_nav_typo_spacing'           => '0.03',
		'css_nav_typo_transform'         => 'uppercase',
		'css_nav_hover_dark'             => '#ff9191',
		'css_drop_bg_dark'               => '#982f5b',
		'css_header_social_color_sd'     => 'rgba(255,255,255,0.9)',
		'css_header_social_hov_color_sd' => '#ffffff',
		'css_header_social_size'         => 17,
		'css_header_search_hov_color_sd' => '#fff',
		'css_header_offcanvas_bg_sd'     => '#140010',
		'css_mega_menu_inherit_hover'    => 1,

		'css_header_mob_grad_mid'        => 1,
		'css_header_mob_grad_mid_c1'     => '#7b4397',
		'css_header_mob_grad_mid_c2'     => '#dc2430',
	],

	'coinbase' => [
		'header_items_top_left'     => ['nav-small'],
		'header_items_top_right'    => ['social-icons'],
		'header_items_mid_left'     => ['logo'],
		'header_items_mid_center'   => ['nav-menu'],
		'header_items_mid_right'    => ['scheme-switch', 'search'],

		'css_header_height_top'         => 30,
		'css_header_height_mid'         => 85,
		'css_header_bg_sd_top'          => '#142135',
		'css_header_bg_sd_mid'          => '#152844',
		'css_nav_typo_spacing'          => '0.02',
		'css_nav_small_first_nopad'     => 1,
		'css_drop_bg_dark'              => '11223d',

		'css_header_mob_bg_sd_mid'      => '#142135',
		'css_header_offcanvas_bg_sd'    => '#142135'
	],

	'pro-mag' => [
		'header_items_top_left'     => ['hamburger', 'nav-small'],
		'header_items_top_right'    => ['social-icons', 'search'],
		'header_items_mid_left'     => ['logo'],
		'header_items_mid_right'    => ['nav-menu', 'scheme-switch'],
		'header_scheme_mid'         => 'light',

		'css_header_height_top'         => 38,
		'css_header_height_mid'         => 76,
		'css_header_bg_sd_top'          => '#0a0505',
		'css_header_c_shadow'           => 'rgba(0,0,0,0.05)',
		'css_header_hamburger_scale'    => '0.75',
		'css_nav_typo_weight'           => 'bold',
		
		'header_offcanvas_desktop_menu' => 1,
	],

	'health' => [
		'header_items_mid_left'     => ['logo'],
		'header_items_mid_right'    => ['nav-small', 'social-icons', 'button'],
		'header_items_bot_left'     => ['hamburger', 'nav-menu'],
		'header_items_bot_right'    => ['search'],
		'header_scheme_mid'         => 'light',
		'header_scheme_bot'         => 'light',

		'header_mob_scheme_mid'     => 'light',

		'css_header_height_mid'         => 100,
		'css_header_border_top_mid'     => 4,
		'css_header_c_border_top_mid'   => '--c-main',
		'css_header_border_top_bot'     => 1,
		'css_header_hamburger_scale'    => '0.85',
		'css_nav_small_typo_spacing'    => '-0.01',
		'css_nav_typo_size'             => 14,
		'css_nav_space'                 => 16,
		'css_nav_arrow_color_light'     => '#9b9b9b',
		'css_header_c_shadow'           => 'rgba(0,0,0,0.05)',
		
		'css_header_mob_border_top_mid'   => 4,
		'css_header_mob_c_border_top_mid' =>  '--c-main',
	],

	'game-zone' => [
		'header_items_top_left'     => ['nav-small'],
		'header_items_top_right'    => ['social-icons'],
		'header_items_mid_left'     => ['logo'],
		'header_items_mid_right'    => ['text'],
		'header_items_bot_left'     => ['hamburger', 'nav-menu'],
		'header_items_bot_right'    => ['scheme-switch', 'search'],
		'header_social_services'    => ['facebook', 'twitter', 'instagram', 'youtube'],

		'css_header_height_top'         => 34,
		'css_header_bg_sd_top'          => '#111111',
		'css_header_border_bottom_top'  => 1,
		'css_header_height_mid'         => 120,
		'css_header_bg_sd_mid'          => '#060606',
		'css_header_height_bot'         => 52,
		'css_header_bg_sd_bot'          => '--c-main',
		'css_nav_typo_size'             => 16,
		'css_nav_typo_weight'           => 'bold',
		'css_nav_typo_spacing'          => '0.03',
		'css_nav_space'                 => 16,
		'css_nav_hover_dark'            => '#ffffff',
		'css_nav_color_dark'            => '#f7f7f7',
		'css_header_hamburger_scale'    => '0.7',
		'css_nav_small_first_nopad'     => 1,
		'css_nav_small_typo_size'       => 12,
		'css_nav_small_typo_weight'     => 600,
		'css_nav_small_typo_transform'  => 'uppercase',
		'css_nav_small_color_dark'      => 'rgba(255,255,255,0.59)',
		'css_header_search_hov_color_sd'    => '#ffffff',
		'css_header_switcher_hov_color_sd'  => '#ffffff',
		'css_header_hamburger_hov_color_sd' => '#ffffff',
	],

	'mag-studio' => [
		'header_items_top_left'     => ['nav-small'],
		'header_items_top_right'    => ['social-icons', 'scheme-switch'],
		'header_items_mid_left'     => ['logo'],
		'header_items_mid_right'    => ['text'],
		'header_items_bot_left'     => ['hamburger', 'nav-menu'],
		'header_items_bot_right'    => ['search'],
		'header_scheme_mid'         => 'light',
		'header_scheme_bot'         => 'light',

		'css_header_c_shadow'           => 'rgba(0,0,0,0.05)',
		'css_header_height_top'         => 40,
		'css_header_grad_top'           => 1,
		'css_header_grad_top_c1'        => '#c2113c',
		'css_header_grad_top_c2'        => '#f4be3e',
		'css_header_height_mid'         => 125,
		'css_header_inner_pad_mid'      => ['main' => ['top' => 20], 'medium' => [], 'limit' => 0],
		'css_header_height_bot'         => 52,
		'css_header_border_top_bot'     => 0,
		'css_header_border_bottom_bot'  => 0,
		'css_nav_typo_size'             => 15,
		'css_nav_typo_weight'           => 'bold',
		'css_nav_typo_spacing'          => '0.005',
		'css_header_hamburger_scale'    => '0.75',
		'css_header_hamburger_color'    => '--c-main',
		'css_header_social_color_sd'    => '#ffffff',
		'css_nav_small_color_dark'      => 'rgba(255,255,255,0.92)',
		'css_nav_small_hover_dark'      => '#ffffff',
		'css_nav_space'                 => 16,
		'css_nav_small_first_nopad'     => 1,
	],

	'fitness' => [
		'header_layout'                     => 'smart-b',
		'header_items_mid_left'             => ['social-icons'],
		'header_items_mid_center'           => ['logo'],
		'header_items_mid_right'            => ['button'],
		'header_items_bot_left'             => ['hamburger'],
		'header_items_bot_center'           => ['nav-menu'],
		'header_items_bot_right'            => ['scheme-switch','search'],
		'header_scheme_bot'                 => 'light',
		'header_social_style'               => 'b',
		'css_header_height_mid'             => '100',
		'css_header_height_bot'             => '54',
		'css_header_border_top_bot'         => '3',
		'css_header_c_border_top_bot'       => '--c-main',
		'css_header_border_bottom_bot'      => '1',
		'css_header_c_border_bot_bot'       => '#e2e2e2',
		'css_header_c_border_bot_sd_bot'    => '#222222',
		'css_header_hamburger_line'         => '2',
		'css_header_hamburger_height'       => '14',
		'css_nav_typo_size'                 => '14',
		'css_nav_typo_weight'               => 'bold',
		'css_nav_typo_spacing'              => '0.02',
		'css_header_social_color_sd'        => 'rgba(255,255,255,0.94)',
		'css_header_social_hov_color_sd'    => '#ffffff',
		'css_header_mob_height_mid'         => '70',
		'css_header_mob_border_bottom_mid'  => '3',
		'css_header_mob_c_border_bot_mid'   => '--c-main'
	],

	'gossip-mag' => [
		'header_layout'                     => 'smart-b',
		'header_width'                      => 'full',
		'header_items_mid_left'             => ['hamburger','logo'],
		'header_items_mid_center'           => ['nav-menu'],
		'header_scheme_mid'                 => 'light',
		'header_social_style'               => 'b',
		'header_mob_scheme_top'             => 'light',
		'header_mob_scheme_mid'             => 'light',

		'css_header_c_shadow'               => 'rgba(0,0,0,0.07)',
		'css_header_border_top_mid'         => '4',
		'css_header_height_mid'             => '94',
		'css_header_c_border_top_mid'       => '--c-main',
		'css_nav_typo_size'                 => '14',
		'css_nav_typo_weight'               => 'bold',
		'css_nav_typo_spacing'              => '.06',
		'css_nav_drop_typo_weight'          => '500',
		'css_header_social_size'            => '16',
		'css_header_social_box_size'        => '36',
		'css_header_mob_border_top_mid'     => '4',
		'css_header_mob_c_border_top_mid'   => '--c-main'
	],

	'news-board' => [
		'header_layout'                     => 'smart-b',
		'header_items_mid_left'             => ['social-icons'],
		'header_items_mid_center'           => ['logo'],
		'header_items_mid_right'            => ['button'],
		'header_scheme_mid'                 => 'light',
		'header_items_bot_left'             => ['hamburger'],
		'header_items_bot_center'           => ['nav-menu'],
		'header_items_bot_right'            => ['scheme-switch','search'],
		'header_scheme_bot'                 => 'light',
		'header_social_style'               => 'b',
		'header_button_text'                => 'Subscribe',
		'header_button_style'               => 'a',
		'css_header_border_top_bot'         => '1',
		'css_header_c_border_top_bot'       => '#ededed',
		'css_header_c_border_top_sd_bot'    => '#4f4f4f',
		'css_header_c_shadow'               => 'rgba(0,0,0,0.07)',
		'css_nav_typo_spacing'              => '0.05'		
	],

	'news-time' => [
		'header_items_top_left'             => ['ticker'],
		'header_items_top_right'            => ['social-icons','search'],
		'header_scheme_top'                 => 'light',
		'header_items_mid_left'             => ['logo'],
		'header_items_mid_right'            => ['text'],
		'header_scheme_mid'                 => 'light',
		'header_items_bot_left'             => ['nav-menu'],
		'header_width_bot'                  => 'contain',
		'header_mob_scheme_mid'             => 'light',
		'header_offcanvas_scheme'           => 'light',
		'header_offcanvas_desktop_menu'     => '1',
		'header_layout'                     => 'smart-legacy',
		'header_nav_hov_style'              => 'b',
		'header_social_style'               => 'c',
		'header_search_type'                => 'form',
		'header_items_bot_right'            => ['scheme-switch','hamburger'],
		'header_sticky_full'                => '1',
		'css_header_ticker_label_margins'   => ['main' => ['right' => '28'],'medium' => '','limit' => '0'],
		'css_header_hamburger_width'        => '15',
		'css_header_hamburger_height'       => '13',
		'header_hamburger_style'            => 'b',
		'css_header_offcanvas_menu_typo_size' => ['main' => '15','medium' => '','small' => '','limit' => '0']			
	],

	'smart-times' => [

		'header_items_mid_right'            => ['button'],
		'header_width'                      => 'full',
		'header_items_top_left'             => ['ticker'],
		'header_items_top_right'            => ['nav-small'],
		'header_items_mid_left'             => ['social-icons'],
		'header_items_mid_center'           => ['logo'],
		'header_scheme_mid'                 => 'light',
		'header_items_bot_left'             => ['date'],
		'header_items_bot_center'           => ['nav-menu'],
		'header_items_bot_right'            => ['search','hamburger'],
		'header_scheme_bot'                 => 'light',
		'header_button_text'                => 'Subscribe',
		'header_button_style'               => 'a',
		'header_social_style'               => 'b',
		'header_hamburger_style'            => 'b',
		'header_offcanvas_desktop_menu'     => '1',

		'css_header_height_mid'             => '96',
		'css_header_height_bot'             => '51',
		'css_header_border_top_bot'         => '1',
		'css_header_border_bottom_bot'      => '2',
		'css_header_c_border_top_bot'       => '#e8e8e8',
		'css_header_c_border_bot_bot'       => '#dedede',
		'css_header_ticker_label_color'     => '#f7f7f7',
		'css_header_ticker_label_typo_size' => ['main' => '13.8','medium' => '','small' => '','limit' => '0'],
		'css_header_ticker_label_typo_weight' => '600',
		'css_header_ticker_label_typo_spacing' => ['main' => '.02','medium' => '','small' => '','limit' => '0'],
		'css_header_ticker_max_width'       => ['main' => '500','large' => '400','medium' => '','limit' => '0'],
		'css_nav_typo_size'                 => '14.4',
		'css_nav_typo_weight'               => '600',
		'css_nav_space'                     => '16',
		'css_header_ticker_typo_size'       => ['main' => '13.8','medium' => '','small' => '','limit' => '0'],
		'css_header_ticker_label_margins'   => ['main' => ['right' => '30'],'medium' => '','limit' => '0'],
		'css_header_social_size'            => '17',
		'css_header_social_box_size'        => '37',
		'css_nav_drop_typo_size'            => '13',
		'css_header_hamburger_width'        => '18',
		'css_header_offcanvas_menu_typo_size' => ['main' => '15','medium' => '','small' => '','limit' => '0']
	]
];