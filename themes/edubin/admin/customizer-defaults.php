<?php
/**
 * Set our Customizer default options
 */
if (!function_exists('edubin_generate_defaults')) {
    function edubin_generate_defaults()
    {
        $customizer_defaults = array(

            // Global
            'logo_size'                                 => '180',
            'sticky_logo'                               => '',
            'logo_top_space'                            => '',
            'logo_top_space_mobile'                     => '',
            'logo_bottom_space'                         => '',
            'logo_bottom_space_mobile'                  => '',
            'mobile_logo'                               => '',
            'mobile_logo_size'                          => '50',
            'mobile_logo_screen_width'                  => '480',
            'preloader_show'                            => 1,
            'preloader_styles'                          => 'preloader_1',
            'preloader_image_url'                       => '',
            'breadcrumb_show'                           => 1,
            'shortcode_breadcrumb'                      => '',
            'back_to_top_show'                          => 1,
            'rtl_enable'                                => 0,
            'rtl_header_logo_align'                     => 0,
            'rtl_header_menu_align'                     => 0,
            'rtl_header_cart_align'                     => 0,
            'pages_featured_image'                      => true,
            'load_bootstrap_css'                        => true,
            'load_bootstrap_rtl_css'                    => true,
            'load_fontawesome_css'                      => true,
            'load_owl_carousel_css'                     => true,
            'load_animate_css'                          => true,
            'load_bootstrap_js'                         => true,
            'load_owl_carousel_js'                      => true,

            'edubin_get_elementor_header'               => '',
            'edubin_header_type'                        => 'edubin_theme_header',

            'header_top_show'                           => 0,
            'top_email'                                 => '',
            'email_small_device'                        => false,
            'phone_small_device'                        => false,
            'message_small_device'                      => false,
            'top_phone'                                 => '',
            'top_phone_link'                            => '',
            'top_massage'                               => '',
            'top_massage_area_width'                    => '300',
            'top_massage_animation_show'                => 1,
            'top_widget_position'                       => 'before_social',
            'login_reg_show'                            => 1,
            'custom_logout_link'                        => '',
            'custom_login_link'                         => '',
            'custom_register_link'                      => '',
            'header_top_text_color'                     => '',
            'header_top_link_color'                     => '',
            'header_top_bg_color'                       => '',
            'profile_show'                              => 1,
            'custom_profile_page_link'                  => get_edit_user_link(),
            'top_login_button_text'                     => '',
            'top_register_button_text'                  => '',
            'top_logout_button_text'                    => '',
            'top_profile_button_text'                   => '',
            'follow_us_show'                            => 1,
            'follow_us_text'                            => '',

            'header_variations'                         => 'header_v2',
            'sticky_header_enable'                      => 1,
            'top_search_enable'                         => 1,
            'top_cart_enable'                           => 0,
            'sub_menu_right_align'                      => 1,
            'sub_menu_width'                            => '232',
            'home_menu_acive_color'                     => 0,
            'header_page_title_align'                   => 'left',
            'page_header_height'                        => '',
            'page_header_height_small_screen'           => '',
            'page_header_height_small_screen_width'     => '480',
            'header_title_font_size'                    => '',
            'header_title_tag'                          => 'h2',
            'header_title_font_size_small_device'       => '',
            'header_title_font_size_small_device_width' => '480',
            'page_top_bottom_space'                     => '80',
            'page_top_bottom_space_small'               => '70',
            'page_top_bottom_space_screen_width'        => '480',
            'cart_serach_top_space'                     => '',
            'cart_serach_bottom_space'                  => '',

            'social_newtab'                             => 0,
            'social_urls'                               => '',
            'social_alignment'                          => 'alignright',
            'social_url_icons'                          => '',
            'search_menu_icon'                          => 0,

            // General
            'primary_color'                             => '',
            'secondary_color'                           => '',
            'content_color'                             => '',
            'tertiary_color'                            => '',
            'link_color'                                => '',
            'link_hover_color'                          => '',
            'btn_color'                                 => '',
            'btn_hover_color'                           => '',
            'btn_text_color'                            => '',
            'btn_text_hover_color'                      => '',
            'menu_text_color'                           => '',
            'menu_hover_color'                          => '',
            'menu_active_color'                         => '',
            'sub_menu_text_color'                       => '',
            'sub_menu_arrow_color'                      => '',
            'sub_menu_border_color'                     => '',
            'sub_menu_bg_color'                         => '',
            'mobile_menu_icon_color'                    => '',
            'preloader_color_primary'                   => '',
            'preloader_color_secondary'                 => '',
            'preloader_bg_color'                        => '#ffffff',
            'bakc_to_top_icon_color'                    => '',
            'bakc_to_top_bg_color'                      => '',
            'header_banner_overlay_color'               => '',
            'header_title_color'                        => '',
            'breadcrumb_text_color'                     => '',
            'header_menu_bg_color'                      => '',
            'header_menu_sticky_bg_color'               => '',
            'search_popup_bg_color'                     => '',
            'placeholder_color'                         => '',

            'body_fonts'                                => '',
            'edubin_body_font_size'                     => '16',
            'edubin_body_line_height'                   => '26',
            'headings_fonts'                            => '',
            'menu_font'                                 => '',

            // Typography
            'edubin_body_text_font'                     => json_encode(
                array(
                    'font'       => 'Roboto',
                    'boldweight' => 'normal',
                    'category'   => 'sans-serif',
                )
            ),
            'edubin_heading_font'                       => json_encode(
                array(
                    'font'       => 'Montserrat',
                    'boldweight' => '700',
                    'category'   => 'sans-serif',
                )
            ),

            'edubin_menu_text_font'                     => json_encode(
                array(
                    'font'       => 'Roboto',
                    'boldweight' => '600',
                    'category'   => 'sans-serif',
                )
            ),

            'edubin_sub_menu_text_font'                 => json_encode(
                array(
                    'font'       => 'Roboto',
                    'boldweight' => '500',
                    'category'   => 'sans-serif',
                )
            ),

            'edubin_menu_top_space'                     => '',
            'edubin_menu_button_space'                  => '',
            'edubin_menu_left_space'                    => '',
            'edubin_menu_right_space'                   => '',
            'edubin_submenu_space'                      => '',
            //Blog
            'blog_sidebar'                              => 'alignright',
            'blog_author_show'                          => 1,
            'blog_date_show'                            => 1,
            'blog_category_show'                        => 0,
            'blog_comment_show'                         => 1,
            'blog_view_show'                            => 0,
            'page_header_show'                          => true,

            'blog_single_sidebar'                       => 'alignright',
            'blog_single_author_show'                   => 1,
            'blog_single_date_show'                     => 1,
            'blog_single_category_show'                 => 0,
            'blog_single_comment_show'                  => 1,
            'blog_single_view_show'                     => 0,
            'blog_single_tags_show'                     => 1,

            // The Event Calendar
            'tbe_price'                                 => 1,
            'tbe_archive_meta'                          => 1,
            'tbe_archive_word_hide'                     => 0,
            'edubin_tribe_events_layout'                => 'layout_1',
            'tbe_event_countdown'                       => 1,
            'tbe_event_maps'                            => 1,
            'tbe_event_cost'                            => 1,
            // 'tbe_event_date'                            => 1,
            'tbe_start_time'                            => 1,
            'tbe_end_time'                              => 1,
            'tbe_website'                               => 1,
            'tbe_phone'                                 => 1,
            'tbe_email'                                 => 1,
            'tbe_organizer_ids'                         => 1,
            'tbe_location'                              => 1,
            'tbe_content_before_massage'                => 1,
            'tbe_content_after_massage'                 => 1,

            // WooCommerce
            'edubin_wc_sidebar'                         => 'sidebarnone',
            'woo_review_tab_show'                       => 1,
            'woo_review_tab_login_user_show'            => 1,
            'woo_sidebar_width'                         => 'sidebar_big',

            // Event
            'event_list_style'                          => 1,

            // 404
            'error_404_img'                             => '',
            'error_404_heading'                         => '404 ERROR!',
            'error_404_text'                            => "Oops! The page you are looking for does not exist.",
            'error_404_link_text'                       => "Go home",

            // Learnpress
            'lp_header_top'                             => false,
            'lp_course_archive_style'                   => '1',
            'lp_course_archive_clm'                     => '4',
            'lp_price_show'                             => true,
            'lp_full_price_show'                        => false,
            'lp_review_on_off'                          => true,
            'lp_review_text_on_off'                     => true,
            'lp_instructor_img_on_off'                  => true,
            'lp_instructor_name_on_off'                 => true,
            'lp_enroll_on_off'                          => true,
            'lp_cat_show'                               => true,
            'lp_quiz_show'                              => true,
            'lp_lesson_show'                            => false,
            'lp_comment_show'                           => false,
            'lp_archive_image_height'                   => '',
            'lp_archive_image_size'                   => 'medium_large',
            'lp_hide_archive_text'                      => false,
            'lp_single_page_layout'                     => '1',
            'lp_intro_video_position'                   => 'intro_video_content',

            'lp_instructor_single'                      => true,
            'lp_cat_single'                             => false,
            'lp_review_single'                          => true,
            'lp_course_feature_title'                   => '',
            'lp_course_feature_quizzes_show'            => true,
            'lp_course_feature_duration_show'           => true,
            'lp_course_feature_lessons_show'            => true,
            'lp_course_feature_max_students_show'       => false,
            'lp_course_feature_enroll_show'             => true,
            'lp_course_feature_retake_count_show'       => false,
            'lp_course_feature_skill_level_show'        => true,
            'lp_course_feature_language_show'           => true,
            'lp_course_feature_assessments_show'        => false,
            'lp_course_feature_cat_show'                => true,
            'lp_course_feature_quizzes'                 => '',
            'lp_course_feature_duration'                => '',
            'lp_course_feature_lessons'                 => '',
            'lp_course_feature_max_tudents'             => '',
            'lp_course_feature_enroll'                  => '',
            'lp_course_feature_retake_count'            => '',
            'lp_course_feature_skill_level'             => '',
            'lp_course_feature_language'                => '',
            'lp_course_feature_assessments'             => '',
            'lp_course_feature_cat'                     => '',
            'lp_course_price_text'                      => '',
            'lp_course_buy_now_btn'                     => '',
            'lp_course_enroll_btn'                      => '',
            'lp_double_breadcrumbs'                     => false,
            'lp_custom_features_position'               => 'bottom',

            // Larndash
            'ld_course_archive_style'                   => '1',
            'ld_course_archive_clm'                     => '4',
            'ld_related_course_views'                   => true,
            'ld_related_course_price'                   => true,
            'ld_price_show'                             => true,
            'ld_lesson_show'                            => true,
            'ld_lesson_text_show'                       => true,
            'ld_instructor_img_on_off'                  => true,
            'ld_instructor_name_on_off'                 => true,
            'ld_topic_show'                             => false,
            'ld_topic_text_show'                        => true,
            'ld_views_show'                             => false,
            'ld_cat_show'                               => true,
            'ld_comment_show'                           => false,
            'see_more_btn'                              => true,
            'ld_progress_bar_show'                      => true,
            'custom_closed_btn_url'                     => true,
            'ld_see_more_btn_text'                      => '',
            'free_custom_text'                          => '',
            'enrolled_custom_text'                      => '',
            'completed_custom_text'                     => '',
            'ld_intro_video_position'                   => 'intro_video_content',

            'ld_hide_archive_text'                      => false,
            'ld_sidebar_single_show'                    => true,
            'ld_related_course_show'                    => false,
            'ld_related_course_heading'                 => '',
            'ld_custom_placeholder_image'               => '',
            'ld_featured_image'                         => true,

            // Larndash
            'sensei_course_archive_style'                   => '1',
            'sensei_course_archive_clm'                     => '4',
            'sensei_archive_image_size'                     => 'medium_large',
            'sensei_related_course_views'                   => true,
            'sensei_related_course_price'                   => true,
            'sensei_price_show'                             => true,
            'sensei_lesson_show'                            => true,
            'sensei_lesson_text_show'                       => true,
            'sensei_instructor_img_on_off'                  => true,
            'sensei_instructor_name_on_off'                 => true,
            'sensei_topic_show'                             => false,
            'sensei_topic_text_show'                        => true,
            'sensei_views_show'                             => false,
            'sensei_cat_show'                               => true,
            'sensei_comment_show'                           => false,
            'see_more_btn'                              => true,
            'sensei_progress_bar_show'                      => true,
            'custom_closed_btn_url'                     => true,
            'sensei_see_more_btn_text'                      => '',
            'free_custom_text'                          => '',
            'enrolled_custom_text'                      => '',
            'completed_custom_text'                     => '',
            'sensei_intro_video_position'                   => 'intro_video_content',

            'sensei_hide_archive_text'                      => false,
            'sensei_sidebar_single_show'                    => true,
            'sensei_related_course_show'                    => false,
            'sensei_related_course_heading'                 => '',
            'sensei_custom_placeholder_image'               => '',
            'sensei_featured_image'                         => true,

            // Tutor
            'top_course_filter'                         => false,
            'search_filter_plugin'                      => true,
            'search_filter_plugin_shortcode'            => '',
            'course_title_show'                         => true,
            'tutor_login_form_widget_align'             => 'center',
            'tutor_course_filter_per_page'              => '9',
            'tutor_course_filter_column'                => '3',
            'tutor_filter_sidebar_position'             => 'left',
            'tutor_sidebar_filter_show'                 => true,
            'tutor_course_pagination'                   => true,
            'tutor_filter_price_show'                   => true,
            'tutor_filter_custom_price_text'            => '',
            'tutor_course_cat_count'                    => true,
            'tutor_filter_custom_level_text'            => '',
            'tutor_filter_level_show'                   => true,
            'tutor_filter_custom_cat_text'              => '',
            'tutor_filter_category_show'                => true,
            'tutor_filter_custom_topic_text'            => '',
            'tutor_filter_topic_show'                   => true,
            'filter_course_search_show'                 => true,
            'tutor_filter_results_show'                 => false,
            'tutor_filter_select_show'                  => true,
            'tutor_hide_archive_text'                   => false,
            'tutor_course_archive_style'                => '3',
            'tutor_single_page_layout'                  => '2',
            'tutor_course_fix_img_height'               => '230',
            'tutor_course_fix_title_height'             => '55',
            'tutor_settings_color'                      => 0,
            'tutor_hide_profile_page_header'            => 0,
            'tutor_instructor_img_on_off'               => true,
            'tutor_instructor_name_on_off'              => true,
            'tutor_price_show'                          => true,
            'tutor_cat_show'                            => false,
            'tutor_enroll_show'                            => true,
            'tutor_lesson_show'                            => true,
            'tutor_lesson_text'                            => 'Lesson',
            'tutor_lessons_text'                            => 'Lessons',
            'tutor_duration_show'                            => false,
            // Zoom Meeting
            'edubin_zm_archive_hotted'                  => true,
            'edubin_zm_archive_start_date'              => true,
            'edubin_zm_archive_time_zone'               => true,
            'edubin_zm_excerpt'                         => false,

            'zoom_meeting_single_title_show'            => true,

            // Footer
            'edubin_get_elementor_footer'               => '',
            'edubin_footer_type'                        => 'edubin_theme_footer',
            'footer_variations'                         => '1',
            'footer_text_color'                         => '',
            'footer_link_color'                         => '',
            'footer_btn_submit_color'                   => '',
            'footer_bg_color'                           => '',
            'footer_widget_area_column'                 => '3_3_3_3',
            //Copyright
            'copyright_show'                            => true,
            'copyright_text'                            => '&copy; 2020 <a href="' . esc_url('https://thepixelcurve.com') . '">ThePixelcurve</a>. All rights reserved.',
            'copyright_text_color'                      => '',
            'copyright_link_color'                      => '',
            'copyright_bg_color'                        => '',
            'show_copyright_menu'                       => false,

        );

        return apply_filters('edubin_customizer_defaults', $customizer_defaults);
    }
}
