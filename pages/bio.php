<?php
if (!defined('SITE_ROOT')) exit();

function get_page_title()
{
	return 'bio';
}

function get_page_content()
{
	ob_start();
	?>
	<b>my bio</b><br />
	<?php
	return ob_get_clean();
}
