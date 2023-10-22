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
        <link href="css/mystyles.css" rel="stylesheet">
        <link href="css/queries.css?v=1.2" rel="stylesheet">
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

            /* Chrome, Safari, Edge, Opera */
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            /* Firefox */
            input[type=number] {
                -moz-appearance: textfield;
            }

            * {
                box-sizing: border-box;
            }
        </style>
    </head>
<body >
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
                            <div class="logo-main" style="width: 94px; position: absolute; height: 85px; top: 0; left: 327px; text-align: center"><a href="login.php" style="text-transform: uppercase; letter-spacing: 2px;" ><img src="img/main-logo.png"  >Login</a></div>
                            <li><a href="index.php#about">About Us</a></li>
                            <li class="dot">.</li>
                            <li><a href="index.php#service" class="r_spacer">Service</a></li>
                            <li><a href="index.php#rent">Rent</a></li>
                            <li class="dot">.</li>
                            <li><a href="index.php#joinus">Join Us</a></li>
                            <li class="dot">.</li>
                            <li><a class="text-sidebar" href="login.php">Login</a></li>
                            <li><a class="text-sidebar" href="register.php">Register</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </header>
    <section class="py-4 py-xl-5">
        <form class="form" autocomplete="off" method="post" action="registerprocess.php">
            <div class="control">
                <h1>
                    Register
                </h1>
            </div>
            <div class="control block-cube block-input">
                <input name="fname" type="text" placeholder="Full Name" />
                <div class="bg-top">
                    <div class="bg-inner"></div>
                </div>
                <div class="bg-right">
                    <div class="bg-inner"></div>
                </div>
                <div class="bg">
                    <div class="bg-inner"></div>
                </div>
            </div>
            <div class="control block-cube block-input">
                <input name="fid" type="number" placeholder="IC Number" />
                <div class="bg-top">
                    <div class="bg-inner"></div>
                </div>
                <div class="bg-right">
                    <div class="bg-inner"></div>
                </div>
                <div class="bg">
                    <div class="bg-inner"></div>
                </div>
            </div>
            <div class="control block-cube block-input">
                <input name="fphone" type="number" placeholder="Phone Number" />
                <div class="bg-top">
                    <div class="bg-inner"></div>
                </div>
                <div class="bg-right">
                    <div class="bg-inner"></div>
                </div>
                <div class="bg">
                    <div class="bg-inner"></div>
                </div>
            </div>
            <div class="control block-cube block-input">
                <input name="flno" type="number" placeholder="License Number" />
                <div class="bg-top">
                    <div class="bg-inner"></div>
                </div>
                <div class="bg-right">
                    <div class="bg-inner"></div>
                </div>
                <div class="bg">
                    <div class="bg-inner"></div>
                </div>
            </div>
            <div class="control block-cube block-input">
                <input name="faddress" type="text" placeholder="Address" />
                <div class="bg-top">
                    <div class="bg-inner"></div>
                </div>
                <div class="bg-right">
                    <div class="bg-inner"></div>
                </div>
                <div class="bg">
                    <div class="bg-inner"></div>
                </div>
            </div>
            <div class="control block-cube block-input">
                <input name="fpwd" type="password" placeholder="Password" />
                <div class="bg-top">
                    <div class="bg-inner"></div>
                </div>
                <div class="bg-right">
                    <div class="bg-inner"></div>
                </div>
                <div class="bg">
                    <div class="bg-inner"></div>
                </div>
            </div>
            <div class="control block-cube block-input">
                <input name="fpwd2" type="password" placeholder="Confirm Password" />
                <div class="bg-top">
                    <div class="bg-inner"></div>
                </div>
                <div class="bg-right">
                    <div class="bg-inner"></div>
                </div>
                <div class="bg">
                    <div class="bg-inner"></div>
                </div>
            </div>
            <button class="btn block-cube block-cube-hover" type="submit" name="submit">
                <div class="bg-top">
                    <div class="bg-inner"></div>
                </div>
                <div class="bg-right">
                    <div class="bg-inner"></div>
                </div>
                <div class="bg">
                    <div class="bg-inner"></div>
                </div>

                <div class="text" >
                    Submit
                </div>
            </button>
        </form>

    </section>
</body>
<?php include 'footermain.php' ?>
</html>





