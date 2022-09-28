<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;

use radiustheme\Optimax_Core\Author_Social;
use radiustheme\Optimax_Core\Socials;

$item_content_class = has_post_thumbnail() ? 'item-content post-has-image' : 'item-content';
$post_has_category  =  RDTheme::$options['post_cats'] && has_category() ;
if ($post_has_category)  {
  $item_content_class .= " post-has-category";
}

$optimax_comments_number = number_format_i18n( get_comments_number() );
$optimax_comments_html = $optimax_comments_number == 1 ? esc_html__( 'Comment' , 'optimax' ) : esc_html__( 'Comments' , 'optimax' );
$optimax_comments_html = '<span class="comment-number">'. $optimax_comments_number .'</span> '. $optimax_comments_html;

?>
<?php if ( has_post_thumbnail() ):?>
	<div class="post-img">
		<img src="<?php echo esc_url(get_the_post_thumbnail_url()) ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
	</div>
<?php endif; ?>

<div class="<?php echo esc_attr( $item_content_class ); ?> clearfix">
	<?php if ( RDTheme::$has_banner == 0 ) { ?>
		<h1 class="item-title"><?php echo esc_html( the_title() ); ?></h1>
	<?php } ?>
  <div class="entry-content">
	<?php if ( RDTheme::$options['post_date'] || RDTheme::$options['post_author_name'] || RDTheme::$options['post_cats'] || RDTheme::$options['post_comment_num'] ) { ?>
    <ul class="entry-meta">
      <?php if ( RDTheme::$options['post_date'] ) { ?>
        <li><i class="far fa-clock"></i><?php $unixtimestamp =  strtotime( get_the_date() );
		echo date_i18n( get_option( 'date_format' ), $unixtimestamp );?></li>
      <?php } ?>
	  
	  <?php if ( RDTheme::$options['post_author_name']) {  ?>
        <li><i class="fas fa-user"></i><span class="bytag"><?php esc_html_e( 'by ', 'optimax' );?></span> <?php the_author_posts_link(); ?> </li>
      <?php } ?>
	  
	  <?php if ( RDTheme::$options['post_cats']) {  ?>
        <li><i class="fas fa-folder-open"></i><?php the_category( ', ' ) ?> </li>
      <?php } ?>
	  
	  <?php if ( RDTheme::$options['post_comment_num'] ) { ?>
		<li><i class="far fa-comment-dots"></i><a href="<?php echo get_comments_link( get_the_ID() ); ?>"><?php echo wp_kses( $optimax_comments_html , 'allow_link' ); ?></a></li>
	  <?php } ?>
    </ul>
	<?php } ?>
<?php
$post_social = RDTheme::$options['post_social']  ;
$social_class_exists = class_exists( Socials::class );
$has_social = $post_social && $social_class_exists;
$col_class  = $has_social ? 'col-md-6' : 'col-12';
?>
<?php if ( RDTheme::$options['post_social']  ): ?>
  <?php if ($has_social): ?>
    <?php Socials::render(); ?>
  <?php endif ?>
<?php endif; ?>
</div>
<div class="single-content-post">
  <?php the_content(); ?>
</div>
  <?php
  // for single post pagination
  wp_link_pages(
    [
      'before'      => '<div class="post-pagination">' . esc_html__('Pages:', 'optimax'), 'after'  => '</div>',
      'link_before' => '<span>',
      'link_after'  => '</span>'
    ]
  )

  ?>

</div>

<?php if ( RDTheme::$options['post_tags'] && has_tag() ){ ?>
	<div class="item-tag d-flex ">
		<div class="mr-2">
			<i class="fas fa-tags"></i>
		</div>
		<?php the_tags( '<ul><li>', ',</li> <li>', '</li></ul>' ); ?>
	</div>
<?php } ?>
<?php
$post_author_social = RDTheme::$options['post_author_social'];
$author_social_class_exists = class_exists(Author_Social::class);
$has_author_social = $post_author_social && $author_social_class_exists;

$about_author = get_the_author_meta( 'description' );
$has_author_info = RDTheme::$options['post_about_author'] && $about_author ;
?>

<?php if ( $has_author_info ){ ?>
  <?php
  $author_id = get_post_field( 'post_author', get_the_ID() );
  $author_id = get_the_author_meta( 'ID' );
  ?>
  <div class="blog-author">
    <div class="media media-none--sm media-none-md">
      <div class="item-img">
        <?php echo get_avatar( $author_id, null, null, 'blog author', ['class' => 'media-img-auto'] ) ?>
      </div>
      <div class="media-body media-none-sm">
        <h4 class="item-title"><?php the_author(); ?></h4>
        <div class="item-subtitle"><?php esc_html_e( 'Author', 'optimax' );?></div>
        <p><?php echo esc_html( $about_author ); ?></p>
        <?php if ( $has_author_social ){ ?>
          <?php Author_Social::render( $author_id ); ?>
        <?php } ?>
      </div>
    </div>
  </div>
<?php } ?>

<?php if ( RDTheme::$options['post_single_prev_next_link'] ){ ?>
<div class="row no-gutters divider post-navigation pagination-layout4">

	<?php if (!empty(get_next_post_link())) { ?>
		<div class="next-post-wrapper col-lg-6 col-md-6 col-sm-6 col-6 <?php if (empty(get_previous_post_link())) { ?>-offset-md-6<?php } ?> <?php if (is_rtl()) {
			echo esc_attr('text-right');
		} else {
			echo esc_attr('text-left');
		} ?>">
			<?php $next_post = get_next_post();
			if (!empty($next_post)) { ?>
				<?php if (has_post_thumbnail($next_post->ID)) { ?>
				<a class="left-img"
					href="<?php echo esc_url(get_permalink($next_post->ID)); ?>"><?php echo get_the_post_thumbnail($next_post->ID, 'thumbnail', array('class' => 'Next')); ?></a><?php } ?>
				<div class="pad-lr-15">
					<span class="next-article"><?php next_post_link('%link', esc_html_e('Previous', 'optimax')); ?></span>
					<?php next_post_link('<h3 class="post-nav-title">%link</h3>'); ?>
				</div>				
			<?php } ?>
		</div>
	<?php } ?>

	<?php if (!empty(get_previous_post_link())) { ?>
		<div class="prev-post-wrapper col-lg-6 col-md-6 col-sm-6 col-6 <?php if (empty(get_next_post_link())) { ?>offset-md-6<?php } ?> <?php if (is_rtl()) {
			echo esc_attr('text-right');
		} else {
			echo esc_attr('text-right');
		} ?>">

		<div class="pad-lr-15">
		<span class="prev-article">
		<?php previous_post_link('%link', esc_html_e('Next', 'optimax')); ?></span>
				<?php previous_post_link('<h3 class="post-nav-title">%link</h3>'); ?>
			</div>
			<?php $previous_post = get_previous_post();
			if (!empty($previous_post)) { ?>
				<?php if (has_post_thumbnail($previous_post->ID)) { ?>
					<a class="right-img"
					   href="<?php echo esc_url(get_permalink($previous_post->ID)); ?>"><?php echo get_the_post_thumbnail($previous_post->ID, 'thumbnail', array('class' => 'Previous')); ?></a><?php } ?>
			<?php } ?>

		</div>
	<?php } ?>
</div>
<?php } ?>