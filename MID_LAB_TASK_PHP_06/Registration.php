<?php
    if(isset($_POST['name']) || isset($_POST['email']) || isset($_POST['username']) || isset($_POST['password']) || isset($_POST['confirmpassword']) || isset($_POST['gender']) || isset($_POST['date']) || isset($_POST['month']) || isset($_POST['year']) || isset($_POST['gender']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['Username'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpass'];
        $gender = $_POST['gender'];
        $date = $_POST['date'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $gender = $_POST['gender'];

        for($i=0;$i<strlen($name);$i++)
        {
            if(!((ord($name[$i]) >= 77 && ord($name[$i]) <= 92)) && !((ord($name[$i]) >= 85 && ord($name[$i]) <= 90)) && !(ord($name[$i]) == 22))
            {
                echo 'Name can only be alphabetical';break;
            }
        }

        $atSymbol=false;
        $atSymbolLocation = 0;
        $period=false;
        $periodLocation = 0;

        for($i=0;$i<strlen($email);$i++)
        {
            if($email[$i] == '@')
            {
                $atSymbol = true;
                $atSymbolLocation = $i;
            }
            if($email[$i] == '.')
            {
                $period = true;
                $periodLocation = $i;
            }
        }
        if(!($atSymbol == true && $period == true && $atSymbolLocation < $periodLocation))
        {
            echo "Email must contain a '@' and '.'";
        }

        for($i=0;$i<strlen($username);$i++)
        {
            if(!((ord($username[$i]) >= 97 && ord($username[$i]) <= 122)) && !((ord($username[$i]) >= 65 && ord($username[$i]) <= 90))  && !((ord($username[$i]) >= 48 && ord($username[$i]) <= 57)))
            {
                echo 'Username only alphabetic';break;
            }
        }
        
        if($password != $confirmpassword)
        {
            echo 'Passwords do not match!';
        }
        if(strlen($password) < 8)
        {
            echo 'Password must be atleast 8 characters!';
        }
    }
?>
 <html>
<head>
     
    <title>Registration form</title>
</head>
<body>
    <fieldset>
        <legend>
            <b>REGISTRATION</b>
        </legend>
        <form action='#' method='POST'>
            <table> 
                <tr>
                    <td>
                        Name:
                    </td>
                    <td>
                        <input type="text" name='name'>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <input type="email" name='email'>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        Username:
                    </td>
                    <td>
                        <input type="username" name='username'>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="password" name='password'>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        Confirm Password:
                    </td>
                    <td>
                        <input type="password" name='confirmpass'>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <fieldset>
                            <legend>
                                <b>Gender</b>
                            </legend>
                            <input type='radio' name='gender' value='male'>Male
                            <input type='radio' name='gender' value='female'>Female
                            <input type='radio' name='gender' value='others'>Others
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <fieldset>
                            <legend>
                                <b>Date of Birth</b>
                            </legend>
                            <input type='number' name=date max=31 min=1>/
                            <input type='number' name=month max=12 min=1>/
                            <input type='number' name=year max=3000 min=1950>
                            <label><i>dd/mm/yyyy</i></label>
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type='submit' value='Submit'>
                        <input type='reset' value='Reset'>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>