<?php
/*This php script helps to process and compare values with database after user clicked signIn*/

/*Below script helps to connect system database*/
$con = new mysqli("localhost","root","#True12345","weena_nadha");
if($con->connect_error)
{
    echo $con->connect_error;
    die();
}

?>