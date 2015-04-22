<?php
	require_once 'dbcon.php';
	class DBConnector
	{
        private $_connection;
        function __construct()
        {
            $this->_connection = new mysqli(_IP.":3306", _USER, _PASSWORD, _DBNAME);
        }

        public function getUser()
        {
            if($result = $this->_connection->query("SELECT * FROM users"))
            {
                print_r($result->fetch_assoc());
            }
            else
            {
                echo $this->_connection->errno;
            }
        }

        public function getSwipes($id)
        {
            if($result = $this->_connection->query("SELECT * FROM swipes"))
            {
                echo $this->_connection->affected_rows;
                print_r($result->fetch_all());
            }
        }
	}
    $dbconnector = new DBConnector();
