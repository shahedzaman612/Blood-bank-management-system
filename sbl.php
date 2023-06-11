<?php
include("auth_session.php");
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor List</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css">
    <style type="text/css">
        td{
            width:200px;
            height:20px;
        }
    </style>
</head>
<body>
<div id="full">
    <div id="inner_full">
        <div id="header"><H2> <a href="admin-home.php" style="text-decoration: none;color:white;">Blood Bank Management System</a></H2></div>
        <div id="body">
            <?php
            $un=$_SESSION['un'];
            ?>
       <h1>Blood In Stoke</h1><br>
      <center> <div id="from">
          <table align="center">
              <tr>
                  <td><center><font color="black"><b>Blood Group</b></font></center></td>
                  <td><center><font color="black"><b>Quantity</b></font></center></td>
                </tr>
                <tr>
        <td><center>A+</center></td>
        <td><center><?php
        $q=("select* from donor_registration where bgroup='A+'");
                $res = mysqli_query($con,$q);
          echo  $row=mysqli_num_rows($res);
          ?>
        </center></td>
    </tr>
        <td><center>A-</center></td>
        <td><center>
        <?php
        $q=("select* from donor_registration where bgroup='A-'");
                $res = mysqli_query($con,$q);
          echo  $row=mysqli_num_rows($res);
          ?>
        </center></td></tr>
        <td><center>B+</center></td>
        <td><center>
        <?php
        $q=("select* from donor_registration where bgroup='B+'");
                $res = mysqli_query($con,$q);
          echo  $row=mysqli_num_rows($res);
          ?>
        </center></td></tr>
        <td><center>B-</center></td>
        <td><center>
        <?php
        $q=("select* from donor_registration where bgroup='B-'");
                $res = mysqli_query($con,$q);
          echo  $row=mysqli_num_rows($res);
          ?>
        </center></td></tr>
        <td><center>AB+</center></td>
        <td><center>
        <?php
        $q=("select* from donor_registration where bgroup='AB+'");
                $res = mysqli_query($con,$q);
          echo  $row=mysqli_num_rows($res);
          ?>
        </center></td></tr>
        <td><center>AB-</center></td>
        <td><center>
        <?php
        $q=("select* from donor_registration where bgroup='AB-'");
                $res = mysqli_query($con,$q);
          echo  $row=mysqli_num_rows($res);
          ?>
        </center></td></tr>
        <td><center>O+</center></td>
        <td><center>
        <?php
        $q=("select* from donor_registration where bgroup='O+'");
                $res = mysqli_query($con,$q);
          echo  $row=mysqli_num_rows($res);
          ?>
        </center></td></tr>
        <td><center>O-</center></td>
        <td><center>
        <?php
        $q=("select* from donor_registration where bgroup='O-'");
                $res = mysqli_query($con,$q);
          echo  $row=mysqli_num_rows($res);
          ?>
        </center></td></tr>
        </tr>
          </table>
       </div></center>
       
        </div>
        <div id="footer"><H4 align="center">copyright@shahiduzzamanbhuiyan</H4>
        <p align="center"><a href="logout.php"><font color="white">Logout</a></p>
    </div>
    </div>
</div>
</body>
</html>