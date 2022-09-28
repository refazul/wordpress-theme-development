<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;

$prefix          = Constants::$theme_prefix;
$prev_post       = get_previous_post();
$next_post       = get_next_post();
$is_prev_or_next = $prev_post || $next_post;
?>

<?php if ( RDTheme::$options['case_single_prev_next_link'] && $is_prev_or_next ) { ?>


<div class="row no-gutters divider post-navigation pagination-layout4 pagination-layout5">
	<?php if (!empty(get_next_post_link())) { ?>
		<div class=" col-lg-6 col-md-6 col-sm-6 col-6 d-flex <?php if (empty(get_previous_post_link())) { ?>-offset-md-6<?php } ?> <?php if (is_rtl()) {
			echo esc_attr('text-left');
		} else {
			echo esc_attr('text-left');
		} ?>">
			<?php $next_post = get_next_post();
			if (!empty($next_post)) { ?>
				<?php if (has_post_thumbnail($next_post->ID)) { ?>
					<a class="left-img"
					   href="<?php echo esc_url(get_permalink($next_post->ID)); ?>"><?php echo get_the_post_thumbnail($next_post->ID, 'thumbnail', array('class' => 'Next')); ?></a><?php } ?>
			<?php } ?>
			<div class="pad-lr-15">
		<span class="next-article">
		<?php next_post_link('%link', esc_html('Previous', 'optimax')); ?></span>
				<?php next_post_link('<h3 class="post-nav-title">%link</h3>'); ?>
			</div>

		</div>
	<?php } ?>

	<?php if (!empty(get_previous_post_link())) { ?>
		<div class="col-lg-6 col-md-6 col-sm-6 col-6 d-flex <?php if (empty(get_next_post_link())) { ?>offset-md-6<?php } ?> <?php if (is_rtl()) {
			echo esc_attr('text-right justify-content-end');
		} else {
			echo esc_attr('text-right justify-content-end');
		} ?>">

			<div class="pad-lr-15">
		<span class="prev-article">
		<?php previous_post_link('%link', esc_html('Next', 'optimax')); ?></span>
				<?php previous_post_link('<h3 class="post-nav-title">%link</h3>'); ?>
			</div>
			<?php $previous_post = get_previous_post();
			if (!empty($previous_post)) { ?>
				<?php if (has_post_thumbnail($previous_post->ID)) { ?>
					<a class="right-img"
					   href="<?php echo esc_url(get_permalink($previous_post->ID)); ?>"><?php echo get_the_post_thumbnail($previous_post->ID, 'thumbnail', array('class' => 'Previous')); ?></a><?php } ?>
			<?php } ?>

		</div>
	<?php } ?>
</div>
<?php } ?>