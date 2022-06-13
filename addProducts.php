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
    <title>Becker's - Furniture World</title>

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
                        <li><a href=""><i class="fa fa-instagram"></i></a></li>
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
                </div> <!--/navigation-top-->

                <!-- ==========  Main navigation ========== -->

                <div class="navigation navigation-main">

                    <!-- Setup your logo here-->

                    <a href="index.php" class="logo"><img src="assets/images/logo-final.png" alt=""/></a>

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
                
                           <!-- Single menu dropdown -->
                            <!--
                           <li>
                                <a href="addCategory.php">Category<span class="open-dropdown"><i
                                            class="fa fa-angle-down"></i></span></a>
                                <div class="navbar-dropdown navbar-dropdown-single">
                                    <div class="navbar-box">
                                        <div class="box-2">
                                            <div class="box clearfix">
                                                <ul>
                                                    <li><a href="addCategory.php"><i class="fa fa-plus" aria-hidden="true"></i> Category</a></li>
                                                    <li><a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Category</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>-->

                           
                            <li>
                                <a href="addProducts.php">Products<span class="open-dropdown"><i
                                            class="fa fa-angle-down"></i></span></a>
                                <div class="navbar-dropdown navbar-dropdown-single">
                                    <div class="navbar-box">
                                        <div class="box-2">
                                            <div class="box clearfix">
                                                <ul>
                                                    <li><a href="addProducts.php"><i class="fa fa-plus" aria-hidden="true"></i> Products</a></li>
                                                    <li><a href="viewAllProducts.php"><i class="fa fa-eye" aria-hidden="true"></i> Products</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Simple menu link-->
                            <li><a href="contact.php">Contact</a></li>
                           
                        </ul>
                    </div> <!--/floating-menu-->
                </div> <!--/navigation-main-->

                <!-- ==========  Search wrapper ========== -->
                <!--
                <div class="search-wrapper">

                    <!-- Search form --
                    <input class="form-control" placeholder="Search..." />
                    <button class="btn btn-main btn-search">Go!</button>

                    <!-- Search results - live search --
                    <div class="search-results">
                        <div class="search-result-items">
                            <div class="title h4">Products <a href="#" class="btn btn-clean-dark btn-xs">View all</a></div>
                            <ul>
                                <li><a href="#"><span class="id">42563</span> <span class="name">Green corner</span> <span class="category">Sofa</span></a></li>
                                <li><a href="#"><span class="id">42563</span> <span class="name">Laura</span> <span class="category">Armchairs</span></a></li>
                                <li><a href="#"><span class="id">42563</span> <span class="name">Nude</span> <span class="category">Dining tables</span></a></li>
                                <li><a href="#"><span class="id">42563</span> <span class="name">Aurora</span> <span class="category">Nightstands</span></a></li>
                                <li><a href="#"><span class="id">42563</span> <span class="name">Dining set</span> <span class="category">Kitchen</span></a></li>
                                <li><a href="#"><span class="id">42563</span> <span class="name">Seat chair</span> <span class="category">Bar sets</span></a></li>
                            </ul>
                        </div> <!--/search-result-items--
                        <div class="search-result-items">
                            <div class="title h4">Blog <a href="#" class="btn btn-clean-dark btn-xs">View all</a></div>
                            <ul>
                                <li><a href="#"><span class="id">01 Jan</span> <span class="name">Creating the Perfect Gallery Wall </span> <span class="category">Interior ideas</span></a></li>
                                <li><a href="#"><span class="id">12 Jan</span> <span class="name">Making the Most Out of Your Kids Old Bedroom</span> <span class="category">Interior ideas</span></a></li>
                                <li><a href="#"><span class="id">28 Dec</span> <span class="name">Have a look at our new projects!</span> <span class="category">Modern design</span></a></li>
                                <li><a href="#"><span class="id">31 Sep</span> <span class="name">Decorating When You're Starting Out or Starting Over</span> <span class="category">Best of 2017</span></a></li>
                                <li><a href="#"><span class="id">22 Sep</span> <span class="name">The 3 Tricks that Quickly Became Rules</span> <span class="category">Tips for you</span></a></li>
                            </ul>
                        </div> <!--/search-result-items--
                    </div> <!--/search-results--
                </div>-->

                <!-- ==========  Login wrapper ========== -->
                <!--
                <div class="login-wrapper">
                    <form method="post">
                        <div class="h4">Sign in</div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                        </div>
                        <!-- <div class="form-group">
                            <a href="#forgotpassword" class="open-popup">Forgot password?</a>
                            <a href="#createaccount" class="open-popup">Don't have an account?</a>
                        </div> --
                        <input type="submit" class="btn btn-block btn-main" name="login" value="Submit">
                    </form>
                </div>-->

                <!-- ==========  Cart wrapper ========== -->
                <!--
                <div class="cart-wrapper">
                    <div class="checkout">
                        <div class="clearfix">

                            <!--cart item--

                            <div class="row">

                                <div class="cart-block cart-block-item clearfix">
                                    <div class="image">
                                        <a href="product.html"><img src="assets/images/product-1.png" alt="" /></a>
                                    </div>
                                    <div class="title">
                                        <div><a href="product.html">Green corner</a></div>
                                        <small>Green corner</small>
                                    </div>
                                    <div class="quantity">
                                        <input type="number" value="2" class="form-control form-quantity" />
                                    </div>
                                    <div class="price">
                                        <span class="final">$ 1.998</span>
                                        <span class="discount">$ 2.666</span>
                                    </div>
                                    <!--delete-this-item--
                                    <span class="icon icon-cross icon-delete"></span>
                                </div>

                                <!--cart item--

                                <div class="cart-block cart-block-item clearfix">
                                    <div class="image">
                                        <a href="product.html"><img src="assets/images/product-2.png" alt="" /></a>
                                    </div>
                                    <div class="title">
                                        <div><a href="product.html">Green corner</a></div>
                                        <small>Green corner</small>
                                    </div>
                                    <div class="quantity">
                                        <input type="number" value="2" class="form-control form-quantity" />
                                    </div>
                                    <div class="price">
                                        <span class="final">$ 1.998</span>
                                        <span class="discount">$ 2.666</span>
                                    </div>
                                    <!--delete-this-item--
                                    <span class="icon icon-cross icon-delete"></span>
                                </div>

                                <!--cart item--

                                <div class="cart-block cart-block-item clearfix">
                                    <div class="image">
                                        <a href="product.html"><img src="assets/images/product-3.png" alt="" /></a>
                                    </div>
                                    <div class="title">
                                        <div><a href="product.html">Green corner</a></div>
                                        <small>Green corner</small>
                                    </div>
                                    <div class="quantity">
                                        <input type="number" value="2" class="form-control form-quantity" />
                                    </div>
                                    <div class="price">
                                        <span class="final">$ 1.998</span>
                                        <span class="discount">$ 2.666</span>
                                    </div>
                                    <!--delete-this-item--
                                    <span class="icon icon-cross icon-delete"></span>
                                </div>

                                <!--cart item--

                                <div class="cart-block cart-block-item clearfix">
                                    <div class="image">
                                        <a href="product.html"><img src="assets/images/product-4.png" alt="" /></a>
                                    </div>
                                    <div class="title">
                                        <div><a href="product.html">Green corner</a></div>
                                        <small>Green corner</small>
                                    </div>
                                    <div class="quantity">
                                        <input type="number" value="2" class="form-control form-quantity" />
                                    </div>
                                    <div class="price">
                                        <span class="final">$ 1.998</span>
                                        <span class="discount">$ 2.666</span>
                                    </div>
                                    <!--delete-this-item--
                                    <span class="icon icon-cross icon-delete"></span>
                                </div>
                            </div>

                            <hr />

                            <!--cart prices --

                            <div class="clearfix">
                                <div class="cart-block cart-block-footer clearfix">
                                    <div>
                                        <strong>Discount 15%</strong>
                                    </div>
                                    <div>
                                        <span>$ 159,00</span>
                                    </div>
                                </div>

                                <div class="cart-block cart-block-footer clearfix">
                                    <div>
                                        <strong>Shipping</strong>
                                    </div>
                                    <div>
                                        <span>$ 30,00</span>
                                    </div>
                                </div>

                                <div class="cart-block cart-block-footer clearfix">
                                    <div>
                                        <strong>VAT</strong>
                                    </div>
                                    <div>
                                        <span>$ 59,00</span>
                                    </div>
                                </div>
                            </div>

                            <hr />
                            <!--cart final price --

                            <div class="clearfix">
                                <div class="cart-block cart-block-footer clearfix">
                                    <div>
                                        <strong>Total</strong>
                                    </div>
                                    <div>
                                        <div class="h4 title">$ 1259,00</div>
                                    </div>
                                </div>
                            </div>


                            <!--cart navigation --

                            <div class="cart-block-buttons clearfix">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <a href="products-grid.html" class="btn btn-clean-dark">Continue shopping</a>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <a href="checkout-1.html" class="btn btn-main"><span class="icon icon-cart"></span> Checkout</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> <!--/checkout--
                </div> <!--/cart-wrapper-->
            </div> <!--/container-->
        </nav>

