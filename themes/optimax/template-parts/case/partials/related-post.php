<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;

$prefix          = Constants::$theme_prefix;
$thumb_size      = "{$prefix}-size9";
$taxonomy_name   = $prefix . '_case_tag';
$post_id         = get_the_ID();
$tag_taxonomy    = wp_get_object_terms( $post_id, $taxonomy_name, array('fields' => 'ids') );
$args = [
  'post_type'      => $prefix . '_case',
  'post_status'    => 'publish',
  'posts_per_page' => 3,
  'orderby'        => 'rand',
  'tax_query'      => [
      [
        'taxonomy' => $taxonomy_name,
        'field'    => 'id',
        'terms'    => $tag_taxonomy,
      ]
  ],
  'post__not_in' => [ $post_id ],
];
$related_posts = get_posts( $args );
?>
<?php if ( RDTheme::$options['case_single_related_post'] && $related_posts ): ?>
  <div class="pt3r">
    <div class="related-post-wrap">
      <div class="heading-layout6">
        <h3> <?php echo esc_html( RDTheme::$options['case_single_related_post_title'] ); ?> </h3>
      </div>
      <div class="row">
        <?php 
          $first_related_post = $related_posts[0];
          $thumb              = Helper::generate_thumbnail_image( $first_related_post, $thumb_size );
          $permalink          = get_permalink($first_related_post);
        ?>
        <div class="col-md-4 col-12">
          <div class="case-study-box-layout6">
            <div class="item-img">
              <img src="<?php echo esc_url( $thumb ); ?>" alt="<?php echo esc_attr( $first_related_post->post_title ); ?>">
              <div class="hover-icon">
                <a href="<?php echo esc_url( $permalink ); ?>"><i class="fas fa-plus"></i></a>
              </div>
            </div>
            <div class="item-content">
              <h3 class="item-title"><a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $first_related_post->post_title ); ?></a></h3>
              <?php
              $terms_array  = get_the_terms( get_the_ID(), $prefix . '_case_tag' );
              $terms_length = count( $terms_array );
              ?>
              <?php if ($terms_array): ?>
                <div class="item-tag">
                  <?php foreach ($terms_array as $index => $term): ?>
                    <a href="<?php echo esc_url( get_term_link($term, $prefix . '_case_tag') ); ?>"><?php echo esc_html( $term->name ); ?></a>
                    <?php echo esc_html( Helper::generate_array_iterator_postfix($terms_array, $index) ); ?>
                  <?php endforeach ?>
                </div>
              <?php endif ?>

            </div>
          </div>
        </div>

        <!-- check whether we have second posts -->
        <?php if ( isset($related_posts[1]) ) { ?>
          <?php 
            $second_related_post = $related_posts[1];
            $thumb               = Helper::generate_thumbnail_image( $second_related_post, $thumb_size );
            $permalink           = get_permalink($second_related_post);
          ?>
          <div class="col-md-4 col-12">
            <div class="case-study-box-layout6">
              <div class="item-img">
                <img src="<?php echo esc_url( $thumb ); ?>" alt="<?php echo esc_attr( $second_related_post->post_title ); ?>">
                <div class="hover-icon">
                  <a href="<?php echo esc_url( $permalink ); ?>"><i class="fas fa-plus"></i></a>
                </div>
              </div>

              <div class="item-content">
                <h3 class="item-title"><a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $second_related_post->post_title ); ?></a></h3>
                <?php
                $terms_array  = get_the_terms( get_the_ID(), $prefix . '_case_tag' );
                $terms_length = count( $terms_array );
                ?>
                <?php if ($terms_array){ ?>
                  <div class="item-tag">
                    <?php foreach ($terms_array as $index => $term): ?>
                      <a href="<?php echo esc_url( get_term_link($term, $prefix . '_case_tag') ); ?>"><?php echo esc_html( $term->name ); ?></a>
                      <?php echo esc_html( Helper::generate_array_iterator_postfix($terms_array, $index) ); ?>
                    <?php endforeach ?>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        <?php } ?>
		
		<!-- check whether we have second posts -->
        <?php if ( isset($related_posts[2]) ) { ?>
          <?php 
            $third_related_post = $related_posts[2];
            $thumb               = Helper::generate_thumbnail_image( $third_related_post, $thumb_size );
            $permalink           = get_permalink($third_related_post);
          ?>
          <div class="col-md-4 col-12">
            <div class="case-study-box-layout6">
              <div class="item-img">
                <img src="<?php echo esc_url( $thumb ); ?>" alt="<?php echo esc_attr( $third_related_post->post_title ); ?>">
                <div class="hover-icon">
                  <a href="<?php echo esc_url( $permalink ); ?>"><i class="fas fa-plus"></i></a>
                </div>
              </div>

              <div class="item-content">
                <h3 class="item-title"><a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $third_related_post->post_title ); ?></a></h3>
                <?php
                $terms_array  = get_the_terms( get_the_ID(), $prefix . '_case_tag' );
                $terms_length = count( $terms_array );
                ?>
                <?php if ($terms_array){ ?>
                  <div class="item-tag">
                    <?php foreach ($terms_array as $index => $term): ?>
                      <a href="<?php echo esc_url( get_term_link($term, $prefix . '_case_tag') ); ?>"><?php echo esc_html( $term->name ); ?></a>
                      <?php echo esc_html( Helper::generate_array_iterator_postfix($terms_array, $index) ); ?>
                    <?php endforeach ?>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        <?php } ?>
		
      </div>
    </div>
  </div>
<?php endif ?>
