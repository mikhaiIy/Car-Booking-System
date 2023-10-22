<?php
include("dbconnect.php");

if(isset($_POST['submit'])){
    $fid = $_POST['fid'];
    $fpwd = $_POST['fpwd'];
    $fpwd2 = $_POST['fpwd2'];
    $fname = $_POST['fname'];
    $faddress = $_POST['faddress'];
    $fphone = $_POST['fphone'];
    $flno = $_POST['flno'];
}


var_dump($fid,$fpwd,$fpwd2,$fname,$faddress,$fphone,$flno);

$check = mysqli_query($con, "SELECT * FROM tb_user WHERE u_id = '$fid'");
$checkcount = mysqli_num_rows($check);

var_dump($checkcount);
echo $checkcount;
if ($checkcount==0){
    if($fpwd==$fpwd2){
        $password = password_hash($fpwd, PASSWORD_DEFAULT);
        echo $password;
        //cleaning values
        $_fid = mysqli_real_escape_string($con, $fid);
        $_fpwd = mysqli_real_escape_string($con, $fpwd);
        $_fname = mysqli_real_escape_string($con,$fname);
        $_faddress = mysqli_real_escape_string($con,$faddress);
        $_fphone = mysqli_real_escape_string($con,$fphone);
        $_flno = mysqli_real_escape_string($con, $flno);

        echo "<br><br>";
        var_dump($_fid,$_fpwd,$_fname,$_faddress,$_fphone,$_flno);



        $sql = "INSERT INTO tb_user (u_id, u_pwd, u_name, u_address, u_phone, u_lno, u_type)
        VALUES ('$_fid', '$password', '$_fname', '$_faddress', '$_fphone', '$_flno', '2')";

        mysqli_query($con, $sql);
        mysqli_close($con);

        echo '<script>
                alert("Successful, Please login!");
                window.location.href = "login.php";
        </script>';

    }

}else{
    echo '<script>
                alert("Your IC has been Registered to an Account, Please Login");
                window.location.href = "login.php";
        </script>';
}