<!-- ========================  Header content ======================== -->

<section class="header-content">

<div class="owl-slider">

    <!-- === slide item === -->

    <div class="item" style="background-image:url(assets/images/gallery-1.jpg)">
        <div class="box">
            <div class="container">
                <h2 class="title animated h1" data-animation="fadeInDown" style="margin: 20px 0 0 50px">Becker's - Furniture World</h2>
                <div class="animated" data-animation="fadeInUp" style="margin-left: 55px">
                    We deal in all kinds of furniture and furnished products <br /> Quality is what we bileive in.
                </div>
                <div class="animated" data-animation="fadeInUp" style="margin-left: 55px">
                    <a href="contact.php" target="_blank" class="btn btn-main" ><i class="icon icon-cart"></i>Contact Us</a>
                </div>
            </div>
        </div>
    </div>

    <!-- === slide item === -->

    <div class="item" style="background-image:url(assets/images/gallery-2.jpg)">
        <div class="box">
            <div class="container">
                <h2 class="title animated h1" data-animation="fadeInDown" style="margin: 20px 0 0 50px">Welcome ADMIN</h2>
                <div class="animated" data-animation="fadeInUp" style="margin-left: 55px">Here, you can add categories of products as well the products itself.</div>
                <div class="animated" data-animation="fadeInUp"></div>
                <div class="animated" data-animation="fadeInUp" style="margin-left: 55px">
                    <a href="#" class="btn btn-clean">Get insipred</a>
                </div>
            </div>
        </div>
    </div>

    <!-- === slide item === -->

    <div class="item" style="background-image:url(assets/images/gallery-3.jpg)">
        <div class="box">
            <div class="container">
                <h2 class="title animated h1" data-animation="fadeInDown" style="margin: 20px 0 0 50px">
                   Branches in INDIA and VIETNAM
                </h2>
                <div class="desc animated" data-animation="fadeInUp" style="margin-left: 55px">
                    With Trusted Customers from all over the World.
                </div>
                <div class="desc animated" data-animation="fadeInUp" style="margin-left: 55px">
                    A Brand In The Furniture World
                </div>
                <div class="animated" data-animation="fadeInUp" style="margin-left: 55px">
                    <a href="#" target="_blank" class="btn btn-clean">Shop Us</a>
                </div>
            </div>
        </div>
    </div>

