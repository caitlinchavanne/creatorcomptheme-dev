<?php

if ( ! function_exists( 'creatorcomptheme_setup' ) ) :

// Sets up theme defaults and registers support for various WordPress features.

    function creatorcomptheme_setup() {
        
    //add page slugs to body_class()
        
        function add_slug_body_class( $classes ) {

            global $post;

            if ( isset( $post ) ) {

                $classes[] = $post->post_type . '-' . $post->post_name;

            }

            return $classes;

        }

        add_filter( 'body_class', 'add_slug_body_class' );
        
    //styles & scripts

        function add_theme_scripts() {
            
        //LOCAL

            //wp_enqueue_script( 'scripts', get_template_directory_uri() . '/scripts.js');
            
            wp_enqueue_style( 'style', get_stylesheet_uri());

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

        //get_template_part('includes/acf-include');
        
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
        
    //OPTIONS PAGES

        if( function_exists('acf_add_options_page') ) {

            acf_add_options_page(array(
                
                'page_title' 	=> 'Theme General Settings',
                
                'menu_title'	=> 'Theme Settings',
                
                'menu_slug' 	=> 'theme-general-settings',
                
                'capability'	=> 'edit_posts',
                
                'redirect'		=> false
                
            ));

            acf_add_options_sub_page(array(
                
                'page_title' 	=> 'Theme Header Settings',
                
                'menu_title'	=> 'Header',
                
                'parent_slug'	=> 'theme-general-settings',
                
            ));

            acf_add_options_sub_page(array(
                
                'page_title' 	=> 'Theme Footer Settings',
                
                'menu_title'	=> 'Footer',
                
                'parent_slug'	=> 'theme-general-settings',
                
            ));

        }
        
        

    /*
     * Lists out the handles for all enqueued styles and scripts. 
     * */

        function wp_inspect_scripts() {
            
            global $wp_scripts;
            
            echo '<pre><h1>Script Handles</h1><ul>';
            
            foreach( $wp_scripts->queue as $handle ) :
            
                echo '<li>' . $handle . '</li>';
            
            endforeach;
            
            echo '</ul></pre>';
            
        }
        
        //add_action( 'wp_print_scripts', 'wp_inspect_scripts' );

        function wp_inspect_styles() {
            
            global $wp_styles;
            
            echo '<pre><h1>Style Handles</h1><ul>';
            
            foreach( $wp_styles->queue as $handle ) :
            
                echo '<li>' . $handle . '</li>';
            
            endforeach;
            
            echo '</ul></pre>';
            
        }
        
        //add_action( 'wp_print_styles', 'wp_inspect_styles' );

    }

endif; 

add_action( 'after_setup_theme', 'creatorcomptheme_setup' ); // creatorcomptheme_setup



?>