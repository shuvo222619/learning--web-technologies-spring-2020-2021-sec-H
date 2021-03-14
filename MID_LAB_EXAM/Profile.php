<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Public Home</title>
  </head>
  <body>
    <table border="1" cellspacing="0" width="80%" >
      <tr>
         <td colspan="2">
          <table width="100%">
              <tr>
                <td><img height="40px" weight="40px" src="logo.png" alt=""></td>
                <td align = "right">
                    Logged in as
                    <a href="ViewProfile.php"><?php $userr = $_SESSION['current_user']; $name= $userr['name']; echo "$name"; ?></a>|
                    <a href="UserLogout.php">Logout</a>
                </td>
              </tr>
          </table>
          </td>
      </tr>
      <tr>
        <td align="center">
            <fieldset>
                <legend>PROFILE</legend>
            <form class="" action="" method="post">
               <table>
               <tr>
                <td>ID</td>
                <td>:<?php $userr = $_SESSION['current_user']; $name= $userr['name']; echo "$name"; ?></td>
               </tr>
               <tr>
                <td>Name</td>
                <td>:<?php $userr = $_SESSION['current_user']; $name= $userr['name']; echo "$name"; ?></td>
               </tr>
               <tr>
                <td>User Type</td> 
                <td>:<?php $userr = $_SESSION['current_user']; $gender= $userr['gender']; echo "$gender"; ?></td>
               </tr>
               </table>
                <hr>
                <a href="EditProfile.php">Change</a>
                <a href="Login.html">Home</a>
            </form>
            </fieldset>
        </td>
      </tr>
      <tr>
        <td align="center" colspan="2">Copyright Ⓒ 2017</td>
      </tr>
    </table>

  </body>
</html>


<?php

	}else{
		header('location: Login.html');
	}

?>
