<!DOCTYPE html>
<html <?php language_attributes(); ?> class="light">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class('bg-background-light dark:bg-background-dark font-sans text-text-light dark:text-text-dark'); ?>>
  <?php wp_body_open(); ?>
  <div class="relative flex min-h-screen flex-col">
    <header class="sticky top-0 z-50 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-sm border-b border-text-light/10 dark:border-text-dark/10">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
          <div class="flex items-center gap-4">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="flex items-center gap-4 text-text-light dark:text-text-dark">
              <div class="text-primary">
                <svg class="w-8 h-8" fill="currentColor" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.8261 30.5736C16.7203 29.8826 20.2244 29.4783 24 29.4783C27.7756 29.4783 31.2797 29.8826 34.1739 30.5736C36.9144 31.2278 39.9967 32.7669 41.3563 33.8352L24.8486 7.36089C24.4571 6.73303 23.5429 6.73303 23.1514 7.36089L6.64374 33.8352C8.00331 32.7669 11.0856 31.2278 13.8261 30.5736Z"></path>
                </svg>
              </div>
              <span class="text-xl font-bold font-display"><?php bloginfo('name'); ?></span>
            </a>
          </div>

          <nav class="hidden md:flex items-center space-x-8">
            <?php
            if (has_nav_menu('primary-menu')) {
              wp_nav_menu(
                array(
                  'theme_location' => 'primary-menu',
                  'container' => false,
                  'menu_class' => 'flex items-center gap-9',
                  'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                  'walker' => new EcoForge_Nav_Walker()
                )
              );
            }
            ?>
          </nav>

          <div class="flex items-center gap-4">
            <!-- You can add login/search buttons back here if needed -->
          </div>
        </div>
      </div>
    </header>

    <div class="flex-grow">