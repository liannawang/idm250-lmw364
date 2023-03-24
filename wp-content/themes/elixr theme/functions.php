<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

/**
 * This function is called when the theme is activated. This is where we
 * will add all of our scripts and styles.
 * @return void
 */
function theme_scripts_and_styles()
{
    // Load CSS Reset
    wp_enqueue_style(
        'css-reset',
        'https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css',
        [],
        null
    );
    // Load in Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap',
        [],
        null
    );

    // Load in local CSS {@link https://developer.wordpress.org/reference/functions/wp_enqueue_style/}
    wp_enqueue_style(
        'idm250-styles', // name of the stylesheet
        get_template_directory_uri() . '/dist/styles/main.css', // http://localhost:250/wp-content/themes/idm250-theme-02/dist/styles/main.css
        [], // dependencies
        filemtime(get_template_directory() . '/dist/styles/main.css'), // version number
        'all' // media
    );

    // Load in local JS {@link https://developer.wordpress.org/reference/functions/wp_enqueue_script/}
    wp_enqueue_script(
        'idm250-scripts', // name of the script
        get_template_directory_uri() . '/dist/scripts/main.js', // http://localhost:250/wp-content/themes/idm250-theme-02/dist/scripts/main.js
        [], // dependencies
        filemtime(get_template_directory() . '/dist/scripts/main.js'), // version number
        true // load in footer
    );
}
add_action('wp_enqueue_scripts', 'theme_scripts_and_styles');

add_theme_support ('post-thumbnails');

// add support for pages to have excerpt
add_post_type_support ('page', 'excerpt');

/**
 * Function to register custom post types
 * @link https://developer.wordpress.org/reference/functions/register_post_type/
 * @return void
 */
function register_custom_post_types()
{
    // Register Shoes post type
    register_post_type(
        'shoes',
        [
            'labels' => [
                'name' => __('Shoes'),
                'singular_name' => __('Shoe')
            ],
            'public' => true,
            'has_archive' => true,
            'rewrite' => ['slug' => 'shoes'],
            'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        ]
    );
}

add_action('init', 'register_custom_post_types');


//menu?

function register_theme_menus()
{
    register_nav_menus(
        [
            'primary-menu' => 'Primary Menu',
            'footer-menu' => 'Footer Menu'
        ]
    );
}
add_action('init', 'register_theme_menus');

function custom_sidebar() {
    register_sidebar( array(
        'name' => __( 'Custom Sidebar', 'textdomain' ),
        'id' => 'custom-sidebar',
        'description' => __( 'Add widgets here to appear in your custom sidebar.', 'textdomain' ),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'custom_sidebar' );


// Register custom widget
function custom_heading_widget_init() {
    register_widget( 'custom_heading_widget' );
}
add_action( 'widgets_init', 'custom_heading_widget_init' );

// Create custom widget
class custom_heading_widget extends WP_Widget {

    // Widget setup
    function __construct() {
        parent::__construct(
            'custom_heading_widget',
            __('Custom Heading Widget', 'textdomain'),
            array( 'description' => __('Displays a list of headings in your posts or pages', 'textdomain') )
        );
    }

    // Output the widget
    function widget( $args, $instance ) {
        global $post;

        // Get all headings in the post content
        preg_match_all('/<h2>(.*?)<\/h2>/', $post->post_content, $matches);

        // If there are no headings, don't display the widget
        if (empty($matches[1])) {
            return;
        }

        // Output the widget
        echo $args['before_widget'];
        echo '<ul>';
        foreach ($matches[1] as $match) {
            echo '<li><a href="#' . sanitize_title($match) . '">' . $match . '</a></li>';
        }
        echo '</ul>';
        echo $args['after_widget'];
    }
}
