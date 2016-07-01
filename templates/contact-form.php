<form method="post" action="#">
	<div class="field">
		<label for="name"><?php _e( 'Name', 'solid-state' ); ?></label>
		<input type="text" name="name" id="name" />
	</div>
	<div class="field">
		<label for="email"><?php _e( 'Email', 'solid-state' ); ?></label>
		<input type="email" name="email" id="email" />
	</div>
	<div class="field">
		<label for="message"><? _e( 'Message', 'solid-state' ); ?></label>
		<textarea name="message" id="message" rows="4"></textarea>
	</div>
	<ul class="actions">
		<li><input type="submit" value="<?php _e( 'Send Message', 'solid-state' ); ?>" /></li>
	</ul>
</form>