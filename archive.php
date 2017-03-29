<?php get_header() ?>

<div class="row">
  <!-- main and sidebar -->
  <main class="col-md-9">
    <h1 class="page-title">
      <?php
      if (is_category()):
          single_cat_title();
      elseif ( is_tag() ) :
          single_tag_title();
      elseif (is_year()):
          printf(__('%s', 'striped'), '<span>' . get_the_date(_x('Y', 'yearly archives date format', 'striped')) . '</span>');
      elseif (is_month()):
          printf(__('%s', 'striped'), '<span>' . get_the_date(_x('F Y', 'monthly archives date format', 'striped')) . '</span>');
      elseif (is_day()):
          printf(__('%s', 'striped'), '<span>' . get_the_date() . '</span>');
      elseif (is_author()):
          printf( __( 'Автор: %s', 'striped' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' );
      else :
          _e( 'Архивы', 'striped' );  
      endif;
      ?>
    </h1>
    <?php
       if ( is_category() ) :
           if (category_description() !== '') :
                echo '<p>' . category_description() . '</p>';
           endif;
       endif;
    ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php get_template_part('content') ?>
    <?php endwhile; ?>
    <!-- post navigation -->
    <?php else: ?>
      <h3>Нет таких постов</h3>
    <?php endif; ?>
    
    <?php pagination(); ?>
  </main>
  <?php get_sidebar(); ?>
</div>
<!-- /main and sidebar -->
<?php get_footer(); ?>

 

