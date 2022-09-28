<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;
if ( !RDTheme::$has_banner ) {
  return;
}
$breadcrumb_class = "";
if ( function_exists( 'bcn_display') ) {
  $breadcrumb_class = "bcn_display";
}
?>

<?php if (RDTheme::$has_banner) { ?>
  <?php
    $beforeClassName   = 'has-before'; // for dark overlay
    if (RDTheme::$bgtype == 'bgimg') {
      $bgimg           = RDTheme::$bgimg;
      $bgstyle         = sprintf( "background-image: url( %s )",  $bgimg); ;
      if (!$bgimg) {
        $bgstyle       = sprintf( "background-image: url( %s )", Helper::get_img('essential/breadcumb.jpg')); ;
      }
    } elseif (RDTheme::$bgtype == 'bgcolor') {
      $bgcolor         = RDTheme::$bgcolor;
      $bgstyle         = sprintf( "background-color: %s ", $bgcolor); ;
      $beforeClassName = '';
    }
  ?>

  <div class="inner-page-banner bg-common" style="<?php echo esc_attr($bgstyle); ?>" >
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-area <?php echo esc_attr( $breadcrumb_class ); ?>">
                  <h1><?php Helper::the_title(); ?></h1>
                  <?php if (RDTheme::$options['breadcrumb']){ ?>
                    <?php Helper::the_breadcrumb(); ?>
                  <?php } ?>
                </div>
            </div>
        </div>
    </div>
  </div>
<?php } ?>