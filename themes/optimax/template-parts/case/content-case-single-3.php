<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;

use radiustheme\Optimax_Core\Case_Social;
use radiustheme\Optimax_Core\Utilities;
$case_id  =  get_the_ID();
$views    = 0;
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
$thumb                = Helper::has_full_width() ?  Helper::generate_thumbnail_image( $case_id, 'full', true ) : Helper::generate_thumbnail_image( $case_id, $thumb_size, true );
$is_case_share        = class_exists( Case_Social::class ) && RDTheme::$options['case_social'];
$container_class      = Helper::has_full_width() ? 'container' : '';

$project_info_title          = isset( RDTheme::$options['case_single_project_info'] ) ?  RDTheme::$options['case_single_project_info']  :  'Recent Case Studies';
$allow_subtitle = isset( RDTheme::$options['case_single_info_show'] ) ?  RDTheme::$options['case_single_info_show']  : true; 

?>
<!-- html -->
<section class="single-case-wrap-layout5 case-style-<?php echo esc_attr( RDTheme::$options['case_single_style'] ); ?>">
   <div class="container">
	   <div class="row gutters-40">
		   <div class="<?php echo esc_attr( $container_class ); ?>">
				<div class="single-case-box-layout5">
					<div class="row">
						<div class="col-xl-8 col-lg-12 col-md-12">
							<?php if ( $thumb ): ?>
								<div class="item-img">
									<img src="<?php echo esc_url( $thumb ); ?>" alt="<?php the_title_attribute(); ?>">
								</div>
							<?php endif ?>
						</div>
						<div class="col-xl-4 col-lg-12 case-study-3-widget">
							<div class="widget widget-project-info">
								<div class="heading-layout5">
									<?php if ( $allow_subtitle ){ ?>
										<h3><?php echo esc_html( $project_info_title ); ?></h3>
									<?php } ?>
								</div>
								<div class="item-info">
									<ul>
									  <?php
									  $terms = get_the_term_list(get_the_ID(), $prefix . '_case_category', '', ', ', '');
									  ?>
									  <?php if ( $terms ): ?>
										<li class="case-category"><?php esc_html_e( 'Category', 'optimax' );?>  : <span class="case-category-inner"> <?php echo wp_kses( $terms , 'alltext_allow' ); ?></span></li>
									  <?php endif ?>
									  <?php if ( $case_client ) { ?>
										<li><?php esc_html_e( 'Client', 'optimax' );?> : <span><?php echo esc_html( $case_client ); ?></span></li>
									  <?php } ?>
									  <?php if ( $case_date ): ?>
										<li><?php esc_html_e( 'Published', 'optimax' );?> : <span><?php echo esc_html( $case_date ); ?></span></li>
									  <?php endif ?>
									  <?php if ( $case_client_website ): ?>
										<li><?php esc_html_e( 'Website', 'optimax' );?> : <span><?php echo esc_html( $case_client_website ); ?></span></li>
									  <?php endif ?>
									  <?php if ( $is_views ): ?>
										<li><?php esc_html_e( 'Views', 'optimax' );?> : <span><?php echo esc_html( $views ); ?></span></li>
									  <?php endif ?>
									  <?php if ( $is_case_share ): ?>
										<li><?php esc_html_e( 'Share', 'optimax' );?> : 
										  <?php Case_Social::render(); ?>
										</li>
									  <?php endif ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="item-content">
						<?php the_content(); ?>
					</div>
				</div>
		   </div>
		   
	   </div>
   </div>
</section>

<div class="<?php echo esc_attr( $container_class ); ?>">
  <?php get_template_part('template-parts/case/partials/prev-next-post'); ?>
  <?php get_template_part('template-parts/case/partials/related-post'); ?>
  <?php get_template_part('template-parts/single-page-comment'); ?>
</div>
