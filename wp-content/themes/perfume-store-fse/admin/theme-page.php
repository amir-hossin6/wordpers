<?php
// Exit if accessed directly.
if (! defined('ABSPATH')) {
  exit;
}

/**
 * Add Theme Page under Appearance
 */
if (! function_exists('perfume_store_fse_add_theme_page')) {
  function perfume_store_fse_add_theme_page()
  {
    add_theme_page(
      __('Theme Info', 'perfume-store-fse'),
      __('Theme Info', 'perfume-store-fse'),
      'edit_theme_options',
      'perfume-store-fse-page',
      'perfume_store_fse_render_theme_page'
    );
  }
}
add_action('admin_menu', 'perfume_store_fse_add_theme_page');

/**
 * Callback to render the theme page content
 * Allow to override in a child theme.
 */
if (! function_exists('perfume_store_fse_render_theme_page')) {
  function perfume_store_fse_render_theme_page()
  {
    require_once get_theme_file_path('admin/theme-page-template.php');
  }
}
