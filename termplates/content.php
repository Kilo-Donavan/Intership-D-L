<article>
  <header>
    <h2>
      <a href="<?php the_permalink(); ?>" title="En savoir plus">
        <?php the_title(); ?>
      </a>
    </h2>
    <p>Dans la catégorie : <?php the_category( ); ?> </p>
  </header>
<?php if ( has_post_thumbnail() ) : ?>
  <?php the_post_thumbnail('full');?>
<?php endif; ?>

  <div class="content">
    <?php the_content(); ?>
  </div>
</article>
