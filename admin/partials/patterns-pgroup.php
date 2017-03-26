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
<h3><?php _e('People Group', 'patterns'); ?></h3>

<p><?php _e('Display a grid of users (or other data with an image, title and meta field) that collapses responsively.',
		'patterns'); ?></p>

<h4><?php _e('The About Wrap', 'patterns'); ?></h4>

<code>&lt;div class=&quot;wrap about-wrap&quot;&gt;<br /></code>
<br />

<p><?php _e( 'The User Grid relies on the wrapping div to use the <code>.about-wrap</code> selector.
Note this wrap unlike the default wrap selector is limited to a <code>max-width:1050px;</code> and increases
<code>.nav-tab</code> sizes. You may want to add the about wrap within your other wrap to better accommodate large displays.',
		'patterns' ); ?></p>

<?php $img_path = plugins_url('patterns/admin/img/'); ?>

<div class="wrap about-wrap">
	<h3 class="wp-people-group"><?php _e('People Group Heading', 'patterns'); ?></h3>
	<ul class="wp-people-group">
		<li class="wp-person">
			<a href="#">
				<img src="<?php echo $img_path .'60.png'; ?>"
				     srcset="<?php echo $img_path .'120.png'; ?> 2x"
				     class="gravatar" />
			</a>
			<a class="web" href="#">Title</a>
			<span class="title">Subtitle</span>
		</li>
		<li class="wp-person">
			<a href="#">
				<img src="<?php echo $img_path .'60.png'; ?>"
				     srcset="<?php echo $img_path .'120.png'; ?> 2x"
				     class="gravatar" />
			</a>
			<a class="web" href="#">Title</a>
			<span class="title">Subtitle</span>
		</li>
		<li class="wp-person">
			<a href="#">
				<img src="<?php echo $img_path .'60.png'; ?>"
				     srcset="<?php echo $img_path .'120.png'; ?> 2x"
				     class="gravatar" />
			</a>
			<a class="web" href="#">Title</a>
			<span class="title">Subtitle</span>
		</li>
		<li class="wp-person">
			<a href="#">
				<img src="<?php echo $img_path .'60.png'; ?>"
				     srcset="<?php echo $img_path .'120.png'; ?> 2x"
				     class="gravatar" />
			</a>
			<a class="web" href="#">Title</a>
			<span class="title">Subtitle</span>
		</li>
		<li class="wp-person">
			<a href="#">
				<img src="<?php echo $img_path .'60.png'; ?>"
				     srcset="<?php echo $img_path .'120.png'; ?> 2x"
				     class="gravatar" />
			</a>
			<a class="web" href="#">Title</a>
			<span class="title">Subtitle</span>
		</li>
		<li class="wp-person">
			<a href="#">
				<img src="<?php echo $img_path .'60.png'; ?>"
				     srcset="<?php echo $img_path .'120.png'; ?> 2x"
				     class="gravatar" />
			</a>
			<a class="web" href="#">Title</a>
			<span class="title">Subtitle</span>
		</li>
	</ul>
</div>

<h5><?php _e('PATTERN MARKUP', 'patterns'); ?></h5>

<pre>
	<code class="language-php">
		&lt;div class=&quot;wrap about-wrap&quot;&gt;
			&lt;h3 class=&quot;wp-people-group&quot;&gt;&lt;?php _e('People Group Heading', 'patterns'); ?&gt;&lt;/h3&gt;
				&lt;ul class=&quot;wp-people-group&quot;&gt;
					&lt;li class=&quot;wp-person&quot;&gt;
						&lt;a href=&quot;#&quot;&gt;
							&lt;img src=&quot;&lt;?php echo $img_path .'60.png'; ?&gt;&quot;
								srcset=&quot;&lt;?php echo $img_path .'120.png'; ?&gt; 2x&quot;
								class=&quot;gravatar&quot; /&gt;
						&lt;/a&gt;
						&lt;a class=&quot;web&quot; href=&quot;#&quot;&gt;Title&lt;/a&gt;
						&lt;span class=&quot;title&quot;&gt;Subtitle&lt;/span&gt;
					&lt;/li&gt;
					&lt;li class=&quot;wp-person&quot;&gt;
						&lt;a href=&quot;#&quot;&gt;
							&lt;img src=&quot;&lt;?php echo $img_path .'60.png'; ?&gt;&quot;
								srcset=&quot;&lt;?php echo $img_path .'120.png'; ?&gt; 2x&quot;
								class=&quot;gravatar&quot; /&gt;
						&lt;/a&gt;
						&lt;a class=&quot;web&quot; href=&quot;#&quot;&gt;Title&lt;/a&gt;
						&lt;span class=&quot;title&quot;&gt;Subtitle&lt;/span&gt;
					&lt;/li&gt;
					&lt;li class=&quot;wp-person&quot;&gt;
						&lt;a href=&quot;#&quot;&gt;
							&lt;img src=&quot;&lt;?php echo $img_path .'60.png'; ?&gt;&quot;
								srcset=&quot;&lt;?php echo $img_path .'120.png'; ?&gt; 2x&quot;
								class=&quot;gravatar&quot; /&gt;
						&lt;/a&gt;
						&lt;a class=&quot;web&quot; href=&quot;#&quot;&gt;Title&lt;/a&gt;
						&lt;span class=&quot;title&quot;&gt;Subtitle&lt;/span&gt;
					&lt;/li&gt;
					&lt;li class=&quot;wp-person&quot;&gt;
						&lt;a href=&quot;#&quot;&gt;
							&lt;img src=&quot;&lt;?php echo $img_path .'60.png'; ?&gt;&quot;
								srcset=&quot;&lt;?php echo $img_path .'120.png'; ?&gt; 2x&quot;
								class=&quot;gravatar&quot; /&gt;
						&lt;/a&gt;
						&lt;a class=&quot;web&quot; href=&quot;#&quot;&gt;Title&lt;/a&gt;
						&lt;span class=&quot;title&quot;&gt;Subtitle&lt;/span&gt;
					&lt;/li&gt;
					&lt;li class=&quot;wp-person&quot;&gt;
						&lt;a href=&quot;#&quot;&gt;
							&lt;img src=&quot;&lt;?php echo $img_path .'60.png'; ?&gt;&quot;
								srcset=&quot;&lt;?php echo $img_path .'120.png'; ?&gt; 2x&quot;
								class=&quot;gravatar&quot; /&gt;
						&lt;/a&gt;
						&lt;a class=&quot;web&quot; href=&quot;#&quot;&gt;Title&lt;/a&gt;
						&lt;span class=&quot;title&quot;&gt;Subtitle&lt;/span&gt;
					&lt;/li&gt;
					&lt;li class=&quot;wp-person&quot;&gt;
						&lt;a href=&quot;#&quot;&gt;
							&lt;img src=&quot;&lt;?php echo $img_path .'60.png'; ?&gt;&quot;
								srcset=&quot;&lt;?php echo $img_path .'120.png'; ?&gt; 2x&quot;
								class=&quot;gravatar&quot; /&gt;
						&lt;/a&gt;
						&lt;a class=&quot;web&quot; href=&quot;#&quot;&gt;Title&lt;/a&gt;
						&lt;span class=&quot;title&quot;&gt;Subtitle&lt;/span&gt;
					&lt;/li&gt;
				&lt;/ul&gt;
		&lt;/div&gt;
	</code>
</pre>

<?php
echo ob_get_clean();

