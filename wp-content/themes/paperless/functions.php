<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (!file_exists($composer = __DIR__ . '/vendor/autoload.php')) {
  wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

if (!function_exists('\Roots\bootloader')) {
  wp_die(
    __('You need to install Acorn to use this theme.', 'sage'),
    '',
    [
      'link_url' => 'https://roots.io/acorn/docs/installation/',
      'link_text' => __('Acorn Docs: Installation', 'sage'),
    ]
  );
}

\Roots\bootloader()->boot();

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['setup', 'filters'])
  ->each(function ($file) {
    if (!locate_template($file = "app/{$file}.php", true, true)) {
      wp_die(
      /* translators: %s is replaced with the relative file path */
        sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
      );
    }
  });


function mytheme_customize_register($wp_customize)
{
  //All our sections, settings, and controls will be added here

  $wp_customize->add_section('theme_color_section', array(
    'title' => 'Cores do site',
    'description' => 'Define as cores primarias e secundarias da marca',
    'priority' => '40'
  ));

  // Add Settings
  $wp_customize->add_setting('primary_color', array(
    'default' => '#04bfbf',
  ));


  $wp_customize->add_setting('secondary_color', array(
    'default' => '#45ace0',
  ));

  // Add Controls
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primary_theme_color', array(
    'label' => 'Cor principal',
    'section' => 'theme_color_section',
    'settings' => 'primary_color'
  )));

  // Add Controls
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'secondary_theme_color', array(
    'label' => 'Cor secundaria',
    'section' => 'theme_color_section',
    'settings' => 'secondary_color'
  )));

}

add_action('customize_register', 'mytheme_customize_register');

/**
 * @param $file_types
 * @return array
 */
function add_file_types_to_uploads($file_types){
  $new_filetypes = array();
  $new_filetypes['svg'] = 'image/svg+xml';
  $file_types = array_merge($file_types, $new_filetypes );
  return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');

/**
 * Add options page
 */
if (function_exists('acf_add_options_page')) {

  acf_add_options_page(array(
    'page_title' => 'Configurações gerais',
    'menu_title' => 'Configurações',
    'menu_slug' => 'general-settings',
    'capability' => 'edit_posts',
    'redirect' => false,
    'position' => '2',
  ));

  acf_add_options_page(array(
    'page_title' => 'Site Slider',
    'menu_title' => 'Site slider',
    'menu_slug'  => 'site-slider',
    'capability' => 'edit_posts',
    'redirect' => false,
    'position' => '2',
  ));

}
