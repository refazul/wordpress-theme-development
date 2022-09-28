<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;
use WP_Query;
$prefix      = Constants::$theme_prefix;
$thumb_size  = "{$prefix}-size2";
$col_class   = Helper::has_sidebar() ? 'col-md-6' : 'col-md-6 col-lg-4';
?>

<div>
  <div class="row">
    <?php
    while ( have_posts() ) : the_post(); 
    $thumb = Helper::generate_thumbnail_image( get_the_ID(), $thumb_size );
    ?>
      <div class="<?php echo esc_html( $col_class ); ?>">
        <div class="service-box-layout9">
          <?php
          $img = Helper::generate_thumbnail_image( get_the_ID(), $thumb_size );
          ?>
          <?php if ( $img ): ?>
            <div class="item-img">
              <img src="<?php echo esc_attr( $img ); ?>" alt="<?php the_title_attribute(); ?>">
				  <div class="hover-icon">
					<a href="<?php the_permalink(); ?>">
					<span class="line1"></span>
					<span class="line2"></span></a>
				  </div>
            </div>
          <?php endif ?>

          <div class="item-content">
            <h3 class="item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php 
            $taxonomy = $prefix . '_service_category';
            $terms_array = get_the_terms( get_the_ID(), $taxonomy );
            ?>
            <?php if ( $terms_array ): ?>
              <div class="item-subtitle">
                <?php foreach ($terms_array as $index => $term): ?><a href="<?php echo esc_url( get_term_link( $term, $taxonomy ) ); ?>"><?php echo esc_html( $term->name ); ?></a><?php echo Helper::generate_array_iterator_postfix( $terms_array, $index, ' / ' ); ?><?php endforeach ?>
              </div>
            <?php endif ?>
          </div>
        </div>
      </div>
    <?php
    endwhile;
    ?>
  </div>

  <div class="pagination-layout1">
    <?php get_template_part( 'template-parts/pagination' ) ?>
  </div>

</div>




