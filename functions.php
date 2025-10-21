<?php

/**
 * EcoForge functions and definitions
 * 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * @package EcoForge
 */

if (! defined('ECOFORGE_VERSION')) {
  // Replace the version number of the theme on each release.
  define('ECOFORGE_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function ecoforge_setup()
{
  // Make theme available for translation.
  load_theme_textdomain('ecoforge', get_template_directory(), '/language');

  // Add default posts and comments RSS feed links to head.
  add_theme_support('title-tag');

  // Enable support for Post Thumbnails on posts and pages.
  add_theme_support('post-thumnails');

  // Switch default core markup for search form, comment form, and comments to output valid HTML5.
  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'style',
      'script'
    )
  );

  // This theme uses wp_nav_menu() in two locations.
  register_nav_menus(
    array(
      'primary-menu' => esc_html__('Primary Menu', 'ecoforge'),
      'footer-menu' => esc_html__('Footer Menu', 'ecoforge'),
    )
  );
}
add_action('after_setup_theme', 'ecoforge_setup');

/**
 * Register widget area.
 * 
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ecoforge_widgets_init()
{
  register_sidebar(
    array(
      'name' => esc_html__('Blog Sidebar', 'ecoforge'),
      'id' => 'blog-sidebar',
      'description' => esc_html__('Add widgets here to appear in your blog sidebar.', 'ecoforge'),
      'before_widget' => '<div id="%1$s" class="widget %2$s bg-secondary/50 dark:bg-primary/10 p-6 rounded-xl">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="font-display text-xl font-bold text-text-primary dark:text-background-light mb-4">',
      'after_title' => '</h3>',
    )
  );
}
add_action('widgets_init', 'ecoforge_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function ecoforge_scripts()
{
  // Enqueue Google Fonts & Icons
  wp_enqueue_style('ecoforge-fonts', 'https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1.6..72,200..800&family=Noto+Sans:wght@400;500;700&display=swap', array(), null);
  wp_enqueue_style('ecoforge-material-symbols', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined', array(), null);

  // Enqueue compiled stylesheet
  wp_enqueue_style('ecoforge-style', get_stylesheet_uri(), array(), ECOFORGE_VERSION);

  // Enqueue custom JS if needed (create a js/main.js file)
  /*
  wp_enqueue_script('ecoforge-main-js', get_template_directory_uri() . '/js/main.js', array(), ECOFORGE_VERSION, true );
  */
}
add_action('wp_enqueue_scripts', 'ecoforge_scripts');
