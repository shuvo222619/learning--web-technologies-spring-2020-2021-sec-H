<?php 
session_start();

	$name=$_SESSION["Name"];
	$email=$_SESSION["Email"];
	$pass=$_SESSION["Password"];
	$gen=$_SESSION["Gender"];
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
 $dbname = "webtech";

try {
    
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
	 

    var_dump ($_SESSION);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
	$sql = "INSERT INTO info (Name,Email,Gender,Password,Image) VALUES ('$name', '$email', '$gen','$pass','Images')";
    
 
    
	$conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
