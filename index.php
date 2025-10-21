<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EcoForge
 */

get_header();
?>

<main id="primary" class="site-main">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <?php if (is_home() && ! is_front_page()) : ?>
      <header class="mb-8">
        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
      </header>
    <?php endif; ?>

    <div class="flex flex-col lg:flex-row gap-12">
      <div class="flex-1">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <?php
          if (have_posts()) :
            /* Start the Loop */
            while (have_posts()) :
              the_post();
              get_template_part('template-parts/content', get_post_format());
            endwhile;
          else :
            get_template_part('template-parts/content', 'none');
          endif;
          ?>
        </div>

        <?php
        the_posts_pagination(array(
          'mid_size'  => 2,
          'prev_text' => '&larr;',
          'next_text' => '&rarr;',
          'screen_reader_text' => __('Posts navigation', 'ecoforge'),
        ));
        ?>
      </div>

      <?php get_sidebar(); ?>
    </div>
  </div>
</main>

<?php
get_footer();
