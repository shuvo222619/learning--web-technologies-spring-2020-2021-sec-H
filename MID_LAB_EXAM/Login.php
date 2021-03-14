<?php
?>
 
 
 
 <html>
 <head> </head>
<body style="background-color:yellow;">

 <fieldset>
        <legend>
            LOGIN
        </legend>

 <form action="checklogin.php" method="post" style="border: 2px dotted blue; text-align:center; width: 400px;">
	<p>
	
		Username: <input name="username" type="text" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>">
	</p>
	<p>Password: <input name="password" type="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
	</p>
	<p><input type="checkbox" name="remember" /> Remember me  
	</p>
	<p><input type="submit" value="Login"></span> <br><br><a href='./recover.php'> Forget Password?</a></p>  
     	
</form>
<nav>
<a href='./registration.php'> Registration</a>
</nav>
</fieldset>
</body>
</html>



<?php
/*
<html>
<head>
     
    <title>Login</title>
</head>
<body style="background-color:yellow;">
    <fieldset>
        <table width='100%' >
              
                <td align='right'>
                    <nav>
                        <a href='./home.php'>Home</a> |
                        <a href='./login.php'>Log In</a> |
                        <a href='./registration.php'>Registration</a> 
                    </nav>
                </td>
            </tr>
        </table>
    </fieldset>
    <fieldset>
        <legend>
            LOGIN
        </legend>
        <form action='./checklogin.php' method='POST'>
            <table> 
                <tr>
                    <td>
                        User Name:
                    </td>
                    <td>
                        <input type="text" name='username'>
                    </td>
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                       <input type="password" name= 'password'>
						  
                    </td>
                </tr>
                <tr>
                    <td colspan="2">   
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="checkbox" name= "checkbox" >Remember Me
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type='submit' value='Submit'>
                        <a href='./forgot.php'>Forgot Password?</a>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>
*/
?>
