<?php

/****************************
* Link Open in New Window
****************************/

global $npl_options;

function npl_autoblank($text) {
	
	$return = str_replace('<a', '<a target="_blank"', $text);
	return $return;
} //end of function

if($npl_options['newlink']=='Yes')
{
	add_filter('the_content', 'npl_autoblank');
} //end of if

?>