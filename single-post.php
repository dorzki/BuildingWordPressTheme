<?php get_header(); ?>

<!-- Main Content -->
<section id="wrapper">

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<!-- Post Header -->
			<header>
				<div class="inner">
					<h2><?php the_title(); ?></h2>
					<p><?php printf( __( 'Posted on %s by %s', 'solid-state' ), '<time datetime="' . get_the_time( 'c' ) . '">' . get_the_date() . '</time>', '<strong>' . get_the_author() . '</strong>' ); ?> </p>
				</div>
			</header>
			<!-- /Post Header -->

			<!-- Post Content -->
			<div class="wrapper">
				<div class="inner">
					<?php the_content(); ?>

					<p>
						<strong><?php esc_html_e( 'Filed under:', 'solid-state' ); ?></strong> <?php the_category( ', ' ); ?>
					</p>

					<!-- Post Navigation -->
					<div class="post-nav">
						<?php previous_post_link(); ?> &bullet; <?php next_post_link(); ?>
					</div>
					<!-- /Post Navigation -->

				</div>
			</div>
			<!-- /Post Content -->

		<?php endwhile; ?>

	<?php endif; ?>

</section>
<!-- /Main Content -->

<?php get_footer(); ?>
