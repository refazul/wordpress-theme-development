<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 * forked from optimax-core/team/view-2
 */

namespace radiustheme\Optimax;

use radiustheme\Optimax\Helper;

$posts_per_page = isset( RDTheme::$options['team_single_no_of_others_team_member'] ) ?  RDTheme::$options['team_single_no_of_others_team_member']  :  4;
$title          = isset( RDTheme::$options['team_single_title'] ) ?  RDTheme::$options['team_single_title']  :  'Our Expert People';
$subtitle       = isset( RDTheme::$options['team_single_subtitle'] ) ?  RDTheme::$options['team_single_subtitle']  :  'Morbi accumsan ipsum velit Nam nec tellus aodio tincidunt auctor ';
$allow_subtitle = isset( RDTheme::$options['has_team_single_subtitle'] ) ?  RDTheme::$options['has_team_single_subtitle']  : true; 
$current_post   = get_the_ID();
$col_class      = "col-md-3 col-sm-2";
if ( Helper::has_sidebar() ) {
  $col_class    = "col-md-4";
}
$prefix         = Constants::$theme_prefix;
$thumb_size     = "{$prefix}-size5";
$args           = [
  'post_type'        => "{$prefix}_team",
  'posts_per_page'   => $posts_per_page,
  'suppress_filters' => false,
  'orderby'          => 'title',
];
if ($current_post) {
  $args['post__not_in'] = [$current_post] ;
}
$posts = get_posts( $args );

?>
<div class="related-team">
	<div class="related-team-heading">
		<h2><?php echo esc_html( $title ); ?></h2>
		<?php if ( $allow_subtitle ){ ?>
			<p><?php echo esc_html( $subtitle ); ?></p>
		<?php } ?>
	</div>
	<div class="related-team-1 rtel-team-gallery-style5">
		<div class="row rtin-team-gallery">
			<?php foreach ($posts as $post) {
				$img          = Helper::generate_thumbnail_image( $post, $thumb_size );
				$designation = get_post_meta( $post->ID, "{$prefix}_team_designation", true );
				$socials     = get_post_meta( $post->ID, "{$prefix}_team_socials", true );
				$permalink   = get_the_permalink($post);
				$content     = Helper::generate_excerpt($post, 15);
			?>
			<!-- this new -->
			<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
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
			
			<?php } ?>
		</div>
	</div>
</div>
