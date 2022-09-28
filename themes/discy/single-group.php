<?php get_header();
	$group_id = $post->ID;
	$theme_sidebar_all = $theme_sidebar = (has_wpqa() && wpqa_plugin_version >= "5.7"?wpqa_sidebars("sidebar_where"):"");
	$user_id = get_current_user_id();
	$is_super_admin = is_super_admin($user_id);
	$blocked_users = get_post_meta($group_id,"blocked_users_array",true);
	if (!$is_super_admin && is_array($blocked_users) && in_array($user_id,$blocked_users)) {
		echo '<div class="alert-message error"><i class="icon-cancel"></i><p>'.esc_html__("Sorry, you blocked from this group.","discy").'</p></div>';
	}else {
		$group_moderators = get_post_meta($group_id,"group_moderators",true);
		$group_privacy = get_post_meta($group_id,"group_privacy",true);
		$group_allow_posts = get_post_meta($group_id,"group_allow_posts",true);
		$group_users_array = get_post_meta($group_id,"group_users_array",true);
		$group_invitation = get_post_meta($group_id,"group_invitation",true);
		do_action("wpqa_group_tabs",$group_id,$user_id,$is_super_admin,$post->post_author,$group_moderators);?>
		<section class="content_group row row-warp">
			<div class="col col12">
				<?php $active_rules_groups = discy_options("active_rules_groups");
				if ($active_rules_groups == "on") {
					$group_rules = get_post_meta($group_id,"group_rules",true);
					if ($group_rules != "") {?>
						<div class="page-section page-section-rules">
							<h2 class="post-title-2"><i class="icon-megaphone"></i><?php esc_html_e("Group rules","discy")?></h2>
							<div class="less_group_rules"><?php echo discy_excerpt_any(20,do_shortcode(wpqa_kses_stip(nl2br(stripslashes($group_rules)),"yes","yes")),'<a class="read_more_rules btn btn__link" href="#">'.esc_html__("See more","discy").'</a>','words')?></div>
							<div class="discy_hide full_group_rules"><?php echo do_shortcode(wpqa_kses_stip(nl2br(stripslashes($group_rules)),"yes","yes")).'<a class="read_less_rules" href="#">'.esc_html__("See less","discy").'</a>'?></div>
						</div>
					<?php }
				}
				do_action("wpqa_group_invite_users",$group_id,$is_super_admin,$post->post_author,$user_id,$group_invitation,$group_moderators,$group_users_array);
				if (is_user_logged_in() && ($is_super_admin || $post->post_author == $user_id || (($group_allow_posts == "all" || $group_allow_posts == "admin_moderators") && $user_id > 0 && is_array($group_moderators) && in_array($user_id,$group_moderators)) || ($group_allow_posts == "all" && is_array($group_users_array) && in_array($user_id,$group_users_array)))) {?>
					<!-- Create-posts -->
					<div class="create_group_box">
						<div class="create_group write_comment">
							<div class="content_group_item_header">
								<?php do_action("wpqa_action_avatar_link",array("user_id" => $user_id,"size" => "45"));?>
								<div class="col12">
									<div class="header-info">
										<div class="title">
											<h3>
												<?php $display_name = get_the_author_meta("display_name",$user_id);?>
												<a href="<?php echo wpqa_profile_url($user_id);?>" title="<?php echo esc_attr($display_name);?>"><?php echo esc_html($display_name);?></a>
											</h3>
										</div>
									</div>
								</div>
							</div>
							<?php echo do_shortcode("[wpqa_group_posts group_id='".$group_id."']")?>
						</div>
					</div>
				<?php }?>
				<div>
					<?php if ($group_privacy == "public" || ($group_privacy == "private" && ($is_super_admin || (is_array($group_users_array) && in_array($user_id,$group_users_array))))) :
						$paged = discy_paged();
						$k_ad_p = -1;
						$sticky_posts = get_post_meta($group_id,"sticky_posts",true);
						if (is_array($sticky_posts) && !empty($sticky_posts)) {
							$sticky_data = array("nopaging" => true,"post_type" => "posts","ignore_sticky_posts" => 1,"post__in" => $sticky_posts);
							$query_wp_sticky = new WP_Query($sticky_data);
							if ($query_wp_sticky->have_posts()) :
								$sticky_available = true;
								while ($query_wp_sticky->have_posts()) : $query_wp_sticky->the_post();
									$k_ad_p++;
									$post_data = $post;
									include locate_template("theme-parts/content-group.php");
								endwhile;
							endif;
						}
						$post__not_in = (is_array($sticky_posts) && !empty($sticky_posts)?array("post__not_in" => $sticky_posts):array());
						$array_data = array_merge($post__not_in,array("post_type" => "posts","paged" => $paged,"ignore_sticky_posts" => 1,"meta_query" => array(array("type" => "numeric","key" => "group_id","value" => (int)$group_id,"compare" => "="))));
						$query_wp = new WP_Query($array_data);
						if ($query_wp->have_posts()) :
							while ($query_wp->have_posts()) : $query_wp->the_post();
								$k_ad_p++;
								$post_data = $post;
								include locate_template("theme-parts/content-group.php");
							endwhile;
						elseif (!isset($sticky_available)) :
							echo '<div class="alert-message warning"><i class="icon-flag"></i><p>'.esc_html__("There are no posts yet.","discy").'</p></div>';
						endif;
					else:
						echo '<div class="alert-message warning"><i class="icon-flag"></i><p>'.esc_html__("Sorry, this is a private group.","discy").'</p></div>';
					endif;?>
				</div>
				<?php if (has_wpqa()) {
					wpqa_load_pagination(array(
						"post_pagination" => "pagination",
						"wpqa_query" => (isset($query_wp)?$query_wp:null),
					));
				}
				wp_reset_postdata();?>
			</div>
		</section><!-- End section -->
	<?php }
get_footer();?>