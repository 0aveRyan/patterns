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

</div>

<div class="wrap">

<h3><?php _e('Coming Soon!', 'patterns'); ?></h3>

<h5><?php _e('PATTERN MARKUP', 'patterns'); ?></h5>

<pre>
	<code class="language-php">
		<script type="text/plain">
			<h3><?php _e('Coming Soon!', 'patterns'); ?></h3>
		</script>
	</code>
</pre>

<?php
echo ob_get_clean();

