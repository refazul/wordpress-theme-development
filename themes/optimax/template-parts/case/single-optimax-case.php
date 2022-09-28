<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;
$case_single_style = RDTheme::$options['case_single_style']; // 2
$meta_style = get_post_meta( get_the_ID(), 'optimax_case_layout' , true ); // 1

$container_class   = "container content-padding";
$has_full_width    = Helper::has_full_width();

if ($has_full_width) {
 $container_class  = "content-padding";
}

$define_style_layout = '';
if ( !empty( $meta_style ) && ('default' != $meta_style ) ) {   $define_style_layout = $meta_style; } else {$define_style_layout = $case_single_style; }

?>

<div class="<?php echo esc_attr( $container_class ); ?>">
	<div class="row theiaStickySidebar">
		<?php Helper::left_sidebar(); ?>
		<div class="<?php echo esc_attr( Helper::the_layout_class() ); ?>">
		
		<?php $case_single_ID = get_the_ID();	
				if ( $define_style_layout == 1 ) { ?>
			<?php while ( have_posts() ) { the_post(); 
				get_template_part('template-parts/case/content-case-single', 1); 
			} ?>
		<?php } else if ( $define_style_layout == 2 ) { ?>
			<?php while ( have_posts() ) { the_post(); 
				get_template_part('template-parts/case/content-case-single', 2); 
			} ?>
		<?php } else if ( $define_style_layout == 3 ) { ?>
			<?php while ( have_posts() ) { the_post(); 
				get_template_part('template-parts/case/content-case-single', 3); 
			} ?>
		<?php } ?>
		
		</div>
		<?php Helper::right_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
