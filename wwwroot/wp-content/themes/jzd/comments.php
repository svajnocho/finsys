<?php
/**
 * The template for displaying Comments.
 */
?>
		
<div id="comments">
	<?php if ( post_password_required() ) : ?>
		<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'betheme' ); ?></p>
		</div>
		<?php return;
	endif; ?>

	<?php if ( have_comments() ) : ?>
		<h4 id="comments-title">
			<?php
				if( get_comments_number() == 1 ){
					echo get_comments_number() .' '. __('komentář','betheme');
				} else {
					echo get_comments_number() .' '. __('komentáře','betheme');
				}
			?>
		</h4>

		<ol class="commentlist">
			<?php wp_list_comments('avatar_size=64'); ?>
		</ol>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav">
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Starší komentáře', 'betheme' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Novější komentáře &rarr;', 'betheme' ) ); ?></div>
		</nav>
		<?php endif; ?>

	<?php
		elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="nocomments"><?php _e( 'Komentování uzavřeno.', 'betheme' ); ?></p>
	<?php endif; ?>

	<?php comment_form(); ?>

</div><!-- #comments -->
