<?php
	require_once 'dbcon.php';
	class DBConnector
	{
        //Connection string
        private $_connection;
        //Constructor. Runs at the start of every load. Sets the connection string
        function __construct()
        {
            $this->_connection = new mysqli(_IP.":3306", _USER, _PASSWORD, _DBNAME);
        }

        //Returns list of users. Will be setup for authentication later.
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

        //Returns swipe table. Creates the table and then displays it.
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

        //Returns table for weekly reporting. Creates the table then displays it.
        public function getWeeklyReportTable()
        {

        }

        private function getTimeDiff($x, $y)
        {
            return round((strtotime($x) - strtotime($y))/60);
        }
	}
    $dbconnector = new DBConnector();
