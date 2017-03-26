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
<form>
	<table class="form-table">
		<tbody>
		<tr>
			<th>
				<label for="input-text">Text input</label>
			</th>
			<td>
				<input type="text" name="input-text" placeholder="Text" /><br />
					<pre>
						<code class="language-php">
							&lt;input type="text" name="input-text" placeholder="Text" />
						</code>
					</pre>
			</td>
		</tr>
		<tr>
			<th>
				<label for="input-text">Select</label>
			</th>
			<td>
				<select name="select">
					<option>Option 1</option>
					<option>Option 2</option>
					<option>Option 3</option>
				</select>
					<pre>
						<code class="language-php">
							&lt;select name="select">
								&lt;option>Option 1&lt;/option>
								&lt;option>Option 2&lt;/option>
								&lt;option>Option 3&lt;/option>
							&lt;/select>
						</code>
					</pre>
			</td>
		</tr>
		<tr>
			<th>
				<label for="multi-select">Multiple Select</label>
			</th>
			<td>
				<select name="multi-select" multiple="multiple">
					<option>Option 1</option>
					<option>Option 2</option>
					<option>Option 3</option>
					<option>Option 4</option>
					<option>Option 5</option>
					<option>Option 6</option>
				</select>
				<pre>
					<code class="language-php">
						&lt;select name="multi-select" multiple="multiple">
							&lt;option>Option 1&lt;/option>
							&lt;option>Option 2&lt;/option>
							&lt;option>Option 3&lt;/option>
							&lt;option>Option 4&lt;/option>
							&lt;option>Option 5&lt;/option>
							&lt;option>Option 6&lt;/option>
						&lt;/select>
					</code>
				</pre>
			</td>
		</tr>
		<tr>
			<th>
				<label for="radio-buttons">Radio Buttons</label>
			</th>
			<td>
				<input type="radio" name="radio-buttons" value="option-1"/> Option 1 <br />
				<input type="radio" name="radio-buttons" value="option-2"/> Option 2 <br />
				<input type="radio" name="radio-buttons" value="option-3"/> Option 3 <br />
				<input type="radio" name="radio-buttons" value="option-4"/> Option 4 <br />
				<pre>
					<code class="language-php">
						&lt;input type="radio" name="radio-buttons" value="option-1" /> Option 1
						&lt;input type="radio" name="radio-buttons" value="option-2" /> Option 2
						&lt;input type="radio" name="radio-buttons" value="option-3" /> Option 3
						&lt;input type="radio" name="radio-buttons" value="option-4" /> Option 4
					</code>
				</pre>
			</td>
		</tr>
		<tr>
			<th>
				<label for="input-checkbox">Checkbox</label>
			</th>
			<td>
				<input type="checkbox" name="input-checkbox" /> Option 1<br />
				<pre>
					<code class="language-php">
						&lt;input type="checkbox" name="input-checkbox"/> Option 1
					</code>
				</pre>
			</td>
		</tr>
		<tr>
			<th>
				<label for="checkbox-array">Checkbox Array</label>
			</th>
			<td>
				<input type='checkbox' name='checkbox-array[]' value='option-1'> Option 1<br />
				<input type='checkbox' name='checkbox-array[]' value='option-2'> Option 2<br />
				<input type='checkbox' name='checkbox-array[]' value='option-3'> Option 3<br />
				<pre>
					<code class="language-php">
						&lt;input type='checkbox' name='checkbox-array[]' value='option-1'> Option 1
						&lt;input type='checkbox' name='checkbox-array[]' value='option-2'> Option 2
						&lt;input type='checkbox' name='checkbox-array[]' value='option-3'> Option 3
					</code>
				</pre>
			</td>
		</tr>
		<tr>
			<th>
				<label for="input-fieldset">Fieldset and <br />HTML5 Elements</label>
			</th>
			<td>
				<fieldset>
					<legend>Legend</legend>
					<input type="email" placeholder="Email" /> Email<br />
					<input type="search" placeholder="Search" /> Search<br />
					<input type="tel" placeholder="Telephone" /> Telephone<br />
					<input type="text" placeholder="Text" /> Text<br />
					<input type="url" placeholder="URL" /> URL<br />
				</fieldset>
					<pre>
						<code class="language-php">
							&lt;fieldset>
								&lt;legend>Legend&lt;/legend>
								&lt;input type="email" placeholder="Email" /> Email
								&lt;input type="search" placeholder="Search" /> Search
								&lt;input type="tel" placeholder="Telephone" /> Telephone
								&lt;input type="text" placeholder="text" /> Text
								&lt;input type="url" placeholder="URL" /> URL
							&lt;/fieldset>
						</code>
					</pre>
			</td>
		</tr>
		<tr>
			<th>
				<label for="input-time">Time Elements</label>
			</th>
			<td>
				Date: <input name="input-date" type="date" /><br />
				Month: <input name="input-month" type="month" /> <br />
				Week: <input name="input-week" type="week" /><br />
				Time: <input name="input-time" type="time" /><br />
				Local Date and Time: <input name="input-datetime-local" type="datetime-local" />
				<pre>
					<code class="language-php">
					&lt;input name="input-date" type="date" />
					&lt;input name="input-month" type="month" />
					&lt;input name="input-week" type="week" />
					&lt;input name="input-time" type="time" />
					&lt;input name="input-datetime-local" type="datetime-local" />
					</code>
				</pre>
			</td>
		</tr>
		<tr>
			<th>
				<label for="input-time">Other Elements</label>
			</th>
			<td>
				Number: <input name="input-number" type="number" min="0" max="20" /><br />
				Range: <input name="input-range" type="range" /><br />
				Color: <input name="input-color" type="color" /><br />
				<pre>
					<code class="language-php">
						&lt;input name="input-number" type="number" min="0" max="20" />
						&lt;input name="input-range" type="range" />
						&lt;input name="input-color" type="color" />
					</code>
				</pre>
			</td>
		</tr>
		</tbody>
	</table>
</form>

<?php
echo ob_get_clean();

