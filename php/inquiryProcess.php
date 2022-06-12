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
$first = $_POST['firstname'];
$last = $_POST['lastname'];
$phone = $_POST['phone_no'];
$email = $_POST['email'];
$message = $_POST['description'];

/*This mysql Query helps to insert the values to the relevant table on 'WeenaNada' database*/
$sql = "INSERT INTO inquiry (firstname,lastname,phone_no,email,description,date) VALUES ('$first','$last','$phone','$email','$message',NOW())";

if($con->query($sql))
{
    echo "
    <center><p style='background-color: #0a063c; color: #ffffff; font-family: sans-serif; font-size: 20px; font-weight: 500px; height: auto; padding: 20px; margin-top: 0; box-shadow: 0px 14px 28px rgba(0, 0, 0, 0.412),
    0px 10px 10px rgba(22, 4, 51, 0.422);'> We have received your message successfully!</p></center>";

    echo '<center><p style="font-family: sans-serif; font-size: 20px; font-weight: bold;"> You can submit another one <br><br> Wait a moment page is redirecting... </p></center>';
    header("refresh: 10; url= http://localhost:8081/weenanada/contact.html");
}
else
{
    echo "
    <center><p style='background-color: #ffee00; color: #0a063c; font-family: sans-serif; font-size: 20px; font-weight: bold; height: auto; padding: 20px; margin-top: 0; box-shadow: 0px 14px 28px rgba(0, 0, 0, 0.412),
    0px 10px 10px rgba(22, 4, 51, 0.422);'><font color='red' style='font-weight: bold;'>
    Oops!</font> We have not received your message <u><font color='red'></p></center>";

    echo '<center><p style="font-family: sans-serif; font-size: 20px; font-weight: bold;"> Plesae Send Again <br><br> Wait a moment page is redirecting... </p></center>';
    header("refresh: 10; url= http://localhost:8081/weenanada/contact.html");
}
