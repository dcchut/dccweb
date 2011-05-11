<?php
if (!defined('SITE_ROOT')) exit();

function get_page_title()
{
	return 'projects';
}

function get_page_content()
{
	ob_start();
	?>
	<div class="mheading">my projects</div>
	
	<p class="lspace"><b>uniquebot</b> - <a href="https://github.com/dcchut/uniquebot">github</a><br />
	my latest project, uniquebot is a python based IRC bot (using <a href="http://twistedmatrix.com/trac/">Twisted</a>) which implements
	an idea that I read about on <a href="http://www.xkcd.com">xkcd</a>.  the bot keeps a point tally, with points being deducted for
	line repetition and points being added if someone repeats you.  currently running on <i>irc.freenode.net</i>.</p>
	
	<p class="lspace"><b>vnq</b> - <a href="http://vnq.nitrated.net/">link</a> - <a href="https://github.com/dcchut/vnq">github</a><br />
	vnq is an online quote "database" which I made for a IRC channel that I frequent.  it seems to work.</p>
	
	<p class="lspace"><b>uom subject battle</b> - <a href="http://dj.nitrated.net/">link</a> - <a
href="https://github.com/dcchut/uom_subject_battle">github</a><br />
	uom subject subject is my first experiment with web development in python - the idea is that people vote on science subjects offered at uom, with
rankings being done using an ELO based system.</p> 

	<p class="lspace"><b>mcount</b> - <a href="https://github.com/dcchut/mcount">github</a><br />
	mcount is a very simple python application that counts the number of music files in a directory (good for bragging rights).</p>
	
	<p class="lspace"><b>mcount.fm</b> - <a href="https://github.com/dcchut/mcount.fm">github</a><br />
	mcount.fm was an application that grabbed data on my music listening habits (from <a href="http://last.fm">last.fm</a>), 
	which I intended to use to determine whether there were any interesting patterns in my music transitions.</p>
	
	<p class="lspace"><b>sc2web</b> - <a href="https://github.com/dcchut/sc2web">github</a><br />
	sc2web is a web-based Starcraft II replay storage and analysis application which I wrote during the beta of Starcraft II.  
	I did not publish it as I had no real drive to do so - the exercise of its creation was fun enough.</p>
	
	<p class="lspace"><b>dccweb</b> - <a href="https://github.com/dcchut/dccweb">github</a><br />
	dccweb is <i>this</i> website, which is in some sense a project.</p>
	
	<p class="lspace"><b>teamliquid_streamer_graph / teamliquid_analyser</b> - <a href="http://pe.nitrated.net/">link</a> - <a
href="https://github.com/dcchut/teamliquid_streamer_graph">teamliquid_streamer_graph github</a> - <a href="https://github.com/dcchut/teamliquid_analyser">teamliquid_analyser github</a><br />
	teamliquid_streamer_graph is a pretty service which not only provides a programmer-friendly way to access <a href="http://www.teamliquid.net">Team
Liquid</a> streams but also displays the data in realtime.  teamliquid_analyser uses data fetched from
    peweb to display some pretty graphs using matplotlib.</p>
	
	<?php
	return ob_get_clean();
}
