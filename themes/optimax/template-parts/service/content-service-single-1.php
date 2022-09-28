<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;

$container_class      = Helper::has_full_width() ? 'container' : '';
$prefix               = Constants::$theme_prefix;
$thumb_size           = "{$prefix}-size1";
$service_id           = get_the_ID();              
$thumb                = null;
if ( RDTheme::$options['service_single_featured_image'] ) {
  $thumb              = Helper::has_full_width() ?  Helper::generate_thumbnail_image( $service_id, 'full', true ) : Helper::generate_thumbnail_image( $service_id, $thumb_size, true );
}
?>


<div>
  <div class="<?php echo esc_attr( $container_class ); ?>">

    <?php if ( $thumb ): ?>
      <div class="item-img">
        <img src="<?php echo esc_url( $thumb ); ?>" alt="<?php the_title_attribute(); ?>">
      </div>
    <?php endif ?>

    <div class="item-content">
        <?php the_content(); ?>
    </div>
  </div>
</div>

<div class="<?php echo esc_attr( $container_class ); ?> recent-case">
  <?php get_template_part('template-parts/service/partials/recent-case-study'); ?>
</div>


