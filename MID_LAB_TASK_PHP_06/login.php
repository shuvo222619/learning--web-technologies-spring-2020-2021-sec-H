<?php
	if(isset($_POST['Submit']))
	{
		if(strlen($_POST["name"])<2)
		{
			echo "User Name must contain at least two (2) characters";
		}
		elseif(strlen($_POST['Password'])<8)
		{
			echo "Password must not be less than eight (8) characters";
		}

		$check = false;
		for ($i=0; $i < strlen($_POST['Password']); $i++) { 
			if($_POST['Password'][$i] === '@' || $_POST['Password'][$i] === '#' || $_POST['Password'][$i] === '$' || $_POST['Password'][$i] === '$')
			{
				$check = true;
				break;
			}
		}

		if($check === false)
		{
			echo "Please insert a special charecter";
		}
	} 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend> <b>Login</b></legend>
				<table>
				<tr>
					<td>UserName: </td>
					<td> <input type="text" name="name"/> 
					<br/> </td>
				</tr>

				<tr>
					<td> Password: </td>
					<td> <input type="password" name="Password"/> <br/></td>
				</tr>
			</table>
			<hr>
			<input type="checkbox" name="checkbox"> Remember Me
			<br> <br>
			<input type="submit" name="Submit" value="Submit"> <a href=""> Forgot Password? </a>
		</fieldset>
	</form>
</body>
</html>