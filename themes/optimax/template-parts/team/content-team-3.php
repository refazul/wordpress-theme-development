<?php

/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;
$prefix      = Constants::$theme_prefix;
$thumb_size  = "{$prefix}-size4";
$post_class  = Helper::has_sidebar() ? 'col-md-6 col-lg-4' : 'col-md-6 col-lg-4 col-xl-3';
?>

<div class="team-wrap-layout5">
  <div class="">
    <div class="row">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php
        $thumb       = Helper::generate_thumbnail_image( get_the_ID(), $thumb_size, true );
        $designation = get_post_meta( get_the_ID(), "{$prefix}_team_designation", true );
        $socials     = get_post_meta( get_the_ID(), "{$prefix}_team_socials", true );
        ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class($post_class); ?>>
          <div class="team-box-layout-h2">
            <?php if ($thumb): ?>
              <div class="item-img">
                <img src="<?php echo esc_url($thumb); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
              </div>
            <?php endif ?>
            <div class="item-content">
             <div class="item-heading">
               <h3 class="item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
               <div class="item-subtitle"><?php echo esc_html($designation) ?></div>
             </div>
             <p>
              <?php
              $content = wp_trim_words( get_the_excerpt(), 10, '' );
              echo esc_html($content);
              ?>
            </p>
            <?php if (count($socials) ): ?>
              <ul class="item-social">
                <?php foreach (Helper::team_social_infos() as $social_info): ?>
                  <?php if ( isset( $socials[$social_info['key']] ) &&  $link = $socials[$social_info['key']]): ?>
                    <li>
                      <a href="<?php echo esc_url($link); ?>">
                        <i class="<?php echo esc_attr( $social_info['icon'] ); ?>"></i>
                      </a>
                    </li>
                  <?php endif ?>
                <?php endforeach ?>
              </ul>
            <?php endif ?>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
  <div class="pagination-layout1">
    <?php get_template_part( 'template-parts/pagination' ) ?>
  </div>
</div>
</div>



