<?php
/*
  Template Name: SEO Company Template
 */

get_header(); ?>

<?php get_template_part('partials/nav'); ?>

<?php
while (have_posts()) : the_post();

    get_template_part('template-parts/content', 'seo-company');

endwhile; // End of the loop.
?>

<?php get_template_part('partials/footer'); ?>


<?php
get_footer();