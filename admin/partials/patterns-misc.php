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

<div class="card">
	<h2>Dashicons</h2>
	<p>The included Icon Font in WordPress</p>
	<a href="https://developer.wordpress.org/resource/dashicons/">Icon Reference</a>
</div>

<div class="card">
	<h2>Important Breakpoints</h2>
	<ul>
		<li>At < 920px, Admin Menu compresses.</li>
		<li>At < 782px, Admin Menu pushes into left hamburger menu toggle.</li>
	</ul>
</div>

<?php
echo ob_get_clean();

