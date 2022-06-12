<?php
/*This php script helps to process and compare values with database after user clicked signIn*/

/*Below script helps to connect system database*/
$con = new mysqli("localhost","root","#True12345","weena_nadha");
if($con->connect_error)
{
    echo $con->connect_error;
    die();
}

    $emailID = $_POST['email'];
    $lastpass = $_POST['ord'];
    $pass = $_POST['password'];
    
    $check_sql = "SELECT email,password FROM admin WHERE email='$emailID' AND RIGHT(password,3)='$lastpass'";
    $result = mysqli_query($con,$check_sql);
    $row = mysqli_num_rows($result);
    
    if($row == 1)
    {
        $change_pass = "UPDATE admin SET password='$pass' WHERE email='$emailID'";
        $status = mysqli_query($con,$change_pass);
        if($con->query($change_pass))
        {
            echo "
            <center><p style='background-color: #0a063c; color: #ffffff; font-family: sans-serif; font-size: 20px; font-weight: 500px; height: auto; padding: 20px; margin-top: 0; box-shadow: 0px 14px 28px rgba(0, 0, 0, 0.412),
            0px 10px 10px rgba(22, 4, 51, 0.422);'> Your password has been reset <font color='#fafa2f' style='font-weight: bold;'>
            Successfully! </font>Keep remembered your password</p></center>";

            echo '<center><p style="font-family: sans-serif; font-size: 20px; font-weight: bold;"> You can login Now with your New Password <br><br> Wait a moment page is redirecting... </p></center>';
            header("refresh: 10; url= ../adminlogs.html");
        }
    }
    else{
        echo "
        <center><p style='background-color: #ffee00; color: #0a063c; font-family: sans-serif; font-size: 20px; font-weight: bold; height: auto; padding: 20px; margin-top: 0; box-shadow: 0px 14px 28px rgba(0, 0, 0, 0.412),
        0px 10px 10px rgba(22, 4, 51, 0.422);'><font color='red' style='font-weight: bold;'>
        Oops!</font> Your Email or 3 Digit characters are wrong!</p></center>";

        echo '<center><p style="font-family: sans-serif; font-size: 20px; font-weight: bold;"> Do Not try frequenly! <br><br> Wait a moment page is redirecting... </p></center>';
        header("refresh: 10; url= ../adminlogs.html");
    }
?>