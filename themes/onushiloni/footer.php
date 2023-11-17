<?php
// This action hook is essential for adding content before the WooCommerce footer.
do_action( 'woocommerce_before_footer' );

// This is where you would typically include your own footer template parts.
// Example: get_template_part( 'template-parts/footer/content', 'footer' );

// If you are using Elementor to design your footer, you may not need to add much here.
// Elementor will handle the footer design and functionality.

// This action hook is useful for adding elements right after the main content but before the footer.
do_action( 'woocommerce_after_main_content' );
?>

<footer id="colophon" class="site-footer">
    <!-- Here you can add additional HTML or PHP code as needed -->
    <!-- This could be a place for copyright text, social media links, etc. -->

    <?php
    // Essential WordPress hook for footer widgets or additional content.
    do_action( 'wp_footer' );
    ?>
    <p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?></p>
</footer>

</body>
</html>
