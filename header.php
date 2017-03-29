<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?> 
  </head>
  <body <?php body_class(); ?>>
  <div class="container">
  <header class="row">
    <div class="col-md-12 clearfix">
      <a href="<?php echo home_url(); ?>"><img class="alignleft logo img-circle" src="<?php bloginfo('template_url'); ?>/img/logo.jpg"></a>
      <h1 class="site-title"><?php bloginfo('name'); ?></h1>
    </div>
    <nav class="navbar-collapse">
      <?php wp_nav_menu( array('theme_location'=>'menu', 'menu_class'=>'nav navbar-nav', 'container'=>'false' ) ); ?>
    </nav>
  </header>