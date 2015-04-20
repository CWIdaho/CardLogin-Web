<?php 

include ('dbconnect.php');

$search=$_POST['search']; 

$data = 'SELECT * FROM 'table_name' WHERE 'ID' = "'.$search.'"'; 
  $query = mysql_query($data) or die("Couldn't execute query. ". mysql_error()); 
  $data2 = mysql_fetch_array($query); 
    
?> 

<!-- displays a table populated with mySQL data -->    
    <?php 
echo "<table border='1'>
<tr>
<th>Student ID</th>
<th>Location ID</th>
<th>Date</th>
<th>Time In</th>
<th>Time Out</th>
<th>Cumulative Time</th>
</tr>";

// loop that displays rows of data
 $loop = mysql_query('SELECT * FROM 'table_name' WHERE 'ID' = "'.$search'"')
   or die ("Error:". mysql_error());

while ($row = mysql_fetch_array($loop))

{
    echo "<tr>";
    echo "<td>" . $row['ID'] . "</td>";
    echo "<td>" . $row['LocID'] . "</td>";
    echo "<td>" . $row['Date'] . "</td>";
    echo "<td>" . $row['punchIn'] . "</td>";
    echo "<td>" . $row['punchOut'] . "</td>";
    echo "<td>" . $row['cumulativeTime'] . "</td>";
    echo "</tr>";
}
echo "</table>";
    
?>    
    
    
    
<!-- form to display record from database --> 
<form name="form" method="POST" action="form2.php"> 
    ID: <input type="text" name="idfield" value="<?php echo $data2[ID]?>"/> 
    Last: <input type="text" name="lnamefield" value="<?php echo $data2[lName]?>"/>
    First: <input type="text" name="fnamefield" value="<?php echo $data2[fName]?>"/>
    Location ID: <input type="text" name="locationidfield" value="<?php echo $data2[locID]?>"/>
    Date: <input type="text" name="dayfield" value="<?php echo $data2[day]?>"/> 
    Punch in: <input type="text" name="punchInfield" value="<?php echo $data2[punchIn]?>"/>
    Punch out: <input type="text" name="punchOutfield" value="<?php echo $data2[punchOut]?>"/>
    Cumulative Time: <input type="text" name="cumulativefield" value="<?php echo $data2[cumulativeTime]?>"/>
    <input type="hidden" name="keyfield" value="<?php echo $search?>">   
  <input type="submit"  value="submit"> 
</form> 



<?php

include('dbconnect.php');

$Key=$_POST['keyfield']; 
$ID=$_POST['idfield']; 
$Last=$_POST['lnamefield'];
$First=$_POST['fnamefield'];
$Loc=$_POST['locationfield'];
$Day=$_POST['dayfield']; 
$Punchin=$_POST['punchinfield']; 
$Punchout=$_POST['punchoutfield']; 
$Cumulative=$_POST['cumulativefield'];


$data = 'UPDATE 'table_name' SET punchin='$Punchin', punchout='$Punchout' WHERE ID='$Key' AND date='$Day''; 
  $query = mysql_query($data) or die("Couldn't execute query. Error: ". mysql_error()); 
   
?> 

<!DOCTYPE html>
<html> 
<head> 
      <title></title> 
 </head> 

<body> 

<!--  display the record update from database --> 
    ID: <?php echo $ID?><br>   
    Last: <?php echo $Last?><br>
    First: <?php echo $First?><br>
    Location ID: <?php echo $Loc?><br>
    Day: <?php echo $Day?> <br> 
    Punch in: <?php echo $Punchin?><br>
    Punch out: <?php echo $Punchout?><br>
    Cumulative Time: <?php echo $Cumulative?>

</body> 

</html>
