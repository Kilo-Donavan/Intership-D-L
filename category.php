<?php get_header() ;?>
  <main>
    <header>
      <?php //the_custom_header_markup() ?>
      <h1><?php single_cat_title() ?></h1>
    </header>
    <?php
      // Si il y a des articles à afficher
      if ( have_posts() ) :
    ?>
    <section>
      <?php while( have_posts() ) : the_post() ?>
      <?php get_template_part('templates/content', get_post_format() ) ?>
      <?php endwhile; ?>
    </section>
    <?php endif;  ?>
  </main>
<?php get_footer(); ?>
