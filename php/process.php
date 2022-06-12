<?php
/*This php script helps to process and compare values with database after user clicked signIn*/

/*Below script helps to connect system database*/
$con = new mysqli("localhost","root","#True12345","weena_nadha");
if($con->connect_error)
{
    echo $con->connect_error;
    die();
}

/*Variable declaration to store entered datas*/
$Name = $_POST['name'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];
$Pass = $_POST['password'];

/*This mysql Query helps to insert the values to the relevant table on 'WeenaNada' database*/
$sql = "INSERT INTO admin (name,email,phone,password) VALUES ('$Name','$Email','$Phone','$Pass')";

if($con->query($sql))
{
    echo "
    <center><p style='background-color: #0a063c; color: #ffffff; font-family: sans-serif; font-size: 20px; font-weight: 500px; height: auto; padding: 20px; margin-top: 0; box-shadow: 0px 14px 28px rgba(0, 0, 0, 0.412),
    0px 10px 10px rgba(22, 4, 51, 0.422);'> Hey,$Name <font color='#fafa2f' style='font-weight: bold;'>
    Congratulations!</font> to become an Admin of WeenaNada, keep you Email ID and Password securely</p></center>";

    echo '<center><p style="font-family: sans-serif; font-size: 20px; font-weight: bold;"> You can login Now <br><br> Wait a moment page is redirecting... </p></center>';
    header("refresh: 10; url= ../adminlogs.html");
}
else
{
    echo "
    <center><p style='background-color: #ffee00; color: #0a063c; font-family: sans-serif; font-size: 20px; font-weight: bold; height: auto; padding: 20px; margin-top: 0; box-shadow: 0px 14px 28px rgba(0, 0, 0, 0.412),
    0px 10px 10px rgba(22, 4, 51, 0.422);'><font color='red' style='font-weight: bold;'>
    Oops!</font> We cannot insert your record, may be Your Email ID <u><font color='red'>$Email</font></u> already exists, Please Try another one</p></center>";

    echo '<center><p style="font-family: sans-serif; font-size: 20px; font-weight: bold;"> Plesae Submit Again <br><br> Wait a moment page is redirecting... </p></center>';
    header("refresh: 10; url= ../adminlogs.html");
}

?>