<article>
  <header>
    <h1 class="align-center">
        <?php the_title(); ?>
    </h1>
  </header>

    <div class="content">
        <?php the_content(); ?>
    </div>
</article>
    <?php if ( has_post_thumbnail() ) : ?>
  <?php the_post_thumbnail('full');?>
<?php endif; ?>
