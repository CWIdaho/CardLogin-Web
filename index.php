<?php
	if(session_start())
	{
		require_once 'login.php';
	}
	else
	{
		print("There was an error initializing the website.");	
	}
?>