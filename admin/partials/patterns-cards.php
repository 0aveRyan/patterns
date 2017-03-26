<?php

/**
 * Overview Tab Partial
 *
 * Where the fun begins!
 *
 * @link       http://dryanpress.net
 * @since      1.0.0
 *
 * @package    Patterns
 * @subpackage Patterns/admin/partials
 */

ob_start(); ?>
<style>
	span.token.markup:first-child {
		margin-left: -6px !important;
	}
</style>
<h3><?php _e('Cards', 'patterns'); ?></h3>

<div class="card">
	<h2><?php _e('Card Title', 'patterns'); ?></h2>
	<p><?php _e('Card Content', 'patterns'); ?></p>
</div>

<h5><?php _e('PATTERN MARKUP', 'patterns'); ?></h5>

<pre>
	<code class="language-php">
		<script type="text/plain">
			<div class="card">
				<h2><?php _e('Card Title', 'patterns'); ?></h2>
				<p><?php _e('Card Content', 'patterns'); ?></p>
			</div>
		</script>
	</code>
</pre>

<h3><?php _e('Notes and Tips', 'patterns'); ?></h3>

<p><?php _e( 'Cards receive a default <code>max-width:520px;</code>, but work well with a <code>max-width:100%;</code>
in a responsive grid.', 'patterns'); ?></p>

<?php
echo ob_get_clean();

