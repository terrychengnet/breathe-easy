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

try {
    \Roots\bootloader();
} catch (Throwable $e) {
    wp_die(
        __('You need to install Acorn to use this theme.', 'sage'),
        '',
        [
            'link_url' => 'https://docs.roots.io/acorn/2.x/installation/',
            'link_text' => __('Acorn Docs: Installation', 'sage'),
        ]
    );
}

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

/*
|--------------------------------------------------------------------------
| Enable Sage Theme Support
|--------------------------------------------------------------------------
|
| Once our theme files are registered and available for use, we are almost
| ready to boot our application. But first, we need to signal to Acorn
| that we will need to initialize the necessary service providers built in
| for Sage when booting.
|
*/

add_theme_support('sage');

function breathe_easy_register_widget_areas()
{
    register_sidebar(
        array(
            'name' => __('Footer Widget 1', 'breathe_easy'),
            'id' => 'footer-widget-1',
            'description' => __('Widget area for the footer.', 'breathe_easy'),
            'before_widget' => '<div class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        )
    );

    register_sidebar(
        array(
            'name' => __('Footer Widget 2', 'breathe_easy'),
            'id' => 'footer-widget-2',
            'description' => __('Widget area for the footer.', 'breathe_easy'),
            'before_widget' => '<div class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        )
    );
}
add_action('widgets_init', 'breathe_easy_register_widget_areas');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(
        array(
            'page_title' => 'Global Settings',
            'menu_title' => 'Global Settings',
            'menu_slug' => 'global-settings',
            'capability' => 'manage_options',
            'position' => 30,
            'update_button' => 'Save',
            'updated_message' => 'Options saved successfully.',
        )
    );
}

register_nav_menus(
    array(
        'footer_navigation' => 'Footer Navigation',
    )
);