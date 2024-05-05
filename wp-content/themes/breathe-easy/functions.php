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
        'footer_quick_links' => 'Footer Quick Links',
    )
);

add_filter( 'block_categories_all', 'example_block_category', 10, 2);
function example_block_category( $categories, $post ) {
	
	array_unshift( $categories, array(
		'slug'	=> 'custom',
		'title' => 'Custom Blocks'
	) );

	return $categories;
}

add_action('acf/init', 'my_acf_init');
function my_acf_init() {
     
    if( function_exists('acf_register_block') ) {
        acf_register_block(array(
            'name'              => 'faq',
            'title'             => __('FAQ'),
            'description'       => __('A custom faq block.'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'custom',
            'icon'              => 'format-chat',
            'keywords'          => array( 'faq', 'question' ),
            'example'  => array(
                'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    '_is_preview'   => 'true'
                   )
               )
           ),
        ));

        acf_register_block(array(
            'name'              => 'contact-form',
            'title'             => __('Contact Form'),
            'description'       => __('A custom contact form block.'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'custom',
            'icon'              => 'editor-table',
            'keywords'          => array( 'contact', 'contact form' ),
            'example'  => array(
                'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    '_is_preview'   => 'true'
                   )
               )
           ),
        ));

        acf_register_block(array(
            'name'              => 'timeline',
            'title'             => __('Timeline'),
            'description'       => __('A custom timeline block.'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'custom',
            'icon'              => 'flag',
            'keywords'          => array( 'timeline' ),
        ));

        acf_register_block(array(
            'name'              => 'testimonials',
            'title'             => __('Testimonials'),
            'description'       => __('A custom testimonials block.'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'custom',
            'icon'              => 'slides',
            'keywords'          => array( 'testimonial' ),
        ));

        acf_register_block(array(
            'name'              => 'service-cards',
            'title'             => __('Service Cards'),
            'description'       => __('A custom service cards block.'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'custom',
            'icon'              => 'grid-view',
            'keywords'          => array( 'service', 'card' ),
        ));

        acf_register_block(array(
            'name'              => 'quote',
            'title'             => __('Quote'),
            'description'       => __('A custom quote block.'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'custom',
            'icon'              => 'format-quote',
            'keywords'          => array( 'quote' ),
        ));

        acf_register_block(array(
            'name'              => 'paragraph',
            'title'             => __('Paragraph'),
            'description'       => __('A custom paragraph block.'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'custom',
            'icon'              => 'editor-paragraph',
            'keywords'          => array( 'paragraph' ),
        ));

        acf_register_block(array(
            'name'              => 'description',
            'title'             => __('Description'),
            'description'       => __('A custom description block.'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'custom',
            'icon'              => 'editor-aligncenter',
            'keywords'          => array( 'description' ),
        ));

        acf_register_block(array(
            'name'              => 'full-width-banner',
            'title'             => __('Full-width Banner'),
            'description'       => __('A custom full-width banner block.'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'custom',
            'icon'              => 'align-full-width',
            'keywords'          => array( 'full', 'width', 'banner' ),
        ));

        acf_register_block(
            array(
                'name' => 'latest-blog-posts',
                'title' => __('Latest Blog Posts'),
                'description' => __('A custom Latest Blog Posts block.'),
                'render_callback' => 'my_acf_block_render_callback',
                'category' => 'custom',
                'icon' => 'grid-view',
                'keywords' => array('latest-blog-posts'),
            )
        );

        acf_register_block(
            array(
                'name' => 'video',
                'title' => __('Video'),
                'description' => __('A custom Video block.'),
                'render_callback' => 'my_acf_block_render_callback',
                'category' => 'custom',
                'icon' => 'video-alt3',
                'keywords' => array('video'),
            )
        );

        acf_register_block(
            array(
                'name' => 'workflow',
                'title' => __('Workflow'),
                'description' => __('A custom Workflow block.'),
                'render_callback' => 'my_acf_block_render_callback',
                'category' => 'custom',
                'icon' => 'networking',
                'keywords' => array('workflow'),
            )
        );
    }
}

function my_acf_block_render_callback( $block ) {
    $slug = str_replace('acf/', '', $block['name']);
    
    if( file_exists( get_theme_file_path("/resources/views/blocks/block-{$slug}.php") ) ) {
        include( get_theme_file_path("/resources/views/blocks/block-{$slug}.php") );
    }
}