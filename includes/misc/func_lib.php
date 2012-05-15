<?php
function exit_page() 
{
	die("<h1>Website Error</h1>
		Something went wrong in the website script. Please contact the webmaster of this page if the problem persists. 
		<br/>
		<br/>
		<br/>
		<i>CraftedWeb</i>");
}

function RandomString() 
{
    $length = 10;
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $string = '';    
    for ($p = 0; $p < $length; $p++) 
	{
        $string .= $characters[mt_rand(0, strlen($characters))];
    }
    return $string;
}

function convTime($time)
{
	if($time<60) 
			$string = 'Seconds';
		elseif ($time > 60) 
		{
		    $time = $time / 60;
			$string = 'Minutes'; 
		if ($time > 60) 
		{									 
			$string = 'Hours';
			$time = $time / 60;
	    if ($time > 24) 
		{
			$string = 'Days';
			$time = $time / 24;
		}
		}
			$time = ceil($time);
		}
		return $time." ".$string;
}
?>