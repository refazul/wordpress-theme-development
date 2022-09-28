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
    <?php if ($top_bar_contacts = Helper::top_bar_contacts1()): ?>
      <ul>
        <?php foreach ($top_bar_contacts as $key => $contact): ?>
          <li>
            <i class="<?php echo esc_attr($contact['icon']) ?>"></i>
            <?php if ($key == 'email'): ?>
              <?php $email = $contact['text']; ?>
              <a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>
            <?php else: ?>
              <?php echo esc_html($contact['text']) ?>
            <?php endif ?>
          </li>
        <?php endforeach ?>
      </ul>
    <?php endif ?>
  </div>
  <div class="col-md-4 header-social-layout4 header-social-layout">
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

