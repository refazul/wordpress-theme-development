<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;

use \Redux;

$opt_name = Constants::$theme_options;
function rdtheme_redux_post_type_fields( $prefix ){
  return [
    [
      'id'       => $prefix. '_layout',
      'type'     => 'button_set',
      'title'    => esc_html__( 'Layout', 'optimax' ),
      'options'  => [
        'left-sidebar'  => esc_html__( 'Left Sidebar', 'optimax' ),
        'full-width'    => esc_html__( 'Full Width', 'optimax' ),
        'right-sidebar' => esc_html__( 'Right Sidebar', 'optimax' ),
      ],
      'default'  => 'right-sidebar'
    ],
    [
      'id'       => $prefix. '_sidebar',
      'type'     => 'select',
      'title'    => esc_html__( 'Custom Sidebar', 'optimax' ),
      'options'  => Helper::custom_sidebar_fields(),
      'default'  => 'sidebar',
      'required' => [$prefix. '_layout', '!=', 'full-width'],
    ],
    [
      'id'      => $prefix . '_icon_area_width' ,
      'title'   => esc_html__( 'Menu Icon Area Width', 'optimax' ),
      'type'    => 'select',
      'options' => [
        'default' => esc_html__( 'Default', 'optimax' ),
        '1'       => esc_html__( '1 Column', 'optimax' ),
        '2'       => esc_html__( '2 Column', 'optimax' ),
        '3'       => esc_html__( '3 Column', 'optimax' ),
        '4'       => esc_html__( '4 Column', 'optimax' ),
      ],
      'default'  => 'default',
    ],
      [
        'id'      => $prefix . '_menu_button',
        'title'   => esc_html__( 'Menu Button', 'optimax' ),
        'type'    => 'select',
        'options' => [
          'default' => esc_html__( 'Default', 'optimax' ),
          'on'      => esc_html__( 'Enable', 'optimax' ),
          'off'     => esc_html__( 'Disable', 'optimax' ),
        ],
        'default'  => 'default',
      ],
      [
        'id'      => $prefix . '_search_icon',
        'title'   => esc_html__( 'Search Icon', 'optimax' ),
        'type'    => 'select',
        'options' => [
          'default' => esc_html__( 'Default', 'optimax' ),
          'on'      => esc_html__( 'Enable', 'optimax' ),
          'off'     => esc_html__( 'Disable', 'optimax' ),
        ],
        'default'  => 'default',
      ],
      [
        'id'      => $prefix . '_cart_icon',
        'title'   => esc_html__( 'Cart Icon', 'optimax' ),
        'type'    => 'select',
        'options' => [
          'default' => esc_html__( 'Default', 'optimax' ),
          'on'      => esc_html__( 'Enable', 'optimax' ),
          'off'     => esc_html__( 'Disable', 'optimax' ),
        ],
        'default'  => 'default',
      ],
      [
        'id'      => $prefix . '_offcanvas_menu',
        'title'   => esc_html__( 'Offcanvas Menu', 'optimax' ),
        'type'    => 'select',
        'options' => [
          'default' => esc_html__( 'Default', 'optimax' ),
          'on'      => esc_html__( 'Enable', 'optimax' ),
          'off'     => esc_html__( 'Disable', 'optimax' ),
        ],
        'default'  => 'default',
      ],

    [
      'id'       => $prefix. '_top_bar',
      'type'     => 'select',
      'title'    => esc_html__( 'Top Bar', 'optimax'),
      'options'  => [
        'default' => esc_html__( 'Default',  'optimax' ),
        'on'      => esc_html__( 'Enabled', 'optimax' ),
        'off'     => esc_html__( 'Disabled', 'optimax' ),
      ],
      'default'  => 'default',
    ],
    [
      'id'       => $prefix. '_top_bar_style',
      'type'     => 'select',
      'title'    => esc_html__( 'Top Bar Layout', 'optimax'),
      'options'  => [
        'default' => esc_html__( 'Default',  'optimax' ),
        '1'       => esc_html__( 'Layout 1', 'optimax' ),
        '2'       => esc_html__( 'Layout 2', 'optimax' ),
        '3'       => esc_html__( 'Layout 3', 'optimax' ),
        '4'       => esc_html__( 'Layout 4', 'optimax' ),
      ],
      'default'  => 'default',
      'required' => [$prefix. '_top_bar', '!=', 'off']
    ],
    [
      'id'       => $prefix. '_header_style',
      'type'     => 'select',
      'title'    => esc_html__( 'Header Layout Style', 'optimax'),
      'options'  => [
        'default' => esc_html__( 'Default',  'optimax' ),
        '1'       => esc_html__( 'Layout 1', 'optimax' ),
        '2'       => esc_html__( 'Layout 2', 'optimax' ),
        '3'       => esc_html__( 'Layout 3', 'optimax' ),
      ],
      'default'  => 'default',
    ],
    [
      'id'          => $prefix . '_header_type',
      'title'       => esc_html__( 'header type (container / container-fluid class)', 'optimax' ),
      'description' => esc_html__( 'apply container / container-fluid class in header content', 'optimax' ),
      'type'        => 'select',
      'default'     => 'default',
      'options'     => [
        'default'       => esc_html__( 'default',  'optimax' ),
        'fluid_header'  => esc_html__( 'fluid header', 'optimax' ),
        'box_header'    => esc_html__( 'box header', 'optimax' ),
      ],
    ],
    [
      'id'      => $prefix . '_menu_theme',
      'title'   => esc_html__( 'Menu Theme', 'optimax' ),
      'type'    => 'select',
      'options' => [
        'default'      => esc_html__( 'default',  'optimax' ),
        'light_theme'  => esc_html__( 'Light Theme', 'optimax' ),
        'dark_theme'   => esc_html__( 'Dark Theme', 'optimax' ),
      ],
      'default'  => 'default',
    ],
    [
      'id'       => $prefix. '_transparent_top_bar',
      'type'     => 'select',
      'title'    => esc_html__( 'Transparent Top Bar', 'optimax'),
      'subtitle' => esc_html__( 'To Enable Transparent Top Bar. Work when transparent header is Enabled', 'optimax' ),
      'options'  => [
        'default' => esc_html__( 'Default',  'optimax' ),
        'on'      => esc_html__( 'Enabled', 'optimax' ),
        'off'     => esc_html__( 'Disabled', 'optimax' ),
      ],
      'default'  => 'default',
    ],

    [
      'id'       => $prefix. '_transparent_header',
      'type'     => 'select',
      'title'    => esc_html__( 'Transparent Header', 'optimax'),
      'subtitle' => esc_html__( 'To Enable Transparent Header', 'optimax' ),
      'options'  => [
        'default' => esc_html__( 'Default',  'optimax' ),
        'on'      => esc_html__( 'Enabled', 'optimax' ),
        'off'     => esc_html__( 'Disabled', 'optimax' ),
      ],
      'default'  => 'default',
    ],
    [
      'id'      => $prefix . '_content_top_padding',
      'title'   => esc_html__( 'Content Padding Top', 'optimax' ),
      'type'    => 'text',
      'default' => '120px',
    ],
    [
      'id'      => $prefix . '_content_bottom_padding',
      'title'   => esc_html__( 'Content Padding Bottom', 'optimax' ),
      'type'    => 'text',
      'default' => '120px',
    ],
    [
      'id'       => $prefix. '_banner',
      'type'     => 'select',
      'title'    => esc_html__( 'Banner', 'optimax'),
      'options'  => [
        'default' => esc_html__( 'Default',  'optimax' ),
        'on'      => esc_html__( 'Enabled', 'optimax' ),
        'off'     => esc_html__( 'Disabled', 'optimax' ),
      ],
      'default'  => 'default',
    ],
    [
      'id'       => $prefix. '_breadcrumb',
      'type'     => 'select',
      'title'    => esc_html__( 'Breadcrumb', 'optimax'),
      'options'  => [
        'default' => esc_html__( 'Default',  'optimax' ),
        'on'      => esc_html__( 'Enabled', 'optimax' ),
        'off'     => esc_html__( 'Disabled', 'optimax' ),
      ],
      'default'  => 'default',
      'required' => [$prefix. '_banner', '!=', 'off']
    ],
    [
      'id'       => $prefix. '_bgtype',
      'type'     => 'select',
      'title'    => esc_html__( 'Banner Background Type', 'optimax'),
      'options'  => [
        'default' => esc_html__( 'Default',  'optimax' ),
        'bgcolor' => esc_html__( 'Background Color', 'optimax' ),
        'bgimg'   => esc_html__( 'Background Image', 'optimax' ),
      ],
      'default'  => 'default',
      'required' => [$prefix. '_banner', '!=', 'off']
    ],
    [
      'id'       => $prefix. '_bgimg',
      'type'     => 'media',
      'title'    => esc_html__( 'Banner Background Image', 'optimax' ),
      'default'  => '',
      'required' => [$prefix. '_bgtype', '=', 'bgimg'],
    ],
    [
      'id'          => $prefix. '_bgcolor',
      'type'        => 'color',
      'title'       => esc_html__( 'Banner Background Color', 'optimax'),
      'validate'    => 'color',
      'transparent' => false,
      'default'     => '',
      'required'    => [$prefix. '_bgtype', '=', 'bgcolor'],
    ],
    [
      'id'       => $prefix . '_footer_cta',
      'type'     => 'select',
      'title'    => esc_html__( 'Footer Call To Action', 'optimax'),
      'options'  => [
        'default' => esc_html__( 'Default',  'optimax' ),
        'on'      => esc_html__( 'Enabled', 'optimax' ),
        'off'     => esc_html__( 'Disabled', 'optimax' ),
    
      ],
      'default'  => 'default',
    ],
    [
      'id'       => $prefix . '_footer_cta_style',
      'type'     => 'select',
      'title'    => esc_html__( 'Footer Call To Action Style', 'optimax'),
      'options'  => [
        'default' => esc_html__( 'Default',  'optimax' ),
        '1'       => esc_html__( 'Style 1', 'optimax' ),
        '2'       => esc_html__( 'Style 2', 'optimax' ),
      ],
      'required' => [$prefix . '_footer_cta', 'equals', 'on'],
      'default'  => 'default',
    ],

  ];
}

