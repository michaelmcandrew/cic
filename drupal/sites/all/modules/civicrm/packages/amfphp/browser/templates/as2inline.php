<?php
class as2inline
{
	function as2inline()
	{
		$this->description = "AS2 inline";
		$this->author = "Patrick Mineault";
		$this->priority = 75;
	}
	
	function format($info)
	{
		ob_start();
		include(dirname(__FILE__)."/as2inline.tpl");
		return ob_get_clean();
	}
	
	function save($info, $where, $overwrite)
	{
		//First create package hierarchy
		$package = str_replace('.', '/', $info['package']);
		
		if(!is_dir($where . '/' . $package))
		{
			//Create the directory
			$attempt = makeDirs($where . '/' . $package);
			
			if($attempt === FALSE)
			{
				return "could not create directory $where/$package";
			}
		}
		
		chdir($where . '/' . $package);
		
		//Put content
		$template = $this->format($info);
		
		if($overwrite || !file_exists($info['class'] . '.as'))
		{
			$r = file_put_contents($info['class'] . '.as', $template);
			if($r === FALSE)
			{
				return "Could not create file " . $info['class'];
			}
		}
		return TRUE;
	}
}