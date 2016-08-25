<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>
			<?php
				global $page, $paged;
				wp_title('|', true, 'right');
				bloginfo('name');
				$site_description = get_bloginfo( 'description', 'display' );
				if ($site_description && (is_home() || is_front_page())) echo " | $site_description";
				if ($paged >= 2 || $page >= 2) echo ' | ' . sprintf('Page %s', max($paged, $page));
			?>
		</title>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
		<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/reset.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/style.css" />
		<script type="text/javascript" src="<?php bloginfo('template_url') ?>/jquery-1.7.min.js"></script>
		<?php wp_head() ?>
	</head>
	<body>
		<div class="wrapper">
		</div>
		<?php wp_footer() ?>
	</body>
</html>