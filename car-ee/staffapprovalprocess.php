<?php

include 'cbssession.php';

if (!session_id()) {
    session_start();
}
include("dbconnect.php");

//retrieve data from approval page
$fbid = $_POST['fbid'];
$fstatus = $_POST['fstatus'];

//update booking status
$sql = "UPDATE tb_booking 
        SET b_status='$fstatus'
        WHERE b_id='$fbid'";

//var_dump($sql);

mysqli_query($con,$sql);
mysqli_close($con);

//successful notification of redirect
header('location:staffmanage.php');

?>