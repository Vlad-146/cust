<?php
define('MY_THEME_ROOT', get_template_directory_uri());
define('MY_CSS_DIR', MY_THEME_ROOT . '/assets/css');
define('MY_IMG_DIR', MY_THEME_ROOT . '/assets/img');
/*add_filter('show_admin_bar', '__return_true'); // включить*/

add_action('wp_enqueue_scripts', 'style_mytem');
function style_mytem()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('normalize', MY_CSS_DIR . '/normalize.css');
    wp_enqueue_style('soc', MY_CSS_DIR . '/soc.css');
    /*  wp_enqueue_style( 'awesome', MY_CSS_DIR.'/font-awesome.min.css' );*/
    wp_enqueue_script('jquery');
    /*  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true ); */
}
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Sidebar_1 Widgets',
        'id' => 'sidebar_1-widgets',
        'description' => 'Widgets for the sidebar left.',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
}
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Sidebar_2 Widgets',
        'id' => 'sidebar_2-widgets',
        'description' => 'Widgets for the sidebar right.',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
}

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Sidebar_3 Widgets',
        'id' => 'sidebar_3ы-widgets',
        'description' => 'Widgets for the sidebar footer.',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
}

add_filter('mce_buttons', 'mce_page_break');
function mce_page_break($mce_buttons)
{
    $pos = array_search('wp_more', $mce_buttons, true);

    if ($pos !== false) {
        $buttons = array_slice($mce_buttons, 0, $pos);
        $buttons[] = 'wp_page';
        $mce_buttons = array_merge($buttons, array_slice($mce_buttons, $pos));
    }

    return $mce_buttons;
}

function new_excerpt_more($more)
{
    global $post;
    return '... <a href="' . get_permalink($post->ID) . '">Читать дальше</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
