<?php
/*This php script helps to process and compare values with database after user clicked signIn*/

/*Below script helps to connect system database*/
$con = new mysqli("localhost","root","#True12345","weena_nadha");
if($con->connect_error)
{
    echo $con->connect_error;
    die();
}

/*Storing entered values in order to process*/
$EmailID = $_POST['email'];
$Password = $_POST['password'];

$sql_check = "SELECT email,password FROM admin WHERE email='$EmailID' AND password='$Password'";

/*Checking entered values are correct or not?*/
$result = $con->query($sql_check);
if($result->num_rows == 1)
{
    //user session is created here
    session_start();
    $_SESSION["email"]= $EmailID;
    $_SESSION["password"]= $Password;
    
    //after session is created user will be redirected to Admin ADMIN DASHBOARD
    header("location: ../dashboard/admindashboard.php");
}
else
{
    echo "
    <center><p style='background-color: #ffee00; color: #0a063c; font-family: sans-serif; font-size: 20px; font-weight: bold; height: auto; padding: 20px; margin-top: 0; box-shadow: 0px 14px 28px rgba(0, 0, 0, 0.412),
    0px 10px 10px rgba(22, 4, 51, 0.422);'><font color='red' style='font-weight: bold;'>
    Oops!</font> Invalid Email or Password, Please type your credentials correctly</p></center>";

    echo '<center><p style="font-family: sans-serif; font-size: 20px; font-weight: bold;"> Plesae Submit Again OR Click Forgot Password <br><br> Wait a moment page is redirecting... </p></center>';
    header("refresh: 10; url= ../adminlogs.html");
}

?>