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

        public function getSwipesTable($id)
        {
            echo "
            <table border='1'>
            <tr>
                <th>Student ID</th>
                <th>Location ID</th>
                <th>Date</th>
                <th>Time In</th>
                <th>Time Out</th>
                <th>Cumulative Time</th>
            </tr>";
            if($result = $this->_connection->query("SELECT cwiid, location, swipedate, timein, timeout FROM swipes WHERE cwiid LIKE '".$id."'"))
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
            echo "</table>";
        }
        private function getTimeDiff($x, $y)
        {
            return round((strtotime($x) - strtotime($y))/60);
        }
	}
    $dbconnector = new DBConnector();
