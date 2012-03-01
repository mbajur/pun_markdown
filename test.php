<?php
function do_markdown($text, $hide_smilies) 
{
	include 'markdown.php';

	return Markdown($text);
}
