<?php include 'nav.php' ?>

        <!-- ========================  Header content ======================== -->

        <section class="header-content">

            <div class="owl-slider">

                <!-- === slide item === -->

                <div class="item" style="background-image:url(assets/images/Planning.webp)">
                    <div class="box">
                        <div class="container">
                            <h2 class="title animated h1" data-animation="fadeInDown" style="margin-left: 50px">Becker's - Furniture World</h2>
                            <div class="animated" data-animation="fadeInUp" style="margin-left: 55px">
                                We deal in all kinds of furniture and furnished products <br /> Quality is what we believe in.
                            </div>
                            
                        </div>
                    </div>
                </div>

                <!-- === slide item === -->

                <div class="item" style="background-image:url(assets/images/office-1.jpg)">
                    <div class="box">
                        <div class="container">
                            <h2 class="title animated h1" data-animation="fadeInDown" style="margin-left: 50px">Welcome to Becker's</h2>
                            <div class="animated" data-animation="fadeInUp" style="margin-left: 55px">Unlimited Choices. Unbeatable Prices. Free Shipping.</div>
                            <div class="animated" data-animation="fadeInUp" style="margin-left: 55px">Furniture categories</div>
                            <div class="animated" data-animation="fadeInUp">
                                <a href="contact.php" target="_blank" class="btn btn-main"  style="margin-left: 50px"><i class="icon icon-cart"></i>Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- === slide item === -->

                <div class="item" style="background-image:url(assets/images/Interior.jpg)">
                    <div class="box">
                        <div class="container">
                            <h2 class="title animated h1" data-animation="fadeInDown" style="margin-left: 50px">
                               Offices in INDIA and VIETNAM
                            </h2>
                            <div class="desc animated" data-animation="fadeInUp" style="margin-left: 55px">
                                With Trusted Customers from all over the World.
                            </div>
                            <div class="desc animated" data-animation="fadeInUp" style="margin-left: 55px">
                                A Future Brand In The Furniture World
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!--/owl-slider-->
        </section>

        <!-- ========================  Icons slider ======================== -->

        <section class="owl-icons-wrapper owl-icons-frontpage">

            <!-- === header === -->

            <header class="hidden">
                <h2>Product categories</h2>
            </header>

            <div class="container">
            <div class="owl-icons">
                    <!-- === icon item === -->

                    <a href="product.php?category=4">
                        <figure>
                            <i class="f-icon f-icon-chair"></i>
                            <figcaption>Chairs</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="product.php?category=5">
                        <figure>
                            <i class="f-icon f-icon-dining-table"></i>
                            <figcaption>Dining tables</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="product.php?category=2">
                        <figure>
                            <i class="f-icon f-icon-bedroom"></i>
                            <figcaption>Bedroom</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="product.php?category=1">
                        <figure>
                            <i class="f-icon f-icon-kitchen"></i>
                            <figcaption>Kitchen</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->
                    <a href="product.php?category=3">
                        <figure>
                            <i class="f-icon f-icon-office"></i>
                            <figcaption>Office Furniture</figcaption>
                        </figure>
                    </a>

                </div> <!--/owl-icons-->
            </div> <!--/container-->
        </section>

        <!-- ========================  Products widget ======================== -->

        <section class="products">

            <div class="container">

                <!-- === header title === -->

                <header>
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h2 class="title">Popular products</h2>
                            <div class="text">
                                <p>Check out our latest collections</p>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="row">

                    <!-- === product-item === -->
                    <?php 
                        require_once "connectDB.php";
                        $x=1;
                        $stmt1 = $pdo->query("SELECT pID, pName, pImage, pDesc  FROM products GROUP BY pCatID");
                        while( $row = $stmt1->fetch(PDO::FETCH_ASSOC)) 
	                    {
                    ?>
                    
                    <div class="col-md-4 col-xs-12">

                        <article>
                            <div class="info">
                                
                                <span>
                                    
                                    <a href="" class="mfp-open" data-title="Quick View"><i class="icon icon-eye"></i></a>
                                </span>
                            </div>
                            
                            <div class="figure-grid">
                                <div class="image">
                                    <?php 
                                        echo '<a href="product.php?category='.strval($x).'"> <img src="assets/products1/'.$row['pImage'].'" alt="" width="360" /> </a>';
                                    ?>
                                    <!-- <div class="mfp-open">
                                    
                                    </div>
                                    </a> -->
                                </div>
                                <div class="text">
                                    <?php
                                        echo '<h2 class="title h4"><a href="product.php?category='.strval($x).'">'.$row['pName'].'</a></h2>';
                                    ?>
                                    <!-- <sub>$ 1499,-</sub>
                                    <sup>$ 1099,-</sup> -->
                                    <?php    
                                        echo '<span class="description clearfix">'.$row['pDesc'].'</span>';
                                    ?>
                                    <?php   
                                       $x++;
                                       echo '';
                                    ?> 
                                </div>
                            </div>
                        </article>
                    </div>

          

                <?php } ?>
                </div> <!--/row-->
                <!-- === button more === -->

                <!-- <div class="wrapper-more">
                    <a href="product.php?category=2" class="btn btn-main">View store</a>
                </div> -->

                <!-- ========================  Product info popup - quick view ======================== -->
            </div> <!--/container-->
        </section>

        <!-- ========================  Stretcher widget ======================== -->

        <section class="stretcher-wrapper">

            <!-- === stretcher header === -->

            <!--<header class="hidden">
                <!--remove class 'hidden'' to show section header --
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h1 class="h2 title">Popular categories</h1>
                            <div class="text">
                                <p>
                                    Whether you are changing your home, or moving into a new one, you will find a huge selection of quality living room furniture,
                                    bedroom furniture, dining room furniture and the best value at Furniture factory
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>-->

            <!-- === stretcher === -->

            <ul class="stretcher">

                <!-- === stretcher item === -->

                <li class="stretcher-item" style="background-image:url(assets/images/bedroom01.png);">
                    <!--logo-item-->
                    <div class="stretcher-logo">
                        <div class="text">
                            <span class="f-icon f-icon-bedroom"></span>
                            <span class="text-intro">Bedroom</span>
                        </div>
                    </div>
                    <!--main text-->
                    <figure>
                        <h4>Modern furnishing projects</h4>
                        <figcaption>New Furnishing Ideas</figcaption>
                    </figure>
                    <!--anchor-->
                    <a href="product.php?category=2">Anchor link</a>
                </li>

                <!-- === stretcher item === -->

                <li class="stretcher-item" style="background-image:url(assets/images/livingRoom01.png);">
                    <!--logo-item-->
                    <div class="stretcher-logo">
                        <div class="text">
                            <span class="f-icon f-icon-dining-table"></span>
                            <span class="text-intro">Dining Tables</span>
                        </div>
                    </div>
                    <!--main text-->
                    <figure>
                        <h4>Furnishing and complements</h4>
                        <figcaption>Discover The Design Table Collection</figcaption>
                    </figure>
                    <!--anchor-->
                    <a href="product.php?category=5">Anchor link</a>
                </li>

                <!-- === stretcher item === -->

                <li class="stretcher-item" style="background-image:url(assets/images/office01.jpg);">
                    <!--logo-item-->
                    <div class="stretcher-logo">
                        <div class="text">
                            <span class="f-icon f-icon-office"></span>
                            <span class="text-intro">Office</span>
                        </div>
                    </div>
                    <!--main text-->
                    <figure>
                        <h4>Which is Best for Your Office</h4>
                        <figcaption>Tables vs Desks</figcaption>
                    </figure>
                    <!--anchor-->
                    <a href="product.php?category=3">Anchor link</a>
                </li>

                <!-- === stretcher item === -->

                <li class="stretcher-item" style="background-image:url(assets/images/kitchen01.png);">
                    <!--logo-item-->
                    <div class="stretcher-logo">
                        <div class="text">
                            <span class="f-icon f-icon-kitchen"></span>
                            <span class="text-intro">Kitchen</span>
                        </div>
                    </div>
                    <!--main text-->
                    <figure>
                        <h4>Keeping Things Minimal</h4>
                        <figcaption>Creating Your Very Own Kitchen</figcaption>
                    </figure>
                    <!--anchor-->
                    <a href="product.php?category=1">Anchor link</a>
                </li>

                <!-- === stretcher item more=== -->

                <li class="stretcher-item more">
                    <div class="more-icon">
                        <span data-title-show="Show more" data-title-hide="+"></span>
                    </div>
                    <a href="product.php?category=4"></a>
                </li>

            </ul>
        </section>

        <!-- ========================  Banner ======================== -->

        <section class="banner" style="background-image:url(assets/Living-Room/L2.png)">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 text-center">
                        <h2 class="title">Our story</h2>
                        <p>
                            We believe in creativity as one of the major forces of progress. With this idea, we traveled throughout Italy to find exceptional
                            artisans and bring their unique handcrafted objects to connoisseurs everywhere.
                        </p>
                        <p><a href="about.php" class="btn btn-clean">Read full story</a></p>
                    </div>
                </div>
            </div>
        </section>


        <!-- ========================  Instagram ======================== -->

        <section class="instagram">

            <!-- === instagram header === -->

            <header>
                <div class="container">
                    <div class="row">
                        <a href="" target="_blank">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h2 class="h2 title">Follow us <i class="fa fa-instagram fa-2x"></i> Instagram </h2>
                            <div class="text">
                                <p>@becker's_furn</p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </header>

            <!-- === instagram gallery === -->

            <div class="gallery clearfix">
                <a class="item" href="#">
                    <img src="assets/images/square-1.jpg" alt="Alternate Text" />
                </a>
                <a class="item" href="#">
                    <img src="assets/images/square-2.jpg" alt="Alternate Text" />
                </a>
                <a class="item" href="#">
                    <img src="assets/images/square-3.jpg" alt="Alternate Text" />
                </a>
                <a class="item" href="#">
                    <img src="assets/images/square-4.jpg" alt="Alternate Text" />
                </a>
                <a class="item" href="#">
                    <img src="assets/images/square-5.jpg" alt="Alternate Text" />
                </a>
                <a class="item" href="#">
                    <img src="assets/images/square-6.jpg" alt="Alternate Text" />
                </a>

            </div> <!--/gallery-->

        </section>

<?php include 'footer.php' ?>