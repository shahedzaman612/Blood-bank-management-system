<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admi Registration</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body>
<div id="full">
    <div id="inner_full">
        <div id="header"><H2> <a href="admin-home.php" style="text-decoration: none;color:white;">Blood Bank Management System</a></H2></div>
        <div id="body">
       <h1>Admin Registration</h1><br><br><br><br><br><br>
      <center> <div id="from">
          <form action="" method="post">
        <table>
            <tr>
                <td width="200px" height="50px">Enter Username</td>
                <td width="200px" height="50px"> <input type="text" name="name" placeholder="Enter Username"></td>
                <td width="200px" height="50px">Enter PASSWORD</td>
                <td width="200px" height="50px"> <input type="text" name="pass" placeholder="Enter password"></td>
            </tr>
            <tr><input type="submit" name="sub" value="save"></tr>
        </table>
        </form>
        <?php
        if(isset($_POST['sub']))
        {
            $name=$_POST['name'];
            $pass=$_POST['pass'];
            $a=("insert into admin (uname,pass) values('$name','$pass')");

            $res = mysqli_query($con,$a);
        
        if($res)
        {
            echo "<script>alert('Admin Registration Successfull')</script>";
        }
        else
        {
            echo "<script>alert('Admin Registration Failed')</script>";
        }
    }
        
        ?>
       </div></center>
       
        </div>
        <div id="footer"><H4 align="center">copyright@shahiduzzamanbhuiyan</H4>
        <p align="center"><a href="logout.php"><font color="white">Login</a></p>
    </div>
    </div>
</div>
</body>
</html>