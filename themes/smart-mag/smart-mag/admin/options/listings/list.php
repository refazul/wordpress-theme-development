<?php
/**
 * Fields for List loops.
 */
$fields = [];
\Bunyad\Util\repeat_options(
	$_common['tpl_listing'],
	[
		'list' => [
			'overrides'    => [
				'loop_{key}_excerpt_length' => [
					'value'  => 20,
				]
			],
			'replacements' => [
				'{selector}' => '.loop-list',
			],
			'skip' => [
				'loop_{key}_content_center',
			]
		]
	],
	$fields,
	['replace_in' => ['css', 'group', 'context']]
);

$fields[] = [
	'name'        => 'loop_list_media_width',
	'label'       => esc_html__('Image Width %', 'bunyad-admin'),
	'value'       => '',
	'desc'        => '',
	'type'        => 'number',
	'style'       => 'inline-sm',
	'input_attrs' => ['min' => 1, 'max' => 100, 'step' => 1],
	'transport'   => 'refresh',
	'css'         => [
		'.list-post' => [
			'props'     => [
				'--list-p-media-width' => '%s%', 
				'--list-p-media-max-width' => '85%'
			],
		]
	],
];

$fields[] = [
	'name'         => 'loop_list_grid_on_sm',
	'label'        => esc_html__('Grid Style on Phones', 'bunyad-admin'),
	'value'        => '',
	'desc'         => 'Show in a grid, instead of list style, on mobile devices.',
	'type'         => 'toggle',
];

$fields[] = [
	'name'        => 'css_loop_list_media_max_width',
	'label'       => esc_html__('Max Width %', 'bunyad-admin'),
	'value'       => '',
	'desc'        => '',
	'type'        => 'slider',
	'devices'     => true,
	'classes'     => 'sep-bottom',
	'input_attrs' => ['min' => 1, 'max' => 100, 'step' => 1],
	'css'         => [
		'.list-post .media:not(i)' => [
			'props'     => ['--list-p-media-max-width' => '%s%'],
		]
	],
	'condition' => [['key' => 'loop_list_media_width', 'value' => '', 'compare' => '!=']]
];

return $fields;