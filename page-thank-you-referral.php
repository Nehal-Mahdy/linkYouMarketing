<?php
/**
 * Template Name: Thank You Referral
 * 
 * Standalone thank you page template
 */

get_header(); ?>

<div class="thank-you-referral-page">
    <?php
    // Include the thank you block template
    include get_template_directory() . '/template-parts/blocks/educationReferral/thank-you-page.php';
    ?>
</div>

<?php get_footer(); ?>
