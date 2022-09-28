<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;

$prefix      		= Constants::$theme_prefix;
$designation 		= get_post_meta( get_the_ID(), "{$prefix}_team_designation", true );
$socials     		= get_post_meta( get_the_ID(), "{$prefix}_team_socials", true );
$optimax_team_skill = get_post_meta( $post->ID, "{$prefix}_team_skill", true );
$thumb_size  		= "{$prefix}-size6";
$thumb       		= Helper::generate_thumbnail_image( get_post(), 'full' );
?>
<div <?php post_class('single-team-wrap'); ?> id="post-<?php the_ID(); ?>" >
    <div class="row">
		<div class="col-lg-5 col-12 single-team-box1">
			<div class="team-single-thum">
			<img src="<?php echo esc_url($thumb); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
			</div>
		</div>
		<div class="col-lg-7 col-12">
			<div class="single-team-box2">
			  <h2 class="rtin-title"><?php the_title() ?></h2>
			  <div class="item-subtitle title-bar-xl1"><?php echo esc_html($designation); ?></div>
			  <?php the_content(); ?>
				<!-- Team Skills -->
				<?php if ( !empty( $optimax_team_skill ) ) { ?>
				<div class="team-skill-wrap">
					<div class="skill-contact">
						<?php if ( !empty( $optimax_team_skill ) ) { ?>
						<div class="rtin-skills">
							<?php foreach ( $optimax_team_skill as $skill ): ?>
								<?php
								if ( empty( $skill['skill_name'] ) || empty( $skill['skill_value'] ) ) {
									continue;
								}
								$skill_value = (int) $skill['skill_value'];
								$skill_style = "width:{$skill_value}%;";

								if ( !empty( $skill['skill_color'] ) ) {
									$skill_style .= "background-color:{$skill['skill_color']};";
								}
								?>
								<div class="rtin-skill-each">
									<h4 class="rtin-name"><?php echo esc_html( $skill['skill_name'] );?></h4>
									<div class="progress">
										<div class="progress-bar progress-bar-striped fadeInLeft animated" data-progress="<?php echo esc_attr( $skill_value );?>%" style="<?php echo esc_attr( $skill_style );?>"> <span><?php echo esc_html( $skill_value );?>%</span></div>
									</div>								
								</div>
							<?php endforeach;?> 
						</div>
						<?php } ?>
					</div>
				</div>
				<?php } ?>
				<ul class="item-social">
					<?php foreach (Helper::team_social_infos() as $social_info): ?>
					  <?php if ( isset( $socials[$social_info['key']]) && $link = $socials[$social_info['key']]): ?>
						<li>
						  <a href="<?php echo esc_url($link); ?>">
							<i class="<?php echo esc_attr( $social_info['icon'] ); ?>"></i>
						  </a>
						</li>
					  <?php endif ?>
					<?php endforeach ?>
				</ul>
			</div>
		</div>
    </div>
</div>

