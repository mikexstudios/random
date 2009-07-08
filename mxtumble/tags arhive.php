<?php/*
Template Name: Tags Archive
*/ ?>
<?php get_header() ?>
	
	<div id="container">
		<div id="content">
		
			<?php if ( function_exists('wp_tag_cloud') ) : ?>
				<h2>Tags Archive</h2>
				<div class="tags_archive">
						<?php wp_tag_cloud('smallest=8&largest=22&number=999'); ?>
				</div><!-- .tags_archive -->
			<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>