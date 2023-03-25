<?php     
    require_once ("db_connection/conn.php");

    $title = "ABOUT US";
    include ("includes/header.php");
?>

     <!-- Wrapper-->
    <div class="wrapper">
        <section class="module-cover parallax text-center" data-background="assets/media/bg-8.jpg" data-jarallax-video="https://www.youtube.com/watch?v=ARvle-Ei6Sw" data-overlay="0.85" data-gradient="0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>We bring quality <br>rice and edible oil products</h1>
                        <p>Pee Kaf Company Limited is a registered company based in Ghana</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero end-->

        <!-- About-->
        <section class="module bg-gray p-t-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 m-auto">
                        <div class="space" data-mY="-60px"></div>
                        <div class="modal-video-container"><img src="assets/media/bg-8.jpg" alt=""><a class="play-button" href="https://www.youtube.com/watch?v=0aCbYxJ9gus"></a></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="space" data-mY="60px"></div>
                    </div>
                </div>

                <section class="module">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-md-9 m-auto text-center">
                                <h1>ABOUT PEE KAF.</h1>
                                <p class="lead">
                                    <?= nl2br($about_info); ?>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="space" data-MY="60px"></div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="icon-box text-center">
                            <div class="icon-box-icon"><span class="ti-layout text-success"></span></div>
                            <div class="icon-box-title">
                                <h6>Quality Products</h6>
                            </div>
                            <div class="icon-box-content">
                                <p>Our team of experts is well-versed in the intricacies of international trade, and we can help you find the products you need...</p>
                            </div>
                            <div class="icon-box-link"><a href="services">Read more</a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="icon-box text-center">
                            <div class="icon-box-icon"><span class="ti-world text-success"></span></div>
                            <div class="icon-box-title">
                                <h6>Trade Anywhere</h6>
                            </div>
                            <div class="icon-box-content">
                                <p>We understand that many people want to take advantage of the amazing products available from South East Asia, but...</p>
                            </div>
                            <div class="icon-box-link"><a href="services">Read more</a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="icon-box text-center">
                            <div class="icon-box-icon"><span class="ti-user text-success"></span></div>
                            <div class="icon-box-title">
                                <h6>Communication</h6>
                            </div>
                            <div class="icon-box-content">
                                <p>We emphasize effective communication as the key in understanding customers needs as well as the challenges they...</p>
                            </div>
                            <div class="icon-box-link"><a href="services">Read more</a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="icon-box text-center">
                            <div class="icon-box-icon"><span class="ti-desktop text-success"></span></div>
                            <div class="icon-box-title">
                                <h6>Talk to Us</h6>
                            </div>
                            <div class="icon-box-content">
                                <p>Contact us today to learn more about our products and services, and let us help...</p>
                            </div>
                            <div class="icon-box-link"><a href="services">Read more</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


<?php 
    include ("includes/footer.php");
?>