<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;
get_header();
// custom post type Redirection
$prefix = Constants::$theme_prefix;
$post_types = ['case', 'service', 'team'];
foreach ($post_types as $post_type) {
  if ( is_post_type_archive( "{$prefix}_{$post_type}" ) || is_tax( "{$prefix}_{$post_type}_category" ) || is_tax( "{$prefix}_{$post_type}_tag" ) ) {
    get_template_part( "template-parts/{$post_type}/archive", $post_type );
    return;
  }
}
$post_archive_style = RDTheme::$options['post_archive_style'];

$post_class = Helper::has_sidebar() ? 'col-lg-6 col-md-6' : 'col-lg-4';

$masonry_grid = 'clearfix';
if ( $post_archive_style == '1' ) { 
  $post_class = 'col-12';
} else {
  $masonry_grid = 'masonry-grid clearfix';
  $post_class .= ' masonry-grid-item';
}
?>

<div class="content-padding">
  <div class="container">
    <div class="row theiaStickySidebar">
      <?php Helper::left_sidebar(); ?>
      <div class="<?php echo esc_attr( Helper::the_layout_class() ); ?>">
        <div class="blog-details">
          <div class="row  <?php echo esc_attr( $masonry_grid ); ?>">
            <?php while(have_posts()): the_post(); ?>
              <div class="<?php echo esc_attr( $post_class ); ?>">
                <?php get_template_part( 'template-parts/blog/content',  $post_archive_style ); ?>
              </div>
            <?php endwhile; ?>
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
