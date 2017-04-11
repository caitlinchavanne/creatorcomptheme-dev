<!doctype html>

<html <?php language_attributes(); ?> >
    
    <head>
        
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        
        <meta name="viewport" content="width=device-width">
        
        <link rel="profile" href="http://gmpg.org/xfn/11">
        
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        
        <!--<link rel="icon" href="/favicon.ico" type="image/ico"/>
        
        <link rel="shortcut icon" href="/favicon.ico" type="image/ico"/>-->
        
       
        
        
        <title><?php wp_title(); ?></title>
        
        <?php 
        
        wp_head();
       
        ?>
        
    </head>

    <body <?php body_class(); ?>>