</div> <!--/owl-slider-->
</section>




    <div  style="padding-top: 40px;" class="container" id="addExpenses">

        <?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);
require_once "connectDB.php";
require_once 'SimpleXLSX.php';
// echo '<h1>XLSX to HTML</h1>';

if (isset($_FILES['file'])) {
  
  if ( $xlsx = SimpleXLSX::parse( $_FILES['file']['tmp_name'] ) ) 
  {
    $dim = $xlsx->dimension();
    $cols = $dim[0];

    foreach ( $xlsx->rows() as $k => $r ) 
    {
      if ($k == 0)
      	continue; // skip first row
      $st='';
      
      for ( $i = 0; $i <= $cols-1; $i ++ )
      {
        $st.="'".$r[$i]."', ";
      }
      $st1=substr($st,0,-2);

      //$sql = "INSERT INTO products(pCatID, pName, pUnit, pImage, pHSN,pGST,pQuantity,pRate, pDisc, pDesc) VALUES (".$st1.")";
      $sql = "INSERT INTO products(pCatID, pName, pImage, pDesc) VALUES (".$st1.")";
      $stmt = $pdo->prepare($sql);
      $stmt-> execute(array());
      if($stmt)
      {
//       echo "done";
      //header("Location: ViewAllExpenses.php");
      }

      else{
       echo("Error in inserting");
      }
  
    }
   } else {
    echo SimpleXLSX::parseError();
  }
}

