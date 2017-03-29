<?php
	function theme_name_scripts() {
		wp_enqueue_script( 'jquery-2.1.1.min', get_template_directory_uri().'/js/jquery-2.1.1.min.js' );
		wp_enqueue_script( 'bootstrap.min', get_template_directory_uri().'/js/bootstrap.min.js' );
		wp_enqueue_style( 'main', get_template_directory_uri().'/css/main.css' );
		wp_enqueue_style( 'bootstrap.min', get_template_directory_uri().'/css/bootstrap.min.css' );
	}

	add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
	
	add_theme_support('title-tag');
	add_filter( 'document_title_separator', function(){ return ' | '; } );

	add_theme_support('post-thumbnails');

	register_nav_menu( 'menu', 'Main menu' );

	$args = array(
		'name'          => 'Виджет sidebar',
		'id'            => 'sidebar',
		'description'   => 'Добавляем виджеты сайдбара',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	);

	register_sidebar( $args );
		
	function pagination($pages = '', $range = 2)
	{
	     $showitems = ($range * 2)+1;
	     global $paged;
	     if(empty($paged)) $paged = 1;
	     if($pages == '')
	     {
	         global $wp_query;
	         $pages = $wp_query->max_num_pages;
	         if(!$pages)
	         {
	             $pages = 1;
	         }
	     }
	     if(1 != $pages)
	     { 
	         echo "<nav><ul class='pagination'>";
	         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."' aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li>";
	         if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a></li>";
	         for ($i=1; $i <= $pages; $i++)
	         {
	             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
	             {
	                 echo ($paged == $i)? "<li><span class='current'>".$i."</span></li>":"<li><a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a><li>";
	             }
	         }
	         if ($paged < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a></li>";
	         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a><li>";
	         echo "</ul></nav>\n";
	     }
	}	
?>
