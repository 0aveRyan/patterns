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

<div class="wrap about-wrap patterns-overview-wrap">
	<h1>WordPress Admin Patterns</h1>

	<div class="about-text">
		<?php _e('Pattern Library for Theme and Plugin Developers to aide in building Admin interfaces consistient
		with WordPress Core.', $this->plugin_name ); ?>
	</div>

	<p class="wp-ui-text-highlight">
		<em><?php _e('Last updated March 2017, WordPress 4.7.3', $this->plugin_name ); ?></em>
	</p>

	<div class="wp-badge">Patterns</div>

	<hr />

	<p>The best WordPress Plugins and Themes often extend WordPress Core design patterns.</p>
	<p>There are numerous advantages over writing custom CSS, particularly not bloating pages with 3rd party front-end
		frameworks, but also the benefits of user familiarity, a sense of congruity, sound responsive styles and
		striving to be both accessible and RTL-friendly.</p>

	<h3 class="wp-ui-text-notification">Warning</h3>
	<p>That said, as the WordPress Admin UI changes, it is up to you to keep up with the times, and its possible changes
		or deprecated styles could break your design with Core updates.</p>

	<h3>Contributing</h3>
	<p>There's a great deal still to do! jQuery UI elements, hardening the existing patterns, linking off to Codex
		and Developer Reference pages on WordPress.org. Pull Requests and Issues are welcome on the GitHub repo!</p>

	<h3>Shoutouts and Credit</h3>
	<p>Lots of gratitude to WordPress Core Contributors who've made great strides with MP6.</p>
	<p>This plugin was inspired by and borrows from Helen Hou-Sandí's Pattern Library / wp-style-guide plugin.</p>

</div>

<?php
echo ob_get_clean();

