<!-- post -->    
<article id="post-<?php the_ID(); ?>" <?php post_class( 'ut-blog-mixed-large-article clearfix' ); ?> >
    
    <div class="ut-blog-mixed-large-article-large clearfix">
    
        <?php $grid = !ut_blog_has_sidebar() ? 'grid-15 tablet-grid-20 hide-on-mobile' : 'grid-25 tablet-grid-25 hide-on-mobile' ; ?>

        <!-- entry-meta -->
        <div class="<?php echo $grid; ?>">

            <div class="entry-meta">

                <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>

                <a href="<?php echo get_month_link( get_the_time('Y'), get_the_time('m') ); ?>">               

                    <div class="date-format">
                        <span class="day"><?php the_time('d'); ?></span>
                        <span class="month"><?php the_time('M'); ?> <?php the_time('Y'); ?></span>
                    </div>

                </a>

                <span class="ut-sticky"><?php echo unite_get_blog_icon( 'sticky' ); ?></span>
                <span class="author-links"><?php echo unite_get_blog_icon( 'author', $post->post_author ); ?><?php the_author_posts_link(); ?></span>
                <?php
                    /* translators: used between list items, there is a space after the comma */
                    $categories_list = get_the_category_list( esc_html__( ', ', 'unitedthemes' ) );
                    if ( $categories_list && unitedthemes_categorized_blog() ) :
                ?>
                <span class="cat-links"><?php echo unite_get_blog_icon( 'category' ); ?><?php printf( esc_html__( '%1$s', 'unitedthemes' ), $categories_list ); ?></span>
                <?php endif; // End if categories ?>      
                <?php endif; // End if 'post' == get_post_type() ?>
                <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
                <span class="comments-link"><?php echo unite_get_blog_icon( 'comments' ); ?><?php comments_popup_link(esc_html__('No Comments', 'unitedthemes'), esc_html__('1 Comment', 'unitedthemes'), esc_html__('% Comments', 'unitedthemes')); ?></span>
                <?php endif; ?>
                <?php if ( !is_single() ) : ?>
                <span class="permalink"><?php echo unite_get_blog_icon( 'permalink' ); ?><a title="<?php printf(esc_html__('Permanent Link to %s', 'unitedthemes'), get_the_title()); ?>" href="<?php the_permalink(); ?>"><?php esc_html_e('Permalink', 'unitedthemes') ?></a></span>
                <?php endif; ?>

            </div>       

        </div><!-- close entry-meta -->

        <?php $grid = !ut_blog_has_sidebar() ? 'grid-85 tablet-grid-80 mobile-grid-100' : 'grid-75 tablet-grid-75 mobile-grid-100' ; ?>

        <div class="<?php echo $grid; ?>">

            <!-- entry-header -->    
            <header class="entry-header">

                <h2 data-responsive-font="grid_blog_title" class="entry-title element-with-custom-line-height"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf(esc_html__('Permanent Link to %s', 'unitedthemes'), get_the_title()); ?>"> <?php the_title(); ?></a></h2>

                <div class="entry-meta hide-on-desktop hide-on-tablet">

                    <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
                    <span class="ut-sticky"><?php echo unite_get_blog_icon( 'sticky' ); ?></span>
                    <span class="author-links"><?php echo unite_get_blog_icon( 'author', $post->post_author ); ?><?php the_author_posts_link(); ?></span>
                    <span class="date-format"><i class="BklynIcons-Clock-1"></i><span><?php the_time( get_option('date_format') ); ?></span></span>
                    <?php endif; // End if 'post' == get_post_type() ?>
                    <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
                    <span class="comments-link"><?php echo unite_get_blog_icon( 'comments' ); ?><?php comments_popup_link(esc_html__('No Comments', 'unitedthemes'), esc_html__('1 Comment', 'unitedthemes'), esc_html__('% Comments', 'unitedthemes')); ?></span>
                    <?php endif; ?>

                </div>

            </header>

            <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>

                <?php 

                /* featured image */ 
                $fullsize   = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); 
                $fullsizeID = ut_get_attachment_id_from_url( $fullsize );

                $caption = get_post( $fullsizeID )->post_excerpt; ?>

                <!-- ut-post-thumbnail -->
                <div class="ut-post-thumbnail">

                    <div class="entry-thumbnail">

                        <a title="<?php printf(esc_html__('Permanent Link to %s', 'unitedthemes'), get_the_title()); ?>" href="<?php the_permalink(); ?>">

                            <figure class="ut-post-thumbnail-caption-wrap">

	                            <?php echo UT_Adaptive_Image::create( '', array( '1288', '724' ), true, 'landscape' ); ?>

		                        <?php if ( $caption ) : ?>

                                    <figcaption class="ut-post-thumbnail-caption"><?php echo $caption; ?></figcaption>

		                        <?php endif; ?>

                            </figure>

                       </a>

                    </div>

                </div><!-- close ut-post-thumbnail -->                        

            <?php endif; ?>

            <!-- entry-content -->
            <div class="entry-content clearfix">

                <?php if( has_excerpt() ) : ?>
            
                    <?php echo apply_filters( 'the_content', $post->post_excerpt ); ?>
                    <p><a class="more-link" href="<?php echo get_the_permalink(); ?>"><span class="more-link"><?php esc_html_e( 'Read more', 'unitedthemes' ); ?><?php echo ut_custom_read_more_icon(); ?></span></a></p>
                    
                <?php else : ?>

                    <?php the_content( '<span class="more-link">' . esc_html__( 'Read more', 'unitedthemes' ) . ut_custom_read_more_icon() . '</span>' ); ?>            

                <?php endif; ?>

                <?php ut_link_pages( array( 'before' => '<div class="page-links">', 'after' => '</div>' ) ); ?>

            </div><!-- close entry-content -->

        </div>
         
    </div>
    
</article><!-- close post --> 