<?php
if (!defined('SITE_ROOT')) exit();

function get_page_title()
{
	return 'contact';
}

function get_page_content()
{
	ob_start();
	?>
	<div class="mheading">contact me</div>
	<p class="lspace"><b>email</b>: dcchut at gee mail dot com<br />
	<b>github</b>: <a href="https://github.com/dcchut">dcchut</a><br />
	<b>irc</b>: <i>robbo</i> on <i>irc.freenode.net</i> and <i>irc.esper.net</i><br />
	<b>snail mail</b>: nah</p>
	<?php
	return ob_get_clean();
}
