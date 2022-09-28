<?php

/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax_Core;
use radiustheme\Optimax\Helper;
use radiustheme\Optimax\RDTheme;

$prefix      = Constants::$theme_prefix;
$thumb_size  = "{$prefix}-size5";
$post_class  = Helper::has_sidebar() ? 'col-md-6 col-lg-4' : 'col-md-6 col-lg-4 col-xl-3';

?>
<div class="rtel-team-gallery-style5">
  <div class="rtin-team-gallery">
    <div class="row">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php
          $post           = get_post();
			$img          = Helper::generate_thumbnail_image( $post, $thumb_size );
			$designation  = get_post_meta( $post->ID, "{$prefix}_team_designation", true );
			$socials      = get_post_meta( $post->ID, "{$prefix}_team_socials", true );
			$permalink    = get_the_permalink($post);
			$content      = Helper::generate_excerpt($post, 15);

         ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class($post_class); ?>>
			<div class="team-box">
				<div class="team-name"><a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $post->post_title ); ?></a><?php if ( $designation ){ ?> / <span class="team-designation"><?php echo esc_html( $designation ); ?></span><?php } ?></div>
				<div class="team-img"><a href="<?php echo esc_url( $permalink ); ?>"><img src="<?php echo esc_url( $img ); ?>" alt="<?php echo esc_attr( $post->post_title ); ?>"></a>
				<?php
					$social_wrapper_class_name_list = [
					'1' => 'one-item',
					'2' => 'two-items',
					'3' => 'three-items',
					'4' => 'four-items',
					];
					$filtered_socials = Helper::filter_filled_team_socials( $socials );
					$number_of_socials = count( $filtered_socials );
					$social_wrapper_class_name = 'five-items';
					if ( array_key_exists( $number_of_socials, $social_wrapper_class_name_list) ) {
						$social_wrapper_class_name = $social_wrapper_class_name_list[ $number_of_socials ];
					}
				?>
				<?php if ( $number_of_socials ){ ?>
				<div class="team-social">				
					<ul class="rtin-social <?php echo esc_attr( $social_wrapper_class_name ); ?>">
					<?php foreach (Helper::team_social_infos() as $social_info) { ?>
						<?php if ( isset( $socials[$social_info['key']] ) && $link = $socials[$social_info['key']]) { ?>
						<li><a class="<?php echo esc_attr( $social_info['key'] ); ?>" href="<?php echo esc_attr($link); ?>"><i class="<?php echo esc_attr( $social_info['icon'] ); ?>"></i></a></li>
						<?php } ?>
					<?php } ?>
					</ul>
				</div>
				<?php } ?>
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


