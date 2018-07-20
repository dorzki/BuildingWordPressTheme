<?php get_header(); ?>

	<!-- Main Content -->
	<section id="wrapper">

		<?php if ( have_posts() ) : ?>

			<section id="four" class="wrapper alt style1">
				<div class="inner">
					<h2 class="major"><?php esc_html_e( 'Latest Posts', 'solid-state' ); ?></h2>
					<section class="features">

						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'templates/regular-post' ); ?>

						<?php endwhile; ?>

						<ul class="actions">
							<li><?php next_posts_link(); ?></li>
							<li><?php previous_posts_link(); ?></li>
						</ul>
					</section>
				</div>
			</section>

		<?php endif; ?>

	</section>
	<!-- /Main Content -->

<?php get_footer(); ?>