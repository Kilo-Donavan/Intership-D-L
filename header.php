<!DOCTYPE html>
<html lang="<?php bloginfo('language') ?>">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <?php if( is_category() ) :
        $category_array = get_the_category();
        $category = $category_array[0]; // La première ligne est un objet
        $category_description = $category -> category_description;
    ?>
        <title><?php single_cat_title() ?> : <?php bloginfo('name') ?></title>
        <meta name="description" content="<?php echo $category_description; ?>">
    <?php else :  ?>
        <title><?php bloginfo('name') ?></title>
        <meta name="description" content="<?php bloginfo('description') ?>">
    <?php endif; ?>


    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:400,500,700,900%7cOpen+Sans" rel="stylesheet">
    <!-- Feuille de style wordpress -->
    <link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="banner">
        <nav class="navbar navbar-expand-md navbar-dark bg-primary" role="navigation">
                
                    <?php 
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'thumbnail' );?>
                   <a class="nabar-brand" href="<?php bloginfo('url'); ?>"><img src="<?php echo $image[0];?>" alt=""></a>
                    
                    <span class="nabvar-text text-light"><?php bloginfo('description'); ?></span>
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-target" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                
                <?php 
                    $menuParameters =  array(
                        'theme_location' => 'header',
                        'depth'           => 2,
                        'walker'          => new WP_Bootstrap_Navwalker(),
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'nav-target',
                        'menu_class'        => 'navbar-nav ml-auto',
                        'menu_id'           => 'menu',
                    );
                    echo wp_nav_menu( $menuParameters );
                ?>
                <!--<form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>-->
                
            </nav>
        
            
            
            
    </header>