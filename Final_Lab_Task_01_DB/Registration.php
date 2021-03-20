<?php 
session_start();

?>
 
<html>
<head>
	<title>Registration Form</title>
</head>
<body>

	<form action="regcheck.php" method="post">
		Name: <input type="text" name="name">
		<br>
		<br>
		Email: <input type="text" name="email">
		<br>
		<br>
		Gender: <br>
		        <input type="radio" name="gender" value="male"> Male
				<input type="radio" name="gender" value="female"> Female
				<input type="radio" name="gender" value="other"> Other
				<br>
				<br>
		
		Password: <input type="text" name="password">
		<br>
		<br>
        
		<input type="submit" name="submit" value="SUBMIT">
		<br>
		
	</form>

</body>
</html>


<?php 
  if (isset($_POST['submit']))
  {
	
	  $_SESSION['Name']=$_POST['name'];
	    $_SESSION['Email']=$_POST['email'];
		  $_SESSION['Gender']=$_POST['gender'];
	  $_SESSION['Password']=$_POST['password'];
	  
	  
	  
  }

?>
