<section id="footer">
	<div class="inner">
		<h2 class="major"><?php _e( 'Get in touch', 'solid-state' ); ?></h2>
		<p>Cras mattis ante fermentum, malesuada neque vitae, eleifend erat. Phasellus non pulvinar erat. Fusce
			tincidunt, nisl eget mattis egestas, purus ipsum consequat orci, sit amet lobortis lorem lacus in tellus.
			Sed ac elementum arcu. Quisque placerat auctor laoreet.</p>

		<!-- CONTACT FORM -->
		<?php get_template_part( 'templates/contact', 'form' ); ?>
		<!-- /CONTACT FORM -->

		<!-- CONTACT DETAILS -->
		<?php get_template_part( 'templates/contact', 'details' ); ?>
		<!-- /CONTACT DETAILS -->

		<ul class="copyright">
			<li>&copy; <?php bloginfo( 'name' ); ?> <?php _e( 'All rights reserved.', 'solid-state' ); ?></li>
			<li><?php _e( 'Design:', 'solid-state' ); ?> <a
						href="http://html5up.net"><?php _e( 'HTML5 UP', 'solid-state' ); ?></a></li>
		</ul>
	</div>
</section>
</div>
<?php wp_footer(); ?>
</body>
</html>