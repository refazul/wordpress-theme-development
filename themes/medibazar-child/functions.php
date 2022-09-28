<?php

/**s
 * functions.php
 * @package WordPress
 * @subpackage Medibazar
 * @since Medibazar 1.0
 * 
 */

add_action( 'wp_enqueue_scripts', 'medibazar_enqueue_styles', 99 );
function medibazar_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

?>