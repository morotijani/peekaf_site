<?php 
    require_once ("db_connection/conn.php");

    $title = "SERVICE";
    include ("includes/header.php");
?>

        <!-- Wrapper-->
        <div class="wrapper">
            <section class="module-cover parallax text-center" data-background="assets/media/bg-6.png" data-overlay="0.5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>We only serve<br> the best.</h1>
                            <p>Our team of experts is well-versed in the intricacies of international trade.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Hero end-->

            <section class="module divider-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 m-auto text-center">
                            <!-- <h1>A taste, You cannot Resist.</h1> -->
			                 <h1>Your progress is our priority</h1>
                            <p class="lead">Our team of experts is well-versed in the intricacies of international trade.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="space" data-MY="60px"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p><img src="assets/media/logo-1.png" alt=""></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="space" data-mY="30px"></div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="row">
                                <?php foreach ($service_result as $service_row): ?>
                                <div class="col-12 mb-5">
                                    <div class="icon-box text-center">
                                        <div class="icon-box-icon"><span class="ti-layout text-success"></span></div>
                                        <div class="icon-box-title">
                                            <h6><?= ucwords($service_row['title']); ?></h6>
                                        </div>
                                        <div class="icon-box-content">
                                            <p><?= $service_row['content']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

<?php 
    include ("includes/footer.php");
?>
