<!DOCTYPE html>
<html class="light" <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta content="width=device-width,initial-scale=1.0" name="viewport" />
  <?php wp_head(); ?>
</head>


<body <?php body_class('bg-background-light dark:bg-background-dark font-display'); ?>>
  <div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
    <div class="layout-container flex h-full grow flex-col">
      <nav class="site-navigation"><?php wp_nav_menu(array(
                                      'theme_location' => 'primary',
                                      'menu_id' => 'primary-menu',
                                      'container_class' => 'main-navigation-container',
                                      'menu_class' => 'main-navigation-list'
                                    )); ?>
      </nav>

      <div class="px-4 md:px-10 lg:px-20 xl:px-40 flex flex-1 justify-center py-5">
        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">