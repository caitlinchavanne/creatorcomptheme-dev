<?php

if ( ! function_exists( 'creatorcomptheme_setup' ) ) :

// Sets up theme defaults and registers support for various WordPress features.

    function creatorcomptheme_setup() {
        
    //styles & scripts

        function add_theme_scripts() {
    
        //BOOTSTRAP

            wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'));

            wp_enqueue_style('boostrap-css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');

        //FONT AWESOME

            wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/fa/css/font-awesome.min.css', array('jquery'));

        //LOCAL

            wp_enqueue_style( 'style', get_stylesheet_uri() );

            wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ));

        }

        add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
        
        
        
/**************************************************************
 * Make theme available for translation.                      *
 * Translations can be placed in the /languages/ directory.   *
 **************************************************************/

        load_theme_textdomain( 'creatorcomptheme', get_template_directory() . '/languages' );

/**************************************************************
* Add default posts and comments RSS feed links to <head>.   *
**************************************************************/

        add_theme_support( 'automatic-feed-links' );

        /**
         * Enable support for post thumbnails and featured images.
         */

        add_theme_support( 'post-thumbnails' );

        /**
         * Add support for two custom navigation menus.
         */

        register_nav_menus( array(

            'primary'   => __( 'Primary Menu', 'creatorcomptheme' ),

            'secondary' => __('Secondary Menu', 'creatorcomptheme' )

        ) );

        /**
         * Enable support for the following post formats:
         * aside, gallery, quote, image, and video
         */

        add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

        //ACF & FIELDS

            get_template_part('includes/acf-include');
        
        //SIDEBARS & WIDGETS

        function creatorcomptheme_widgets_init() {
            register_sidebar( array(
                'name'          => __( 'Header Sidebar', 'creatorcomptheme' ),
                'id'            => 'sb-header',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h1 class="widget-title">',
                'after_title'   => '</h1>',
            ) );

            register_sidebar( array(
                'name'          => __( 'Footer Sidebar', 'creatorcomptheme' ),
                'id'            => 'sb-footer',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h1 class="widget-title">',
                'after_title'   => '</h1>',
            ) );
        }
        add_action( 'widgets_init', 'creatorcomptheme_widgets_init' );
        
        //prevent automatic paragraphs

        remove_filter('the_content', 'wpautop');

    }

endif; 

add_action( 'after_setup_theme', 'creatorcomptheme_setup' ); // creatorcomptheme_setup



?>