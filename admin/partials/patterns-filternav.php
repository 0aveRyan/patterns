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
<div class="wp-filter">
	<div class="filter-count">
		<span class="count theme-count">15</span>
	</div>

	<ul class="filter-links">
		<li><a href="#" data-sort="featured" class="current">Featured</a></li>
		<li><a href="#" data-sort="popular">Popular</a></li>
		<li><a href="#" data-sort="new">Latest</a></li>
		<li><a href="#" data-sort="favorites">Favorites</a></li>
	</ul>

	<a class="drawer-toggle" href="#">Feature Filter</a>

	<div class="search-form"><label class="screen-reader-text" for="wp-filter-search-input">Search Themes</label><input placeholder="Search themes..." type="search" aria-describedby="live-search-desc" id="wp-filter-search-input" class="wp-filter-search"></div>

	<div class="favorites-form">
		<p class="install-help">If you have marked themes as favorites on WordPress.org, you can browse them here.</p>

		<p>
			<label for="user">Your WordPress.org username:</label>
			<input type="search" id="wporg-username-input" value="">
			<input type="button" class="button button-secondary favorites-form-submit" value="Get Favorites">
		</p>
	</div>

	<div class="filter-drawer">
		<div class="buttons">
			<a class="apply-filters button button-secondary" href="#">Apply Filters<span></span></a>
			<a class="clear-filters button button-secondary" href="#">Clear</a>
		</div>
		<fieldset class="filter-group"><legend>Colors</legend><div class="filter-group-feature"><input type="checkbox" id="filter-id-black" value="black"> <label for="filter-id-black">Black</label><br><input type="checkbox" id="filter-id-blue" value="blue"> <label for="filter-id-blue">Blue</label><br><input type="checkbox" id="filter-id-brown" value="brown"> <label for="filter-id-brown">Brown</label><br><input type="checkbox" id="filter-id-gray" value="gray"> <label for="filter-id-gray">Gray</label><br><input type="checkbox" id="filter-id-green" value="green"> <label for="filter-id-green">Green</label><br><input type="checkbox" id="filter-id-orange" value="orange"> <label for="filter-id-orange">Orange</label><br><input type="checkbox" id="filter-id-pink" value="pink"> <label for="filter-id-pink">Pink</label><br><input type="checkbox" id="filter-id-purple" value="purple"> <label for="filter-id-purple">Purple</label><br><input type="checkbox" id="filter-id-red" value="red"> <label for="filter-id-red">Red</label><br><input type="checkbox" id="filter-id-silver" value="silver"> <label for="filter-id-silver">Silver</label><br><input type="checkbox" id="filter-id-tan" value="tan"> <label for="filter-id-tan">Tan</label><br><input type="checkbox" id="filter-id-white" value="white"> <label for="filter-id-white">White</label><br><input type="checkbox" id="filter-id-yellow" value="yellow"> <label for="filter-id-yellow">Yellow</label><br><input type="checkbox" id="filter-id-dark" value="dark"> <label for="filter-id-dark">Dark</label><br><input type="checkbox" id="filter-id-light" value="light"> <label for="filter-id-light">Light</label><br></div></fieldset><fieldset class="filter-group"><legend>Layout</legend><div class="filter-group-feature"><input type="checkbox" id="filter-id-fixed-layout" value="fixed-layout"> <label for="filter-id-fixed-layout">Fixed Layout</label><br><input type="checkbox" id="filter-id-fluid-layout" value="fluid-layout"> <label for="filter-id-fluid-layout">Fluid Layout</label><br><input type="checkbox" id="filter-id-responsive-layout" value="responsive-layout"> <label for="filter-id-responsive-layout">Responsive Layout</label><br><input type="checkbox" id="filter-id-one-column" value="one-column"> <label for="filter-id-one-column">One Column</label><br><input type="checkbox" id="filter-id-two-columns" value="two-columns"> <label for="filter-id-two-columns">Two Columns</label><br><input type="checkbox" id="filter-id-three-columns" value="three-columns"> <label for="filter-id-three-columns">Three Columns</label><br><input type="checkbox" id="filter-id-four-columns" value="four-columns"> <label for="filter-id-four-columns">Four Columns</label><br><input type="checkbox" id="filter-id-left-sidebar" value="left-sidebar"> <label for="filter-id-left-sidebar">Left Sidebar</label><br><input type="checkbox" id="filter-id-right-sidebar" value="right-sidebar"> <label for="filter-id-right-sidebar">Right Sidebar</label><br></div></fieldset><fieldset class="filter-group"><legend>Features</legend><div class="filter-group-feature"><input type="checkbox" id="filter-id-accessibility-ready" value="accessibility-ready"> <label for="filter-id-accessibility-ready">Accessibility Ready</label><br><input type="checkbox" id="filter-id-blavatar" value="blavatar"> <label for="filter-id-blavatar">Blavatar</label><br><input type="checkbox" id="filter-id-buddypress" value="buddypress"> <label for="filter-id-buddypress">BuddyPress</label><br><input type="checkbox" id="filter-id-custom-background" value="custom-background"> <label for="filter-id-custom-background">Custom Background</label><br><input type="checkbox" id="filter-id-custom-colors" value="custom-colors"> <label for="filter-id-custom-colors">Custom Colors</label><br><input type="checkbox" id="filter-id-custom-header" value="custom-header"> <label for="filter-id-custom-header">Custom Header</label><br><input type="checkbox" id="filter-id-custom-menu" value="custom-menu"> <label for="filter-id-custom-menu">Custom Menu</label><br><input type="checkbox" id="filter-id-editor-style" value="editor-style"> <label for="filter-id-editor-style">Editor Style</label><br><input type="checkbox" id="filter-id-featured-image-header" value="featured-image-header"> <label for="filter-id-featured-image-header">Featured Image Header</label><br><input type="checkbox" id="filter-id-featured-images" value="featured-images"> <label for="filter-id-featured-images">Featured Images</label><br><input type="checkbox" id="filter-id-flexible-header" value="flexible-header"> <label for="filter-id-flexible-header">Flexible Header</label><br><input type="checkbox" id="filter-id-front-page-post-form" value="front-page-post-form"> <label for="filter-id-front-page-post-form">Front Page Posting</label><br><input type="checkbox" id="filter-id-full-width-template" value="full-width-template"> <label for="filter-id-full-width-template">Full Width Template</label><br><input type="checkbox" id="filter-id-microformats" value="microformats"> <label for="filter-id-microformats">Microformats</label><br><input type="checkbox" id="filter-id-post-formats" value="post-formats"> <label for="filter-id-post-formats">Post Formats</label><br><input type="checkbox" id="filter-id-rtl-language-support" value="rtl-language-support"> <label for="filter-id-rtl-language-support">RTL Language Support</label><br><input type="checkbox" id="filter-id-sticky-post" value="sticky-post"> <label for="filter-id-sticky-post">Sticky Post</label><br><input type="checkbox" id="filter-id-theme-options" value="theme-options"> <label for="filter-id-theme-options">Theme Options</label><br><input type="checkbox" id="filter-id-threaded-comments" value="threaded-comments"> <label for="filter-id-threaded-comments">Threaded Comments</label><br><input type="checkbox" id="filter-id-translation-ready" value="translation-ready"> <label for="filter-id-translation-ready">Translation Ready</label><br></div></fieldset><fieldset class="filter-group"><legend>Subject</legend><div class="filter-group-feature"><input type="checkbox" id="filter-id-holiday" value="holiday"> <label for="filter-id-holiday">Holiday</label><br><input type="checkbox" id="filter-id-photoblogging" value="photoblogging"> <label for="filter-id-photoblogging">Photoblogging</label><br><input type="checkbox" id="filter-id-seasonal" value="seasonal"> <label for="filter-id-seasonal">Seasonal</label><br></div></fieldset>			<div class="filtered-by">
			<span>Filtering by:</span>
			<div class="tags"></div>
			<a href="#">Edit</a>
		</div>
	</div>
