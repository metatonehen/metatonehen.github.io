<?php
/**
 * Template Name: Natal-Chart Page
 */

get_header();
?>

<main id="main" class="site-main">
    <?php
    while (have_posts()) : the_post();
        get_template_part('template-parts/content', 'natal-chart');
    endwhile;
    ?>
</main>

<?php get_footer(); ?>
