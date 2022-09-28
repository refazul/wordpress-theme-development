<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;

$case_archive_style = 1;
$container_class    = 'container content-padding';
?>

<div class="<?php echo esc_attr( $container_class ); ?>">
  <div class="row theiaStickySidebar">
    <?php Helper::left_sidebar(); ?>
    <div class="<?php echo esc_attr( Helper::the_layout_class() ); ?>">
      <?php get_template_part('template-parts/case/content-case', $case_archive_style) ?>
    </div>
    <?php Helper::right_sidebar(); ?>
  </div>
</div>


<?php get_footer(); ?>
