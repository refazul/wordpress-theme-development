<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;
$team_single_style = 1;
$container_class   = 'container content-padding';
$bg_f2_class       = Helper::has_full_width() ? 'team-bg-gradient' : '';
?>


<div class="<?php echo esc_attr( $container_class ); ?>">
	<div class="row theiaStickySidebar">
	  <?php Helper::left_sidebar(); ?>
	  <div class="<?php echo esc_attr( Helper::the_layout_class() ); ?>">

		<?php while ( have_posts() ) : the_post(); ?>
		  <?php get_template_part('template-parts/team/content-team-single', $team_single_style); ?>
		<?php endwhile; ?>

		<?php if (Helper::has_sidebar()): ?>
		  <?php get_template_part( 'template-parts/team/related-team' ) ?>
		<?php endif ?>

	  </div>
	  <?php Helper::right_sidebar(); ?>
	</div>
</div>
<?php 

$others_team_bool = isset( RDTheme::$options['has_team_single_others_team'] ) ? RDTheme::$options['has_team_single_others_team'] : true;

?>
 
<div class="<?php echo esc_attr( $bg_f2_class ); ?>">
	<div class="figure-holder">
		<div class="left-holder wow bounceInLeft" data-wow-delay="0.2s" data-wow-duration="2s">			
			<img src="<?php echo Helper::get_img('shape/shape-5.png');  ?>" alt="<?php esc_html_e('shape-5', 'optimax'); ?>">
		</div>
		<div class="right-holder wow bounceInRight" data-wow-delay="0.2s" data-wow-duration="2s">			
			<img src="<?php echo Helper::get_img('shape/shape-6.png'); ?>" alt="<?php esc_html_e('shape-6', 'optimax'); ?>">
		</div>
	</div>
	<?php if ( Helper::has_full_width() && $others_team_bool ): ?>
		<div class="container">
			<?php get_template_part( 'template-parts/team/related-team' ) ?>
		</div>
	<?php endif ?>
</div>
<?php get_footer(); ?>