function change_default($fields, $id, $new_default)
{
  $index = null;
  foreach ($fields as $key => $value) {
    if ($value['id'] == $id) {
      $index = $key;
    }
  }

  if ($index === null) {
    return null;
  }
  $fields[$index]['default'] = $new_default;
  return $fields;
}


Redux::setSection( $opt_name,
  [
    'title' => esc_html__( 'Layout Defaults', 'optimax' ),
    'id'    => 'layout_defaults',
    'icon'  => 'el el-th',
  ]
);

// Page
$rdtheme_page_fields = rdtheme_redux_post_type_fields( 'page' );
$rdtheme_page_fields = change_default($rdtheme_page_fields, 'page_layout', 'full-width');

Redux::setSection( $opt_name,
  [
    'title'      => esc_html__( 'Page', 'optimax' ),
    'id'         => 'pages_section',
    'subsection' => true,
    'fields'     => $rdtheme_page_fields
  ]
);

//Post Archive
$rdtheme_post_archive_fields1  = rdtheme_redux_post_type_fields( 'blog' );
$rdtheme_post_archive_fields2 = [
  [
    'id'       =>'post_archive_style',
    'type'     => 'select',
    'title'    => esc_html__( 'Blog/Archive Layout Style', 'optimax' ),
    'default'  => '1',
    'options'  => [
      '1' => 'Blog Layout 1',
      '2' => 'Blog Layout 2',
      '3' => 'Blog Layout 3',
    ],
  ],
  [
    'id'          => 'post_archive_number',
    'type'        => 'text',
    'title'       => esc_html__( 'Blog Custom template: Number of items per page', 'optimax' ),
    'description' => esc_html__( 'Effect only for Blog custom page template', 'optimax' ),
    'validate'    => 'numeric',
    'default'     => '10',
  ],
  [
    'id'          => 'post_archive_orderby',
    'type'        => 'select',
    'title'       => esc_html__( 'Blog Custom template: Order By', 'optimax' ),
    'description' => esc_html__( 'Effect only for Blog custom page template', 'optimax' ),
    'default'     => 'date',
    'options'     => [
      'date'        => esc_html__( 'Date (Recents comes first)', 'optimax' ),
      'title'       => esc_html__( 'Title', 'optimax' ),
      'menu_order'  => esc_html__( 'Custom Order (Available via Order field inside Page Attributes box)', 'optimax' ),
    ],
  ],


];
$rdtheme_post_archive_fields =  array_merge($rdtheme_post_archive_fields2, $rdtheme_post_archive_fields1);


