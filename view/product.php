<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="?act=product">Shop</a></li>

            </ol>
        </div>
    </nav>
    <style>
        .allthetich {
            display: flex;

            margin-bottom: 10px;
            gap: 10px;
            color: #000;
        }

        .allthetich .thetich {
            padding: 5px 30px;
            border: 1px solid #ccc;
            text-align: center;
            border-radius: 5px;
            transition: .5s;
        }

        /* .allthetich .thetich:hover {
            background: orange;
        } */

        .thetich .tt span {
            margin-top: 10px;
        }

        .tt p {
            font-weight: bold;
            font-size: 15px;

        }

        .tt p:hover {
            color: #ccc;
        }

        .prd {
            display: none;
        }
    </style>
    <div class="container">
        <!-- Bắt đầu thêm sản phẩm vào giỏ hàng-->
        <div class="product-single-container product-single-default">
            <div class="cart-message d-none">
                <strong class="single-cart-notice">“<?= $onesp['tensp'] ?>”</strong>
                <span>Đã được thêm vào giỏ hàng của bạn.</span>
            </div>
            <!-- End Js đã thêm sản phẩm vào giỏ hàng -->

            <div class="row">
                <div class="col-lg-5 col-md-6 product-single-gallery">
                    <div class="product-slider-container">
                        <div class="label-group">
                            <div class="product-label label-sale">
                                -89%
                            </div>
                        </div>

                        <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                            <div class="product-item">
                                <img class="product-single-image" src="upload/<?= $onesp['hinh'] ?>" data-zoom-image="assets/images/demoes/demo23/products/zoom/product-1-big.jpg" style="width: 468px; height: 500px;" alt="product" />
                            </div>
                        </div>
                    </div>
                    <!-- End .product-single-carousel -->
                    <span class="prod-full-screen">
                        <i class="icon-plus"></i>
                    </span><br>

                </div>
                <!-- End .product-single-gallery -->

                <div class="col-lg-7 col-md-6 product-single-details">
                    <h1 class="product-title"><?= $onesp['tensp'] ?></h1>

                    <div class="product-nav">
                        <div class="product-prev">
                            <!-- <a href="#">
                                <span class="product-link"></span>

                                <span class="product-popup">
                                    <span class="box-content">
                                        <img alt="product" width="150" height="150" src="assets/images/demoes/demo23/products/product-5.jpg" style="padding-top: 0px;">

                                        <span>Smart Watches</span>
                                    </span>
                                </span>
                            </a> -->
                        </div>

                        <div class="product-next">
                            <!-- <a href="#">
                                <span class="product-link"></span>

                                <span class="product-popup">
                                    <span class="box-content">
                                        <img alt="product" width="150" height="150" src="assets/images/demoes/demo23/products/product-8.jpg" style="padding-top: 0px;">

                                        <span>Baby Sport Shoes</span>
                                    </span>
                                </span>
                            </a> -->
                        </div>
                    </div>

                    <div class="ratings-container">
                        <div class="product-ratings">
                            <span class="ratings" style="width:60%"></span>
                            <!-- End .ratings -->
                            <span class="tooltiptext tooltip-top"></span>
                        </div>
                        <!-- End .product-ratings -->

                        <a href="#" class="rating-link">( 6 Reviews )</a>
                    </div>
                    <!-- End .ratings-container -->

                    <hr class="short-divider">

                    <?php foreach ($sp_tt as $sp) { ?>
                        <div class="prd">
                            <section class="allthetich ">
                                <?php
                                $i = -1;
                                foreach ($thetich_in_sanpham as $tt) :
                                    $i++;
                                    $check = $sp['gia'] == $tt["gia"] ? "style='color:red;border-color: red;'" : "";
                                ?>
                                    <div class="thetich " onclick="showthetich('<?= $i ?>')" <?= $check ?>>
                                        <div class="tt">
                                            <span><?= $tt['thetich'] ?></span>
                                            <p><?= number_format($tt["gia"], 0, ",", ".") ?>d</p>
                                        </div>
                                        <input type="hidden" name="id_sanpham_thetich" value='<?= $tt['id'] ?>'>
                                    </div>
                                <?php endforeach; ?>

                            </section>
                            <div class="price-box">
                                <span class="old-price"><?= number_format(($sp['gia'] * 20 / 100 + $sp['gia']), 0, ",", ".")   ?>đ</span>
                                <span class="product-price"><?= number_format($sp["gia"], 0, ",", ".")  ?>đ</span>
                                <span style="margin: 6px 0 0 10px;padding: 5px 10px; background: orange; color:white;border-radius: 5px; font-size: 12px;">Sale 20%</span>
                            </div>
                            <ul class="single-info-list">
                                <li>
                                    Còn Lại: <strong><?= $sp['soluong'] ?></strong>
                                </li>
                            </ul>
                        </div>

                    <?php } ?>
                    <!-- End .price-box -->

                    <div class="product-desc">
                        <p>
                            <?= $onesp['mota'] ?>
                        </p>
                    </div>
                    <!-- End .product-desc -->

                    <form action="index.php?act=product&id_sanpham=<?= $id_sanpham ?>" method="post">

                        <div class="product-action">
                            <div class="product-single-qty">
                                <input class="horizontal-quantity form-control"type="number" name="soluong" min="1" max="<?= $soluong ?>"  >
                            </div>
                            <!-- End .product-single-qty -->
                            <button type="submit" name="themgiohang" style="background: black; color:white;padding: 10px 15px;border: none;">
                                <span class="" title="Add to Cart">Thêm vào giỏ hàng
                                </span></button>
                            <button type="submit" name="dathangngay"style="background: black; color:white;padding: 10px 15px;border: none;">
                                <span>Đặt Hàng</span></button>
                            <!-- <input type="hidden" name="id_sanpham_thetich" value="<?= $id ?>">
                            <input type="hidden" name="gia" value="<?= $gia ?>"> -->
                        </div>
                    </form>
                    <!-- Mua hàng -->

                    <!-- End mua hàng -->
                    <!-- End .product-action -->

                    <hr class="divider mb-0 mt-0">

                    <div class="product-single-share mb-3">
                        <label class="sr-only">Share:</label>

                        <div class="social-icons mr-2">
                            <a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                            <a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
                            <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank" title="Linkedin"></a>
                            <a href="#" class="social-icon social-gplus fab fa-google-plus-g" target="_blank" title="Google +"></a>
                            <a href="#" class="social-icon social-mail icon-mail-alt" target="_blank" title="Mail"></a>
                        </div>
                        <!-- End .social-icons -->


                    </div>
                    <!-- End .product single-share -->


                </div>
                <!-- End .product-single-details -->
            </div>
            <h2 style="line-height: 10px; height: 40px; border-bottom:1px solid #ccc">Bình luận</h2>
            <?php foreach ($binhluan as $value) : ?>
                <?php extract($value); ?>
                <br>
                <table>
                    <tr>
                        <th> <b><?= $hoten ?></b> </th>
                    </tr>
                    <tr>
                        <th> <?= $noidung ?></th>
                    </tr>
                    <tr>
                        <th> <b></b><?php echo date("d/m/Y", strtotime($ngaybinhluan)) ?></th>
                    </tr>
                </table>
                <br>
            <?php endforeach; ?>
            </table>
            <div class="cart-discount">
                <form action="" method="post">
                    <div class="input-group">
                        <input type="hidden" name="id_sanpham" value="<?php echo $_GET['id_sanpham'] ?>">
                        <input type="hidden" name="id_taikhoan" value="<?php echo isset($_SESSION['hoten']['id']) ? $_SESSION['hoten']['id'] : '' ?>">
                        <?php
                        if (!empty($_SESSION['taikhoan'])) : ?>
                            <input style=" border-radius:5px 0 0 5px ; " type=" text" class="form-control form-control-sm" placeholder="Gửi bình luận" name="noidung" required>
                            <div class="input-group-append">
                                <button style="border-radius:0 5px 5px 0; width: 100px;" class="btn btn-sm" type="submit" name="guibinhluan">Gửi
                                </button>
                            </div>
                        <?php
                        else :
                        ?>
                            <input type="text" name="" id="" placeholder="Đăng nhập để thực hiện chức năng bình luận" disabled style="width:343px">
                        <?php
                        endif;
                        ?>
                    </div><!-- End .input-group -->

                </form>
            </div>
        </div>
        <!-- End  product-->


    </div>
    <!-- End .product-single-tabs -->

    <div class="products-section pt-0">
        <h1 class="section-title m-b-4" style="margin-left: 10px;">NHỮNG SẢM PHẨM TƯƠNG TỰ</h1>

        <div class="products-slider 5col owl-carousel owl-theme dots-top dots-small" data-owl-options="{'dots': true}">
            <?php foreach ($splq as $lq) : ?>
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="?act=product&id_sanpham=<?= $lq['id'] ?>" style=" text-align: center;">
                            <img src="upload/<?= $lq['hinh'] ?>" style="width: 300px; height: 300px; " alt="product">
                        </a>
                        <div class="label-group">
                            <div class="product-label label-sale">-10%</div>
                        </div>


                    </figure>
                    <div class="product-details">

                        <h3 class="product-title">
                            <a href="?act=product&id_sanpham=<?= $lq['id'] ?>"><?= $lq['tensp'] ?></a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:90%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <span class="old-price"><?= $lq['giamin'] + $lq['giamin'] * 10 / 100 ?></span>
                            <span class="product-price"><?= $lq['giamin'] ?></span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>
            <?php endforeach; ?>
        </div>
        <!-- End .products-slider -->
    </div>
    <!-- End .products-section -->


    <!-- End .row -->
    </div>
    <!-- End .thetichtainer -->
</main>
<script>
    let index = 0;

    function showthetich(index) {
        let thetich = document.getElementsByClassName('prd');
        for (let i of thetich) {
            i.style.display = "none";
        }
        thetich[index].style.display = "block";
    }
    showthetich(0);
</script>