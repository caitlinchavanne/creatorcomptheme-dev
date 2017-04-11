<?php get_template_part('templates/head'); ?>

<header id="header" class="full-width" role="banner">
    
    <div id="navbar-container" class="navbar navbar-inverse">
    
        <div id="navbar-head" class="navbar-header">
        
            <button id="nav-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">

                <span id="nav-toggle-icon" class="glyphicon glyphicon-menu-hamburger"></span>

            </button>
            
            <a id="logo-link" title="<?php bloginfo( 'name' ); ?>" href="<?= esc_url(home_url('/')); ?>">

                <img id="logo-image" class="header-logo" src="<?php the_field('header_logo','option'); ?>" alt="<?php bloginfo( 'name' ); ?>" data-pin-nopin="true">

            </a>
        
        </div>
        
        <div id="navbar-main" class="collapse-fix collapse nabar-collapse navbar-responsive-collapse navbar-right">
        
            <nav class="nav-primary" id="primary-nav">

                <?php dynamic_sidebar('sb-header'); ?>

            </nav>
        
        </div>
    
    </div>

</header>

<main id='main'>