Redux::setSection( $opt_name,
  [
    'title'      => esc_html__( 'Blog / Archive', 'optimax' ),
    'id'         => 'blog_section',
    'subsection' => true,
    'fields'     => $rdtheme_post_archive_fields
  ]
);

// Single Post
$rdtheme_single_post_fields1 = rdtheme_redux_post_type_fields( 'single_post' );
$rdtheme_single_post_fields2 = [
    [
    'id'       => 'post_single_prev_next_link',
    'type'     => 'switch',
    'title'    => esc_html__( 'Show Next & Previous post link', 'optimax' ),
    'on'       => esc_html__( 'Enabled', 'optimax' ),
    'off'      => esc_html__( 'Disabled', 'optimax' ),
    'default'  => true,
    'subtitle' => esc_html__( 'Next & Previous post link in single post. Will be shown bottom of the each single Post', 'optimax' ),
  ],
];
$rdtheme_single_post_fields = array_merge( $rdtheme_single_post_fields1, $rdtheme_single_post_fields2 );

Redux::setSection( $opt_name,
  [
    'title'      => esc_html__( 'Post Single', 'optimax' ),
    'id'         => 'single_post_section',
    'subsection' => true,
    'fields'     => $rdtheme_single_post_fields
  ]
);

// Search
$rdtheme_search_fields = rdtheme_redux_post_type_fields( 'search' );
Redux::setSection( $opt_name,
  [
    'title'      => esc_html__( 'Search Layout', 'optimax' ),
    'id'         => 'search_section',
    'subsection' => true,
    'fields'     => $rdtheme_search_fields
  ]
);

