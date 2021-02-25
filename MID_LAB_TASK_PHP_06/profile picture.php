<?php
	
	if(isset($_POST['Submit']))
	{
		$supported_image = array('jpg','jpeg','png');
		$ext = strtolower(pathinfo($_POST['ProfilePicture'], PATHINFO_EXTENSION));
		if (in_array($ext, $supported_image) === false)
		{
			echo "Submit in mentioned extension";
		}
		elseif(getimagesize($_POST['ProfilePicture']) > 4)
		{
			echo "Submit in mentioned size";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile Picture</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend> <b>Profile Picture</b></legend>
				<table>
				<tr>
					<td> <input type="file" name="ProfilePicture"/> 
					<br/> </td>
				</tr>
			</table>
			<hr>
			<br> <br>
			<input type="submit" name="Submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>