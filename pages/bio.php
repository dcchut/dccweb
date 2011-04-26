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
	<div class="mheading">my bio</div>
	
	<p class="lspace">think of something interesting here.</p>
	
	<?php
	return ob_get_clean();
}