// Error 404 Layout
$rdtheme_error_fields = rdtheme_redux_post_type_fields( 'error' );
unset($rdtheme_error_fields[0]);
Redux::setSection( $opt_name,
  [
    'title'      => esc_html__( 'Error 404 Layout', 'optimax' ),
    'id'         => 'error_section',
    'subsection' => true,
    'fields'     => $rdtheme_error_fields
  ]
);



/**
 * case archive
 */


$rdtheme_case_archive_fields1 = rdtheme_redux_post_type_fields( 'case_archive' );
$rdtheme_case_archive_fields1 = change_default($rdtheme_case_archive_fields1, 'case_archive_layout', 'full-width');

$rdtheme_case_archive_fields2 = [
  [
    'id'       => 'case_archive_section_more',
    'type'     => 'section',
    'title'    => esc_html__( 'More Options', 'optimax' ),
    'indent'   => true,
  ],
  [
    'id'       => 'case_archive_number',
    'type'     => 'text',
    'title'    =>esc_html__( 'Number of items per page', 'optimax' ),
    'validate' => 'numeric',
    'default'  => '9'
  ],
  [
    'id'       => 'case_archive_orderby',
    'type'     => 'select',
    'title'    =>esc_html__( 'Order By', 'optimax' ),
    'options'  => [
      'date'        =>esc_html__( 'Date (Recents comes first)', 'optimax' ),
      'title'       =>esc_html__( 'Title', 'optimax' ),
      'menu_order'  =>esc_html__( 'Custom Order (Available via Order field inside Page Attributes box)', 'optimax' ),
    ],
    'default'  => 'date'
  ],
  [
    'id'       => 'has_case_archive_content_title',
    'type'     => 'switch',
    'title'    => esc_html__( 'Service Archive Sub Title', 'optimax' ),
    'on'       => esc_html__( 'Enabled', 'optimax' ),
    'off'      => esc_html__( 'Disabled', 'optimax' ),
    'default'  => true,
    'subtitle' => esc_html__( 'Show header at the top when scrolling down', 'optimax' ),
  ],
  [
    'id'       => 'case_archive_content_title',
    'type'     => 'textarea',
    'title'    => esc_html__( 'Service Archive Content Title', 'optimax' ),
    'default'  => 'Successful Case Studies',
    'required' => ['has_case_archive_content_title', 'equals', true],
  ],
  [
    'id'       => 'case_archive_content_subtitle',
    'type'     => 'textarea',
    'title'    => esc_html__( 'Service Archive Content Subtitle', 'optimax' ),
    'default'  => 'SEO imply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever sunknown printer took.',
    'required' => ['has_case_archive_content_title', 'equals', true],
  ],




];

