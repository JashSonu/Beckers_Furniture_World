<?php include 'nav.php' ?>
<!-- ========================  Main header ======================== -->

<section class="main-header" style="background-image:url(assets/images/contact/contact-3.jpg)">
    <header>
        <div class="container text-center">
            <h2 class="h2 title">Contact</h2>
            <ol class="breadcrumb breadcrumb-inverted">
                <li><a href="index.php"><span class="icon icon-home"></span></a></li>
                <li><a class="active" href="contact.php">Contact</a></li>
            </ol>
        </div>
    </header>
</section>

<!-- ========================  Contact ======================== -->

<section class="contact">

    <!-- === Goolge map === -->
    <div class="container" >

        <div class="row" style="margin:20px 0px; background: #ffd954; padding: 20px 0px;">
            <div class="col-md-6">
                <figure id="cont-addr" class="text-center">
                    <span class="icon icon-map-marker"></span></br>
                    <figcaption>

                        <strong>INDIA OFFICE</strong></br>
                        <span>Kalindi building, ground floor. 82 Lala Lajpat rai road, Vile Parle-West <br />
                            Mumbai - 400056, Maharashtra, India.</span>
                       
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-6">
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d471.2715051491351!2d72.84064147123338!3d19.1001070972478!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9b75d2ee153%3A0x8fc9ad55fc6dfdc9!2sKulindi%20Building%2C%20Lajpatrai%20Rd%2C%20LIC%20Colony%2C%20Suresh%20Colony%2C%20Vile%20Parle%2C%20Mumbai%2C%20Maharashtra%20400056!5e0!3m2!1sen!2sin!4v1609864284678!5m2!1sen!2sin" 
                    width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>

        <div class="row" style="margin:20px 0px; background: #ffd954; padding: 20px 0px;">

            <div class="col-md-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.481104759317!2d105.87259211445371!3d20.973343395044825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad62e4032807%3A0x5ebad0dc40638d2f!2sGamuda%20Gardens!5e0!3m2!1sen!2sin!4v1604999151407!5m2!1sen!2sin"
                    width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0">
                </iframe>
            </div>
            <div class="col-md-6 order-md-2">
                <figure id="cont-addr" class="text-center">
                    <span class="icon icon-map-marker"></span></br>
                    <figcaption>
                        <strong>VIETNAM OFFICE</strong></br>
                        <span>Villa No - 67, Street No - 3.6 Gamuda Gardens,
                            Tran Phu Hoang Mai, Hanoi, Vietnam.</span>
                    </figcaption>
                </figure>
            </div>
        </div>

        <div class="row text-center" style="background: black; padding: 20px 0px;">
            <a class="btn btn-clean open-form" data-text-open="Contact us via form"
                        data-text-close="Close form">Contact us via form</a>
        </div> <br>

        <div class="contact-form-wrapper">

                   

                    <div class="contact-form clearfix">
                        <form id="sendmail" name="sendmail" action="sendmail.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="Name" name="Name" type="text" value="" class="form-control"
                                            placeholder="Your name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="Email" name="Email" type="email" value="" class="form-control"
                                            placeholder="Your email">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input id="Subject" name="Subject" type="text" value="" class="form-control"
                                            placeholder="Subject">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea id="Comment" name="Comment" class="form-control"
                                            placeholder="Your message" rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12 text-center">
                                    <input type="submit" class="btn btn-clean" value="Send message" style="background-color: #FFBD33;"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

        <!-- <div class="row">
            <div class="col col-md-10 text-center">
                <h2 class="title">Send an email</h2>
                <p>
                    Thanks for your interest in us. We believe in creativity as one of the major forces of progress.
                    Please use this form if you have any questions about our products and we'll get back with you very
                    soon.
                </p>

                <div class="contact-form-wrapper">

                    <a class="btn btn-clean open-form" data-text-open="Contact us via form"
                        data-text-close="Close form">Contact us via form</a>

                    <div class="contact-form clearfix">
                        <form id="sendmail" name="sendmail" action="sendmail.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="Name" name="Name" type="text" value="" class="form-control"
                                            placeholder="Your name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="Email" name="Email" type="email" value="" class="form-control"
                                            placeholder="Your email">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input id="Subject" name="Subject" type="text" value="" class="form-control"
                                            placeholder="Subject">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea id="Comment" name="Comment" class="form-control"
                                            placeholder="Your message" rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12 text-center">
                                    <input type="submit" class="btn btn-clean" value="Send message" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div> -->
        <!-- <div class="row"> -->

            <!-- <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">

                <div class="contact-block">

                    <div class="banner">
                        <div class="row">

                        </div>
                    </div>


                </div>


            </div> -->
            <!--col-sm-8-->
        <!-- </div> -->
        <!--/row-->
    <!-- </div> -->
    <!--/container-->
</section>

<!-- ================== Footer  ================== -->
<?php include 'footer.php' ?>