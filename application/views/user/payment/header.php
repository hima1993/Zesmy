<?php
/**
 * Created by PhpStorm.
 * User: Isuru Jayasinghe
 * Date: 4/15/2018
 * Time: 1:12 PM
 */
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <title>Smart Shop a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="<?php echo base_url()?>template/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- pignose css -->
    <link href="<?php echo base_url()?>template/css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />


    <!-- //pignose css -->
    <link href="<?php echo base_url()?>template/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script type="text/javascript" src="<?php echo base_url()?>template/js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <!-- cart -->
    <script src="<?php echo base_url()?>template/js/simpleCart.min.js"></script>
    <!-- cart -->
    <!-- for bootstrap working -->
    <script type="text/javascript" src="<?php echo base_url()?>template/js/bootstrap-3.1.1.min.js"></script>
    <!-- //for bootstrap working -->
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>



    <script src="<?php echo base_url()?>template/js/jquery.easing.min.js"></script>

    <style type="text/css">
        .pseudolink {
            color:blue;
            text-decoration:underline;
            cursor:pointer;
        }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php echo base_url()?>css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="<?php echo base_url()?>css/style.css"> <!-- Resource style -->
    <script src="<?php echo base_url()?>js/modernizr.js"></script>


</head>
<body>
<!-- header -->
<div class="header">
    <div class="container">
        <ul>
            <li><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Free and Fast Delivery</li>
            <li><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Free shipping On all orders</li>
            <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
        </ul>
    </div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
    <div class="container">
        <div class="col-md-3 header-left">
            <h1><a href="index.html"><img src="<?php echo base_url()?>template/images/logo3.jpg"></a></h1>
        </div>


        <?php
        $loggerFname = $this->session->userData('loggerFname');
        $loggerLname = $this->session->userData('loggerLname');
        if( $loggerFname == ""){
            ?>
            <div class="col-md-9 header-right footer-bottom">
                <ul>
                    <li><a href="#" class="use1" data-toggle="modal" data-target="#myModal4"><span style="width:180px;">Login</span></a>

                    </li>
                    <li><a class="fb" href="#"></a></li>
                    <li><a class="twi" href="#"></a></li>
                    <li><a class="insta" href="#"></a></li>
                    <li><a class="you" href="#"></a></li>
                </ul>
            </div>

            <?php
        }else{


            ?>




            <div class="col-md-3 header-right footer-bottom">
                <ul>
                    <li><a href="#" class="use1">
                            <span class="pseudolink" onclick="location='<?php echo base_url()?>index.php/User/signout'" style="width:180px;"><?php echo $loggerFname." ".$loggerLname." "."[ Logout ]" ; ?></span></a>

                    </li>
                    <li><a class="fb" href="#"></a></li>
                    <li><a class="twi" href="#"></a></li>
                    <li><a class="insta" href="#"></a></li>
                    <li><a class="you" href="#"></a></li>
                </ul>
            </div>

            <?php

        }

        ?>


        <div class="clearfix"></div>
    </div>
</div>



<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
    <div class="container">
        <div class="top_nav_left">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->

                </div>
            </nav>
        </div>

        <div class="clearfix"></div>
    </div>
</div>