$rdtheme_case_archive_fields = array_merge($rdtheme_case_archive_fields1, $rdtheme_case_archive_fields2 );

Redux::setSection( $opt_name,
  [
    'title'      => esc_html__( 'Case Study Archive', 'optimax' ),
    'id'         => 'case_archive_section',
    'subsection' => true,
    'fields'     => $rdtheme_case_archive_fields
  ]
);



/**
 * Team archive
 */

$rdtheme_team_archive_fields1 = rdtheme_redux_post_type_fields( 'team_archive' );
$rdtheme_team_archive_fields1 = change_default($rdtheme_team_archive_fields1, 'team_archive_layout', 'full-width');


$rdtheme_team_archive_fields2 = [
  [
    'id'       => 'team_archive_section_more',
    'type'     => 'section',
    'title'    => esc_html__( 'More Options', 'optimax' ),
    'indent'   => true,
  ],
  [
    'id'       => 'team_archive_style',
    'type'     => 'button_set',
    'title'    => esc_html__( 'Style', 'optimax' ),
    'options'  => [
      '1' => esc_html__( 'Style 1', 'optimax' ),
      '2' => esc_html__( 'Style 2', 'optimax' ),
      '3' => esc_html__( 'Style 3', 'optimax' ),
    ],
    'default'  => '1'
  ],
  [
    'id'       => 'team_archive_number',
    'type'     => 'text',
    'title'    =>esc_html__( 'Number of items per page', 'optimax' ),
    'validate' => 'numeric',
    'default'  => '8'
  ],
  [
    'id'       => 'team_archive_orderby',
    'type'     => 'select',
    'title'    =>esc_html__( 'Order By', 'optimax' ),
    'options'  => [
      'date'        =>esc_html__( 'Date (Recents comes first)', 'optimax' ),
      'title'       =>esc_html__( 'Title', 'optimax' ),
      'menu_order'  =>esc_html__( 'Custom Order (Available via Order field inside Page Attributes box)', 'optimax' ),
    ],
    'default'  => 'date'
  ],
];
$rdtheme_team_archive_fields = array_merge($rdtheme_team_archive_fields1, $rdtheme_team_archive_fields2 );

Redux::setSection( $opt_name,
  [
    'title'      => esc_html__( 'Team Archive', 'optimax' ),
    'id'         => 'team_archive_section',
    'subsection' => true,
    'fields'     => $rdtheme_team_archive_fields
  ]
);



/**
 * service archive
 */

$rdtheme_service_archive_fields1 = rdtheme_redux_post_type_fields( 'service_archive' );
$rdtheme_service_archive_fields1 = change_default($rdtheme_service_archive_fields1, 'service_archive_layout', 'full-width');

