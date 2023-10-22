<?php
include 'cbssession.php';
if(!session_id()){
    session_start();
}
include("dbconnect.php");
include ('bookmodal.php');
include 'headercustomer.php';

$uid = $_SESSION['uid'];

$result = mysqli_query($con, "SELECT * FROM tb_user WHERE u_id='$uid'");
$row = mysqli_fetch_array($result);
?>
    <head>
        <link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="style/slider.css">
        <link rel="stylesheet" type="text/css" href="style/mystyle.css">
        <link rel="stylesheet" type="text/css" href="css/mybutton.css">
        <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="js/myscript.js"></script>
    </head>
<h3>Welcome Back!  <?php echo $row['u_name']; ?></h3>
    <!--_______________________________________ Carousel__________________________________ -->
    <div class="allcontain">
        <div id="carousel-up" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner " role="listbox">
                <div class="item active">
                    <img src="image/oldcar.jpg" alt="oldcar">
                    <div class="carousel-caption">
                        <h2>Porsche 356</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur ,<br>
                            sed do eiusmod tempor incididunt ut labore </p>
                    </div>
                </div>
                <div class="item">
                    <img src="image/porche.jpg" alt="porche">
                    <div class="carousel-caption">
                        <h2>Porche</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur ,<br>
                            sed do eiusmod tempor incididunt ut labore </p>
                    </div>
                </div>
                <div class="item">
                    <img src="image/benz.jpg" alt="benz">
                    <div class="carousel-caption">
                        <h2>Car</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur ,<br>
                            sed do eiusmod tempor incididunt ut labore </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ____________________Featured Section ______________________________-->
    <div class="allcontain">
        <div class="feturedsection">
            <h1 class="text-center"><span class="bdots">&bullet;</span>F E A T U R E S<span class="carstxt">C A R S</span>&bullet;</h1>
        </div>
        <div class="feturedimage">
            <div class="row firstrow">
                <div class="col-lg-6 costumcol colborder1">
                    <div class="row costumrow">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon">
                            <img src="image/featurporch.jpg" alt="porsche">
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
                            <div class="featurecontant">
                                <h1>LOREM IPSUM</h1>
                                <p>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                    sed do eiusmod tempor incididunt </p>
                                <h2>Price &euro;</h2>
                                <button id="btnRM" onclick="rmtxt()">READ MORE</button>
                                <div id="readmore">
                                    <h1>Car Name</h1>
                                    <p>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                        sed do eiusmod tempor incididunt <br>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                        sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1 ,
                                        sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1
                                        sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1<br>
                                    </p>
                                    <button id="btnRL">READ LESS</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 costumcol colborder2">
                    <div class="row costumrow">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img2colon">
                            <img src="image/featurporch1.jpg" alt="porsche1">
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
                            <div class="featurecontant">
                                <h1>LOREM IPSUM</h1>
                                <p>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                    sed do eiusmod tempor incididunt </p>
                                <h2>Price &euro;</h2>
                                <button id="btnRM2">READ MORE</button>
                                <div id="readmore2">
                                    <h1>Car Name</h1>
                                    <p>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                        sed do eiusmod tempor incididunt <br>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                        sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1 ,
                                        sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1
                                        sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1<br></p>
                                    <button id="btnRL2">READ LESS</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ________________________LATEST CARS SECTION _______________________-->
        <div class="latestcars">
            <h1 class="text-center">&bullet; LATEST   CARS &bullet;</h1>
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

<?php include 'footermain.php' ?>