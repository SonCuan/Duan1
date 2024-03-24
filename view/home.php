<main class="main">
    <section class="intro-section mb-3">
        <div class="home-slider slide-animate owl-carousel owl-theme" data-owl-options="{
                        'nav': false,
                        'responsive': {
                            '1900': {
                                'nav': true
                            }
                        }
                    }">
            <div class="home-slide home-slide-1 banner" style="display:inline; width:1536px; height:auto;">
                <img class="slide-bg" src="assets/images/demoes/demo23/slider/slide3.jpg" alt="slider image" width="1900" height="575">

                <div class="banner-layer banner-layer-middle banner-layer-left">
                    <div class="container-fluid">
                        <div class="appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="200">
                            <h2 class="font-weight-light ls-10 text-primary">Thơm tho </h2><br>
                            <a href="?act=shop" class="btn btn-link"><i>XEM TẠI ĐÂY <br>
                                </i><i class="icon-right-open-big"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-slide home-slide-1 banner" style="display:inline; width:1536px; height:auto;">
                <img class="slide-bg" src="assets/images/demoes/demo23/slider/slide-1.jpg" alt="slider image" width="1900" height="575">

                <div class="banner-layer banner-layer-middle banner-layer-left">
                    <div class="container-fluid">
                        <div class="appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="200">
                            <h2 class="font-weight-light ls-10 text-primary">Trẻ trung & năng động</h2><br>
                            <a href="?act=shop" class="btn btn-link"><i>XEM TẠI ĐÂY <br>
                                </i><i class="icon-right-open-big"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-slide home-slide-2 banner" style="display:inline; width:1536px; height:360px; ">
                <img class="slide-bg" src="assets/images/demoes/demo23/slider/banner2.jpg" alt="slider image" width="1900" height="575">

                <div class="banner-layer banner-layer-middle banner-layer-left">
                    <div class="container-fluid">
                        <div class="appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="200">
                            <h2 class="font-weight-light ls-10 text-primary">Thời thượng, sang trọng, thanh lịch, phá cách</h2><br>
                            <a href="?act=shop" class="btn btn-link"><i>XEM TẠI ĐÂY <br>
                                </i><i class="icon-right-open-big"></i></a>
                        </div>
                    </div>
                </div>
                <div class="banner-layer banner-layer-middle banner-layer-right w-100">
                    <div class="container-fluid">
                        <div class="col-6 offset-6 appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="200">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    $list_danhmuc = loadall_danhmuc();
    ?>
    <?php foreach ($list_danhmuc as $dm) { ?>
        <section class="welcome-section">
            <div class="container">
                <h2 class="section-title text-center text-uppercase appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="200"><?= $dm['tendm'] ?>
                </h2>
                <p class="section-description text-center mb-3 appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="400"><?= $dm['noidungdm'] ?>
                </p>
                <!-- Phần img  -->
                <div class="row appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="400">
                    <div class="col-6 col-md-4 col-xl-3">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="index.php?act=product">
                                    <img src="assets/images/demoes/demo23/products/nuochoacl1.jpg" width="217" height="217" alt="product">
                                </a>
                                <div class="label-group">
                                    <div class="product-label label-hot">HOT</div>
                                </div>
                                <div class="btn-icon-group">
                                    <a href="index.php?act=product" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i></a>
                                </div>
                                <div class="btn-quickview" title="Quick View">
                                <a href="index.php?act=product" ><i class="icon-magnifier"></i> Chi tiết</a></div>
                            </figure>
                            <div class="product-details">

                                <h3 class="product-title">
                                    <a href="index.php?act=product">Nước hoa </a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">$101.00 &ndash; $111.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-3">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="?act=product">
                                    <img src="assets/images/demoes/demo23/products/nuochoacl3.jpg" width="217" height="217" alt="product">
                                </a>
                                <div class="label-group">
                                    <div class="product-label label-hot">HOT</div>
                                </div>
                                <div class="btn-icon-group">
                                    <a href="?act=product" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i></a>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">

                                <h3 class="product-title">
                                    <a href="?act=product">Porto Extended Camera</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">$599.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-3">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="?act=product">
                                    <img src="assets/images/demoes/demo23/products/nuochoacl4.jpg" width="217" height="217" alt="product">
                                </a>
                                <div class="label-group">
                                    <div class="product-label label-hot">HOT</div>
                                </div>
                                <div class="btn-icon-group">
                                    <a href="?act=product" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i></a>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">

                                <h3 class="product-title">
                                    <a href="?act=product">Blue Child Overshoes</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">$39.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-3">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="?act=product">
                                    <img src="assets/images/demoes/demo23/products/nuochoacl6.jpg" width="217" height="217" alt="product">
                                </a>
                                <div class="label-group">
                                    <div class="product-label label-hot">HOT</div>
                                    <div class="product-label label-sale">-13%</div>
                                </div>
                                <div class="btn-icon-group">
                                    <a href="#" title="Add To Cart" class="btn-icon btn-add-cart product-type-simple"><i class="icon-shopping-cart"></i></a>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">

                                <h3 class="product-title">
                                    <a href="?act=product">Baby Summer Underclothes</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">$299.00</span>
                                    <span class="product-price">$259.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                    </div>
                </div>
                <!-- End phần ing  -->


            <?php } ?>

            <!-- Phần thêm vào chữ  -->


</main><!-- End .main -->