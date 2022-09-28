<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;
$prefix             = Constants::$theme_prefix;
$thumb_size         = "{$prefix}-size3";
$img                = Helper::generate_thumbnail_image( get_post(), $thumb_size, true );
$post_class         = $img ? 'blog-box-layout4 post-has-image' : 'blog-box-layout4';
$item_content_class = $img ? 'item-content post-has-image' : 'item-content';

$optimax_comments_number = number_format_i18n( get_comments_number() );
$optimax_comments_html = $optimax_comments_number == 1 ? esc_html__( 'Comment' , 'optimax' ) : esc_html__( 'Comments' , 'optimax' );
$optimax_comments_html = '<span class="comment-number">'. $optimax_comments_number .'</span> '. $optimax_comments_html;

?>
<div id="post-<?php the_ID(); ?>" <?php post_class( $post_class ) ?> >
   <?php if ($img): ?>
     <div class="item-img">
		<a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url( $img ); ?>" alt="<?php the_title_attribute() ; ?>"></a>
    </div>
   <?php endif ?>
    <div class="<?php echo esc_attr( $item_content_class ); ?>">
      <?php // blog author name + date field ?>
      <?php if ( RDTheme::$options['blog_author_name'] || RDTheme::$options['blog_date'] || RDTheme::$options['blog_cats'] || RDTheme::$options['blog_comment_num'] ) { ?>
      <ul class="entry-meta">
        <?php if ( RDTheme::$options['blog_date'] ) { ?>
			<li><i class="far fa-clock"></i><?php 
            $unixtimestamp =  strtotime( get_the_date() );
            echo date_i18n( get_option( 'date_format' ), $unixtimestamp ); ?></li>
		<?php } if ( RDTheme::$options['blog_author_name']) {  ?>
			<li><i class="fas fa-user"></i> <span class="bytag"><?php esc_html_e( 'by ', 'optimax' );?></span><?php the_author_posts_link(); ?> </li>
		<?php } if ( RDTheme::$options['blog_cats']) {  ?>
			<li><i class="fas fa-folder-open"></i><?php the_category( ', ' ) ?></li>
		<?php } if ( RDTheme::$options['blog_comment_num']) {  ?>
			<li><i class="far fa-comment-dots"></i><a href="<?php echo get_comments_link( get_the_ID() ); ?>"><?php echo wp_kses( $optimax_comments_html , 'allow_link' ); ?></a></li>
		<?php } ?>
      </ul>
    <?php } ?>
      <h3 class="item-title"><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></h3>
      <?php the_excerpt(); ?>
        <a href="<?php the_permalink() ?>" class="btn-fill-accent-2 gradient-accent-2 rtel-button-1 style3  d-inline-flex align-items-center"><?php esc_html_e( 'READ MORE', 'optimax' );?><i class="fas fa-long-arrow-alt-right"></i></a>
    </div>
</div>

