<?php

/**
 * EcoForge functions and definitions
 * 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * @package EcoForge
 */

if (!function_exists('ecoforge_setup')):
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   * 
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function ecoforge_setup()
  {
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');

    // Register navigation menu locations.
    register_nav_menus(array(
      'primary' => esc_html__('Primary Menu', 'ecoforge'),
    ));

    // Switch default core markup for search form, comment form, and comments
    // to output valid HTML5.
    add_theme_support('html5', array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    ));

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');
  }
endif;
add_action('after_setup_theme', 'ecoforge_setup');

/**
 * Enqueue scripts and styles.
 */
function ecoforge_scripts()
{
  // Enqueue theme's main stylesheet (style.css)
  wp_enqueue_style('ecoforge-style', get_stylesheet_uri(), array(), '1.0.0');

  // Enqueue Google Fonts
  wp_enqueue_style('ecoforge-public-sans', 'https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;700;900&display=swap', array(), null);
  wp_enqueue_style('ecoforge-material-symbol', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined', array(), null);

  // Enqueue Tailwind CSS CDN
  wp_enqueue_script('ecoforge-tailwind-cdn', 'https://cdn.tailwindcss.com?plugins=forms,container-queries', array(), null, true);

  // Add the Tailwind config inline.
  wp_add_inline_script('ecoforge-tailwind-cdn', '
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#34D399",
                        "primary-content": "#064E3B",
                        "background-light": "#F0FDF4",
                        "background-dark": "#022C22",
                        "text-light": "#052e16",
                        "text-dark": "#ECFDF5",
                        "accent": "#A7F3D0"
                    },
                    fontFamily: {
                        "display": ["Public Sans"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    ', 'before');
}
add_action('wp_enqueue_scripts', 'ecoforge_scripts');

// Register a basic widget area (e.g., for a footer)
function ecoforge_widgets_init()
{
  register_sidebar(array(
    'name' => esc_html__('Footer Widget Area', 'ecoforge'),
    'id' => 'footer-1',
    'description' => esc_html__('Add widgets here to appear in your footer.', 'ecoforge'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>',
  ));
}
add_action('widgets_init', 'ecoforge_widgets_init');
