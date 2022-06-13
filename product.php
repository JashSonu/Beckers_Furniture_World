    <?php include 'nav.php' ?>
    <!-- ======================== Main header ======================== -->

    <section class="main-header" style="background-image:url(assets/images/page-banner-shop.jpg)">
        <header>
            <div class="container">
                <h1 class="h2 title">Shop</h1>
                <ol class="breadcrumb breadcrumb-inverted">
                    <li><a href="index.php"><span class="icon icon-home"></span></a></li>
                    <li><a href="index.php">Product Category</a></li>
                    <li><a class="active" href="#">
                            <?php 
                        // $stmt2 = $pdo->query("SELECT * FROM prodcategory where pCatID = $catID");
                        // $row = $stmt1->fetch(PDO::FETCH_ASSOC);
                        // echo ''.$row['pCatName'].''; 
                        ?>
                        </a></li>
                </ol>
            </div>
        </header>
    </section>


    <div class="container">
    <div class="row">

            <?php
	$catID = $_GET['category'];

	require_once "connectDB.php";
	$stmt1 = $pdo->query("SELECT pID, pName, pImage, pDesc  FROM products where pCatID = $catID");
	while( $row = $stmt1->fetch(PDO::FETCH_ASSOC) ) 
	{
?>
        
            <div class="col-md-4 col-xs-12" style="display: inline-block">
                <article>
                    <div class="figure-grid" style="margin:20px 0px 0 0;">
                        <div class="image">
                            <a href="#productid1" class="mfp-open">
                            <?php   
                                echo '<img src="assets/products1/'.$row['pImage'].'" alt="" width="100%" />';
                            ?>
                            </a>
                        </div>
                        <div class="text">
                            <?php
                            echo ' <h2 class="title h4"><a href="#">'.$row['pName'].'</a></h2>';   
                            ?>
                            <?php    
                            echo '<span class="description clearfix">'.$row['pDesc'].'</span>';
                            ?>
                        </div>
                    </div>
                </article>
            </div>
            <?php }  ?>
            </div>

        <!-- <div class="wrapper-more">
                    <a href="products.php?category=2" class="btn btn-main">View store</a>
                </div> -->

        <!-- ========================  Product info popup - quick view ======================== -->

        <div class="popup-main mfp-hide" id="productid1">

            <!-- === product popup === -->

            <div class="product">

                <!-- === popup-title === -->

                <div class="popup-title">
                    <div class="h1 title">Enquiry Form<small>Fill this form to reach us</small></div>
                </div>

                <!-- === product gallery === -->

                <div class="popup-content">
                    <iframe
                        src="https://docs.google.com/forms/d/e/1FAIpQLSe34gy-HCTqDzfRw-84zmcmvuyXcifvI8rAIpjQBnn0ocoAFA/viewform?embedded=true"
                        width="100%" height="530" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                </div>
                <!-- === product-popup-info === -->

                <!-- <div class="popup-content">
                            <div class="product-info-wrapper">
                                <div class="row"> -->

                <!-- === left-column === -->
                <!-- 
                                    <div class="col-sm-6">
                                        <div class="info-box">
                                            <strong>Maifacturer</strong>
                                            <span>Brand name</span>
                                        </div>
                                        <div class="info-box">
                                            <strong>Materials</strong>
                                            <span>Wood, Leather, Acrylic</span>
                                        </div>
                                        <div class="info-box">
                                            <strong>Availability</strong>
                                            <span><i class="fa fa-check-square-o"></i> in stock</span>
                                        </div>
                                    </div> -->

                <!-- === right-column === -->

                <!-- <div class="col-sm-6">
                                        <div class="info-box">
                                            <strong>Available Colors</strong>
                                            <div class="product-colors clearfix">
                                                <span class="color-btn color-btn-red"></span>
                                                <span class="color-btn color-btn-blue checked"></span>
                                                <span class="color-btn color-btn-green"></span>
                                                <span class="color-btn color-btn-gray"></span>
                                                <span class="color-btn color-btn-biege"></span>
                                            </div>
                                        </div>
                                        <div class="info-box">
                                            <strong>Choose size</strong>
                                            <div class="product-colors clearfix">
                                                <span class="color-btn color-btn-biege">S</span>
                                                <span class="color-btn color-btn-biege checked">M</span>
                                                <span class="color-btn color-btn-biege">XL</span>
                                                <span class="color-btn color-btn-biege">XXL</span>
                                            </div>
                                        </div>
                                    </div> -->

                <!-- </div> /row-->
                <!-- </div> /product-info-wrapper-->
                <!-- </div> /popup-content-->
                <!-- === product-popup-footer === -->

                <div class="popup-table">
                    <div class="popup-cell">
                        <div class="price">
                            <span class="h3">Becker's - Furniture World</span><br />
                            <span class="h3">+91-22-26103901</span><br />
                            <span class="h3"> (84) 984504414</span>
                        </div>
                    </div>
                    <!-- <div class="popup-cell">
                                <div class="popup-buttons">
                                    <a href="product.html"><span class="icon icon-eye"></span> <span class="hidden-xs">View more</span></a>
                                    <a href="javascript:void(0);"><span class="icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                                </div>
                            </div> -->
                </div>

            </div>
            <!--/product-->
        </div>
        <!--popup-main-->
    </div>
    <?php include 'footer.php' ?>