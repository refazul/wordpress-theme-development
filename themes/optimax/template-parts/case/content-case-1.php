<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;
use WP_Query;
$prefix      = Constants::$theme_prefix;
$thumb_size  = "{$prefix}-size3";
$col_class   = Helper::has_sidebar() ? 'col-md-6' : 'col-md-6 col-lg-4';
?>

<div class="case-study-wrap-layout6">
	<?php if ( RDTheme::$options['has_case_archive_content_title'] ): ?>
    <div class="heading-layout1">
      <?php if ( $title = RDTheme::$options['case_archive_content_title'] ): ?>
        <h2><?php echo esc_html( $title ); ?></h2>
      <?php endif ?>
      <?php if ($subtitle = RDTheme::$options['case_archive_content_subtitle']): ?>
        <p><?php echo esc_html( $subtitle ); ?></p>
      <?php endif ?>
    </div>
	<?php endif ?>
	<div class="rtel-case-study-8">
		<div class="row">
		<?php
		while ( have_posts() ) { the_post(); 
			$thumb = Helper::generate_thumbnail_image( get_the_ID(), $thumb_size );
			$permalink             = get_the_permalink($post);
			$terms = get_the_term_list($post->ID, $prefix . '_case_category', '', ', ', '');
		?>
		<div class="<?php echo esc_html( $col_class ); ?>">
			<div class="case-study-box">
				<figure class="effect-goliath">
					<?php if ( $thumb ){ ?>
					<div class="rtin-img">
						<img src="<?php echo esc_url( $thumb ); ?>" alt="<?php echo esc_attr( $post->post_title ); ?>">
					</div>
				<?php } ?>
					<figcaption>						
						<p class="rtin-subtitle">
							<?php echo wp_kses( $terms , 'alltext_allow' ); ?>
						</p>
						<h3 class="rtin-title"> <a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $post->post_title ); ?></a></h3>
					</figcaption>
				</figure>
			</div>
		</div>
		<?php } ?>
		</div>
	</div>
	<div class="pagination-layout1">
		<?php get_template_part( 'template-parts/pagination' ) ?>
	</div>
</div>




