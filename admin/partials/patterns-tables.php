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
<h3><?php _e('Simple Striped Table', 'patterns'); ?></h3>

<table class="widefat striped">
	<tbody>
		<tr>
			<td class="row-title"><a href="#" title="Item One">Item One</a></td>
			<td class="desc">Short item description</td>
		</tr>
		<tr>
			<td class="row-title"><a href="#" title="Item Two">Item Two</a></td>
			<td class="desc">Short item description</td>
		</tr>
		<tr>
			<td class="row-title"><a href="#" title="Item Three">Item Three</a></td>
			<td class="desc">Short item description</td>
		</tr>
		<tr>
			<td class="row-title"><a href="#" title="Item Four">Item Four</a></td>
			<td class="desc">Short item description</td>
		</tr>
	</tbody>
</table>

<h5><?php _e('PATTERN MARKUP', 'patterns' ); ?></h5>

<pre>
	<code class="language-php">
		<script type="text/plain">
			<table class="widefat striped">
				<tbody>
					<tr>
						<td class="row-title">
							<a href="#" title="Item One">Item One</a>
						</td>
						<td class="desc">Short item description</td>
					</tr>
					<tr>
						<td class="row-title">
							<a href="#" title="Item Two">Item Two</a>
						</td>
						<td class="desc">Short item description</td>
					</tr>
					<tr>
						<td class="row-title">
							<a href="#" title="Item Three">Item Three</a>
						</td>
						<td class="desc">Short item description</td>
					</tr>
					<tr>
						<td class="row-title">
							<a href="#" title="Item Four">Item Four</a>
						</td>
						<td class="desc">Short item description</td>
					</tr>
				</tbody>
			</table>
		</script>
	</code>
</pre>

<br /><br />

<h3><?php _e( 'Simple List Table (Responsive Collapse)', 'patterns' ); ?></h3>

<table class="wp-list-table widefat fixed striped">
	<thead>
	<tr>
		<th scope="col" class="column-primary">Event</th>
		<th scope="col">Start Date</th>
		<th scope="col">End Date</th>
		<th scope="col">Location</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td class="column-primary" data-colname="Event">
			WordCamp Metropolis
			<button type="button" class="toggle-row"><span class="screen-reader-text">Show more details</span></button>
		</td>
		<td data-colname="Start Date">
			2020-01-01
		</td>
		<td data-colname="End Date">
			2020-01-04
		</td>
		<td data-colname="Location">
			The Daily Planet
		</td>
	</tr>
	<tr>
		<td class="column-primary" data-colname="Event">
			WordCamp Jupiter Station
			<button type="button" class="toggle-row"><span class="screen-reader-text">Show more details</span></button>
		</td>
		<td data-colname="Start Date">
			2370-01-01
		</td>
		<td data-colname="End Date">
			2370-01-04
		</td>
		<td data-colname="Location">
			Holodeck 4
		</td>
	</tr>
	</tbody>
</table>

<h5><?php _e('PATTERN MARKUP', 'patterns' ); ?></h5>

<pre>
	<code class="language-php">
		<script type="text/plain">
			<table class="wp-list-table widefat fixed striped">
				<thead>
					<tr>
						<th scope="col" class="column-primary">Event</th>
						<th scope="col">Start Date</th>
						<th scope="col">End Date</th>
						<th scope="col">Location</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="column-primary" data-colname="Event">
							WordCamp Metropolis
							<button type="button" class="toggle-row">
								<span class="screen-reader-text">Show more details</span>
							</button>
						</td>
						<td data-colname="Start Date">
							2020-01-01
						</td>
						<td data-colname="End Date">
							2020-01-04
						</td>
						<td data-colname="Location">
							The Daily Planet
						</td>
					</tr>
					<tr>
						<td class="column-primary" data-colname="Event">
							WordCamp Jupiter Station
							<button type="button" class="toggle-row">
								<span class="screen-reader-text">Show more details</span>
							</button>
						</td>
						<td data-colname="Start Date">
							2370-01-01
						</td>
						<td data-colname="End Date">
							2370-01-04
						</td>
						<td data-colname="Location">
							Holodeck 4
						</td>
					</tr>
				</tbody>
			</table>
		</script>
	</code>
</pre>
<br /><br />

<h3><?php _e('Advanced List Table (Responsive Collapse, Row Actions, Images, Checkboxes)', 'patterns'); ?></h3>

