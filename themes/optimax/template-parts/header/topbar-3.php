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
          <li> <i class="<?php echo esc_attr($contact['icon']) ?>"></i>
            <?php if ($key == 'phone') { ?>
              <a href="tel:<?php echo wp_kses( $contact['text'] , 'allow_link' ) ?>">
                <?php echo wp_kses( $contact['text'] , 'alltext_allow' ) ?>
              </a>
              <?php } ?>
              <?php if ($key == 'email') { ?>
              <a href="mailto:<?php echo wp_kses( $contact['text'] , 'allow_link' ) ?>">
                <?php echo wp_kses( $contact['text'] , 'alltext_allow' ) ?>
              </a>
            <?php } ?>
          </li>
        <?php endforeach ?>
      </ul>
    <?php endif ?>
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

