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
<h3><?php _e('Buttons', 'patterns'); ?></h3>

<p><?php _e('Button classes may be applied to input elements or anchor elements.', 'patterns'); ?></p>

<h4><?php _e('Primary Button', 'patterns'); ?></h4>

<a href="#" class="button button-primary"><?php _e('Primary Button', 'patterns'); ?></a>
	<br /><br />
<input type="button" class="button button-primary" value="<?php _e('Primary Button', 'patterns'); ?>" />
	<br /><br />

<h5><?php _e('PATTERN MARKUP', 'patterns'); ?></h5>

<pre>
	<code class="language-php">
		<script type="text/plain">
		  <a href="#" class="button button-primary"><?php _e('Primary Button', 'patterns'); ?></a>
		  <input type="button" class="button button-primary" value="<?php _e('Primary Button', 'patterns'); ?>" />
		</script>
	</code>
</pre>

<h4><?php _e('Secondary Button', 'patterns'); ?></h4>

<a href="#" class="button button-secondary"><?php _e('Secondary Button', 'patterns'); ?></a>
	<br /><br />
<input type="button" class="button button-secondary" value="<?php _e('Secondary Button', 'patterns'); ?>" />
	<br /><br />

<h5><?php _e('PATTERN MARKUP', 'patterns'); ?></h5>

<pre>
	<code class="language-php">
		<script type="text/plain">
		  <a href="#" class="button button-secondary"><?php _e('Secondary Button','patterns');?></a>
		  <input type="button" class="button button-secondary" value="<?php _e('Secondary Button', 'patterns'); ?>" />
		</script>
	</code>
</pre>

<h4><?php _e('Hero Button Size', 'patterns'); ?></h4>

<a href="#" class="button button-primary button-hero"><?php _e('Hero Button', 'patterns'); ?></a>
	<br /><br />
<input type="button" class="button button-primary button-hero" value="<?php _e('Hero Button', 'patterns'); ?>" />
	<br /><br />

<h5><?php _e('PATTERN MARKUP', 'patterns'); ?></h5>

<pre>
	<code class="language-php">
		<script type="text/plain">
		<a href="#" class="button button-primary button-hero"><?php _e('Hero Button', 'patterns'); ?></a>
		<input type="button" class="button button-primary button-hero" value="<?php _e('Hero Button', 'patterns');?>" />
		</script>
	</code>
</pre>
	<br /><br />
<a href="#" class="button button-secondary button-hero"><?php _e('Hero Button', 'patterns'); ?></a>
	<br /><br />
<input type="button" class="button button-secondary button-hero" value="<?php _e('Hero Button', 'patterns'); ?>" />
	<br /><br />

<h5><?php _e('PATTERN MARKUP', 'patterns'); ?></h5>

<pre>
	<code class="language-php">
		<script type="text/plain">
		<a href="#" class="button button-secondary button-hero"><?php _e('Hero Button', 'patterns'); ?></a>
		<input type="button" class="button button-secondary button-hero" value="<?php _e('Hero Button', 'patterns'); ?>" />
		</script>
	</code>
</pre>
<h3><?php _e('Notes and Tips', 'patterns'); ?></h3>

<p><?php _e('If everything is special, nothing is special. <a href="http://adrianroselli
.com/2016/01/links-buttons-submits-and-divs-oh-hell.html">This post explains buttons vs. anchor links</a> if you have
questions about use.', 'patterns'); ?></p>

<p><?php _e('To use a Dashicon in a button, there are no default styles. Sizing, positioning and color must be done
in custom CSS (reference the Add Media button the Post Screen).'); ?></p>

<?php
echo ob_get_clean();