<table class="wp-list-table widefat fixed striped">
	<thead>
		<tr>
			<td id="cb" class="column-cb check-column">
				<label class="screen-reader-text" for="cb-select-all-1">Select All</label>
				<input id="cb-select-all-1" type="checkbox">
			</td>
			<th scope="col" class="column-primary">Event</th>
			<th scope="col">Start Date</th>
			<th scope="col">End Date</th>
			<th scope="col">Location</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th scope="row" class="check-column">
				<label class="screen-reader-text" for="user_1">Select WordCamp</label>
				<input type="checkbox" name="events[]" value="1">
			</th>
			<td class="column-username has-row-actions column-primary" data-colname="Event">
				<img src="<?php echo '/wp-content/plugins/patterns/admin/img/60.png'; ?>"
				     class="avatar avatar-32 photo" width="32" height="32">
				<strong><a href="#">WordCamp Philly</a></strong><br>
				<div class="row-actions">
					<span>
						<a href="#">Edit Event</a> |
					</span>
					<span>
						<a href="#">View Event</a>
					</span>
				</div>
				<button type="button" class="toggle-row"><span class="screen-reader-text">Show more details</span></button>
			</td>
			<td data-colname="Start Date">2016 </td>
			<td data-colname="End Date">2017</td>
			<td data-colname="Location">Philly</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<td id="cb" class="column-cb check-column">
				<label class="screen-reader-text" for="cb-select-all-2">Select All</label>
				<input id="cb-select-all-2" type="checkbox">
			</td>
			<th scope="col" class="column-primary">Event</th>
			<th scope="col">Start Date</th>
			<th scope="col">End Date</th>
			<th scope="col">Location</th>
		</tr>
	</tfoot>
</table>

<h5><?php _e('PATTERN MARKUP', 'patterns' ); ?></h5>

<pre>
	<code class="language-php">
		<script type="text/plain">
			<table class="wp-list-table widefat fixed striped">
				<thead>
					<tr>
						<td id="cb" class="column-cb check-column">
							<label class="screen-reader-text" for="cb-select-all-1">Select All</label>
							<input id="cb-select-all-1" type="checkbox">
						</td>
						<th scope="col" class="column-primary">Event</th>
						<th scope="col">Start Date</th>
						<th scope="col">End Date</th>
						<th scope="col">Location</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row" class="check-column">
							<label class="screen-reader-text" for="user_1">Select WordCamp</label>
							<input type="checkbox" name="events[]" value="1">
						</th>
						<td class="column-username has-row-actions column-primary" data-colname="Event">
							<img src="<?php echo '/wp-content/plugins/patterns/admin/img/60.png'; ?>"
				     			class="avatar avatar-32 photo" width="32" height="32" />
							<strong><a href="#">WordCamp Philly</a></strong><br>
							<div class="row-actions">
								<span>
									<a href="#">Edit Event</a> |
								</span>
								<span>
									<a href="#">View Event</a>
								</span>
							</div>
							<button type="button" class="toggle-row">
								<span class="screen-reader-text">Show more details</span>
							</button>
						</td>
						<td data-colname="Start Date">2016 </td>
						<td data-colname="End Date">2017</td>
						<td data-colname="Location">Philly</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td id="cb" class="column-cb check-column">
							<label class="screen-reader-text" for="cb-select-all-2">Select All</label>
							<input id="cb-select-all-2" type="checkbox">
						</td>
						<th scope="col" class="column-primary">Event</th>
						<th scope="col">Start Date</th>
						<th scope="col">End Date</th>
						<th scope="col">Location</th>
					</tr>
				</tfoot>
			</table>
		</script>
	</code>
</pre>

<h3><?php _e( 'Sortable List Tables', 'patterns' ); ?></h3>

<p><?php _e('Sortable list tables should be generated directly from <a href="https://codex.wordpress
.org/Class_Reference/WP_List_Table">a copy of the WP_List_Table class</a>. The examples above are intended to show how
to output data like an API response.', 'patterns' ); ?></p>

<h3><?php _e('Notes and Tips', 'patterns'); ?></h3>

<p><?php _e( 'A page can have multiple wraps. Integrating elements that require the <code>.about-wrap</code> class
can be inserted by closing the main full-width wrap, inserting the about-wrap and restarting the full-width wrap.', 'patterns'); ?></p>

<?php
echo ob_get_clean();

