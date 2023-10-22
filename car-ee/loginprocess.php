<?php
session_start();

//DB Connection
include("dbconnect.php");
echo "1";
//Retrieve input
$fid = $_POST['userID'];
$fpwd = $_POST['password'];
echo "2";
$_fid = mysqli_real_escape_string($con, $fid);
$_fpwd = mysqli_real_escape_string($con, $fpwd);
echo "3";
//Get user data from DB
$sql = "SELECT * FROM tb_user WHERE u_id='$_fid'";

//Execute SQL
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_array($result);
$count=mysqli_num_rows($result);

echo "<br><br>";
echo "count:".$count;
echo "<br><br>";
//Login check
if($count==1)                   //user found
{
    echo "4";
    var_dump($_fpwd);
    if(password_verify($_fpwd, $row['u_pwd'])){
        echo "masuk";
        //set session
        $_SESSION['u_id']=session_id();
        $_SESSION['uid']=$fid;
        $_SESSION['uname']=$row['u_name'];
        $_SESSION['uphone']=$row['u_phone'];
        $_SESSION['uaddress']=$row['u_address'];
        $_SESSION['utype'] = $row['u_type'];

        if($row['u_type']==1)       //Staff
        {
            echo '<script> alert("Success! Welcome Back");
            window.location.href = "staff.php"; </script>';
        }else                       //Customer
        {
            echo '<script> alert("Success! Welcome Back");
            window.location.href = "customer.php"; </script>';
        }
    }

}elseif($count==0) {
    //Display login error
    echo "err";
    echo '<script> alert("log in failed! Please use the correct user credentials");
        window.location.href = "login.php"; </script>';
}
echo "c";
mysqli_close($con);

