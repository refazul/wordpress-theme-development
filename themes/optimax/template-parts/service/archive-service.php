<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;
$container_class = 'container content-padding';
?>

<div class="<?php echo esc_attr( $container_class ); ?>">
  <div class="row theiaStickySidebar">
    <?php Helper::left_sidebar(); ?>
    <div class="<?php echo esc_attr( Helper::the_layout_class() ); ?>">
      <?php get_template_part('template-parts/service/content-service-1') ?>
    </div>
    <?php Helper::right_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>
