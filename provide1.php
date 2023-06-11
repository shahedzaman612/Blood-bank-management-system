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
    <title>Reciver List</title>
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
       <h1>Reciver List</h1><br>
      <center> <div id="from">
          <table>
              <tr>
                  <td><center><font color="black"><b>Name</b></font></center></td>
                  <td><center><font color="black"><b>Address</b></font></center></td>
                  <td><center><font color="black"><b>Age</b></font></center></td>
                  <td><center><font color="black"><b>Blood Group</b></font></center></td>
                  <td><center><font color="black"><b>Moblie Number</b></font></center></td>
                </tr>
                <?php
                $q=("select* from recever");
                $res = mysqli_query($con,$q);
                while($re = mysqli_fetch_array($res))
    {
        echo "<tr align=center>";
        echo "<td>".$re['name']."</td>";
        echo "<td>".$re['address']."</td>";
        echo "<td>".$re['age']."</td>";
        echo "<td>".$re['bgroup']."</td>";
        echo "<td>".$re['mno']."</td>";
        echo "</tr>";
    }
    ?>
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