$rdtheme_service_archive_fields2 = [
  [
    'id'       => 'service_archive_section_more',
    'type'     => 'section',
    'title'    => esc_html__( 'More Options', 'optimax' ),
    'indent'   => true,
  ],
  [
    'id'       => 'has_service_archive_subtext',
    'type'     => 'switch',
    'title'    => esc_html__( 'Service Archive Sub Title', 'optimax' ),
    'on'       => esc_html__( 'Enabled', 'optimax' ),
    'off'      => esc_html__( 'Disabled', 'optimax' ),
    'default'  => true,
    'subtitle' => esc_html__( 'Show header at the top when scrolling down', 'optimax' ),
  ],
  [
    'id'       => 'service_archive_subtext',
    'type'     => 'textarea',
    'title'    => esc_html__( 'Service Archive Sub-title', 'optimax' ),
    'subtitle' => esc_html__( 'service Archive Sub-title', 'optimax' ),
    'default'  => 'We Provide Construction, Industrial & all kinds Of Services',
    'required' => ['has_service_archive_subtext', 'equals', true],
  ],
  [
    'id'       => 'service_archive_number',
    'type'     => 'text',
    'title'    =>esc_html__( 'Number of items per page', 'optimax' ),
    'validate' => 'numeric',
    'default'  => '9'
  ],
  [
    'id'       => 'service_archive_orderby',
    'type'     => 'select',
    'title'    =>esc_html__( 'Order By', 'optimax' ),
    'options'  => [
      'date'        =>esc_html__( 'Date (Recents comes first)', 'optimax' ),
      'title'       =>esc_html__( 'Title', 'optimax' ),
      'menu_order'  =>esc_html__( 'Custom Order (Available via Order field inside Page Attributes box)', 'optimax' ),
    ],
    'default'  => 'date'
  ],
];
$rdtheme_service_archive_fields = array_merge($rdtheme_service_archive_fields1, $rdtheme_service_archive_fields2 );
$rdtheme_service_archive_fields1 = change_default($rdtheme_service_archive_fields1, 'service_archive_layout', 'full-width');
Redux::setSection( $opt_name,
  [
    'title'      => esc_html__( 'Service Archive', 'optimax' ),
    'id'         => 'service_archive_section',
    'subsection' => true,
    'fields'     => $rdtheme_service_archive_fields
  ]
);



/**
 * Case Study Single
 */


$rdtheme_case_single_fields1 = rdtheme_redux_post_type_fields( 'case_single' );
$rdtheme_case_single_fields1 = change_default($rdtheme_case_single_fields1, 'case_single_layout', 'full-width');

