<?php
//This session prevents to access ADMIN DASHBOARD directly...
session_start();
if (!isset($_SESSION["email"])) {
    //after session failed it will redirected to login page 
    header("location: ../adminlogs.html");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <link rel="stylesheet" href="../css/dashpages.css">
</head>

<body>
    <div class="orderstable">
        <div class="recent-payments">
            <div class="heading">
                <h2>Customer Details</h2>
            </div>
            <?php
            $con = new mysqli("localhost", "root", "#True12345", "weena_nadha");
            if ($con->connect_error) {
                echo $con->connect_error;
                die();
            }

            $query = "SELECT username,useremail,phone_no FROM users";
            $result = mysqli_query($con, $query);
            $numrow = mysqli_num_rows($result);

            if ($numrow > 0) {
                echo '<table class="trans-table">';
                echo '<tr>';
                echo '<th>UserName</th>';
                echo '<th>Email</th>';
                echo '<th>Phone-No</th>';
                echo '</tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>' . $row['username'] . '</td>';
                    echo '<td>' . $row['useremail'] . '</td>';
                    echo '<td>' . $row['phone_no'] . '</td>';
                    echo '</tr>';
                }
                echo '</table>';
            }
            ?>
        </div>
</body>

</html>