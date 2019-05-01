<?php get_header(); ?>

	<!-- Main Content -->
	<section id="wrapper">

		<?php if ( have_posts() ) : ?>

			<section id="four" class="wrapper alt style1">
				<div class="inner">
					<h2 class="major"><?php esc_html_e( 'Latest Posts', 'solid-state' ); ?></h2>

					<!-- Posts Loop -->
					<?php get_template_part( 'templates/posts-loop' ); ?>
					<!-- /Posts Loop -->

				</div>
			</section>

		<?php endif; ?>

	</section>
	<!-- /Main Content -->

<?php get_footer(); ?>