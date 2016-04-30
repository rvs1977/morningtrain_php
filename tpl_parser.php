<?php 
	/**
	* Template Parser Class
	* @author Rasmus V Sørensen 
	*/
	class Tpl_parser
	{		
		
		private $html_template;	

		function __construct($ht)
		{
			$this->html_template = file_get_contents($ht);
		}

		public function parse($arr)
		{
			
			$patterns = [];
			$replacements = [];
			
 			$i = 0;
			foreach ($arr as $key => $value) {
				$patterns[$i] = "/{{$key}}/";
				$replacements[$i] = "{$value}";
				$i++;				
			}

			// preg_replace is an php-function which effciently do the job with replacing a pattern with a variable
			return preg_replace($patterns, $replacements, $this->html_template);
			
		}

	}
	
?>