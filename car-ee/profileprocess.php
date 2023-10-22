<?php
session_start();

//DB Connection
include("dbconnect.php");

//retriving data
echo "1";
$cuid = $_SESSION['uid'];
$utype = $_SESSION['utype'];
if(isset($_POST['submit'])){
    echo "2";
    $uid = $_POST['uid'];
    $uname = $_POST['uname'];
    $uphone = $_POST['uphone'];
    $uaddress = $_POST['uaddress'];
}

if (!empty($uid)){
    $sql = "UPDATE tb_user SET u_id = '$uid' WHERE u_id = '$cuid'";
    $result = mysqli_query($con, $sql);
    $idCheck = TRUE;
}else {$idCheck = FALSE;}

if (!empty($uname)){
    echo "3";
    $sql = "UPDATE tb_user SET u_name = '$uname' WHERE u_id = '$cuid'";
    $result = mysqli_query($con, $sql);
}

if (!empty($uphone)){
    $sql = "UPDATE tb_user SET u_phone = '$uphone' WHERE u_id = '$cuid'";
    $result = mysqli_query($con, $sql);
}

if (!empty($uaddress)){
    $sql = "UPDATE tb_user SET u_address = '$uaddress' WHERE u_id = '$cuid'";
    $result = mysqli_query($con, $sql);
}

if($idCheck){
    echo "4a";
    $newDetails = "SELECT * FROM tb_user WHERE u_id='$uid'";
}else{
    echo "4b";
    $newDetails = "SELECT * FROM tb_user WHERE u_id='$cuid'";
}

//retrieving new details from db
echo "5";
$result = mysqli_query($con, $newDetails);
$row = mysqli_fetch_array($result);

$_SESSION['uid']=$row['u_id'];
$_SESSION['uname']=$row['u_name'];
$_SESSION['uphone']=$row['u_phone'];
$_SESSION['uaddress']=$row['u_address'];
echo "6";
if ($utype == 1 ){      //staff
    header('location:staffprofile.php');
}elseif ($utype==2){    //customer
    header('location:customerprofile.php');
}

?>