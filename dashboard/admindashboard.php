<?php
//This session prevents to access ADMIN DASHBOARD directly...
session_start();
if (!isset($_SESSION["email"])) {
    //after session failed it will redirected to login page 
    header("location: ../adminlogs.html");
} else {
    //if it's true it will remember user email
    $EmailID = $_SESSION["email"];
}
?>

<!DOCTYPE html>
<!-- This is the main file of Admin Dashboard, after input validation user will be redirected 
to this webpage -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/adminstyle.css">
    <style>
        .trans-table tr:nth-child(odd) {
            background-color: rgba(3, 5, 110, 0.952);
            color: white;
        }

        .trans-table tr:nth-child(even) {
            background-color: rgba(54, 5, 123, 0.883);
            color: white;
        }
    </style>
</head>

<body>

    <?php
    /*This php script helps to process and compare values with database after user clicked signIn*/

    /*Below script helps to connect system database*/
    $con = new mysqli("localhost", "root", "#True12345", "weena_nadha");
    if ($con->connect_error) {
        echo $con->connect_error;
        die();
    }

    //here first system gets user's name to display on dashboard
    $get_name = "SELECT * FROM admin WHERE email='$EmailID'";
    $name = mysqli_query($con, $get_name);
    $row = mysqli_fetch_array($name);
    $adminName = $row[0];

    //these are quiries to display the summary on dashboard home page
    $sql_check = "SELECT * FROM admin";
    if ($result = mysqli_query($con, $sql_check)) {
        $admins = mysqli_num_rows($result);
    }

    $sql_check_2 = "SELECT * FROM users";
    if ($result_2 = mysqli_query($con, $sql_check_2)) {
        $users = mysqli_num_rows($result_2);
    }

    $sql_check_3 = "SELECT * FROM inquiry";
    if ($result_3 = mysqli_query($con, $sql_check_3)) {
        $inquiry = mysqli_num_rows($result_3);
    }

    ?>

    <div class="side-menu">
        <div class="brand">
            <h1>WeenaNada</h1>
        </div>
        <ul>
            <li><a href="admindashboard.php">Dashboard</a></li>
            <li><a href="orders.php">Orders</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="categories.php">Categories</a></li>
            <li><a href="customers.php">Customers</a></li>
            <li><a href="inquiry.php">Inquiries</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="navigation">
                <div class="search">
                    <input type="text" placeholder="Search">
                    <button type="submit"><img src="../icons/search.png"></a></button>
                </div>
                <div class="user">
                    <a href="../php/logout.php" class="btn">Logout</a>
                    <?php echo "<h3>$adminName</h3>"; ?>
                    <img src="../images/bg1.png" alt="profile">
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <?php
                        echo "<h1>$users</h1>";
                        ?>
                        <h3>Customers</h3>
                    </div>
                    <div class="icons">
                        <img src="../images/users.png" alt="userimage">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <?php
                        echo "<h1>$admins</h1>";
                        ?>
                        <h3>Admins</h3>
                    </div>
                    <div class="icons">
                        <img src="../images/bg1.png" alt="userimage">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <?php
                        echo "<h1>$inquiry</h1>";
                        ?>
                        <h3>Inquiries</h3>
                    </div>
                    <div class="icons">
                        <img src="../images/inquiry.png" alt="userimage">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>150000</h1>
                        <h3>Income</h3>
                    </div>
                    <div class="icons">
                        <img src="../images/income.png" alt="userimage">
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="heading">
                        <h2>Recent Trasactions</h2>
                        <a href="orders.php" class="btn">View all</a>
                    </div>
                    <?php
                    $con = new mysqli("localhost", "root", "#True12345", "weena_nadha");
                    if ($con->connect_error) {
                        echo $con->connect_error;
                        die();
                    }

                    //this script generates the table dynamically depends on records

                    $query = "SELECT username,payment.useremail,total_amount,date FROM users,payment WHERE payment.useremail = users.useremail;";
                    $result = mysqli_query($con, $query);
                    $numrow = mysqli_num_rows($result);

                    if ($numrow > 0) {
                        echo '<table class="trans-table">';
                        echo '<tr style="background: black; color: yellow">';
                        echo '<th>UserName</th>';
                        echo '<th>Email</th>';
                        echo '<th>TotalAmount</th>';
                        echo '<th>Date</th>';
                        echo '</tr>';
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<td>' . $row['username'] . '</td>';
                            echo '<td>' . $row['useremail'] . '</td>';
                            echo '<td>' . $row['total_amount'] . '</td>';
                            echo '<td>' . $row['date'] . '</td>';
                            echo '</tr>';
                        }
                        echo '</table>';
                    }
                    ?>
                </div>
                <div class="new-customers">
                    <div class="heading">
                        <h2>New Inquiries</h2>
                        <a href="inquiry.php" class="btn">View all</a>
                    </div>
                    <?php
                    $con = new mysqli("localhost", "root", "#True12345", "weena_nadha");
                    if ($con->connect_error) {
                        echo $con->connect_error;
                        die();
                    }

                    $query = "SELECT firstname,description FROM inquiry";
                    $result = mysqli_query($con, $query);
                    $numrow = mysqli_num_rows($result);

                    if ($numrow > 0) {
                        echo '<table class="trans-table">';
                        echo '<tr style="background: black; color: yellow">';
                        echo '<th>Name</th>';
                        echo '<th>Message</th>';
                        echo '</tr>';
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<td>' . $row['firstname'] . '</td>';
                            //will not be displyed full message in home page
                            $shorten = $row['description'];
                            echo '<td>' . substr($shorten, 0, 12) . "..." . '</td>';
                            echo '</tr>';
                        }
                        echo '</table>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>