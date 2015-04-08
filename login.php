<?php 
	$loggedin = FALSE;
	function login()
	{
		print("
				<form action='index.php' method='POST'>
					Username:<input type='text' name='username'>
					<br/>
					Password:<input type='password' name='password'>
					<br/>
					<br/>
					<input type='submit' value='Submit'>
				</form>
				");
	}
	function logout()
	{
		print("Goodbye World");
	}
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php
			if(!$loggedin)
			{
				login();
			}
			else
			{
				logout();
			}
		?>
	</body>
</html>