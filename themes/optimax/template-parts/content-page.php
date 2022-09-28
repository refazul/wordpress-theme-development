<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ): ?>
		<div class="page-thumbnail"><?php the_post_thumbnail( 'rdtheme-size1' );?></div>
	<?php endif; ?>
	<div class="entry-content">
    <div class="clearfix">
      <?php the_content();?>
    </div>
    <?php 
        wp_link_pages(
          [
            'before'      => '<div class="post-pagination">' . esc_html__('Pages:', 'optimax'), 'after'  => '</div>',
            'link_before' => '<span>',
            'link_after'  => '</span>'
          ]
        )
     ?>
	</div>
</article>
