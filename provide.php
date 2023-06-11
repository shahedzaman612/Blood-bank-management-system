<?php
include("auth_session.php");
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Exchange Blood Registration</title>
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
            <?php
            $un=$_SESSION['un'];
            ?>
       <h2>Blood Provideing</h2><br><br>
      <center> <div id="from">
          <form action="" method="post">
        <table>
            <tr>
                <td width="200px" height="50px">Reciver Name</td>
                <td width="200px" height="50px"> <input type="text" name="name" placeholder="Enter Name"></td>
                
            </tr>
            <tr>
                <td width="200px" height="50px">Reciver Address</td>
                <td width="200px" height="50px"><textarea name="address"></textarea></td>
            </tr>
            <tr>
                <td width="200px" height="50px">Reciver Age</td>
                <td width="200px" height="50px"> <input type="text" name="age" placeholder="Enter Age"></td>
            </tr>
            <tr>
                <td width="200px" height="50px">Reciver Mobile-Number</td>
                <td width="200px" height="50px"> <input type="text" name="mno" placeholder="Enter Mobile No"></td>
            </tr>
            <tr>
                <td width="200px" height="50px">Blood Group Reciving</td>
                <td width="200px" height="50px"> <input type="text" name="bgroup" placeholder="Enter bgroup"></td>
            </tr>
            <tr><input type="submit" name="sub" value="save"></tr>
        </table>
        </form>
        <?php
        if(isset($_POST['sub']))
        {
            $name1=$_POST['name'];
            $address=$_POST['address'];
            $age1=$_POST['age'];
            $mno1=$_POST['mno'];
            $bgroup=$_POST['bgroup'];
            $a3=("insert into recever (name,address,age,bgroup,mno) values('$name1','$address','$age1','$bgroup','$mno1
        ')");
        $res = mysqli_query($con,$a3);
$sql = "select * from donor_registration where bgroup='$bgroup'";
$result = mysqli_query($con,$sql);  
$res = mysqli_fetch_array($result);
        $id = $res['id'];
        $name = $res['name'];
        $add= $res['address'];
        $age= $res['age'];
        $b1 = $res['bgroup'];
        $mno = $res['Mno'];
        $a=("insert into out_stock_b (bgroup,name,mno) values('$b1','$name','$mno')");
        $res = mysqli_query($con,$a);
        
        $a2=("delete from donor_registration where id='$id'");
        $res1 = mysqli_query($con,$a2);
        
        if($res)
        {
            echo "<script>alert('Registration Successfull')</script>";
        }
        else
        {
            echo "<script>alert('Registration Failed')</script>";
        } 
    }
        ?>
       </div></center>
       
        </div>
        <div id="footer"><H4 align="center">copyright@shahiduzzamanbhuiyan</H4>
        <p align="center"><a href="logout.php"><font color="white">Logout</a></p>
    </div>
    </div>
</div>
</body>
</html>