<?php
/**
 * Template Name: All Child Listing
 * Template require when user want to show all child items
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;

get_header();
$post_class = Helper::has_sidebar() ? 'col-md-6' : 'col-md-4';

?>
<div class="single-blog-wrap content-padding">
  <div class="container">
    <div class="row theiaStickySidebar">
      <?php Helper::left_sidebar(); ?>
      <div class="<?php echo esc_attr( Helper::the_layout_class() ); ?>">
        <div class="parent-page masonry-grid2">
          <?php 
          $args   = [
            'post_type'      => 'page',
            'posts_per_page' => -1,
            'post_parent'    => $post->ID,
            'order'          => 'ASC',
            'orderby'        => 'menu_order'
          ];
          $parent = get_posts( $args );
          ?>
          <?php foreach ($parent as $child): ?>
            <div class="child-wrap masonry-grid-item2" id="post-<?php echo esc_attr( $child->ID ); ?>">
              <h2 class="post-title">
                <?php
                $permalink = get_the_permalink($child);
                ?>
                <a title="<?php echo esc_attr( $child->post_title ); ?>" href="<?php echo esc_attr( $permalink ); ?>">
                  <?php echo esc_html( $child->post_title ); ?>
                </a>
              </h2>
            </div>
          <?php endforeach ?>
        </div>
      </div>
      <?php Helper::right_sidebar() ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
