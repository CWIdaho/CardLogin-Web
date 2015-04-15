<?php
	require_once 'dbcon.php';
	$connection = new mysqli(_IP, _USER, _PASSWORD, _DBNAME);
    if ($connection->connect_errno)
    {
        echo "Failed to connect to MySQL server: (".$connection->connect_errno.") ";
    }
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
