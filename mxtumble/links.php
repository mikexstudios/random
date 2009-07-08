<?php
/*
Template Name: Links Page
*/
?>
<?php get_header() ?>
	
	<div id="container">
		<div id="content">

<?php the_post() ?>
			<div id="post-<?php the_ID(); ?>" class="<?php sandbox_post_class() ?>">
				<h2 class="entry-title"><?php the_title() ?></h2>
				<div class="entry-content">
<?php the_content() ?>

					<ul id="links-page" class="xoxo">
<?php if ( function_exists('wp_list_bookmarks') ) : wp_list_bookmarks('title_before=<h3>&title_after=</h3>'); else : ?>
<?php
$link_cats = $wpdb->get_results("SELECT cat_id, cat_name FROM $wpdb->linkcategories");
foreach ($link_cats as $link_cat) :
?>
						<li id="linkcat-<?php echo $link_cat->cat_id; ?>">
							<h3><?php echo $link_cat->cat_name; ?></h3>
							<ul>
								<?php wp_get_links($link_cat->cat_id); ?>
							</ul>
						</li>
<?php endforeach ?>
<?php endif ?>
					</ul>
<?php edit_post_link(__('Edit', 'sandbox'),'<span class="edit-link">','</span>') ?>

				</div>
			</div><!-- .post -->

<?php if ( get_post_custom_values('comments') ) comments_template() // Add a key/value of "comments" to enable comments on pages! ?>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>