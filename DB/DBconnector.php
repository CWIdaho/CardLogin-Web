<?php
	require_once 'dbcon.php';
	$dsn = 'mysql:dbname='._NAME.';host='._IP;
	$dbc = new PDO($dsn, _USER, _PASSWD);
	class DBConnector
	{
			function read($qry, ...$arguments)
			{
				for($i = 0; $i < count($arguments); $i++){
					
				}
			}
			function write()
			{
				
			}
	}