<?php

/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;
$prefix      = Constants::$theme_prefix;
$thumb_size  = "{$prefix}-size10";
$post_class  = Helper::has_sidebar() ? 'col-md-6 col-lg-4' : 'col-md-6 col-lg-4 col-xl-3';

?>
<div class="rtel-team-gallery-style6">
    <div class="row">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php
        $thumb       = Helper::generate_thumbnail_image( get_the_ID(), $thumb_size );
        $designation = get_post_meta( get_the_ID(), "{$prefix}_team_designation", true );
        $socials     = get_post_meta( get_the_ID(), "{$prefix}_team_socials", true );
        ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class($post_class); ?> >
          <div class="team-box">
            <?php if ( $thumb): ?>
             <div class="item-img">
               <img src="<?php echo esc_url($thumb); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
             </div>
           <?php endif ?>
           <div class="item-content">
             <h3 class="item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
             <div class="item-subtitle"><?php echo esc_html($designation) ?></div>
             
             <?php if (count($socials) ): ?>
              <ul class="item-social">
                <?php foreach (Helper::team_social_infos() as $social_info): ?>
                  <?php if (isset( $socials[$social_info['key']] ) &&  $link = $socials[$social_info['key']]): ?>
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
  <!-- row end -->
  <div class="pagination-layout1">
   <?php get_template_part( 'template-parts/pagination' ) ?>
 </div>
</div>


