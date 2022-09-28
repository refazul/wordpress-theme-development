<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;

use radiustheme\Optimax_Core\Case_Social;
use radiustheme\Optimax_Core\Utilities;

$case_id =  get_the_ID();
$views   = 0;
if ( class_exists( Utilities::class ) ) {
  Utilities::set_post_views( $case_id );
  $views  = Utilities::get_post_views( $case_id );
}
$is_views             = $views && RDTheme::$options['case_view'];
$prefix               = Constants::$theme_prefix;
$thumb_size           = "{$prefix}-size1";
$case_date            = get_post_meta( $case_id, "{$prefix}_case_date", true );
$case_client          = get_post_meta( $case_id, "{$prefix}_case_client", true );
$case_client_website  = get_post_meta( $case_id, "{$prefix}_case_client_website", true );
$thumb                = Helper::generate_thumbnail_image( $case_id, 'full' );
$is_case_share        = class_exists( Case_Social::class ) && RDTheme::$options['case_social'];
$container_class      = Helper::has_full_width() ? 'container' : '';

$project_info_title   = isset( RDTheme::$options['case_single_project_info'] ) ?  RDTheme::$options['case_single_project_info']  :  'Recent Case Studies';
$allow_subtitle       = isset( RDTheme::$options['case_single_info_show'] ) ?  RDTheme::$options['case_single_info_show']  : true; 

?>
<!-- Start thumbnail and meta info block -->
<div class="single-case-page bg-ash case-style-<?php echo esc_attr( RDTheme::$options['case_single_style'] ); ?>">
  <div class="<?php echo esc_attr( $container_class ); ?>">
    <div class="single-case-page-2">
        <div class="single-case-box-layout1">
          <?php if ( $thumb ){ ?>
            <div class="item-img">
              <img src="<?php echo esc_url( $thumb ); ?>" alt="<?php the_title_attribute(); ?>">
            </div>
          <?php } ?>
        </div>
		<div class="single-case-box-layout4">
	  <div class="single-item-content">		  
		<?php if ( RDTheme::$has_banner == 0 ) { ?><h2 class="item-title"><?php the_title(); ?></h2><?php } ?>
		<div class="item-info">
			<svg class="shape-left"
			 xmlns="http://www.w3.org/2000/svg"
			 xmlns:xlink="http://www.w3.org/1999/xlink"
			 width="129px" height="94px">
			<path fill-rule="evenodd"  fill="rgb(255, 118, 23)"
			 d="M29.739,13.322 C51.390,6.879 121.929,-10.072 128.425,11.638 C134.921,33.347 74.915,85.498 53.264,91.941 C31.613,98.383 8.795,86.007 2.299,64.297 C-4.197,42.587 8.088,19.765 29.739,13.322 Z"/>
			</svg>
			<ul class="list-item">
				<?php $terms = get_the_term_list(get_the_ID(), $prefix . '_case_category', '', ', ', ''); ?> 
				
				<?php if ( $case_date ) { ?>
				<li><span><?php esc_html_e( 'Published', 'optimax' ); ?> :</span><?php echo esc_html( $case_date ); ?></li>
				<?php } ?>
				<?php if ( $case_client ) { ?>
				<li><span><?php esc_html_e( 'Client', 'optimax' ); ?> :</span><?php echo esc_html( $case_client ); ?></li>
				<?php } ?>
				<?php if ( $terms ) { ?>
				<li><span><?php esc_html_e( 'Category', 'optimax' ); ?> :</span><?php echo wp_kses( $terms , 'alltext_allow' ); ?></li>
				<?php } ?>
				<?php if ( $case_client_website ) { ?>
				<li><span><?php esc_html_e( 'Website', 'optimax' ); ?> :</span><?php echo esc_html( $case_client_website ); ?></li>
				<?php } ?>
				<?php if ( $is_views ) { ?>
				<li><span><?php esc_html_e( 'Views', 'optimax' ); ?> :</span><?php echo esc_html( $views ); ?></li>
				<?php } ?>
				<?php if ( $is_case_share ) { ?>
				<li><span><?php esc_html_e( 'Share', 'optimax' ); ?> :</span><?php Case_Social::render(); ?></li>
				<?php } ?>
			</ul>
			<svg class="shape-right"
			 xmlns="http://www.w3.org/2000/svg"
			 xmlns:xlink="http://www.w3.org/1999/xlink"
			 width="223px" height="134px">
			<path fill-rule="evenodd"  fill="rgb(128, 58, 214)"
			 d="M81.431,1.865 C117.233,10.052 230.645,42.420 222.458,78.223 C214.271,114.026 87.586,139.706 51.784,131.519 C15.981,123.332 -6.407,87.671 1.780,51.868 C9.967,16.066 45.628,-6.322 81.431,1.865 Z"/>
			</svg>
		</div>
	  </div>
	</div>
    </div>
  </div>
</div>
<!-- End thumbnail and meta info block -->

<div class="<?php echo esc_attr( $container_class ); ?> content-padding-top-static">
	<div class="single-case-wrap-layout2">
		<?php the_content(); ?>
	</div>
	
  <?php get_template_part('template-parts/case/partials/prev-next-post'); ?>
  <?php get_template_part('template-parts/case/partials/related-post'); ?>
  <?php get_template_part('template-parts/single-page-comment'); ?>
</div>







