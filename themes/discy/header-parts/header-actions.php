<?php $show_header_menu = apply_filters("discy_show_header_menu",true,$user_login_links,(isset($first_one)?$first_one:""),$user_id);
if ($show_header_menu == true && isset($user_login_links) && is_array($user_login_links) && !empty($user_login_links)) {
	if (isset($first_one) && $first_one !== "") {
		$ask_question_to_users = discy_options("ask_question_to_users");?>
		<i class="<?php echo apply_filters("discy_profile_menu_icon","icon-down-open-mini")?>"></i>
		<ul>
			<?php foreach ($user_login_links as $key => $value) {
				do_action("discy_action_user_login_links",$user_login_links,$key,$value);
				if (has_wpqa() && $key == "question" && isset($user_login_links["question"]["value"]) && $user_login_links["question"]["value"] == "question") {?>
					<li><a class="wpqa-question" href="<?php echo esc_url(wpqa_add_question_permalink())?>"><i class="icon-help"></i><?php echo esc_html_e("Ask A Question","discy")?></a></li>
				<?php }else if (has_wpqa() && $key == "post" && isset($user_login_links["post"]["value"]) && $user_login_links["post"]["value"] == "post") {?>
					<li><a class="wpqa-post" href="<?php echo esc_url(wpqa_add_post_permalink())?>"><i class="icon-doc-text"></i><?php echo esc_html_e("Post An Article","discy")?></a></li>
				<?php }else if (has_wpqa() && $key == "group" && isset($user_login_links["group"]["value"]) && $user_login_links["group"]["value"] == "group") {?>
					<li><a href="<?php echo esc_url(wpqa_add_group_permalink())?>"><i class="icon-network"></i><?php echo esc_html_e("Create A Group","discy")?></a></li>
				<?php }else if ($key == "user-profile" && isset($user_login_links["user-profile"]["value"]) && $user_login_links["user-profile"]["value"] == "user-profile") {?>
					<li><a href="<?php echo get_author_posts_url($user_id)?>"><i class="icon-user"></i><?php echo esc_html_e("User Profile","discy")?></a></li>
				<?php }else if ($key == "edit-profile" && isset($user_login_links["edit-profile"]["value"]) && $user_login_links["edit-profile"]["value"] == "edit-profile") {?>
					<li><a href="<?php do_action("wpqa_get_profile",$user_id,"edit")?>"><i class="icon-pencil"></i><?php echo esc_html_e("Edit Profile","discy")?></a></li>
				<?php }else if ($ask_question_to_users == "on" && $key == "asked-questions" && isset($user_login_links["asked-questions"]["value"]) && $user_login_links["asked-questions"]["value"] == "asked-questions") {?>
					<li><a href="<?php do_action("wpqa_get_profile",$user_id,"asked_questions")?>"><i class="icon-sound"></i><?php esc_html_e("Asked Questions","discy")?></a></li>
				<?php }else if ($key == "best-answers" && isset($user_login_links["best-answers"]["value"]) && $user_login_links["best-answers"]["value"] == "best-answers") {?>
					<li><a href="<?php do_action("wpqa_get_profile",$user_id,"best_answers")?>"><i class="icon-graduation-cap"></i><?php esc_html_e("Best Answers","discy")?></a></li>
				<?php }else if ($key == "points" && isset($user_login_links["points"]["value"]) && $user_login_links["points"]["value"] == "points" && $active_points == "on") {?>
					<li><a href="<?php do_action("wpqa_get_profile",$user_id,"points")?>"><i class="icon-bucket"></i><?php esc_html_e("Points","discy")?></a></li>
				<?php }else if ($active_activity_log == "on" && $key == "activities" && isset($user_login_links["activities"]["value"]) && $user_login_links["activities"]["value"] == "activities") {?>
					<li><a href="<?php do_action("wpqa_get_profile",$user_id,"activities")?>"><i class="icon-chart-line"></i><?php esc_html_e("Activity Log","discy")?></a></li>
				<?php }else if ($active_referral == "on" && $key == "referrals" && isset($user_login_links["referrals"]["value"]) && $user_login_links["referrals"]["value"] == "referrals") {?>
					<li><a href="<?php do_action("wpqa_get_profile",$user_id,"referrals")?>"><i class="icon-user-add"></i><?php esc_html_e("Referrals","discy")?></a></li>
				<?php }else if ($active_message == "on" && $key == "messages" && isset($user_login_links["messages"]["value"]) && $user_login_links["messages"]["value"] == "messages") {?>
					<li>
						<a href="<?php do_action("wpqa_get_profile",$user_id,"messages")?>">
							<?php $num_message = (isset($num_message) && $num_message != "" && $num_message > 0?($num_message <= 99?$num_message:"99+"):"");
							echo ($num_message != ""?'<span class="notifications-number">'.wpqa_count_number($num_message).'</span>':'')?>
							<i class="icon-mail"></i><?php esc_html_e("Messages","discy")?>
						</a>
					</li>
				<?php }else if ($key == "log-out" && isset($user_login_links["log-out"]["value"]) && $user_login_links["log-out"]["value"] == "log-out") {?>
					<li><a href="<?php do_action("wpqa_action_get_logout")?>"><i class="icon-logout"></i><?php esc_html_e("Log out","discy")?></a></li>
				<?php }else if ($key == "questions" && isset($user_login_links["questions"]["value"]) && $user_login_links["questions"]["value"] == "questions") {?>
					<li><a href="<?php do_action("wpqa_get_profile",$user_id,"questions")?>"><i class="icon-book-open"></i><?php esc_html_e("Questions","discy")?></a></li>
				<?php }else if ($key == "answers" && isset($user_login_links["answers"]["value"]) && $user_login_links["answers"]["value"] == "answers") {?>
					<li><a href="<?php do_action("wpqa_get_profile",$user_id,"answers")?>"><i class="icon-comment"></i><?php esc_html_e("Answers","discy")?></a></li>
				<?php }else if ($key == "polls" && isset($user_login_links["polls"]["value"]) && $user_login_links["polls"]["value"] == "polls") {?>
					<li><a href="<?php do_action("wpqa_get_profile",$user_id,"polls")?>"><i class="icon-megaphone"></i><?php esc_html_e("Polls","discy")?></a></li>
				<?php }else if ($key == "followers" && isset($user_login_links["followers"]["value"]) && $user_login_links["followers"]["value"] == "followers") {?>
					<li><a href="<?php do_action("wpqa_get_profile",$user_id,"followers")?>"><i class="icon-users"></i><?php esc_html_e("Followers","discy")?></a></li>
				<?php }else if ($key == "following" && isset($user_login_links["following"]["value"]) && $user_login_links["following"]["value"] == "following") {?>
					<li><a href="<?php do_action("wpqa_get_profile",$user_id,"following")?>"><i class="icon-user-add"></i><?php esc_html_e("Following","discy")?></a></li>
				<?php }else if ($key == "blocking" && isset($user_login_links["blocking"]["value"]) && $user_login_links["blocking"]["value"] == "blocking") {?>
					<li><a href="<?php do_action("wpqa_get_profile",$user_id,"blocking")?>"><i class="icon-block"></i><?php esc_html_e("Blocking users","discy")?></a></li>
				<?php }else if ($key == "followed" && isset($user_login_links["followed"]["value"]) && $user_login_links["followed"]["value"] == "followed") {?>
					<li><a href="<?php do_action("wpqa_get_profile",$user_id,"followed")?>"><i class="icon-plus-circled"></i><?php esc_html_e("Followed","discy")?></a></li>
				<?php }else if ($key == "favorites" && isset($user_login_links["favorites"]["value"]) && $user_login_links["favorites"]["value"] == "favorites") {?>
					<li><a href="<?php do_action("wpqa_get_profile",$user_id,"favorites")?>"><i class="icon-star"></i><?php esc_html_e("Favorites","discy")?></a></li>
				<?php }else if ($key == "posts" && isset($user_login_links["posts"]["value"]) && $user_login_links["posts"]["value"] == "posts") {?>
					<li><a href="<?php do_action("wpqa_get_profile",$user_id,"posts")?>"><i class="icon-newspaper"></i><?php esc_html_e("Posts","discy")?></a></li>
				<?php }else if ($key == "comments" && isset($user_login_links["comments"]["value"]) && $user_login_links["comments"]["value"] == "comments") {?>
					<li><a href="<?php do_action("wpqa_get_profile",$user_id,"comments")?>"><i class="icon-chat"></i><?php esc_html_e("Comments","discy")?></a></li>
				<?php }else if (isset($user_moderator) && ($is_super_admin || ($user_moderator == "on" && $active_moderators == "on")) && $key == "pending-questions" && isset($user_login_links["pending-questions"]["value"]) && $user_login_links["pending-questions"]["value"] == "pending-questions") {?>
					<li>
						<a href="<?php do_action("wpqa_get_profile",$user_id,"pending_questions")?>">
							<?php $num_pending_questions = (isset($num_pending_questions) && $num_pending_questions != "" && $num_pending_questions > 0?($num_pending_questions <= 99?$num_pending_questions:"99+"):"");
							echo ($num_pending_questions != ""?'<span class="notifications-number">'.wpqa_count_number($num_pending_questions).'</span>':'')?>
							<i class="icon-book-open"></i><?php esc_html_e("Pending Questions","discy")?>
						</a>
					</li>
				<?php }else if (isset($user_moderator) && ($is_super_admin || ($user_moderator == "on" && $active_moderators == "on")) && $key == "pending-posts" && isset($user_login_links["pending-posts"]["value"]) && $user_login_links["pending-posts"]["value"] == "pending-posts") {?>
					<li>
						<a href="<?php do_action("wpqa_get_profile",$user_id,"pending_posts")?>">
							<?php $num_pending_posts = (isset($num_pending_posts) && $num_pending_posts != "" && $num_pending_posts > 0?($num_pending_posts <= 99?$num_pending_posts:"99+"):"");
							echo ($num_pending_posts != ""?'<span class="notifications-number">'.wpqa_count_number($num_pending_posts).'</span>':'')?>
							<i class="icon-newspaper"></i><?php esc_html_e("Pending Posts","discy")?>
						</a>
					</li>
				<?php }else if ($active_notifications == "on" && $key == "notifications" && isset($user_login_links["notifications"]["value"]) && $user_login_links["notifications"]["value"] == "notifications") {?>
					<li>
						<a href="<?php do_action("wpqa_get_profile",$user_id,"notifications")?>">
							<?php $num_notification = (isset($num_notification) && $num_notification != "" && $num_notification > 0?($num_notification <= 99?$num_notification:"99+"):"");
							echo ($num_notification != ""?'<span class="notifications-number">'.wpqa_count_number($num_notification).'</span>':'')?>
							<i class="icon-bell"></i><?php esc_html_e("Notifications","discy")?>
						</a>
					</li>
				<?php }else if ($key == "paid-questions" && isset($user_login_links["paid-questions"]["value"]) && $user_login_links["paid-questions"]["value"] == "paid-questions") {?>
					<li><a href="<?php do_action("wpqa_get_profile",$user_id,"paid_questions")?>"><i class="icon-help-circled"></i><?php esc_html_e("Paid Questions","discy")?></a></li>
				<?php }else if ($key == "followers-questions" && isset($user_login_links["followers-questions"]["value"]) && $user_login_links["followers-questions"]["value"] == "followers-questions") {?>
					<li><a href="<?php do_action("wpqa_get_profile",$user_id,"followers_questions")?>"><i class="icon-book-open"></i><?php esc_html_e("Followers Questions","discy")?></a></li>
				<?php }else if ($key == "followers-answers" && isset($user_login_links["followers-answers"]["value"]) && $user_login_links["followers-answers"]["value"] == "followers-answers") {?>
					<li><a href="<?php do_action("wpqa_get_profile",$user_id,"followers_answers")?>"><i class="icon-comment"></i><?php esc_html_e("Followers Answers","discy")?></a></li>
				<?php }else if ($key == "followers-posts" && isset($user_login_links["followers-posts"]["value"]) && $user_login_links["followers-posts"]["value"] == "followers-posts") {?>
					<li><a href="<?php do_action("wpqa_get_profile",$user_id,"followers_posts")?>"><i class="icon-newspaper"></i><?php esc_html_e("Followers Posts","discy")?></a></li>
				<?php }else if ($key == "followers-comments" && isset($user_login_links["followers-comments"]["value"]) && $user_login_links["followers-comments"]["value"] == "followers-comments") {?>
					<li><a href="<?php do_action("wpqa_get_profile",$user_id,"followers_comments")?>"><i class="icon-chat"></i><?php esc_html_e("Followers Comments","discy")?></a></li>
				<?php }else if (has_wpqa() && $subscriptions_payment == "on" && $key == "subscriptions" && isset($user_login_links["subscriptions"]["value"]) && $user_login_links["subscriptions"]["value"] == "subscriptions") {?>
					<li><a href="<?php echo wpqa_subscriptions_permalink()?>"><i class="icon-sound"></i><?php esc_html_e("Subscriptions","discy")?></a></li>
				<?php }else if ($key == "groups" && isset($user_login_links["groups"]["value"]) && $user_login_links["groups"]["value"] == "groups") {?>
					<li><a href="<?php do_action("wpqa_get_profile",$user_id,"groups")?>"><i class="icon-network"></i><?php esc_html_e("Groups","discy")?></a></li>
				<?php }else if ($key == "joined_groups" && isset($user_login_links["joined_groups"]["value"]) && $user_login_links["joined_groups"]["value"] == "joined_groups") {?>
					<li><a href="<?php do_action("wpqa_get_profile",$user_id,"joined_groups")?>"><i class="icon-users"></i><?php esc_html_e("Joined Groups","discy")?></a></li>
				<?php }else if ($key == "managed_groups" && isset($user_login_links["managed_groups"]["value"]) && $user_login_links["managed_groups"]["value"] == "managed_groups") {?>
					<li><a href="<?php do_action("wpqa_get_profile",$user_id,"managed_groups")?>"><i class="icon-cog"></i><?php esc_html_e("Managed Groups","discy")?></a></li>
				<?php }
			}?>
		</ul>
	<?php }
}?>