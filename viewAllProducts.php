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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

    <!--<div class="page-loader"></div>-->

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

                    <a href="index.php" class="logo"><img src="assets/images/logo-final.png" alt="" /></a>

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

                            <!-- Mega menu dropdown 

                            <li>
                                <a href="addCategory.php"><i class="fa fa-plus" aria-hidden="true"></i> Category</a>
                            </li>-->

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
                            <br>
                            <h2 class="title animated h1" data-animation="fadeInDown" style="margin-left: 50px">Becker's - Furniture World</h2>
                            <div class="animated" data-animation="fadeInUp" style="margin-left: 55px">
                                We deal in all kinds of furniture and furnished products <br /> Quality is what we
                                bileive in.
                            </div>
                            <div class="animated" data-animation="fadeInUp" style="margin-left: 55px">
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
                        <br>
                            <h2 class="title animated h1" data-animation="fadeInDown" style="margin-left: 50px">Welcome ADMIN</h2>
                            <div class="animated" data-animation="fadeInUp" style="margin-left: 55px">Here, you can add categories of products as
                                well the products itself.</div>
                            <div class="animated" data-animation="fadeInUp"></div>
                            <div class="animated" data-animation="fadeInUp">
                                <a href="#" class="btn btn-clean" style="margin-left: 50px">Get insipred</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- === slide item === -->

                <div class="item" style="background-image:url(assets/images/gallery-3.jpg)">
                    <div class="box">
                        <div class="container">
                        <br>
                            <h2 class="title animated h1" data-animation="fadeInDown" style="margin-left: 50px">
                                Branches in INDIA and VIETNAM
                            </h2>
                            <div class="desc animated" data-animation="fadeInUp" style="margin-left: 55px">
                                With Trusted Customers from all over the World.
                            </div>
                            <div class="desc animated" data-animation="fadeInUp" style="margin-left: 55px">
                                A Brand In The Furniture World
                            </div>
                            <div class="animated" data-animation="fadeInUp" style="margin-left: 50px">
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
	// echo "This is working";where p.pArchive = 'no'
$stmt1 = $pdo->query("SELECT p.pID as 'pID', p.pCatID as 'pCatID', pc.pCatName as 'pCatName', p.pName as 'pName', p.pDesc as 'pDesc', p.pImage as 'pImage' FROM products p inner join prodcategory pc on p.pCatId = pc.pCatId order by p.pName");
?>

       <div class="container" id="viewAllProducts"> 
             <form action="getStudentsForParticularPeriod.php" method="get" style="margin: 10px 0 0 10px;"> 
            <input class="d-inline input-group-text" style="font-family: FontAwesome;" type="text" id="myInput" onkeyup="searchStud()"
                placeholder="&#xF002; Search for category name.." title="Type in a name" size="50">


            <input class="d-inline input-group-text" type="text" style="font-family: FontAwesome;" id="myInput2" onkeyup="searchCourses()"
                placeholder="&#xF002; Search for product name.." title="Type in a course" size="50">

            <!-- <input class="d-inline input-group-text" type="submit">
	</form> -->
            <table border="2" class="table table-dark table-striped my-4" id="table2excel" style="margin-top: 10px;">
                <tr class="thead-dark text-center">
                    <th width="1%">Category ID </th>
                    <th width="7%">Category Name</th>
                    <th width="5%">Product Name</th>
                    <th width="10%">Description</th>
                    <th width="12%">Product Image</th>
                    <th width="11%" class='noExl'>Action</th>
                </tr>
                <?php
	while( $row = $stmt1->fetch(PDO::FETCH_ASSOC)) 
	{
		echo "<tr><td>";
		echo ($row['pCatID']);
		// echo ("<a href='viewStudent.php?id=".$row['id']."'>View Student</a>");
        echo ("</td><td>");
        echo ($row['pCatName']);
		echo ("</td><td>");
		echo "<a href=viewProduct.php?id=".$row["pID"].">";
		echo ($row['pName']);
		echo "</a>";
		echo ("</td><td>");
		echo ($row['pDesc']);
		echo ("</td><td>");
		echo '<center><img src="assets/products1/'.$row['pImage'].'" height="250" width="350" class="img-thumnail" /></center>' ; 
		echo ("</td><td class='noExl'>");
		?>

                <center><a href="deleteProduct.php?id=<?php echo $row['pID']?>" onclick="return confirm('are u sure ?')">
			<span class='btn btn-danger'><i class='far fa-trash-alt'></i>Delete</span>
		</a>
    <?php
		
		echo ("<a href='editProduct.php?id=".$row['pID']."'>
		<span class='btn btn-primary'><i class='fas fa-pencil-alt'></i>Update</span></a></center>");
		echo ("</td></tr>");
		// echo ('<form method="post"><input type="hidden" ');
		// echo ('name="user_id" value="'.$row['user_id'].'">'."\n");
		// echo ('<input type="submit" value="Del" name="delete">');
		// echo ("\n</form>\n");
		// echo ("</td></tr>\n");
	}



?>


            </table>
            <!-- <button class="btn btn-danger" id="exportExcel">Export as Excel</button> -->
        </div>

        <!-- <script type="text/javascript">
        $("button").click(function() {
            $("#table2excel").table2excel({
                // exclude CSS class
                exclude: ".noExl",
                name: "Worksheet Name",
                filename: "SomeFile", //do not include extension
                fileext: ".xls" // file extension

            });
        });
        </script> -->

        <!-- Script for searching names -->
        <script>
        function searchStud() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("table2excel");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

        function searchCourses() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput2");
            filter = input.value.toUpperCase();
            table = document.getElementById("table2excel");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[2];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
        </script>
<?php include 'footer.php' ?>
</body>

</html>