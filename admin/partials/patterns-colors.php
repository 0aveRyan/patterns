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
	.demo-card {
		padding: 6px 18px;
		margin-bottom: 5px;
	}
	 span.token.markup:first-child {
		 margin-left: -6px !important;
	 }
</style>
<h3><?php _e('Color Helper Classes', 'patterns'); ?></h3>

<p><?php _e('These classes are defined by the current user\'s active Admin Color Scheme.', 'patterns'); ?></p>

<?php

global $_wp_admin_css_colors;
$current_user_id = get_current_user_id();
$current_user_scheme = get_user_meta( $current_user_id, 'admin_color', true );
$current_scheme_object = $_wp_admin_css_colors[$current_user_scheme];
$profile_url = admin_url('profile.php'); ?>

<p><?php _e( 'Your Admin Color Scheme is set to:', 'patterns' ); ?> <strong class="wp-ui-text-highlight"><?php echo
	$current_scheme_object->name; ?></strong> (<em><a href="<?php echo $profile_url; ?>">Edit Profile</a>)</em>.</p>

<h4><?php _e('Background Classes', 'patterns'); ?></h4>

<p><?php _e('The Background Classes also swap the text color (for paragraphs, spans and divs) to maintain
contrast. They do not change text color of heading elements.', 'patterns' ); ?></p>

<div class="demo-card wp-ui-primary">
	<p>.wp-ui-primary</p>
</div>

<div class="demo-card wp-ui-highlight">
	<p>.wp-ui-highlight</p>
</div>

<div class="demo-card wp-ui-notification">
	<p>.wp-ui-notification</p>
</div>

<h4><?php _e('Text Classes', 'patterns'); ?></h4>

<p class="wp-ui-text-primary"><strong>.wp-ui-text-primary</strong></p>

<p class="wp-ui-text-highlight"><strong>.wp-ui-text-highlight</strong></p>

<p class="wp-ui-text-notification"><strong>.wp-ui-text-notification</strong></p>

<h3><?php _e('General Colors Reference', 'patterns'); ?></h3>

<h5><?php _e('Page Background Color', 'patterns'); ?>: <code>#F1F1F1</code></h5>
<h5><?php _e('Menu Link', 'patterns'); ?>: <code>#FFF</code></h5>
<h5><?php _e('Headings', 'patterns'); ?>: <code>#23282D</code></h5>
<h5><?php _e('Body Text', 'patterns'); ?>: <code>#444</code></h5>
<h5><?php _e('Body Text Light', 'patterns'); ?>: <code>#777</code></h5>
<h5><?php _e('Body Link', 'patterns'); ?>: <code>#0073AA</code></h5>
<h5><?php _e('Body Link Focus (10 percent lighter)', 'patterns'); ?>: <code>#0096DD</code></h5>


<h3><?php _e('Notes and Tips', 'patterns'); ?></h3>

<p><?php _e('Be wary of using the <code>.wp-ui-text-primary</code> class
unless you have control to unset <strong>Light</strong> in all WordPress environments running your code. The default
 <strong>Light</strong> Admin Scheme sets <code>.wp-ui-text-primary</code> to a white-ish color
with little contrast to the background (it\'s illegible).', 'patterns'); ?></p>

<?php
echo ob_get_clean();

