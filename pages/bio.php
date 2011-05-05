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
	
	<p class="lspace">hi, I'm rob, a <?php echo get_age(); ?> year old student studying <a href="http://ms.unimelb.edu.au">mathematics</a> as an undergraduate at the <a href="http://www.unimelb.edu.au">university of melbourne</a>.
	I enjoy programming in PHP, Python and C# and I am actively interested in learning new things and being the best that I can be.  
	in my spare time, I enjoy rocking the electric bass for <a href="http://www.myspace.com/the.rapalas">The Rapalas</a>, playing Civilization V, reading about computer science and taking long walks on moonlit beaches.</p>
	
	<?php
	return ob_get_clean();
}

function get_age()
{
	$y = date("Y") - 1991;
	$m = date("m") - 2;
	$d = date("d") - 14;
	
	if ($m < 0) $y--;
	elseif ($m == 0 && $d < 0) $y--;
	
	return $y;
}