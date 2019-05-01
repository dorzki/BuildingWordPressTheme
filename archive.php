<?php get_header(); ?>

<!-- Main Content -->
<section id="wrapper">

	<?php if ( have_posts() ) : ?>

		<section id="four" class="wrapper alt style1">
			<div class="inner">
				<h2 class="major"><?php the_archive_title(); ?></h2>
				<?php the_archive_description( '<p class="description">', '</p>' ); ?>

				<!-- Posts Loop -->
				<?php get_template_part( 'templates/posts-loop' ); ?>
				<!-- /Posts Loop -->

			</div>
		</section>

	<?php endif; ?>

</section>
<!-- /Main Content -->

<?php get_footer(); ?>
