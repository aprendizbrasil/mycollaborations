<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!--Tema: Billy Tema-->
<!--Fonte: https://www.youtube.com/watch?v=44XAFLCBo9g-->

<html>
<head>
	<title>Billy</title>
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>"/>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; <?php bloginfo('charset'); ?>"/>
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="all" type="text/css"/>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.30" href="<?php bloginfo('atom_url'); ?>" />
		
	<?php wp_head(); ?>
</head>

<body>
	<div class="header">
		<div class="centered_header">
		<a href="<?php echo get_option('home'); ?>">
			<img src="wp-content/themes/billytema/img/IMG_8290.JPG" width="90" />
		</a>
		</div>
	</div>
	<div class="menu">
		<div class="centered_menu">
			<ul>
				<li><a href="<?php echo get_option('home'); echo "/";?>">Home</a></li>
				<?php echo wp_list_pages('title_li='); echo "  /  "; ?>
				<?php echo wp_list_categories('title_li='); ?>
			</ul>
		</div>
				
		</div>
			
		
		
	
	




