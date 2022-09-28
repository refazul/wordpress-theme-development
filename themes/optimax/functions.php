<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */
if ( !isset( $content_width ) ) {
  $content_width = 1200;
}

class Optimax_Main {

  public $theme   = 'optimax';
  public $action  = 'optimax_theme_init';

  public function __construct() {
    add_action( 'after_setup_theme', [$this, 'optimax_load_textdomain']);

    if ( version_compare( PHP_VERSION, '5.6', '>=' ) ) {
      $this->optimax_includes();
    }
    else {
      $this->optimax_fallback();
    }
  }

  public function optimax_load_textdomain(){
    load_theme_textdomain( $this->theme, get_template_directory() . '/languages' );
  }

  public function optimax_includes(){
    do_action( $this->action );
    require_once get_template_directory() . '/inc/constants.php';
    require_once get_template_directory() . '/inc/includes.php';
  }

  public function optimax_fallback() {
    add_action( 'admin_notices', [$this, 'optimax_phpfail_notice']);
    add_action( 'template_include', [$this, 'optimax_fallback_template'], 99 );
  }

  public function optimax_phpfail_notice() {
    $theme_data = wp_get_theme( $this->theme );
    $theme_name = $theme_data->get( 'Name' );
    $msg        = sprintf( esc_html__( 'Error: Your current PHP version is %1$s. You need at least PHP version 5.3+ for theme "%2$s" to work. Please ask your hosting provider to upgrade your PHP version into 5.3+', 'optimax' ), PHP_VERSION, $theme_name );
    echo '<div class="error"><p>' . $msg . '</p></div>';
  }

  public function optimax_fallback_template( $template ) {
    $template = locate_template( ['fallback.php']);
    return $template;
  }
}

new Optimax_Main;
if ( is_rtl() ) {
  add_editor_style('style-editor-rtl.css');
} else {
  add_editor_style('style-editor.css');
}

