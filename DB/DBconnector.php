<?php
	require_once 'dbcon.php';
	class DBConnector
	{
        private $_connection;
        function __construct()
        {
            $this->_connection = new mysqli(_IP, _USER, _PASSWORD, _DBNAME);
        }

        public function getUser()
        {
            if($result = $this->_connection->query("SELECT cwiid, role FROM users INNER JOIN usersrol ON users.cwiid = userid INNER JOIN roles ON roleid = roles.id"))
            {
                print_r($result->num_rows);
                echo "I promise this is working";
            }
        }
        public function write()
        {
        }
	}
    $dbconnector = new DBConnector();
