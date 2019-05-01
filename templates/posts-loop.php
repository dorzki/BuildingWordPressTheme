<section class="features">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'templates/regular-post' ); ?>

	<?php endwhile; ?>

	<ul class="actions">
		<li><?php next_posts_link(); ?></li>
		<li><?php previous_posts_link(); ?></li>
	</ul>
</section>