<div id="comments">
<?php if ( post_password_required() ) : ?>
				<p class="nopassword"><?php _e( 'Этот пост закрыт паролем. Введите пароль для просмотра комментариев.', 'striped' ); ?></p>
			</div>
<?php
		return;
	endif;
?>
 
<?php if ( have_comments() ) : ?>
			<h3 id="comments-title"><?php
			printf( _n( 'Первый комментарий к %2$s', '%1$s комментариев к %2$s', get_comments_number(), 'striped' ),
			number_format_i18n( get_comments_number() ), '<em>' . get_the_title() . '</em>' );
			?></h3>
 
<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Старые комментарии', 'striped' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Новые комментарии <span class="meta-nav">&rarr;</span>', 'striped' ) ); ?></div>
			</div>
<?php endif; ?>
 
			<ol class="commentlist">
				<?php
					wp_list_comments();
				?>
			</ol>
 
<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Старые комментарии', 'striped' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Новые комментарии <span class="meta-nav">&rarr;</span>', 'striped' ) ); ?></div>
			</div>
<?php endif; ?>
 
	<?php
	$num_comments = get_comments_number();
	if ( ! comments_open() && $num_comments == 0 ) : ?>
		<p class="nocomments"><?php _e( 'Комментарии закрыты' , 'striped' ); ?></p>
	<?php endif;  ?>
 
<?php endif; ?>
<?php comment_form (array ( 'comment_field'=>'<p class="comment-form-comment"><label for="comment">Комментарий</label><textarea id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true"></textarea>' )); ?>
</div>