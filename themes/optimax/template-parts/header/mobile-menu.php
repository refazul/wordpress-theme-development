<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Optimax;
$nav_menu_args   = Helper::nav_menu_args();

$logo_main      = empty(  RDTheme::$options['logo_main']['id'] ) ? '<img width="500" height="132" class="logo-small" alt="'.get_bloginfo( 'name' ).'" src="'.Helper::get_img( 'logo_main.png' ).'">' :  wp_get_attachment_image(RDTheme::$options['logo_main']['id'],'full',"", array( "class" => "logo-small" ));

?>



<div class="rt-header-menu mean-container" id="meanmenu"> 
    <div class="mean-bar">
    	<a href="<?php echo esc_url(home_url('/'));?>" alt="<?php echo esc_attr( get_bloginfo( 'title' ) );?>"><?php echo wp_kses( $logo_main, 'alltext_allow' ); ?></a>
		
        <span class="sidebarBtn ">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </span>
    </div>

    <div class="rt-slide-nav">
        <div class="offscreen-navigation">
            <?php wp_nav_menu( $nav_menu_args );?>
        </div>
    </div>

</div>
