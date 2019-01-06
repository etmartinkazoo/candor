<?php
	if ( post_password_required() ) {
		return;
	}
?>

<div id="comments" class="comments-area">

	<?php
	if ( have_comments() ) :
		$comments_args = array(
			// Change the title of send button
			'label_submit' => __( 'Submit', 'textdomain' ),
			// Change the title of the reply section
			'title_reply' => __( 'Write a Reply or Comment', 'textdomain' ),
			// Remove "Text or HTML to be displayed after the set of comment fields".
			'comment_notes_after' => '',
			// Redefine your own textarea (the comment body).
			'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
			'class_submit'	=> 'btn btn-secondary rounded-0',
	);
	comment_form( $comments_args );
	?>
		<h2 class="comments-title mt-5">
			<?php
			$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				/* translators: %s: post title */
				printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'twentyseventeen' ), get_the_title() );
			} else {
				printf(
					/* translators: 1: number of comments, 2: post title */
					_nx(
						'%1$s Reply to &ldquo;%2$s&rdquo;',
						'%1$s Replies to &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title',
						'twentyseventeen'
					),
					number_format_i18n( $comments_number ),
					get_the_title()
				);
			}
			?>
		</h2>

		<ul class="comment-list">
			<?php
				wp_list_comments(
					array(
						'avatar_size' => 50,
						'style'       => 'ol',
						'short_ping'  => true,
					)
				);
			?>
		</ul>

		<?php
		the_comments_pagination(

		);

	endif; // Check for have_comments().

	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'twentyseventeen' ); ?></p>
	<?php endif; ?>

</div><!-- #comments -->
