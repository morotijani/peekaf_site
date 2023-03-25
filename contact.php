<style>
/* navigation bar color  */
.header {
  background: #28a745 !important;
}
</style>
<?php     
    require_once ("db_connection/conn.php");

    $title = "CONTACT US";
    include ("includes/header.php");
    $mapkey = "AIzaSyAl7HieEr-PAcYjTI1TBy_pd9oC1-xpZaI";
?>
    <!-- Wrapper-->
    <div class="wrapper">
        <!-- Map-->
       <section class="maps-container">
         <iframe
                loading="lazy"
                allowfullscreen
                referrerpolicy="no-referrer-when-downgrade"
                src="https://www.google.com/maps/embed/v1/place?key=<?= $mapkey; ?>&q=Duase+Kumasi" class="map">
            </iframe> 
            <!--    <div class="map" data-addresses="[48.859822, 2.352647], [44.2507913, 16.3983171]" data-info="[Lorem ipsum dolor sit amet.]" data-icon="assets/images/map-icon.png" data-zoom="15"></div> -->
        </section>

        <!-- Services-->
        <section class="module">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box text-center">
                            <div class="icon-box-icon"><span class="ti-headphone-alt text-success"></span></div>
                            <div class="icon-box-title">
                                <h6>Drop us a line</h6>
                            </div>
                            <div class="icon-box-content">
                                <p>
                                    <a href="tel:+233241168078">+233 2411 68078</a>
                                    <br>
                                    <a href="tel:+971582946515">+971 5829 46515</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box text-center">
                            <div class="icon-box-icon"><span class="ti-email text-success"></span></div>
                            <div class="icon-box-title">
                                <h6>Email</h6>
                            </div>
                            <div class="icon-box-content">
                                <p><a href="mailto:support@peekaf.com">info@peekaf.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box text-center">
                            <div class="icon-box-icon"><span class="ti-map-alt text-success"></span></div>
                            <div class="icon-box-title">
                                <h6>Visit our office</h6>
                            </div>
                            <div class="icon-box-content">
                                <p>Kenyahse - Duase, <br>K.N.U.S.T, Kumasi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services end-->

        <!-- Form-->
        <section class="module divider-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-9 m-auto text-center">
                        <h1>Contact Us.</h1>
                        <p class="lead">See how your users experience your website in realtime or view trends to see any changes in performance over time.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="space" data-MY="60px"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form id="contact-form" method="POST" novalidate>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="name" placeholder="Name" required="">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control" type="email" name="email" placeholder="E-mail" required="">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="subject" placeholder="Subject" required="">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" placeholder="Message" rows="12" required=""></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <p class="text-center">
                                        <input class="btn btn-circle btn-brand btn-success" type="submit" name="submit" value="Send Message">
                                    </p>
                                </div>
                            </div>
                        </form>
                        <!-- Ajax response-->
                        <div class="ajax-response text-center" id="contact-response"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Form end-->
    </div>
<?php 
    include ("includes/footer.php");
?>