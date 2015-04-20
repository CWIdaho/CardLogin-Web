<?php 




?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MaSCA SWIPE</title>
<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>

<style>
body {background-color: #CCCC99 ;
	background-repeat: no-repeat;
	font-size:20px;
}

h2 {
	font-family: 'Righteous', cursive;
	color: black;
	}

.header{
	 position: relative; 
	margin: -8px;
    height:200px;
    background:#660000;
	background-image: linear-gradient(#660000,#000000 );
	background-size: cover;
    border:2px solid black;
    width: auto;
	padding: 0px;
  }
  
.header img {
	padding-left: 1%;
}  

footer{ position: relative; 
margin: 0 -8px;
    position:fixed;
    bottom:0;
    width:100%;
    height:50px;   /* Height of the footer */
	background:#660000;
	background-image: linear-gradient(#000000,#660000);
	background-size: cover;
	border:2px solid black;
  }	
  
.box{
	background-color: #FFFFCC;
	height: 400px;
	width: 500px;
	margin-left: auto;
    margin-right: auto;
	margin-top: 7%;
	box-shadow: 5px 10px 10px 5px dimgray;
	text-align: center;
	}


#logform{
	padding-top: 8%;
	}	

label {
    display: inline-block;
    width:80px;
    text-align: right;
	padding: 1%;
	
}

.subbttn {

	border:		4px double darkgoldenrod;
	border-radius: 7px;
	padding:		8px 35px !important;
	font-size:		16px !important;
	background-image: url(bttnbackground.gif);
	color:			#FFFFCC;
	font-weight: lighter;
	font-family: 'Righteous', cursive;
	letter-spacing: 1px;
	}
	
.inputbox{background: white; 
    border: 1px solid darkgoldenrod; 
    border-radius: 5px; 
    box-shadow: 0 0 5px 3px goldenrod; 
    color: #666; 
    outline: none; 
    height:25px; 
    width: 275px; 
	}	

#alert{
	font-weight: bold;
	color: red;
	font-size:14px;
	}
	
	#labelid {
		font-size: 16px;
		}
    
 </style> 

<script>
    function setFocus()
    {
        document.getElementById("studentID").focus();
    }
    
    function validateForm(){
        var x = document.forms["inputForm"]["studentID"].value;
        var error;
        if (x == null || x == " "){
         document.getElementById("alert").innerHTML = "Invalid Read please try again";        
        document.getElementById("studentID").focus();
            
            
        return false;
        
        }
        var validator = new RegExp(/(APIN)\w+%\w+\?|(BOI)\w+%\w+\?/g);
       var isValueValid = validator.test(x);
        
        if (!(isValueValid)){
            var error = "Invalid card please us a CWI student ID card";
            document.getElementById("alert").innerHTML = error; 
            document.getElementById("studentID").value = ' ';
            document.getElementById("studentID").focus();
            
            return false;
        } 
            
            
        
    
    }
</script>
<header class="header">
<img src="logo.png" alt="MaSCA" style="width:200px;height:200px;">
</header>
<body onLoad="setFocus()">
<section class="box">
<div id="logform">
<h2>Welcome to the </br>MATH SOLUTION CENTER</h2>
<p>If a User is unable to SWIPE his/her card</br>
Enter User ID Number Below:</p>
<p id="alert"> </p> 
<form method="post" name="inputForm" onSubmit="return validateForm()">
  
    <label id="labelid">Student ID: </label><input class="inputbox" type="text"   id="studentID" name="studentID" onFocus="javascript: this.value = ' '" required > 
    </br>
    </br>   
      <input class="subbttn" type="submit" value="Submit" name="submit"  >
</form>

<?php 
    
    $studentID = htmlspecialchars($_POST["studentID"]);
    echo $studentID;
    
    
    $percentPos = strpos($studentID, "%") + 1;
    $questionPos = strpos($studentID, "?");
    $_studentID = substr($studentID, $percentPos, -1);
    
    $checkID = substr($studentID, 9, 1);
    $swipeID = substr($studentID, 10, 1);
    

    $locationID = substr($studentID, 0, 9);
    
    
    
    echo "<br />";
    echo $_studentID;
    echo "<br />";
    echo $locationID;
    echo "<br />";
    echo $swipeID;
    echo "<br />";
    echo $checkID;
   
    $sql = "INSERT INTO swipes (cwiid, location, swipetype)
            VALUES ('" . $_studentID . "', '" . $locationID . "', " . $checkID . ")";
 
   if ($conn->query($sql) === TRUE) {
    echo "new record created successfully";
   } else {
    echo "error:" . $sql . "<br>" . $conn->error;
   }
    $conn->close();
    


?>
</body>
