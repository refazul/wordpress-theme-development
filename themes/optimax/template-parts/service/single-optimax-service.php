<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;
$container_class  = "container content-padding";
$has_full_width   = Helper::has_full_width();

if ($has_full_width) {
 $container_class = "content-padding";
}

?>


<div class="<?php echo esc_attr( $container_class ); ?>">
  <div class="row theiaStickySidebar">
    <?php Helper::left_sidebar(); ?>
    <div class="<?php echo esc_attr( Helper::the_layout_class() ); ?>">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php  get_template_part('template-parts/service/content-service-single-1'); ?>
      <?php endwhile; ?>
    </div>
    <?php Helper::right_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>
