	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php sandbox_blog_lang(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<title><?php bloginfo('name'); if ( is_404() ) : _e(' &raquo; ', 'sandbox'); _e('Not Found', 'sandbox'); elseif ( is_home() ) : _e(' &raquo; ', 'sandbox'); bloginfo('description'); else : wp_title(); endif; ?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<meta name="description" content="<?php bloginfo('description') ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version') ?>" /><!-- Please leave for stats -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/custom.css" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('Posts RSS feed', 'sandbox'); ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('Comments RSS feed', 'sandbox'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
<?php wp_head() ?>

	<!-- include js -->
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/jquery.js"></script>   
	<script type="text/javascript">                                         
		// we will add our javascript code here   
		$(document).ready(function() {
		// do stuff when DOM is ready
		
		//We want to do some regex to replace all conversation html with
		//a list based one
		//var conversation_html = $("div.category-conversation div.entry-content").html();
		$("div.category-conversation div.entry-content").each(function() {
			var entry_content = $(this);
			var entry_content_html = entry_content.html();
			entry_content_html = entry_content_html.replace(/<p>/, "<ul>\n");
			entry_content_html = entry_content_html.replace(/<\/p>\s*$/, "<br>\n</ul>");
			entry_content_html = entry_content_html.replace(/^(.*):(.*)$/gm, "<span class=\"speaker\">$1</span>: $2");
			entry_content_html = entry_content_html.replace(/^(.*)<br>$/gm, "<li>$1</li>");
			
			entry_content.html(entry_content_html);
			//alert(entry_content_html);
		});
	 });                                  
	</script>   

</head>

<body class="custom <?php sandbox_body_class() ?>">

<div id="wrapper" class="hfeed">

	<div id="header">
		<!--
		<div class="promo">
			<div id="search">
			<?php include (TEMPLATEPATH . "/searchform.php"); ?>
			</div>
			<span class="feed"><a href="<?php bloginfo('rss2_url'); ?>" title="Subscribe to <?php bloginfo('name') ?>'s Feed" /><img src="<?php bloginfo('template_directory'); ?>/images/feed-icon.png" /></a></span>
		</div>
		--><!-- .promo -->
		
		<h1 id="blog-title"><a href="<?php echo get_settings('home') ?>/" title="<?php bloginfo('name') ?>" rel="home"><?php bloginfo('name') ?></a></h1>
		<div id="blog-description"><?php bloginfo('description') ?></div>
	</div><!--  #header -->

	<div id="access">
		<div class="skip-link"><a href="#content" title="<?php _e('Skip navigation to the content', 'sandbox'); ?>"><?php _e('Skip to content', 'sandbox'); ?></a></div>
		<?php sandbox_globalnav() ?>
	</div><!-- #access -->

<!--
<div id="masthead">
	<div id="nav-menu">
		<?php include (TEMPLATEPATH . "/nav-menu.php"); ?>
	</div>
</div>
-->

<div class="clearer"></div>
