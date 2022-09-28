<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;
?>
<?php

get_header();

$post_archive_style = 1;
$post_class         = Helper::has_sidebar() ? 'col-lg-6' : 'col-lg-4';
$masonry_grid       = 'masonry-grid clearfix';
$post_class .= ' masonry-grid-item';

?>

<div class="content-padding">
  <div class="container">
    <div class="row theiaStickySidebar">
      <?php Helper::left_sidebar(); ?>
      <div class="<?php echo esc_attr( Helper::the_layout_class() ); ?>">
        <div class="blog-details">
          <div class="row  <?php echo esc_attr( $masonry_grid ); ?>">

            <?php if ( have_posts() ): ?>
              <?php while(have_posts()): the_post(); ?>
              <div class="<?php echo esc_attr( $post_class ); ?>">
                <?php get_template_part( 'template-parts/blog/content',  $post_archive_style ); ?>
              </div>
              <?php endwhile; ?>
            <?php else: ?>
              <div class="<?php echo esc_attr( $post_class ); ?>">
                <?php get_template_part( 'template-parts/content', 'none' );?>
              </div>
            <?php endif ?>
          </div>
         <div class="pagination-layout1">
           <?php get_template_part( 'template-parts/pagination' ) ?>
         </div>
        </div>
      </div>
      <?php Helper::right_sidebar() ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>


