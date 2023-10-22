<?php
$uid = $_SESSION['uid'];
$sql = "SELECT * FROM tb_user WHERE u_id = '$uid'";

$result=mysqli_query($con, $sql);
$row=mysqli_fetch_array($result);

if($row['u_type']==2)       //Staff
{
    header('location:error.php?message0=kaubukanstaff');
    session_destroy();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car-ee Your Favourite Car Renting Spot</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap3.min.css" rel="stylesheet">
    <link href="css/styles.css?v=1.2" rel="stylesheet">
    <link href="css/queries.css?v=1.2" rel="stylesheet">
    <link href="css/mytable.css" rel="stylesheet">
    <link rel="stylesheet" href="css/flexslider.css?v=1.2" type="text/css">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .myform {
            max-width: 100%;
            box-shadow: 0 4px 6px 0 rgba(22, 22, 26, 0.18);
        }
        .modal-body {
            padding: 0;
        }
        .btn-close {
            position: absolute;
            right: 0;
            padding: 1em;
        }
        .modal-content {
            width: 80%;
            margin: 0 auto;
        }
    </style>
</head>
<header>
    <div class="container">
        <div class="row">
            <div class="responsive-logo"></div>
            <div class="pullcontainer">
                <a href="#" id="pull"><i class="fa fa-bars fa-2x"></i></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2" style="padding-bottom: 2rem" >
                <nav>
                    <div></div>
                    <ul class="clearfix">
                        <div class="logo-main" style="width: 94px; position: absolute; height: 85px; top: 0; left: 327px; text-align: center"><a href="logout.php" style="text-transform: uppercase; letter-spacing: 2px;" ><img src="img/main-logo.png"  >Logout</a></div>
                        <li><a href="staff.php">Home</a></li>
                        <li class="dot">.</li>
                        <li><a href="staffmanage.php" class="r_spacer">Manage</a></li>
                        <li><a href="staffpost.php" >New Car</a></li>
                        <li class="dot">.</li>
                        <li><a href="staffprofile.php" >Profile</a></li>
                        <li><a class="text-sidebar" href="logout.php">logout</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
</html>