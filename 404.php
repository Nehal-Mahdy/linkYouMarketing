<?php
/**
 * 404 Error Page Template
 * 
 * This template is displayed when WordPress cannot find a matching page/post
 * for the requested URL. It provides users with helpful navigation options.
 */

get_header(); ?>

<main id="main" class="site-main" role="main">
    <?php get_template_part( 'template-parts/loop', '404' ); ?>
</main>

<?php get_footer();
