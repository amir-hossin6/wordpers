<?php
// Exit if accessed directly.
if (! defined('ABSPATH')) {
  exit;
}

/**
 * Add Theme Page under Appearance
 */
if (! function_exists('fresh_blog_lite_add_theme_page')) {
  function fresh_blog_lite_add_theme_page()
  {
    add_theme_page(
      __('Theme Info', 'fresh-blog-lite'),
      __('Theme Info', 'fresh-blog-lite'),
      'edit_theme_options',
      'fresh-blog-lite-page',
      'fresh_blog_lite_render_theme_page'
    );
  }
}
add_action('admin_menu', 'fresh_blog_lite_add_theme_page');

/**
 * Callback to render the theme page content
 * Allow to override in a child theme.
 */
if (! function_exists('fresh_blog_lite_render_theme_page')) {
  function fresh_blog_lite_render_theme_page()
  {
    require_once get_theme_file_path('admin/theme-page-template.php');
  }
}
