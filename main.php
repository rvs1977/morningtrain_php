<?php
	
	/**
	* Mainprogram using instance of Tpl_parser (Template Parser)
	* to parse a html template and replacing {placeholders} with 
	* corresponding variables
	*
	* @author Rasmus V Sørensen
	*/

	require_once "tpl_parser.php";

	$html_template = "index.html";

	$tp = new Tpl_parser($html_template);

	$arr = [];
	$arr['firstname'] = 'Rasmus';
	$arr['lastname'] = 'Sorensen';

	echo $tp->parse($arr);	

?>