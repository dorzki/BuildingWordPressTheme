<article <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>" class="image"><?php the_post_thumbnail(); ?></a>
	<h3 class="major"><?php the_title(); ?></h3>
	<?php the_excerpt(); ?>
	<a href="<?php the_permalink(); ?>" class="special"><?php esc_html_e( 'Learn more', 'solid-state' ); ?></a>
</article>