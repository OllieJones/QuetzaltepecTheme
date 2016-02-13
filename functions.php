<?php
/**
 * Enqueue scripts and styles for front-end.
 *
 * @since Twenty Twelve 1.0
 *
 * @return void
 */

function quetzaltepec_scripts_styles()
{

    // Loads our main stylesheet.
    wp_enqueue_style( 'quetzaltepec_style', get_stylesheet_uri() );

}

add_action( 'wp_enqueue_scripts', 'quetzaltepec_scripts_styles' );

function quetzaltepec_init()
{
    global $wp_styles;


    if ( function_exists( 'register_sidebar' ) ) {
        register_sidebar( 'left' );
        register_sidebar( 'right' );
    }

    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'left-menu' => __( 'Left Menu' ),
            'right-menu' => __( 'Right Menu' ),
            'footer-menu' => __( 'Footer Menu' ),
        )
    );

    register_sidebar (array(
            'name'          => __('Left','quetzaltepec'),
            'id'            => 'sidebar-left',
            'description'   => __('Below the left navigation menu', 'quetzaltepec'),
            'class'         => 'sidebar-left',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>' )
    );

    register_sidebar (array(
            'name'          => __('Right Top','quetzaltepec'),
            'id'            => 'sidebar-righttop',
            'description'   => __('The right top sidebar', 'quetzaltepec'),
            'class'         => 'sidebar-righttop',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>' )
    );

    register_sidebar (array(
            'name'          => __('Right','quetzaltepec'),
            'id'            => 'sidebar-right',
            'description'   => __('The right sidebar', 'quetzaltepec'),
            'class'         => 'sidebar-right',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>' )
    );

    register_sidebar (array(
            'name'          => __('Below','quetzaltepec'),
            'id'            => 'sidebar-below',
            'description'   => __('Below the page text', 'quetzaltepec'),
            'class'         => 'sidebar-below',
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>' )
    );


    add_theme_support( 'post-thumbnails', array('post', 'page') );
}

add_action( 'init', 'quetzaltepec_init' );

function quetzaltepec_setup() {

    load_theme_textdomain('quetzaltepec', get_template_directory() . '/languages');

}

add_action( 'after_setup_theme', 'quetzaltepec_setup' );

function quetzaltepec_lang_menu($class) {
    $result = "";
    if (function_exists('icl_get_languages')) {
        $result .= sprintf ('<div %s>', $class);
        $lngl = icl_get_languages('skip_missing=0');
        foreach($lngl as $lang) {
            if ($lang['active'] == 1){
                $result .= $lang['native_name'];
            }
        }
        foreach($lngl as $lang) {
            if ($lang['active'] == 0 && $lang['missing'] == 0) {
                $result .= sprintf('<a href="%s"> &gt;&gt; %s</a>',$lang['url'],$lang['native_name']);
            }
        }
        $result .= '</div>';
    }
    return $result;
}
