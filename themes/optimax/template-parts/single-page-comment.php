<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;
?>

<?php if ( comments_open() || get_comments_number() ): ?>
  <div class="comments-wrapper">
   <?php comments_template(); ?>
  </div>
<?php endif ?>