$rdtheme_case_single_fields2 = [
  [
    'id'       => 'case_single_section_more',
    'type'     => 'section',
    'title'    => esc_html__( 'More Options', 'optimax' ),
    'indent'   => true,
  ],

  [
    'id'       => 'case_single_style',
    'type'     => 'button_set',
    'title'    => esc_html__( 'Style', 'optimax' ),
    'options'  => [
      '1' => esc_html__( 'Style 1', 'optimax' ),
      '2' => esc_html__( 'Style 2', 'optimax' ),
      '3' => esc_html__( 'Style 3', 'optimax' ),
    ],
    'default'  => '1'
  ],
  [
    'id'       => 'case_single_prev_next_link',
    'type'     => 'switch',
    'title'    => esc_html__( 'Show Next & Previous case link', 'optimax' ),
    'on'       => esc_html__( 'Enabled', 'optimax' ),
    'off'      => esc_html__( 'Disabled', 'optimax' ),
    'default'  => true,
    'subtitle' => esc_html__( 'Next & Previous case link in single case. Will be shown bottom of the case', 'optimax' ),
  ],
  [
    'id'       => 'case_single_related_post',
    'type'     => 'switch',
    'title'    => esc_html__( 'Show Related Case Study', 'optimax' ),
    'on'       => esc_html__( 'Enabled', 'optimax' ),
    'off'      => esc_html__( 'Disabled', 'optimax' ),
    'default'  => true,
    'subtitle' => esc_html__( 'Next & Previous case link in single case. Will be shown bottom of the case', 'optimax' ),
  ],
  [
    'id'       => 'case_single_related_post_title',
    'type'     => 'text',
    'title'    => esc_html__( 'Case Single Related Post Title', 'optimax' ),
    'default'  => 'Related Posts',
    'required' => ['case_single_related_post', 'equals', true],
  ],
  [
    'id'      => 'case_social',
    'type'    => 'switch',
    'title'   => esc_html__( 'Display Social Sharing', 'optimax' ),
    'on'      => esc_html__( 'On', 'optimax' ),
    'off'     => esc_html__( 'Off', 'optimax' ),
    'default' => true,
  ],
  [
    'id'      => 'case_share',
    'type'    => 'checkbox',
    'class'   => 'redux-custom-inline',
    'title'   => esc_html__( 'Social Sharing Icons', 'optimax'),
    'options' => [
      'facebook'  => 'Facebook',
      'twitter'   => 'Twitter',
      'linkedin'  => 'Linkedin',
      'pinterest' => 'Pinterest',
      'tumblr'    => 'Tumblr',
      'reddit'    => 'Reddit',
      'vk'        => 'Vk',
    ],
    'default' => [
      'facebook'  => '1',
      'twitter'   => '1',
      'linkedin'  => '1',
      'pinterest' => '1',
      'tumblr'    => '0',
      'reddit'    => '0',
      'vk'        => '0',
    ],
    'required' => ['case_social', '=', true]
  ],
  [
    'id'      => 'case_view',
    'type'    => 'switch',
    'title'   => esc_html__( 'Display Case view', 'optimax' ),
    'on'      => esc_html__( 'On', 'optimax' ),
    'off'     => esc_html__( 'Off', 'optimax' ),
    'default' => true,
  ],
  [
    'id'       => 'case_single_info_show',
    'type'     => 'switch',
    'title'    => esc_html__( 'Show Project Info Title', 'optimax' ),
    'on'       => esc_html__( 'Enabled', 'optimax' ),
    'off'      => esc_html__( 'Disabled', 'optimax' ),
    'default'  => true,
  ],
  [
    'id'       => 'case_single_project_info',
    'type'     => 'text',
    'title'    => esc_html__( 'Project Info Title', 'optimax' ),
    'default'  => 'Project Info',
    'required' => ['case_single_info_show', 'equals', true],
  ],
];

$rdtheme_case_single_fields = array_merge($rdtheme_case_single_fields1, $rdtheme_case_single_fields2 );
Redux::setSection( $opt_name,
  [
    'title'      => esc_html__( 'Case Study Single', 'optimax' ),
    'id'         => 'case_single_section',
    'subsection' => true,
    'fields'     => $rdtheme_case_single_fields
  ]
);


/**
 * Team Single
 */


$rdtheme_team_single_fields1 = rdtheme_redux_post_type_fields( 'team_single' );
$rdtheme_team_single_fields1 = change_default($rdtheme_team_single_fields1, 'team_single_layout', 'full-width');

$rdtheme_team_single_fields2 = [
  [
    'id'       => 'team_single_section_more',
    'type'     => 'section',
    'title'    => esc_html__( 'Others Team', 'optimax' ),
    'indent'   => true,
  ],

  [
    'id'       => 'has_team_single_others_team',
    'type'     => 'switch',
    'title'    => esc_html__( 'Others team member', 'optimax' ),
    'subtitle' => esc_html__( 'Only work in full width layout', 'optimax' ),
    'on'       => esc_html__( 'Enabled', 'optimax' ),
    'off'      => esc_html__( 'Disabled', 'optimax' ),
    'default'  => true,
  ],
  [
    'id'       => 'team_single_title',
    'type'     => 'textarea',
    'title'    => esc_html__( 'Team Single title', 'optimax' ),
    'subtitle' => esc_html__( 'team single title', 'optimax' ),
    'default'  => 'Our Expert People',
    'required' => ['has_team_single_others_team', 'equals', true],
  ],
  [
    'id'       => 'has_team_single_subtitle',
    'type'     => 'switch',
    'title'    => esc_html__( 'subtitle for more team member', 'optimax' ),
    'on'       => esc_html__( 'Enabled', 'optimax' ),
    'off'      => esc_html__( 'Disabled', 'optimax' ),
    'default'  => true,
    'required' => ['has_team_single_others_team', 'equals', true],
  ],
  [
    'id'       => 'team_single_subtitle',
    'type'     => 'textarea',
    'title'    => esc_html__( 'Team single sub-title', 'optimax' ),
    'subtitle' => esc_html__( 'Team single subtitle', 'optimax' ),
    'default'  => 'Morbi accumsan ipsum velit Nam nec tellus aodio tincidunt auctor',
    'required' => ['has_team_single_subtitle', 'equals', true],
  ],
  [
    'id'       => 'team_single_no_of_others_team_member',
    'type'     => 'text',
    'title'    =>esc_html__( 'Number of other team member', 'optimax' ),
    'validate' => 'numeric',
    'default'  => '4',
    'required' => ['has_team_single_others_team', 'equals', true],
  ],
];
// $rdtheme_team_single_fields2 = [];
$rdtheme_team_single_fields = array_merge($rdtheme_team_single_fields1, $rdtheme_team_single_fields2 );
Redux::setSection( $opt_name,
  [
    'title'      => esc_html__( 'Team Single', 'optimax' ),
    'id'         => 'team_single_section',
    'subsection' => true,
    'fields'     => $rdtheme_team_single_fields
  ]
);



