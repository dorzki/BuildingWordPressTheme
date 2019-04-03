<!-- Comment Form -->
<?php comment_form( [
	'comment_notes_before' => false,
	'logged_in_as'         => false
] ); ?>
<!-- /Comment Form -->

<hr>

<?php $total_comments = get_comments_number(); ?>

<?php if ( $total_comments ) : ?>

	<div class="comment-list-wrapper">
		<h3 class="sr-only"><?php printf( _n( 'One Comment', '%s Comments', $total_comments, 'solid-state' ), $total_comments ); ?></h3>
		<ol class="comment-list">

			<?php
			wp_list_comments( [
				'max_depth'   => 2,
				'avatar_size' => 64,
				'style'       => 'ol',
				'type'        => 'comment'
			] );
			?>

		</ol>
	</div>

<?php endif; ?>