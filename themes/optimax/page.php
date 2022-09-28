<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;
get_header();

?>
<div class="single-blog-wrap content-padding">
  <div class="container">
    <div class="row theiaStickySidebar">
      <?php Helper::left_sidebar(); ?>
      <div class="<?php echo esc_attr( Helper::the_layout_class() ); ?>">
        <div>
          <?php while(have_posts()): the_post(); ?>
              <div class="page-content">
                <?php get_template_part( 'template-parts/content', 'page'); ?>
              </div>
          <?php endwhile; ?>
        </div>
        <?php if ( comments_open() || get_comments_number() ): ?>
            <div class="comments-wrapper">
             <?php comments_template(); ?>
            </div>
        <?php endif ?>
      </div>
      <?php Helper::right_sidebar() ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
