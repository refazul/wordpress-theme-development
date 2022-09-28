<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 * mobile menu of desktop main menu
 */

namespace radiustheme\Optimax;

$logo_main      = empty(  RDTheme::$options['logo_main']['id'] ) ? '<img width="500" height="132" alt="'.get_bloginfo( 'name' ).'" src="'.Helper::get_img( 'logo_main.png' ).'">' :  wp_get_attachment_image(RDTheme::$options['logo_main']['id'],'full');

?>
<div class="offcanvas-menu-wrap" id="offcanvas-menu-mobile" data-position="right">
    <div class="close-btn offcanvas-close"><i class="fas fa-times"></i></div>
    <div class="main-offcanvas-content">
        <div class="offcanvas-logo">
            <a href="<?php echo home_url('/') ?>"><?php echo wp_kses( $logo_main, 'alltext_allow' );?></a>
        </div>

        <?php if ( RDTheme::$options['menu_button'] ): ?>
          <div class="d-flex mb-4 justify-content-center menu-button">
            <a href="<?php echo esc_url( RDTheme::$options['menu_button_url'] ); ?>" class="btn-fill-4 btn-shadow mg-t-0 gradient-accent letter-specing-0">
              <?php echo wp_kses( RDTheme::$options['menu_button_text'] , 'alltext_allow' ); ?>            
            </a>
          </div>
        <?php endif ?>
        <?php
          $args = [
            'container'       => 'div',
            'container_class' => 'offcanvas-menu',
            'container_id'    => '',
          ];
          if ( has_nav_menu( 'mergemenu' ) ) {
            $args['theme_location'] = 'mergemenu';
          }
          $menu_args_for_offcanvas =  Helper::merge_menu_args($args) ;
          wp_nav_menu( $menu_args_for_offcanvas );
        ?>
		<?php if ( RDTheme::$options['offcanvas_menu_footer'] ): ?>
		  <div class="offcanvas-footer">
			<div class="item-title"><?php echo esc_html( RDTheme::$options['offcanvas_menu_footer_title'] ); ?></div>
			<ul class="offcanvas-social">
			  <?php foreach (Helper::socials() as $social): ?>
				<li><a href="<?php echo esc_attr( $social['url'] ); ?>"><i class="<?php echo esc_attr( $social['icon'] ); ?>"></i></a></li>
			  <?php endforeach ?>
			</ul>
		  </div>
		<?php endif ?>
    </div>
</div>
