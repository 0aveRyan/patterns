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
<h3><?php _e('Admin Notices', 'patterns'); ?></h3>

<p><?php _e('No matter where they are output in the DOM, Admin Notices are moved to immediately below the page\'s &lt;
h1&gt;.', 'patterns'); ?></p>

<h4><?php _e('Success Notice', 'patterns'); ?></h4>

<div class="notice notice-success">
	<p>This is a success notice.</p>
</div>

<h5><?php _e('PATTERN MARKUP', 'patterns'); ?></h5>

<pre>
	<code class="language-html">
		<script type="text/plain">
			<div class="notice notice-success">
				<p>This is a success notice.</p>
			</div>
		</script>
	</code>
</pre>

<h4><?php _e('Error Notice', 'patterns'); ?></h4>

<div class="notice notice-error">
	<p>This is an error notice.</p>
</div>

<h5><?php _e('PATTERN MARKUP', 'patterns'); ?></h5>

<pre>
	<code class="language-html">
		<script type="text/plain">
			<div class="notice notice-error">
				<p>This is an error notice.</p>
			</div>
		</script>
	</code>
</pre>

<h4><?php _e('Warning Notice', 'patterns'); ?></h4>

<div class="notice notice-warning">
	<p>This is a warning notice.</p>
</div>

<h5><?php _e('PATTERN MARKUP', 'patterns'); ?></h5>

<pre>
	<code class="language-html">
		<script type="text/plain">
			<div class="notice notice-warning">
				<p>This is a warning notice.</p>
			</div>
		</script>
	</code>
</pre>

<h4><?php _e('Info Notice (set as dismissible)', 'patterns'); ?></h4>

<div class="notice notice-info is-dismissible">
	<p>This is an info notice.</p>
</div>

<h5><?php _e('PATTERN MARKUP', 'patterns'); ?></h5>

<pre>
	<code class="language-html">
		<script type="text/plain">
			<div class="notice notice-info is-dismissible">
				<p>This is an info notice.</p>
			</div>
		</script>
	</code>
</pre>

<h4><?php _e('Dismissable Notices', 'patterns'); ?></h4>

From the WordPress Codex:<br />
<blockquote>
	The class name <code>.is-dismissible</code> will automatically trigger a closing icon to be added to your message
	via JavaScript. Its behavior, however, applies only on the current screen. It will not prevent a message from
	re-appearing once the page re-loads, or another page is loaded.
</blockquote>

<h3><?php _e('Notes and Tips', 'patterns'); ?></h3>
From the WordPress Codex:<br />
<blockquote><?php _e('Don’t use <code>.update-nag</code> as a class name! It is not suitable for regular admin notices, as it
will apply
different layout styling to the message. Additionally it will trigger the message to be moved above the page title
(&lt;h1&gt;), thus semantically prioritizing it above other notices which is not likely to be appropriate in a plugin or
theme context.', 'patterns'); ?></blockquote>

<?php
echo ob_get_clean();

