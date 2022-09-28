<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;
$team_archive_style = RDTheme::$options['team_archive_style'];
$bg_f8_class        = ($team_archive_style == 3) ? 'bg-f8' : '';
$container_class    = 'container content-padding';
?>

<div class="<?php echo esc_attr( $bg_f8_class ); ?>">
  <div class="<?php echo esc_attr( $container_class ); ?>">
    <div class="row theiaStickySidebar">
      <?php Helper::left_sidebar(); ?>
      <div class="<?php echo esc_attr( Helper::the_layout_class() ); ?>">
        <?php get_template_part('template-parts/team/content-team', $team_archive_style) ?>
      </div>
      <?php Helper::right_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
