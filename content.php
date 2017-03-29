<article <?php post_class('post'); ?> id="post-<?php the_ID(); ?>">
  <header>
    <h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title() ?></a><a href="<?php echo get_comments_link(); ?>"><span class="comment-count-approved"><sup><?php echo get_comments_number(); ?><sup></span></a></h2>
    <span><?php the_date( 'F d, Y \a\t h.i', 'Posted on ' ); ?> by <a href="/author/<?php the_author() ?>" title="Записи <?php the_author() ?>" rel="author"><?php the_author() ?></a></span>
  </header>
  <figure>
    <?php if ( has_post_thumbnail() ) {
      the_post_thumbnail( 'full', array( 'class' => 'thumbnail' ) );
    } ?>
  </figure>
  <?php the_excerpt(); ?>
  <span class="morelink"><a href="<?php the_permalink(); ?>">More...</a></span>
</article>