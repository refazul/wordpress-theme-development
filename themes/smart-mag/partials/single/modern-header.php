<?php
/**
 * Modern Single Post Header.
 */

$props = array_replace(
	[
		'layout'    => 'modern',
		'classes'   => [],
		'centered'  => false,
		'cat_style' => 'labels',
		'featured'  => false,
	],
	$props
);

// Alias for featured.
if (isset($props['featured_in_head'])) {
	$props['featured'] = $props['featured_in_head'];
}

// Top social share.
$has_social = false;

if (
	(is_single() || Bunyad::options()->social_icons_classic) 
	&& Bunyad::options()->single_share_top
	&& class_exists('SmartMag_Core')
) {
	$has_social  = true;
	$social_args = [
		'active' => Bunyad::options()->single_share_top_services,
		'style'  => $props['social_top_style'],
	];
}

$sub_title = Bunyad::posts()->meta('sub_title');
if ($sub_title) {
	$sub_title = sprintf('<div class="sub-title">%s</div>', wp_kses_post($sub_title));
}

$classes = array_merge($props['classes'], [
	'the-post-header',
	's-head-modern',
	's-head-' . $props['layout'],
	$props['centered'] ? 's-head-center' : '',
]);

?>
<div <?php Bunyad::markup()->attribs('s-head-' . $props['layout'], [
	'class' => $classes,
]); ?>>
	<?php

		$meta = Bunyad::blocks()->load('PostMeta', [
			'type'        => 'single',
			'is_single'   => true,
			'text_labels' => ['by', 'comments', 'views'],
			'cat_style'   => $props['cat_style'],
			
			// Items below should be from global settings.
			'show_title'  => true,
			'after_title' => $sub_title,
			'add_class'   => 'post-meta-single',
			'align'       => 'left',
			'author_img'  => Bunyad::options()->post_meta_single_author_img,
			'avatar_size' => 32,
		]);
		
		$meta->render();

		if ($has_social) {
			// See plugins/smartmag-core/social-share/views/social-share-b.php
			Bunyad::get('smartmag_social')->render('social-share-b', $social_args);
		}

	?>
	
	<?php if ($props['featured']): ?>
		<div class="single-featured">
			<?php 
				Bunyad::core()->partial('partials/single/featured', $props); 
			?>
		</div>
	<?php endif; ?>

</div>