<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;
get_header();
$prefix     = Constants::$theme_prefix;

// sending to specific custom post type
$post_types = ['case', 'service', 'team'];
foreach ($post_types as $post_type) {
  if ( is_singular( "{$prefix}_{$post_type}" ) ) {
    get_template_part( "template-parts/{$post_type}/single-optimax", $post_type);
    return;
  }
}
?>

<div class="single-blog-wrap-layout1 content-padding">
  <div class="container">
      <div class="row theiaStickySidebar">
        <?php Helper::left_sidebar(); ?>
        <div class="<?php echo esc_attr( Helper::the_layout_class() ); ?>">
          <div class="single-blog-box-layout1">
            <?php while(have_posts()): the_post(); get_template_part( 'template-parts/blog/content-single'); ?>
                <?php if ( comments_open() || get_comments_number() ): ?>
                    <div class="comments-wrapper">
                     <?php comments_template(); ?>
                    </div>
                <?php endif ?>
            <?php endwhile; ?>
            
          </div>
        </div>
        <?php Helper::right_sidebar() ?>
      </div>
  </div>
</div>

<?php get_footer(); ?>
