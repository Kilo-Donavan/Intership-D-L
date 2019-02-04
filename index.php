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
    <header>
        <div class="container">
            <a class="logo" href="<?php bloginfo('wpurl') ?>">
                <?php bloginfo('name') ?>
            </a>
            <a href="#navigation" class="burger" aria-label="Ouvrir le menu">
                <i class="fas fa-bars" aria-hidden="true"></i>
            </a>
            <nav>
                <?php 
                    $menuParameters =  array(
                        'theme_location' => 'header', // Le menu à afficher
                        'container'       => false,
                        'items_wrap'      => '%3$s', // génère chaque item avec les li
                    );
                    echo wp_nav_menu( $menuParameters );
                ?>
            </nav>
        </div>
    </header>
    
    <main>
        
    </main>
    
    <footer>
        
    </footer>
</body>
</html>