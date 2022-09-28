<?php

/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;

$prefix        = Constants::$theme_prefix;
$thumb_size    = "{$prefix}-size1";
$thumb         = '';
$post_id       = get_the_ID();
$galleries     = [];
$thumb         = Helper::generate_thumbnail_image( $post_id, $thumb_size );
$gallery_ids   = get_post_meta( get_the_ID(), "{$prefix}_case_gallery", true );
$gallery_ids   = $gallery_ids ? explode(',', $gallery_ids) : [];
foreach ($gallery_ids as $key) {
  $galleries[] = wp_get_attachment_url($key);
}
$galleries     = $galleries ? $galleries : [];

$owl_data      = [
  'loop'            => true,
  'items'           => 10,
  'lazyLoad'        => true,
  'margin'          => 30,
  'autoplay'        => false,
  'autoplayTimeout' => 5000,
  'smartSpeed'      => 2000,
  'dots'            => false,
  'nav'             => true,
  'navText'         => [
    0 => '<i class="fas fa-angle-left" aria-hidden="true"></i>',
    1 => '<i class="fas fa-angle-right" aria-hidden="true"></i>',
  ],
  'navSpeed'        => false,
  'center'          => true,
  'responsiveClass' => true,
  'responsive'      => [
    0   => [
      'items' => 1,
      'nav'   => true,
      'dots'  => false,
    ],
    576 => [
      'items' => 1,
      'nav'   => true,
      'dots'  => false,
    ],
    768 => [
      'items' => 2,
      'nav'   => true,
      'dots'  => false,
    ],
    992 => [
      'items' => 2,
      'nav'   => true,
      'dots'  => false,
    ],
    1200 => [
      'items' => 2,
      'nav'   => true,
      'dots'  => false,
    ],
    1240 => [
      'items' => 2,
      'nav'   => true,
      'dots'  => false,
    ],
  ],
];
$owl_data = json_encode( $owl_data );
?>

<?php if ( count( $galleries ) ){ ?>
	<div class="single-case-box-layout4">
		<div class="item-carousel">
			<div class="owl-carousel rt-owl-carousel nav-control-layout3" data-carousel-options="<?php echo esc_attr( $owl_data );?>" >
				<?php foreach ( $galleries as $image ){ ?>
					<div class="single-item">
						<img src="<?php echo esc_url( $image ) ?>" alt="<?php echo esc_attr( the_title_attribute() ); ?>" class="img-fluid">
					</div>
				<?php } ?>
			</div>
		</div>
	</div>  
<?php } else { ?>
	<?php if ( $thumb ){ ?>
	<div class="container">
		<div class="case-study-layout-2">
			<img class="img-responsive" src="<?php echo esc_url( $thumb ); ?>"></img>
		</div>
	</div>
	<?php } ?>
<?php } ?>