</div>

<h5><?php _e('PATTERN MARKUP', 'patterns'); ?></h5>

<pre>
	<code class="language-php">
		<script type="text/plain">
			<div class="wp-filter">
				<div class="filter-count">
					<span class="count theme-count">15</span>
				</div>

				<ul class="filter-links">
					<li><a href="#" data-sort="featured" class="current">Featured</a></li>
					<li><a href="#" data-sort="popular">Popular</a></li>
					<li><a href="#" data-sort="new">Latest</a></li>
					<li><a href="#" data-sort="favorites">Favorites</a></li>
				</ul>

				<a class="drawer-toggle" href="#">Feature Filter</a>

				<div class="search-form"><label class="screen-reader-text" for="wp-filter-search-input">Search Themes</label><input placeholder="Search themes..." type="search" aria-describedby="live-search-desc" id="wp-filter-search-input" class="wp-filter-search"></div>

				<div class="favorites-form">
					<p class="install-help">If you have marked themes as favorites on WordPress.org, you can browse them here.</p>

					<p>
						<label for="user">Your WordPress.org username:</label>
						<input type="search" id="wporg-username-input" value="">
						<input type="button" class="button button-secondary favorites-form-submit" value="Get Favorites">
					</p>
				</div>

				<div class="filter-drawer">
					<div class="buttons">
						<a class="apply-filters button button-secondary" href="#">Apply Filters<span></span></a>
						<a class="clear-filters button button-secondary" href="#">Clear</a>
					</div>
					<fieldset class="filter-group"><legend>Colors</legend><div class="filter-group-feature"><input type="checkbox" id="filter-id-black" value="black"> <label for="filter-id-black">Black</label><br><input type="checkbox" id="filter-id-blue" value="blue"> <label for="filter-id-blue">Blue</label><br><input type="checkbox" id="filter-id-brown" value="brown"> <label for="filter-id-brown">Brown</label><br><input type="checkbox" id="filter-id-gray" value="gray"> <label for="filter-id-gray">Gray</label><br><input type="checkbox" id="filter-id-green" value="green"> <label for="filter-id-green">Green</label><br><input type="checkbox" id="filter-id-orange" value="orange"> <label for="filter-id-orange">Orange</label><br><input type="checkbox" id="filter-id-pink" value="pink"> <label for="filter-id-pink">Pink</label><br><input type="checkbox" id="filter-id-purple" value="purple"> <label for="filter-id-purple">Purple</label><br><input type="checkbox" id="filter-id-red" value="red"> <label for="filter-id-red">Red</label><br><input type="checkbox" id="filter-id-silver" value="silver"> <label for="filter-id-silver">Silver</label><br><input type="checkbox" id="filter-id-tan" value="tan"> <label for="filter-id-tan">Tan</label><br><input type="checkbox" id="filter-id-white" value="white"> <label for="filter-id-white">White</label><br><input type="checkbox" id="filter-id-yellow" value="yellow"> <label for="filter-id-yellow">Yellow</label><br><input type="checkbox" id="filter-id-dark" value="dark"> <label for="filter-id-dark">Dark</label><br><input type="checkbox" id="filter-id-light" value="light"> <label for="filter-id-light">Light</label><br></div></fieldset><fieldset class="filter-group"><legend>Layout</legend><div class="filter-group-feature"><input type="checkbox" id="filter-id-fixed-layout" value="fixed-layout"> <label for="filter-id-fixed-layout">Fixed Layout</label><br><input type="checkbox" id="filter-id-fluid-layout" value="fluid-layout"> <label for="filter-id-fluid-layout">Fluid Layout</label><br><input type="checkbox" id="filter-id-responsive-layout" value="responsive-layout"> <label for="filter-id-responsive-layout">Responsive Layout</label><br><input type="checkbox" id="filter-id-one-column" value="one-column"> <label for="filter-id-one-column">One Column</label><br><input type="checkbox" id="filter-id-two-columns" value="two-columns"> <label for="filter-id-two-columns">Two Columns</label><br><input type="checkbox" id="filter-id-three-columns" value="three-columns"> <label for="filter-id-three-columns">Three Columns</label><br><input type="checkbox" id="filter-id-four-columns" value="four-columns"> <label for="filter-id-four-columns">Four Columns</label><br><input type="checkbox" id="filter-id-left-sidebar" value="left-sidebar"> <label for="filter-id-left-sidebar">Left Sidebar</label><br><input type="checkbox" id="filter-id-right-sidebar" value="right-sidebar"> <label for="filter-id-right-sidebar">Right Sidebar</label><br></div></fieldset><fieldset class="filter-group"><legend>Features</legend><div class="filter-group-feature"><input type="checkbox" id="filter-id-accessibility-ready" value="accessibility-ready"> <label for="filter-id-accessibility-ready">Accessibility Ready</label><br><input type="checkbox" id="filter-id-blavatar" value="blavatar"> <label for="filter-id-blavatar">Blavatar</label><br><input type="checkbox" id="filter-id-buddypress" value="buddypress"> <label for="filter-id-buddypress">BuddyPress</label><br><input type="checkbox" id="filter-id-custom-background" value="custom-background"> <label for="filter-id-custom-background">Custom Background</label><br><input type="checkbox" id="filter-id-custom-colors" value="custom-colors"> <label for="filter-id-custom-colors">Custom Colors</label><br><input type="checkbox" id="filter-id-custom-header" value="custom-header"> <label for="filter-id-custom-header">Custom Header</label><br><input type="checkbox" id="filter-id-custom-menu" value="custom-menu"> <label for="filter-id-custom-menu">Custom Menu</label><br><input type="checkbox" id="filter-id-editor-style" value="editor-style"> <label for="filter-id-editor-style">Editor Style</label><br><input type="checkbox" id="filter-id-featured-image-header" value="featured-image-header"> <label for="filter-id-featured-image-header">Featured Image Header</label><br><input type="checkbox" id="filter-id-featured-images" value="featured-images"> <label for="filter-id-featured-images">Featured Images</label><br><input type="checkbox" id="filter-id-flexible-header" value="flexible-header"> <label for="filter-id-flexible-header">Flexible Header</label><br><input type="checkbox" id="filter-id-front-page-post-form" value="front-page-post-form"> <label for="filter-id-front-page-post-form">Front Page Posting</label><br><input type="checkbox" id="filter-id-full-width-template" value="full-width-template"> <label for="filter-id-full-width-template">Full Width Template</label><br><input type="checkbox" id="filter-id-microformats" value="microformats"> <label for="filter-id-microformats">Microformats</label><br><input type="checkbox" id="filter-id-post-formats" value="post-formats"> <label for="filter-id-post-formats">Post Formats</label><br><input type="checkbox" id="filter-id-rtl-language-support" value="rtl-language-support"> <label for="filter-id-rtl-language-support">RTL Language Support</label><br><input type="checkbox" id="filter-id-sticky-post" value="sticky-post"> <label for="filter-id-sticky-post">Sticky Post</label><br><input type="checkbox" id="filter-id-theme-options" value="theme-options"> <label for="filter-id-theme-options">Theme Options</label><br><input type="checkbox" id="filter-id-threaded-comments" value="threaded-comments"> <label for="filter-id-threaded-comments">Threaded Comments</label><br><input type="checkbox" id="filter-id-translation-ready" value="translation-ready"> <label for="filter-id-translation-ready">Translation Ready</label><br></div></fieldset><fieldset class="filter-group"><legend>Subject</legend><div class="filter-group-feature"><input type="checkbox" id="filter-id-holiday" value="holiday"> <label for="filter-id-holiday">Holiday</label><br><input type="checkbox" id="filter-id-photoblogging" value="photoblogging"> <label for="filter-id-photoblogging">Photoblogging</label><br><input type="checkbox" id="filter-id-seasonal" value="seasonal"> <label for="filter-id-seasonal">Seasonal</label><br></div></fieldset>			<div class="filtered-by">
						<span>Filtering by:</span>
						<div class="tags"></div>
						<a href="#">Edit</a>
					</div>
				</div>
			</div>
		</script>
	</code>
</pre>

<?php
echo ob_get_clean();

