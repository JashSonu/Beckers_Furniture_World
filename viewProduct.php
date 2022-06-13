<!DOCTYPE html>
<html lang="en">
<?php
   
    session_start();
    if($_SESSION["role"]!="admin")
      header("Location: index.php");
    // include 'nav.php';
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Mobile Web-app fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Meta tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.png">

    <!--Title-->
    <title>Meubilar - Furniture Company</title>

    <!--CSS styles-->
    <link rel="stylesheet" media="all" href="css/bootstrap.css" />
    <link rel="stylesheet" media="all" href="css/animate.css" />
    <link rel="stylesheet" media="all" href="css/font-awesome.css" />
    <link rel="stylesheet" media="all" href="css/furniture-icons.css" />
    <link rel="stylesheet" media="all" href="css/linear-icons.css" />
    <link rel="stylesheet" media="all" href="css/magnific-popup.css" />
    <link rel="stylesheet" media="all" href="css/owl.carousel.css" />
    <link rel="stylesheet" media="all" href="css/ion-range-slider.css" />
    <link rel="stylesheet" media="all" href="css/theme.css" />

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="Export-Html-Table-To-Excel/src/jquery.table2excel.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    .header-content .item {
        height: 65vh !important;
    }
    </style>
</head>

<body>

    <div class="page-loader"></div>

    <div class="wrapper">

        <!--Use class "navbar-fixed" or "navbar-default" -->
        <!--If you use "navbar-fixed" it will be sticky menu on scroll (only for large screens)-->

        <!-- ======================== Navigation ======================== -->

        <nav class="navbar-fixed">

            <div class="container">

                <!-- ==========  Top navigation ========== -->

                <div class="navigation navigation-top clearfix">
                    <ul>
                        <!--add active class for current page-->

                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <!--Currency selector-->
                        <!-- 
                        <li class="nav-settings">
                            <a href="javascript:void(0);" class="nav-settings-value"> USD $</a>
                            <ul class="nav-settings-list">
                                <li>USD $</li>
                                <li>EUR €</li>
                                <li>CHF Fr.</li>
                                <li>GBP £</li>
                            </ul>
                        </li> -->

                        <!--Language selector-->

                        <!-- <li class="nav-settings">
                            <a href="javascript:void(0);" class="nav-settings-value"> ENG</a>
                            <ul class="nav-settings-list">
                                <li>ENG</li>
                                <li>GER</li>
                                <li>لعربية</li>
                                <li>עִבְרִית</li>
                            </ul>
                        </li> -->
                        <li><a href="logout.php"><i class="fa fa-sign-out"></i></a></li>
                        <!-- <li><a href="javascript:void(0);" class="open-search"><i class="icon icon-magnifier"></i></a></li> -->
                        <!-- <li><a href="javascript:void(0);" class="open-cart"><i class="icon icon-cart"></i> <span>3</span></a></li> -->
                    </ul>
                </div>
                <!--/navigation-top-->

                <!-- ==========  Main navigation ========== -->

                <div class="navigation navigation-main">

                    <!-- Setup your logo here-->

                    <a href="index.php" class="logo"><img src="assets/images/logo-2.png" alt="" /></a>

                    <!-- Mobile toggle menu -->

                    <a href="#" class="open-menu"><i class="icon icon-menu"></i></a>

                    <!-- Convertible menu (mobile/desktop)-->

                    <div class="floating-menu">

                        <!-- Mobile toggle menu trigger-->

                        <div class="close-menu-wrapper">
                            <span class="close-menu"><i class="icon icon-cross"></i></span>
                        </div>

                        <ul>
                            <li><a href="index.php">Home</a></li>

                            <!-- Mega menu dropdown -->

                            <li>
                                <a href="addCategory.php"><i class="fa fa-plus" aria-hidden="true"></i> Category</a>
                            </li>

                            <!-- Simple menu link-->
                            <li><a href="addProducts.php"><i class="fa fa-plus" aria-hidden="true"></i> Products</a>
                            </li>
                            <li><a href="contact.php">Contact</a></li>

                        </ul>
                    </div>
                    <!--/floating-menu-->
                </div>
                <!--/navigation-main-->



                <!-- ==========  Login wrapper ========== -->

                <div class="login-wrapper">
                    <form method="post">
                        <div class="h4">Sign in</div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                                placeholder="Password">
                        </div>
                        <!-- <div class="form-group">
                            <a href="#forgotpassword" class="open-popup">Forgot password?</a>
                            <a href="#createaccount" class="open-popup">Don't have an account?</a>
                        </div> -->
                        <input type="submit" class="btn btn-block btn-main" name="login" value="Submit">
                    </form>
                </div>

                
            </div>
            <!--/container-->
        </nav>

        <!-- ========================  Header content ======================== -->

        <section class="header-content">

            <div class="owl-slider">

                <!-- === slide item === -->

                <div class="item" style="background-image:url(assets/images/gallery-1.jpg)">
                    <div class="box">
                        <div class="container">
                            <h2 class="title animated h1" data-animation="fadeInDown">Meubilar - Furniture Company</h2>
                            <div class="animated" data-animation="fadeInUp">
                                We deal in all kinds of furniture and furnished products <br /> Quality is what we
                                bileive in.
                            </div>
                            <div class="animated" data-animation="fadeInUp">
                                <a href="contact.php" target="_blank" class="btn btn-main"><i
                                        class="icon icon-cart"></i>Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- === slide item === -->

                <div class="item" style="background-image:url(assets/images/gallery-2.jpg)">
                    <div class="box">
                        <div class="container">
                            <h2 class="title animated h1" data-animation="fadeInDown">Welcome ADMIN</h2>
                            <div class="animated" data-animation="fadeInUp">Here, you can add categories of products as
                                well the products itself.</div>
                            <div class="animated" data-animation="fadeInUp"></div>
                            <div class="animated" data-animation="fadeInUp">
                                <a href="#" class="btn btn-clean">Get insipred</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- === slide item === -->

                <div class="item" style="background-image:url(assets/images/gallery-3.jpg)">
                    <div class="box">
                        <div class="container">
                            <h2 class="title animated h1" data-animation="fadeInDown">
                                Branches in INDIA and VIETNAM
                            </h2>
                            <div class="desc animated" data-animation="fadeInUp">
                                With Trusted Customers from all over the World.
                            </div>
                            <div class="desc animated" data-animation="fadeInUp">
                                A Brand In The Furniture World
                            </div>
                            <div class="animated" data-animation="fadeInUp">
                                <a href="#" target="_blank" class="btn btn-clean">Shop Us</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--/owl-slider-->
        </section>
<?php 
	
	require_once "connectDB.php";

 	
	$sql = "SELECT * FROM products WHERE pID=:x";
	$stmt = $pdo->prepare($sql);
	$stmt -> execute(array(':x' => $_GET['id']));
	$row = $stmt->fetch();
	//echo $row['pName'];
	// echo $row['selfContact'];
	// echo $row['parentContact'];
	// echo $row['address'];
	// echo $row['dob'];

?>

<div class="container" id="viewProduct">
  

  <div class="row">
    <div class="col-md-6 ml-5" id="pImage">
      <img src="assets/images/<?php echo $row['pImage'] ?>" height="200" width="200" class="img-thumnail">
      
    </div>

    <div class="col-md-4" id="feesDiv">
      <h2><?php echo $row['pName'] ?>,</h2>
      Description: <?php echo $row['pDesc'] ?><br>
    </div>
    
  </div>
<?php
    // echo " / ";
    echo ("<a href='editProduct.php?id=".$row['pID']."'>
    <span class='btn btn-primary'><i class='fas fa-pencil-alt'></i>Update</span></a>");
    ?>
<?php include 'footer.php' ?>