?>


        <!-- <h1>Product Category</h1>
  <ul>
  -->
        <?php
   /*     $select_catergory = "select pCatName from prodcategory";
        $stmt_select =  $pdo->prepare($select_catergory);
        $stmt_select -> execute(array());
        while( $row_select = $stmt_select->fetch(PDO::FETCH_ASSOC)) 
        {
          echo "<li>".$row_select['pCatName'] ."</li>";
        }
        */
      ?>

        <!-- </ul>   -->


        <!-- <button type="submit" class="btn btn-primary" name="addExpense">Add new product Category</button> -->

        <h1>Add a new Product : </h1>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="category">Product Category Name</label>

                <select type="text" name="pCatID" class="form-control" id="pCatID">
                    <?php
                        $select_catergory = "select * from prodcategory";
                        $stmt_select =  $pdo->prepare($select_catergory);
                        $stmt_select -> execute(array());
                        while( $row_select = $stmt_select->fetch(PDO::FETCH_ASSOC)) 
                        {
                        echo "<option value='".$row_select['pCatID']."'>".$row_select['pCatName'] ."</option>";
                        }
                     ?>
                </select>
            </div>
           
                <div class="col">
                    <div class="form-group">
                        <label for="category">Product Name</label>
                        <input type="text" name="pName" class="form-control" id="pName">
                    </div>
                </div>
                <!-- <div class="col">
                    <div class="form-group">
                        <label for="category">Product Units
                        </label>
                        <input type="text" name="pUnit" class="form-control" id="pUnit">
                    </div>
                </div> -->          
            <div class="form-group">
                <label for="category">Product Image</label>
                <input type="file" name="pImage" class="form-control" id="pImage" accept="image/*">
            </div>

            <div class="col">
                    <div class="form-group">
                        <label for="category">Description</label>
                        <textarea rows="3" name="pDesc" class="form-control" id="pDesc"></textarea>
                    </div>
            </div>

            <!-- <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="category">HSN Number</label>
                        <input type="text" name="pHSN" class="form-control" id="pHSN">
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="category">GST Percentage</label>
                        <input type="text" name="pGST" class="form-control" id="pGST">
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="category">Quantity</label>
                        <input type="text" name="pQuantity" class="form-control" id="pQuantity">
                    </div>
                </div>
            </div> -->


            <!-- <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="category">Rate</label>
                        <input type="text" name="pRate" class="form-control" id="pRate">
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="category">Discount</label>
                        <input type="text" name="pDisc" class="form-control" id="pDisc">
                    </div>
                </div>

                

            </div> -->
            <input type="submit" class="btn btn-primary" name="addProductUnderCategorySubmit" style="margin-bottom: 10px;">
        </form>
   

    <?php
// echo '<h2>Upload Products from ExcelSheet</h2>
// <form method="post" enctype="multipart/form-data">
// XLSX type files only <input type="file" name="file" class="btn btn-primary" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" />
// <input type="submit" value="submit" name="file" class="btn btn-success mt-2"/>
// </form>';

if (isset($_POST['addProductUnderCategorySubmit']))
{
  $target = "assets/images/".basename($_FILES['pImage']['name']);
  echo"$target";
  // Get all the submitted data from the form
  $image = $_FILES['pImage']['name'];

  $sql = "INSERT INTO products(pCatID, pName, pImage, pDesc) VALUES (:pCatID, :pName, :pImage, :pDesc)";
// $sql="INSERT INTO products(pCatID, pName, pUnit, pImage, pHSN,pGST,pQuantity,pRate, pDisc, pDesc) VALUES (:pCatID, :pName, :pUnit, :pImage, :pHSN,:pGST,:pQuantity,:pRate, :pDisc, :pDesc) ";
//echo ("<pre>\n".$sql."\n</pre>\n");
  $stmt = $pdo->prepare($sql);
  $stmt-> execute(array(    
    ':pCatID' => $_POST['pCatID'],
    ':pName' => $_POST['pName'],
    ':pImage' => $image,
    // ':pUnit' => $_POST['pUnit'],
    // ':pHSN' => $_POST['pHSN'],
    // ':pGST' => $_POST['pGST'],
    // ':pQuantity' => $_POST['pQuantity'],
    // ':pRate' => $_POST['pRate'],
    // ':pDisc' => $_POST['pDisc'],
     ':pDesc' => $_POST['pDesc']
  ));

  if (move_uploaded_file($_FILES['pImage']['tmp_name'], $target)) {
		$msg = "Image uploaded successfully";
	}else{
		$msg = "There was a problem uploading image";
	}
echo'<script> alert("New Product added"); </script>';

 //header("Location: ViewAllExpenses.php");
}

?>
 </div>
<?php include 'footer.php' ?>
    