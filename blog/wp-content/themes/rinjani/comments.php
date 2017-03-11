<?php
if ( post_password_required() )
return;
?>

<div id="comments" class="comments-area row">

	<?php if ( have_comments() ) : ?>

		<div class="comments-title">
		<h4>
				<?php printf( _nx( 'One Comment %2$s', '%1$s Comments', get_comments_number(), 'comments title', 'rinjani' ), number_format_i18n( get_comments_number() ), ' ' );?>
		</h4>
		</div>


		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>

			<nav id="comment-nav-above" class="navigation-comment" role="navigation">
				<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'rinjani' ); ?></h1>
				<div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'rinjani' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'rinjani' ) ); ?></div>
			</nav><!-- #comment-nav-before -->

		<?php endif; // check for comment navigation ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array( 'callback' => 'rinjani_comment' ) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
			<nav id="comment-nav-below" class="navigation-comment" role="navigation">
				<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'rinjani' ); ?></h1>
				<div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'rinjani' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'rinjani' ) ); ?></div>
			</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() ?>

	<?php
	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'rinjani' ); ?></p>
	<?php endif; ?>

<?php rinjani_comment_form(); ?>

</div><!-- #comments -->
