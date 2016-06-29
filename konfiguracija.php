	<?php
	
	switch ($_SERVER["SERVER_NAME"]) 
	{
		case 'localhost':
			$putanjaAPP="/Fitnes/";
			break;
		default:
			$putanjaAPP="/";
			break;
	}
	
	$naslovAPP = "XL fitnes centar";
	$razvoj=$_SERVER["SERVER_NAME"]=="localhost";
	
	?>