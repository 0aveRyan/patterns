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
<h3><?php _e('Page Tabs - Full Width', 'patterns'); ?></h3>

</div><!-- close initial page wrap -->

<div class="wrap">

	<h1>Page Title</h1>

	<h2 class="nav-tab-wrapper">
		<a href="#" class="nav-tab nav-tab-active">Active Tab</a>
		<a href="#" class="nav-tab">Tab 2</a>
		<a href="#" class="nav-tab">Tab 3</a>
	</h2>
	<br /><br />
</div>

<div class="wrap">

	<h5><?php _e('PATTERN MARKUP', 'patterns'); ?></h5>

	<pre>
		<code class="language-php">
			<script type="text/plain">
				<div class="wrap">
					<h1>Page Title</h1>

					<h2 class="nav-tab-wrapper">
						<a href="#" class="nav-tab nav-tab-active">Active Tab</a>
						<a href="#" class="nav-tab">Tab 2</a>
						<a href="#" class="nav-tab">Tab 3</a>
					</h2>
				</div>
			</script>
		</code>
	</pre>
	<br /><br />

	<h3><?php _e('Large Page Tabs - About Wrap <code>(max-width: 1050px)</code>', 'patterns'); ?></h3>
</div>

<div class="wrap about-wrap">
	<h1>About Page Title</h1>
	<div class="about-text">About text treatment</div>
	<h2 class="nav-tab-wrapper">
		<a href="#" class="nav-tab nav-tab-active">Active Tab</a>
		<a href="#" class="nav-tab">Tab 2</a>
		<a href="#" class="nav-tab">Tab 3</a>
	</h2>
</div>

<div class="wrap">
	<h5><?php _e('PATTERN MARKUP', 'patterns'); ?></h5>

	<pre>
		<code class="language-php">
			<script type="text/plain">
				<div class="wrap about-wrap">
					<h1>About Page Title</h1>
					<div class="about-text">About text treatment</div>
					<h2 class="nav-tab-wrapper">
						<a href="#" class="nav-tab nav-tab-active">Active Tab</a>
						<a href="#" class="nav-tab">Tab 2</a>
						<a href="#" class="nav-tab">Tab 3</a>
					</h2>
				</div>
			</script>
		</code>
	</pre>


<h3><?php _e('Notes and Tips', 'patterns'); ?></h3>

<p><?php _e( 'A page can have multiple wraps. Integrating elements that require the <code>.about-wrap</code> class
can be inserted by closing the main full-width wrap, inserting the about-wrap and restarting the full-width wrap.', 'patterns'); ?></p>

<?php
echo ob_get_clean();

