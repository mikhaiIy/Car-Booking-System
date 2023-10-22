<?php
include 'cbssession.php';
include("dbconnect.php");

if(!session_id())
{
    session_start();
}

if (isset($_POST['submit']) && isset($_FILES['my_media'])) {
    include "dbconnect.php";

    echo "<pre>";
    print_r($_FILES['my_media']);
    echo "</pre>";

    $media_name = $_FILES['my_media']['name'];
    $media_size = $_FILES['my_media']['size'];
    $tmp_name = $_FILES['my_media']['tmp_name'];
    $error = $_FILES['my_media']['error'];

    $vreg = $_POST['vreg'];
    $vtype = $_POST['vtype'];
    $vmodel = $_POST['vmodel'];
    $vyear = $_POST['vyear'];
    $vprice = $_POST['vprice'];

    if ($error == 0) {
        if ($media_size > 160000) {
            $em = "Sorry, your file is too large.";
            header("Location: index.php?error=$em");
        }else {
            $media_ex = pathinfo($media_name, PATHINFO_EXTENSION);
            $media_ex_lc = strtolower($media_ex);

            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($media_ex_lc, $allowed_exs)) {
//                $new_media_name = uniqid("CAR-", true).'.'.$media_ex_lc;
                $new_media_name = "IMG-" .$vreg."-".$vtype."-".$vyear.'.'.$media_ex_lc ;
                $media_upload_path = 'image/'.$new_media_name;
                move_uploaded_file($tmp_name, $media_upload_path);

                //UPDATE into Database
                $sql = "INSERT INTO tb_vehicle(v_reg,v_type,v_model,v_year,v_price,v_media)
                        VALUE ('$vreg','$vtype','$vmodel','$vyear','$vprice','$new_media_name')";
                mysqli_query($con, $sql);
                mysqli_close($con);
                echo '<script>
                alert("New car added!");
                window.location.href = "staff.php";
                </script>';

            }else {
                $em = "You can't upload files of this type";
            }
        }
    }else {
        $em = "unknown error occurred!";
    }

}else {
    echo"ERROR FILE INPUT!";
}
?>