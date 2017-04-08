<?php get_template_part('templates/head'); ?>

<header id="header" class="full-width" role="banner">
    
    <div class="navbar navbar-default">
    
        <div class="navbar-header">
        
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">

                <span class="glyphicon glyphicon-menu-hamburger"></span>

            </button>
            
            <a class="navbar-brand" title="<?php bloginfo( 'name' ); ?>" href="<?= esc_url(home_url('/')); ?>">

                <img class="header-logo" src="<?php the_field('header_logo','option'); ?>" alt="<?php bloginfo( 'name' ); ?>" data-pin-nopin="true">

            </a>
        
        </div>
        
        <div class="collapse-fix collapse nabar-collapse navbar-responsive-collapse navbar-right">
        
            <nav class="nav-primary" id="primary-nav">

                <?php dynamic_sidebar('sb-header'); ?>

            </nav>
        
        </div>
    
    </div>

</header>

<main>