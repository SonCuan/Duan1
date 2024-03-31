<!-- Phần slide -->
<main class="main">
    <section class="intro-section mb-3">
        <div class="home-slider slide-animate owl-carousel owl-theme" data-owl-options="{
                        'nav': false,
                        'responsive': {
                            '1440': {
                                'nav': true
                            }
                        }
                    }">
            <div class="home-slide home-slide-1 banner">
                <img class="slide-bg" src="assets/images/demoes/demo23/slider/bannerdior.jpg" alt="slider image" width="1000" height="600">

                <div class="banner-layer banner-layer-middle banner-layer-left">
                    <div class="container-fluid">
                        <div class="appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="200">
                            <h2 class="font-weight-light ls-10 text-primary" >Bộ sưu tập thời trang!</h2>
                            <a href="index.php" class="btn btn-link"style="color: white;"><i>Xem nước hoa của chúng tôi</i><i class="icon-right-open-big"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-slide home-slide-2 banner">
                <img class="slide-bg" src="assets/images/demoes/demo23/slider/moime.jpg" alt="slider image" width="1200" height="575">

                <div class="banner-layer banner-layer-middle banner-layer-right w-100">
                    <div class="container-fluid">
                        <div class="col-6 offset-6 appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="200">
                            <h2 class="font-weight-light ls-10 text-primary">Bộ sưu tập!</h2>
                            <a href="index.php" class="btn btn-link" style="color: white;"><i>Xem nước hoa của chúng tôi</i><i class="icon-right-open-big"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End phần slide -->

    </section>
    <?php
    $list_danhmuc = loadall_danhmuc();
    ?>
    <?php foreach ($list_danhmuc as $dm) { ?>
        <section class="welcome-section">
            <div class="container">

                <!-- Phần tiêu đề -->
                <h2 class="section-title text-center text-uppercase appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="200"><?= $dm['tendm'] ?>
                </h2>
                <p class="section-description text-center mb-3 appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="400"><?= $dm['noidungdm'] ?>
                </p>
                <!-- End phần tiêu đề -->

                <!-- Phần sản phẩm -->
                <div class="row ">
                    <?php
                        $listspnew = top4_sanphamnew_in_danhmuc($dm['id']);
                        foreach ($listspnew as $spnew) :
                    ?>
                    <div class="col-6 col-md-4 col-xl-3">
                        <div class="product-default inner-quickview inner-icon">
                                <figure>    
                                    <a href="?act=product">

                                        <img src="upload/<?= $spnew['hinh'] ?>" style="height:275px;object-fit: cover; " alt="product">

                                    </a>
                                    <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                    </div>
                                    <div class="btn-icon-group">
                                        <a href="?act=product" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="icon-magnifier"  style="font-weight: 700;"></i> Chi tiết</a>
                                </figure>
                                <div class="product-details">

                                    <h3 class="product-title">
                                        <a href="?act=product"><?= $spnew['tensp'] ?></a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>


                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <?php
                                        $gia = number_format($spnew['giamin'], 0, ",", ".") . " - " . number_format($spnew['giamax'], 0, ",", ".");
                                        if ($spnew['giamin'] == $spnew['giamax']) {
                                            $gia = number_format($spnew['giamin'], 0, ",", ".");
                                        }
                                        $gia .= " <u>đ</u>";
                                        ?>
                                        <span class="product-price"><?= $gia ?></span>
                                    </div><!-- End phần giá -->
                                </div><!-- End .product-details -->
                        </div>
                    </div>
                    <?php endforeach; ?>

                    <!-- Enh phần sản phẩm -->
                </div>




            </div>
        </section>




    <?php } ?>
</main>
<!-- End .main -->