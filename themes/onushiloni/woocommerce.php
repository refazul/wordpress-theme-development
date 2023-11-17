<?php get_header();?>
<div class="container">
    <header>
        <h1><?php bloginfo( 'name' ); ?></h1>
        <p><?php bloginfo( 'description' ); ?></p>
    </header>

    <main>
        <?php woocommerce_content(); ?>
    </main>
</div>
<?php get_footer(); ?>