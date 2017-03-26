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
<div class="welcome-panel">
	<div class="welcome-panel-content">
		<h2>Panel Title</h2>
		<p class="about-description">Subtitle</p>
		<div class="welcome-panel-column-container">
			<div class="welcome-panel-column">
				<h3>Column Title</h3>
				<a class="button button-primary button-hero" href="#">Call to Action</a>
				<p>or, <a href="#">another option</a></p>
			</div>
			<div class="welcome-panel-column">
				<h3>Column Title</h3>
				<ul>
					<li><a href="#" class="welcome-icon welcome-write-blog">Item One</a></li>
					<li><a href="#" class="welcome-icon welcome-add-page">Item Two</a></li>
					<li><a href="#" class="welcome-icon welcome-view-site">Item Three</a></li>
				</ul>
			</div>
			<div class="welcome-panel-column welcome-panel-last">
				<h3>Column Title</h3>
				<ul>
					<li><div class="welcome-icon welcome-widgets-menus">Manage <a href="#">Item One</a></div></li>
					<li><a href="#" class="welcome-icon welcome-comments">Item Two</a></li>
					<li><a href="#" class="welcome-icon welcome-learn-more">Item Three</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<h5><?php _e('PATTERN MARKUP', 'patterns'); ?></h5>

<pre>
	<code class="language-php">
		<script type="text/plain">
			<div class="welcome-panel">
				<div class="welcome-panel-content">
					<h2>Panel Title</h2>
					<p class="about-description">Subtitle</p>
					<div class="welcome-panel-column-container">
						<div class="welcome-panel-column">
							<h3>Column Title</h3>
							<a class="button button-primary button-hero" href="#">Call to Action</a>
							<p>or, <a href="#">another option</a></p>
						</div>
						<div class="welcome-panel-column">
							<h3>Column Title</h3>
							<ul>
								<li><a href="#" class="welcome-icon welcome-write-blog">Item One</a></li>
								<li><a href="#" class="welcome-icon welcome-add-page">Item Two</a></li>
								<li><a href="#" class="welcome-icon welcome-view-site">Item Three</a></li>
							</ul>
						</div>
						<div class="welcome-panel-column welcome-panel-last">
							<h3>Column Title</h3>
							<ul>
								<li>
									<div class="welcome-icon welcome-widgets-menus">
										Manage <a href="#">Item One</a>
									</div>
								</li>
								<li><a href="#" class="welcome-icon welcome-comments">Item Two</a></li>
								<li><a href="#" class="welcome-icon welcome-learn-more">Item Three</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</script>
	</code>
</pre>

<?php
echo ob_get_clean();

