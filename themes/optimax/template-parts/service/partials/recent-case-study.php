<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;

$prefix          = Constants::$theme_prefix;
$thumb_size      = "{$prefix}-size2";
$taxonomy_name   = $prefix . '_service_tag';
$post_id         = get_the_ID();
$tag_taxonomy    = wp_get_object_terms( $post_id, $taxonomy_name, ['fields' => 'ids'] );
$posts_per_page  = Helper::has_full_width() ? 3 : 2;
$col_class       = Helper::has_full_width() ? " col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12" : "col-md-6";

$title          = isset( RDTheme::$options['case_single_title'] ) ?  RDTheme::$options['case_single_title']  :  'Recent Case Studies';
$subtitle       = isset( RDTheme::$options['case_single_subtitle'] ) ?  RDTheme::$options['case_single_subtitle']  :  'Morbi accumsan ipsum velit Nam nec tellus aodio tincidunt auctor ';
$allow_subtitle = isset( RDTheme::$options['has_case_single_subtitle'] ) ?  RDTheme::$options['has_case_single_subtitle']  : true; 

$args = [
  'post_type'      => $prefix . '_case',
  'post_status'    => 'publish',
  'posts_per_page' => $posts_per_page,
  'orderby'        => 'rand',
];

$case_studies = get_posts( $args );
if ( $posts_per_page % 2 == 1 ) {
	$is_offset = 'offset-lg-3 offset-md-3 offset-xl-0 ';
}
?>
<?php if ( RDTheme::$options['service_single_recent_case_study'] && $case_studies ): ?>
  <div class="related-case">
    <div class="related-case-heading">
	  <h2><?php echo esc_html( $title ); ?></h2>
		<?php if ( $allow_subtitle ){ ?>
			<p><?php echo esc_html( $subtitle ); ?></p>
		<?php } ?>
		
    </div>
    <div class="row">
      <?php $i = 1; foreach ( $case_studies as $case_study ) { ?>
        <div class="<?php if ( ( $i == $posts_per_page ) && ( $posts_per_page % 2 == 1 ) ) { echo esc_attr( $is_offset ) ; } echo esc_attr( $col_class ); ?>">
          <div class="service-box-layout9">
            <?php 
            $thumb = Helper::generate_thumbnail_image( $case_study, $thumb_size );
            $permalink = get_permalink( $case_study );
            ?>
            <?php if ( $thumb ): ?>
            <div class="item-img">
              <img src="<?php echo esc_url( $thumb ); ?>" alt="<?php echo esc_attr( $case_study->post_title ); ?>">
              <div class="hover-icon">
				<a href="<?php the_permalink(); ?>">
				<span class="line1"></span>
				<span class="line2"></span></a>
			  </div>
            </div>
          <?php endif ?>
			
			
            <div class="item-content">
              <h3 class="item-title"><a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $case_study->post_title ); ?></a></h3>
                <?php
                $terms_array  = get_the_terms( $case_study, $prefix . '_case_tag' );
                $terms_length = count( $terms_array );
                ?>
                <?php if ($terms_array): ?>
                  <div class="item-subtitle">
                    <?php foreach ($terms_array as $index => $term): ?>
                      <a href="<?php echo esc_url( get_term_link($term, $prefix . '_case_tag') ); ?>"><?php echo esc_html( $term->name ); ?></a>
                      <?php echo esc_html( Helper::generate_array_iterator_postfix($terms_array, $index) ); ?>
                    <?php endforeach ?>
                  </div>
                <?php endif ?>
            </div>
          </div>
        </div>
      <?php $i++; } ?>
    </div>
    <div class="view-all-btn text-center mg-t-30">
      <a href="<?php echo get_post_type_archive_link( $prefix . '_case' ); ?>" class="ghost-btn-2 border-accent text-accent"><?php esc_html_e( 'VIEW ALL CASES', 'optimax' );?><i class="fas fa-long-arrow-alt-right"></i></a>
    </div>
  </div>
<?php endif ?>