/**
 * service Single
 */


$rdtheme_service_single_fields1 = rdtheme_redux_post_type_fields( 'service_single' );
$rdtheme_service_single_fields1 = change_default($rdtheme_service_single_fields1, 'service_single_layout', 'full-width');
$rdtheme_service_single_fields2 = [
  [
    'id'       => 'service_single_featured_image',
    'type'     => 'switch',
    'title'    => esc_html__( 'Show Featured Image', 'optimax' ),
    'on'       => esc_html__( 'Enabled', 'optimax' ),
    'off'      => esc_html__( 'Disabled', 'optimax' ),
    'default'  => false,
    'subtitle' => esc_html__( 'Featured image top of the service in single page', 'optimax' ),
  ],
  [
    'id'       => 'service_single_recent_case_study',
    'type'     => 'switch',
    'title'    => esc_html__( 'Show Related Service', 'optimax' ),
    'on'       => esc_html__( 'Enabled', 'optimax' ),
    'off'      => esc_html__( 'Disabled', 'optimax' ),
    'default'  => true,
    'subtitle' => esc_html__( 'Recent Case Study bottom of Single Service', 'optimax' ),
  ],
  [
    'id'       => 'case_single_title',
    'type'     => 'textarea',
    'title'    => esc_html__( 'Case Studies Single title', 'optimax' ),
    'subtitle' => esc_html__( 'Case Studies single title', 'optimax' ),
    'default'  => 'Recent Case Studies',
    'required' => ['service_single_recent_case_study', 'equals', true],
  ],
  [
    'id'       => 'has_case_single_subtitle',
    'type'     => 'switch',
    'title'    => esc_html__( 'Subtitle for more Case Studies', 'optimax' ),
    'on'       => esc_html__( 'Enabled', 'optimax' ),
    'off'      => esc_html__( 'Disabled', 'optimax' ),
    'default'  => true,
    'required' => ['service_single_recent_case_study', 'equals', true],
  ],
  [
    'id'       => 'case_single_subtitle',
    'type'     => 'textarea',
    'title'    => esc_html__( 'Case Studies single sub-title', 'optimax' ),
    'subtitle' => esc_html__( 'Case Studies single subtitle', 'optimax' ),
    'default'  => 'Sorem ipsum dolor sit ametet fermentum vestibulum etiam check box luctus etmi ornare aptent neque volutpat.',
    'required' => ['has_case_single_subtitle', 'equals', true],
  ],
];

$rdtheme_service_single_fields = array_merge( $rdtheme_service_single_fields1, $rdtheme_service_single_fields2 );

Redux::setSection( $opt_name,
  [
    'title'      => esc_html__( 'service Single', 'optimax' ),
    'id'         => 'service_single_section',
    'subsection' => true,
    'fields'     => $rdtheme_service_single_fields
  ]
);