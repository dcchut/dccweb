<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>dcchut - <?php echo $title; ?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo $site_root; ?>style.css" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Hammersmith+One&v2">
	</head>
	<body>
    <div id="container">
		<div id="header">
			<div id="header_t"><span class="heading">dcchut's profile</span></div>
			<div id="header_b"><a href="<?php echo $site_root; ?>bio">bio</a>
														  - <a href="<?php echo $site_root; ?>projects">projects</a> 
														  - <a href="<?php echo $site_root; ?>contact">contact</a></p></div>
        </div>
        <div id="content">
            <?php echo $content; ?>
        </div>
    </div>
	</body>
</html>