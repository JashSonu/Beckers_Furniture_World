 <!-- ================== Footer  ================== -->

 <footer>
            <div class="container">

                <!--footer showroom-->
                <div class="footer-showroom">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2>Visit our Office</h2>
                            <strong>INDIA OFFICE</strong>
                                                <p>Kalindi Building, Ground Floor. 82 Lala Lajpat Rai Road, Vile Parle-West <br /> 
                                                Mumbai - 400056, Maharashtra, India.</p>
                                                <strong>VIETNAM OFFICE</strong>
                                                <p>Villa No - 67, Street No - 3.6 Gamuda Gardens, 
                                                Tran Phu Hoang Mai, Hanoi, Vietnam.</p>
                            <p>Mon - Sat: 9 am - 5:30 pm &nbsp; &nbsp; | &nbsp; &nbsp; Closed on Sundays</p>
                        </div>
                        <div class="col-sm-4 text-center">
                            <a href="contact.php" class="btn btn-clean"><span class="icon icon-map-marker"></span> Get directions</a>
                            <div class="call-us h4"><span class="icon icon-phone-handset"></span>  +91-22-26103901</div>
                            <div class="call-us h4"><span class="icon icon-phone-handset"></span> +84-24-66666318</div>
                        </div>
                    </div>
                </div>

                <!--footer links-->
                <div class="footer-links">
                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <h5>Browse by</h5>
                            <ul>
                                <li><a href="producttab.php">Product</a></li>
                                <li><a href="producttab.php">Category</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <h5>Resources</h5>
                            <ul>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Projects</a></li>
                                <li><a href="#">Sales</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <h5>Our Company</h5>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <!-- <li><a href="#">News</a></li> -->
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                        <!-- <div class="col-sm-12 col-md-6">
                            <h5>Sign up for our newsletter</h5>
                            <p><i>Add your email address to sign up for our monthly emails and to receive promotional offers.</i></p>
                            <div class="form-group form-newsletter">
                                <input class="form-control" type="text" name="email" value="" placeholder="Email address" />
                                <input type="submit" class="btn btn-clean btn-sm" value="Subscribe" />
                            </div>
                        </div> -->
                    </div>
                </div>

                <!--footer social-->

                <div class="footer-social">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="https://drive.google.com/file/d/1yhJDMVdLBr2ujmMk44FFfHkPDjPxQZLr/view" target="_blank"><i class="fa fa-download"></i> Download Brochure</a> &nbsp; | <a href="#">Sitemap</a> &nbsp; | &nbsp; <a href="#">Privacy policy</a>
                        </div>
                        <div class="col-sm-6 links">
                            <ul>
                                <li><a href="" target="_blank "><i class="fa fa-facebook"></i></a></li>
                                <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
                                <!-- <li><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
                                <!-- <li><a href="#"><i class="fa fa-youtube"></i></a></li> -->
                                <li><a href="" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div> <!--/wrapper-->

    <!--JS files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.bootstrap.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/jquery.owl.carousel.js"></script>
    <script src="js/jquery.ion.rangeSlider.js"></script>
    <script src="js/jquery.isotope.pkgd.js"></script>
    <script src="js/main.js"></script>
    <!--Start of Tawk.to Script-->

<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/612fa931d6e7610a49b32167/1feh2pr27';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>





    <!--End of Tawk.to Script-->

    <script>
$(document).ready(function(){
    function alignModal(){
        var modalDialog = $(this).find(".modal-dialog");
        
        // Applying the top margin on modal to align it vertically center
        modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2));
    }
    // Align modal when it is displayed
    $(".modal").on("shown.bs.modal", alignModal);
    
    // Align modal when user resize the window
    $(window).on("resize", function(){
        $(".modal:visible").each(alignModal);
    });   
});
</script>
</body>

</html>