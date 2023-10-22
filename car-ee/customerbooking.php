<?php
include 'cbssession.php';
if(!session_id()){
    session_start();
}
include ('dbconnect.php');
include ('bookmodal.php');
include 'headercustomer.php';
$uid = $_SESSION['uid'];
//retrive individual bookins;
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Scarica gratis GARAGE Template html/css - Web Domus Italia - Web Agency </title>
    <meta name="description" content="Scarica gratis il nostro Template HTML/CSS GARAGE. Se avete bisogno di un design per il vostro sito web GARAGE può fare per voi. Web Domus Italia">
    <meta name="author" content="Web Domus Italia">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="style/slider.css">
    <link rel="stylesheet" type="text/css" href="style/mystyle.css">
    <link rel="stylesheet" type="text/css" href="css/myform.css">
    <link rel="stylesheet" type="text/css" href="css/mybutton.css">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="js/myscript.js"></script>
</head>
<style>
    body {
        /*background: #F2F3EB;*/
    }
</style>
<body>
<!-- ____________________Booking Section ______________________________-->



<!-- ____________________Featured Section ______________________________-->
<div class="allcontain">

    <!-- ________________________LATEST CARS SECTION _______________________-->
    <div class="latestcars">
        <h1 class="text-center">&bullet; ALL   AUTOS &bullet;</h1>
        <!--            <ul class="nav nav-tabs navbar-left latest-navleft">-->
        <!--                <li role="presentation" class="li-sortby"><span class="sortby">SORT BY: </span></li>-->
        <!--                <li data-filter=".RECENT" role="presentation"><a href="#mostrecent" class="prcBtnR">MOST RECENT </a></li>-->
        <!--                <li data-filter=".POPULAR" role="presentation"><a href="#mostpopular" class="prcBtnR">MOST POPULAR </a></li>-->
        <!--                <li  role="presentation"><a href="#" class="alphSort">ALPHABETICAL </a></li>-->
        <!--                <li data-filter=".HPRICE" role="presentation"><a href="#" class="prcBtnH">HIGHEST PRICE </a></li>-->
        <!--                <li data-filter=".LPRICE" role="presentation"><a href="#" class="prcBtnL">LOWEST  PRICE </a></li>-->
        <!--                <li id="hideonmobile">-->
        <!--            </ul>-->
    </div
    <br>
    <!-- ________________________Latest Cars Image Thumbnail________________-->
    <div class="grid">
        <div class="row">
            <?php
            $sql = "SELECT * FROM tb_vehicle";
            $result = mysqli_query($con, $sql);

            while ($row=mysqli_fetch_array($result)){
                echo '<form method="post" action="bookmodal.php">';
                echo '';
                echo '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">';
                echo '<div class="txthover"><img src="image/'.$row['v_media'].' " width="342" height="393">';//CAR IMAGE
                echo '<div class="txtcontent">';
                echo '<div class="stars">';
                echo '<div class="glyphicon glyphicon-star"></div>';
                echo '<div class="glyphicon glyphicon-star"></div>';
                echo '<div class="glyphicon glyphicon-star"></div>';
                echo '</div>';
                echo '<div class="simpletxt">';
                echo '<h3 class="name" style="font-size: 25px">'.$row["v_type"].'</h3>'; //CAR NAME
                echo '<p style="font-size: 12px">Year: '.$row["v_year"].' </p>'; //DESCRIPTION nnti tukar pergi year,
                echo '<h4 class="price" style="font-size: 18px">'.$row["v_price"].' &euro;</h4>'; //PRICE ?>

                <button type="button" class="open-my-modal1 fancy-btn" data-v-reg="<?php echo $row["v_reg"]?>" data-v-type="<?php echo $row["v_type"]?>" data-v-price="<?php echo $row["v_price"]?>" data-toggle="modal" data-target="#largeShoes">BOOK</button><br>
                <?php
                echo $row["v_reg"];
                echo '<input type="hidden" name="car">'; //CAR DETAILS
                echo '</div>';
                echo '<div class="stars2">';
                echo '<div class="glyphicon glyphicon-star"></div>';
                echo '<div class="glyphicon glyphicon-star"></div>';
                echo '<div class="glyphicon glyphicon-star"></div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</form>';
            }

            ?>
        </div>
    </div>
</div>


</body>
<?php include 'footermain.php' ?>
</html>





