<?php
include 'cbssession.php';
if (!session_id()){
    session_start();
}
include("dbconnect.php");

$uid = $_SESSION['uid'];
$fbid= $_POST['bid'];
$fvec= $_POST['vreg'];
$fpdate = $_POST['fpdate'];
$frdate = $_POST['frdate'];

//Calculate number of days
$pickup = date('Y-m-d H:i:s', strtotime($fpdate));
$return = date('Y-m-d H:i:s', strtotime($frdate));
$dayDiff = ceil(strtotime($frdate) - strtotime($fpdate));

//seconds
$daynum = $dayDiff/(60*60*24);

//retrieve price from DB
$sqlprice = "SELECT v_price FROM tb_vehicle WHERE v_reg ='$fvec'  ";
$resultprice = mysqli_query($con, $sqlprice);
$rowprice = mysqli_fetch_array($resultprice);

//calculate total price
$totalprice = $daynum * ($rowprice['v_price']);

//update booking into DB
$sql = "UPDATE tb_booking 
        SET b_vehicle='$fvec', b_pdate='$fpdate', b_rdate='$frdate', b_total='$totalprice', b_status='1'
        WHERE b_id='$fbid'";

mysqli_query($con, $sql);
mysqli_close($con);

//successful notification of redirect
header('location:customermanage.php');
