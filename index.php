<?php
require('connection.php');
session_start();
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
        <div id="header"><H2>Blood Bank Management System</H2></div>
        <div id="body">

        <br><br><br><br><br>
        <br><br><br><br><br>
       
        <form action="" method="post">
        <table align="center" style>
            
           <tr>
               <td width="200px" heigh="70px"><b>Enter Username</b></td>
               <td width="100px" heigh="70px" ><input type="text" name="un" placeholder="Enter UserName" autocomplete="off" style="
               width:190px;height: 30px;border-radius: 10px;"></td>
           </tr>
           <tr>               <td width="200px" heigh="70px"> <b>Enter Password</b></td>
               <td width="200px" heigh="70px" ><input type="text" name="ps" placeholder="Enter Password" autocomplete="off" style="
               width:190px;height: 30px;0px;border-radius: 10px;"></td>
           </tr>
           <tr>
               <td><input type="submit" name="sub" value="login" style="width:70px;height:30px;border: radius 5px;"></td>
           </tr>
           <tr>
           <p align="center"><a href="admin-reg.php"><font color="white">Registration</a></p>
            </tr>
        </table>
        </form>
        <br><br><br><br>
        <br><br><br><br>
        <?php 
        if(isset($_POST['sub'])){
            $un=$_POST['un'];
            $ps=$_POST['ps'];
            $q = "select * from admin where uname = '$un' AND pass = '$ps'";

        $res = mysqli_query($con,$q);
        $rows = mysqli_num_rows($res);
        if($rows == 1)
        {
            $_SESSION['un'] = $un;
            header("Location:admin-home.php");
        }
            else
            {
                echo "<div class='form'>
                    <h3>Incorrect username or password!</h3><br/>
                    <p class='link'><a href='index.php'>Click to Login Again</a></p>
                     </div>";
            }
    
        }

        ?>
        </div>
       <div id="footer"><H4 align="center">copyright@shahiduzzamanbhuiyan</H4>
        </div>
    </div>
</div>
</body>
</html>