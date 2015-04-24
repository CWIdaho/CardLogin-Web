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
            $this->_connection->free_result();
        }

        public function getSwipes($id)
        {
            if($result = $this->_connection->query("SELECT cwiid, location, swipedate, timein, timeout FROM swipes"))
            {
                while($row = $result->fetch_array(MYSQLI_NUM))
                {
                    echo "<tr>";
                    for($i = 0; $i < count($row); $i++)
                    {
                        echo "<td>".$row[$i]."</td>";
                    }
                    echo "<td>".$this->getTimeDiff($row[4],$row[3])." minutes</td>";
                    echo "</tr>";
                }
            }
            $this->_connection->free_result();
        }
        private function getTimeDiff($x, $y)
        {
            return round((strtotime($x) - strtotime($y))/60);
        }
	}
    $dbconnector = new DBConnector();
