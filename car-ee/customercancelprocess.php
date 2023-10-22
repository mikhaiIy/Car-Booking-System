<?php
include 'cbssession.php';
if(!session_id()){
    session_start();
}
include ('dbconnect.php');
//get bookingID from URL
if(isset($_POST ['bid']))
{
    $bid = $_POST['bid'];
}
//SQL delete
$sql = "DELETE FROM tb_booking WHERE b_id = '$bid'";
$result = mysqli_query($con, $sql);
mysqli_close($con);

header('location: customermanage.php')

?>