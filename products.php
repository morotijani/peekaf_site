<?php     
    require_once ("db_connection/conn.php");

    $title = "PRODUCTS";
    include ("includes/header.php");
?>

        <!-- Wrapper-->
        <div class="wrapper">
            <!-- Hero-->
            <section class="module-cover parallax text-center" data-background="assets/media/bg-7.jpg" data-overlay="0.1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>PRODUCTS</h2>
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                                <li class="breadcrumb-item active"><a href="products">Products</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Hero end-->

            <!-- Wrapper-->
            <div class="wrapper">
                <section class="module-page-title bg-gray">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="page-title-desc">
                                    <h1 class="page-title-heading">PRODUCTS</h1>
                                    <!--p This theme will shake your world.-->
                                </div>
                            </div>
                            <div class="col-md-6">
                                Our rice is of the highest quality and is sourced from reputable farms that have a long-standing reputation for producing excellent rice
                                <div class="mt-5">
                                    Our edible oil products are also top of the line, and we carry a variety of brands that are well-known for their quality and taste. Whether you're looking for vegetable oil, Sunflower oil, Canola Oil,  or any other type of edible oil, we have you covered.
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

             <!-- Shop Grid-->
            <section class="module">
                <div class="container">
                    <div class="row">
                        <?php foreach ($product_result as $row): ?>
                            <div class="col-md-6">
                                <div class="shop-grid-item">
                                    <div class="shop-item-thumb text-center"><a href="javascript:;"><img src="assets/media/products/<?= $row['image']; ?>" style="width: auto; height: 558.15px; object-fit: cover;" alt="<?= ucwords($row['name']); ?>' image"></a>
                                        <div class="shop-item-hidden"><a class="btn btn-new-white" href="mail:buy@peekaf.com?subject=Purchase - <?= ucwords($row['name']); ?>">Make a Purchase</a></div>
                                    </div>
                                    <div class="shop-item-captions">
                                        <h6 class="shop-item-title"><?= ucwords($row['name']); ?></h6>
                                        <!-- <span class="shop-item-price">$20.00</span> -->
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        </div>

<?php 
    include ("includes/footer.php");
?>
