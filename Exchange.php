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
       <h2>Exchange Blood Donor Registration</h2><br><br>
      <center> <div id="from">
          <form action="" method="post">
        <table>
            <tr>
                <td width="200px" height="50px">Enter Name</td>
                <td width="200px" height="50px"> <input type="text" name="uname" placeholder="Enter Name"></td>
                <td width="200px" height="50px">Enter Father's Name</td>
                <td width="200px" height="50px"> <input type="text" name="fname" placeholder="Enter Father's Name"></td>
            </tr>
            <tr>
                <td width="200px" height="50px">Enter Address</td>
                <td width="200px" height="50px"><textarea name="address"></textarea></td>
                <td width="200px" height="50px">Enter City</td>
                <td width="200px" height="50px"> <input type="text" name="city" placeholder="Enter City"></td>
            </tr>
            <tr>
                <td width="200px" height="50px">Enter Age</td>
                <td width="200px" height="50px"> <input type="text" name="age" placeholder="Enter Age"></td>
                <td width="200px" height="50px">Enter Email</td>
                <td width="200px" height="50px"> <input type="text" name="email" placeholder="Enter Email"></td>
            </tr>
            <tr>
                <td width="200px" height="50px">Enter Mobile-Number</td>
                <td width="200px" height="50px"> <input type="text" name="mno" placeholder="Enter Mobile No"></td>
            </tr>
            <tr>
                <td width="200px" height="50px">Provide Blood</td>
                <td width="200px" height="50px"> <input type="text" name="bgroup" placeholder="Enter bgroup"></td>
                <td width="200px" height="50px">Get Blood</td>
                <td width="200px" height="50px"> <input type="text" name="ebgroup" placeholder="Enter bgroup"></td>
            </tr>
            <tr><input type="submit" name="sub" value="save"></tr>
        </table>
        </form>
        <?php
        if(isset($_POST['sub']))
        {
            $name=$_POST['uname'];
            $fname=$_POST['fname'];
            $address=$_POST['address'];
            $city=$_POST['city'];
            $age=$_POST['age'];
            $email=$_POST['email'];
            $mno=$_POST['mno'];
            $bgroup=$_POST['bgroup'];
            $ebgroup=$_POST['ebgroup'];

            
            
$sql = "select * from donor_registration where bgroup='$bgroup'";
$result = mysqli_query($con,$sql);  
$res = mysqli_fetch_array($result);
        $id = $res['id'];
        $name1 = $res['name'];
        $b1 = $res['bgroup'];
        $mno1 = $res['Mno'];
        $a=("insert into out_stock_b (bgroup,name,mno) values('$b1','$name1','$mno1')");
        $res = mysqli_query($con,$a);
        $a2=("delete from donor_registration where id='$id'");
        $res1 = mysqli_query($con,$a2);
        $a3="insert into donor_registration (name,fname,address,city,age,bgroup,email,mno)values('$name','$fname','$address','$city','$age','$ebgroup','$email','$mno')";

            $res = mysqli_query($con,$a3);

        $a4="insert into exchange_b (name,fname,address,city,age,bgroup,email,mno,ebgroup)values('$name','$fname','$address','$city','$age','$bgroup','$email','$mno','$ebgroup')";

            $res = mysqli_query($con,$a4);
        
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