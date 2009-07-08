<div id="navcontainer">
	<ul>
		<li><a href="<?php bloginfo('url'); ?>" title="Home">Home</a></li>
		<?php wp_list_pages('sort_column=menu_order&title_li='); ?>
	</ul>
</div>