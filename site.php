<?php
// we don't want your kind here
if (!defined('SITE_ROOT') || function_exists('DCCWEB')) exit();

function show_site($content, $title = ''){
	ob_start();
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>dcc - <?php echo $title; ?></title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<div id="main">
			<p class="top"><span class="heading">dcc's profile</span> - <a href="<?php echo SITE_ROOT; ?>bio">bio</a>
														  - <a href="<?php echo SITE_ROOT; ?>projects">projects</a> 
														  - <a href="<?php echo SITE_ROOT; ?>contact">contact</a></p>
			 <?php echo $content; ?>
		</div>
	</body>
</html>
	<?php
	return ob_get_clean();
}