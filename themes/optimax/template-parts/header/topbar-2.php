<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;
?>

<div class="row">
  <div class="col-md-8 header-contact-layout1">
    <ul>
      <li>
        <?php esc_html_e( 'Welcome to', 'optimax' );?> <?php echo esc_html( get_bloginfo() ); ?> !
      </li>
    </ul>
  </div>
  <div class="col-md-4 header-social-layout3 header-social-layout">
    <?php if ($socials = Helper::socials()) : ?>
     <ul>
      <?php foreach ($socials as $social): ?>
          <li>
            <a href="<?php echo esc_url($social['url']) ?>">
              <i class="<?php echo esc_attr($social['icon']) ?>"></i>
            </a>
          </li>
      <?php endforeach ?>
     </ul>
     <?php endif; ?>
  </div>
</div>

