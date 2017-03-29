<article <?php post_class('post'); ?> id="post-<?php the_ID(); ?>">
  <header>
    <h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title() ?></a><a href="<?php echo get_comments_link(); ?>" class="fa fa-comment"><small> <?php echo get_comments_number(); ?></small></a></h2>
    <span><?php the_date( 'F d, Y \a\t h.i', 'Posted on ' ); ?> by <a href="/author/<?php the_author() ?>" title="Записи <?php the_author() ?>" rel="author"><?php the_author() ?></a></span>
  </header>
  <figure>
    <?php if ( has_post_thumbnail() ) {
      the_post_thumbnail( 'full', array( 'class' => 'thumbnail' ) );
    } ?>
  </figure>
  <?php the_content(); ?>
  <footer class="entry-meta">
    <?php edit_post_link( __( 'Edit', 'striped' ), '<div class="edit-link">', '</div>' ); ?>
    <p class="tags"><?php the_tags(__( 'Тэг: ', 'striped' ),', '); ?></p>
    <p class="categories"><?php _e( 'Рубрика ', 'striped' ) . the_category(', '); ?></p>
  </footer>
</article>