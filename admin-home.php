<?php
include("auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body>
<div id="full">
    <div id="inner_full">
        <div id="header"><H2> <a href="admin-home.php" style="text-decoration: none;color:white;">Blood Bank Management System</a></H2></div>
        <div id="body">
            <br>
            <?php
            $un=$_SESSION['un'];
            ?>
       <h1>Welcome Admin</h1>
       <br><br><br>
       <ul>
           <li><a href="donor-reg.php">Donor Registration</a></li>
           <li><a href="donor-list.php">Donor List</a></li>
           <li><a href="sbl.php">Stoke Blood List</a></li>
           <ul><br><br><br><br><br><br><br></ul>
           <li><a href="osl.php">Out of Stoke List</a></li>
           <li><a href="Exchange.php">Exchange Blood Registration</a></li>
           <li><a href="Exchange1.php">Exchange Blood List</a></li>
           <ul><br><br><br><br><br><br><br></ul>
           <li><a href="provide.php">Provide Blood</a></li>
           <li><a href="provide1.php">Reciver List</a></li>
       </ul>
        </div>
        <div id="footer"><H4 align="center">copyright@shahiduzzamanbhuiyan</H4>
        <p align="center"><a href="logout.php"><font color="white">Logout</a></p>
    </div>
    </div>
</div>
</body>
</html>