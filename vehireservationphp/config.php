<?php

	$servername="localhost";
	$username="root";
	$password="";
	$database="tour_guide";

	
	$con=new mysqli($servername,$username,"",$database);
	
	if ($con ->connect_error)
	{
		die("Error".$con->connect_error);
	}
	else
	{
		echo("Succeessfully connected");
	}


	

?>