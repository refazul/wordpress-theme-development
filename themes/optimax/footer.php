<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */
namespace radiustheme\Optimax;

$rdtheme_footer_column = RDTheme::$options['footer_column'];
switch ( $rdtheme_footer_column ) {
  case '1':
  $rdtheme_footer_class = 'col';
  break;
  case '2':
  $rdtheme_footer_class = 'col-md-6';
  break;
  case '3':
  $rdtheme_footer_class = 'col-lg-4 col-md-6';
  break;
  default:
  $rdtheme_footer_class = 'col-lg-3 col-md-6';
  break;
}

$meta = get_post_meta( get_the_ID(), "optimax_layout_settings", true );
?>

    <!-- Footer Top Call To Action -->
    <?php if ( RDTheme::$footer_cta ): ?>
      <?php get_template_part( 'template-parts/partials/cta',  RDTheme::$footer_cta_style); ?>
    <?php endif ?>

        <!-- Footer Area Strat Here -->
        <footer class="footer-wrap">
			<div class="footer-inner">
				<?php if ( RDTheme::$options['footer_shape'] ) { ?>
				<ul class="shape-holder">
					<li class="shape1 wow bounceInLeft" data-wow-delay="0.3s" data-wow-duration="1.5s">
						<img width="142" height="114" src="<?php echo esc_url( Helper::get_img('shape/footer_shape1.png') ); ?>" alt="<?php esc_html_e('shape1', 'optimax'); ?>">
					</li>
					<li class="shape2 wow bounceInDown" data-wow-delay="0.4s" data-wow-duration="1.5s">
						<img width="295" height="254" src="<?php echo esc_url( Helper::get_img('shape/footer_shape2.png') ); ?>" alt="<?php esc_html_e('shape2', 'optimax'); ?>">
					</li>
					<li class="shape3 wow bounceInRight" data-wow-delay="0.5s" data-wow-duration="1.5s">
						<img width="114" height="177" src="<?php echo esc_url( Helper::get_img('shape/footer_shape3.png') ); ?>" alt="<?php esc_html_e('shape3', 'optimax'); ?>">
					</li>
					<li class="shape4 wow bounceInLeft" data-wow-delay="0.6s" data-wow-duration="1.5s">
						<img width="94" height="138" src="<?php echo esc_url( Helper::get_img('shape/footer_shape4.png') ); ?>" alt="<?php esc_html_e('shape4', 'optimax'); ?>">
					</li>
					<li class="shape5 wow bounceInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
						<img width="177" height="141" src="<?php echo esc_url( Helper::get_img('shape/footer_shape5.png') ); ?>" alt="<?php esc_html_e('shape5', 'optimax'); ?>">
					</li>
					<li class="shape6 wow bounceInRight" data-wow-delay="0.8s" data-wow-duration="1.5s">
						<img width="185" height="179" src="<?php echo esc_url( Helper::get_img('shape/footer_shape6.png') ); ?>" alt="<?php esc_html_e('shape6', 'optimax'); ?>">
					</li>
					<li class="shape7 wow bounceInUp" data-wow-delay="0s" data-wow-duration="0s">
						<img width="1920" height="200" src="<?php echo esc_url( Helper::get_img('shape/footer_shape7.png') ); ?>" alt="<?php esc_html_e('shape7', 'optimax'); ?>">
					</li>
				</ul>
				<?php } ?>
	
            <?php if ( Helper::has_footer_widget() ): ?>
              <div class="main-footer-wrap">
                  <div class="container">
						<div class="row">
							<div class="col-lg-3 col-md-6">
								<div class="footer-logo"><?php dynamic_sidebar( 'footer_top1' ); ?></div>
							</div>
							<div class="col-lg-9 col-md-6">
								<div class="contact-widget"><?php dynamic_sidebar( 'footer_top2' ); ?></div>
							</div>
						</div>
						<div class="line-bar"></div>
						<div class="row">
							<?php
							for ( $i = 1; $i <= $rdtheme_footer_column; $i++ ) {
							  echo "<div class='{$rdtheme_footer_class}'>";
							  dynamic_sidebar( 'footer-'. $i );
							  echo '</div>';
							}
							?>
                      </div>
                  </div>
              </div>
            <?php endif ?>
            
            <?php if ( RDTheme::$options['copyright_area'] ): ?>
              <div class="footer-bottom-wrap">
                  <div class="copyright"><?php echo wp_kses( RDTheme::$options['copyright_text'], 'allow_link' );?></div>
              </div>
            <?php endif; ?>
			</div>
        </footer>
    <?php get_template_part('template-parts/header/offcanvas-menu-desktop') ?>
    <?php get_template_part('template-parts/header/mobile/offcanvas-menu-mobile') ?>
    <?php get_template_part('template-parts/header/fullscreen-search') ?>
	</div>
    <?php wp_footer() ?>
  </body>
</html>
