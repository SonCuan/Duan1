<main class="main">
			<div class="container">
				<ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
				<ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
          <li class="breadcrumb-item"><a href="#">Giỏ hàng</a></li>
          <li class="breadcrumb-item active" aria-current="page">
            Thủ tục
			<li class="breadcrumb-item active" aria-current="page">
            Hoàn tất thanh toán
            <?= $namedm ?? "" ?>
          </li>
        </ol>
				</ul>

				<div class="row">
					<div class="col-lg-8">
						<div class="cart-table-container">
							<table class="table table-cart">
								<thead>
									<tr>
										<th class="thumbnail-col"></th>
										<th class="product-col">Sản phẩm</th>
										<th class="price-col">Gía </th>
										<th class="qty-col">Số lượng</th>
										<th class="text-right">Tổng tiền</th>
									</tr>
								</thead>
								<tbody>
									<tr class="product-row">
										<td>
											<figure class="product-image-container">
												<a href="product.html" class="product-image">
													<img src="assets/images/products/product-4.jpg" alt="product">
												</a>

												<a href="#" class="btn-remove icon-cancel" title="Remove Product"></a>
											</figure>
										</td>
										<td class="product-col">
											<h5 class="product-title">
												<a href="product.html">Men Watch</a>
											</h5>
										</td>
										<td>$17.90</td>
										<td>
											<div class="product-single-qty">
												<input class="horizontal-quantity form-control" type="text">
											</div><!-- End .product-single-qty -->
										</td>
										<td class="text-right"><span class="subtotal-price">$17.90</span></td>
									</tr>

									<tr class="product-row">
										<td>
											<figure class="product-image-container">
												<a href="product.html" class="product-image">
													<img src="assets/images/products/product-3.jpg" alt="product">
												</a>

												<a href="#" class="btn-remove icon-cancel" title="Remove Product"></a>
											</figure>
										</td>
										<td class="product-col">
											<h5 class="product-title">
												<a href="product.html">Men Watch</a>
											</h5>
										</td>
										<td>$17.90</td>
										<td>
											<div class="product-single-qty">
												<input class="horizontal-quantity form-control" type="text">
											</div><!-- End .product-single-qty -->
										</td>
										<td class="text-right"><span class="subtotal-price">$17.90</span></td>
									</tr>

									<tr class="product-row">
										<td>
											<figure class="product-image-container">
												<a href="product.html" class="product-image">
													<img src="assets/images/products/product-6.jpg" alt="product">
												</a>

												<a href="#" class="btn-remove icon-cancel" title="Remove Product"></a>
											</figure>
										</td>
										<td class="product-col">
											<h5 class="product-title">
												<a href="product.html">Men Black Gentle Belt</a>
											</h5>
										</td>
										<td>$17.90</td>
										<td>
											<div class="product-single-qty">
												<input class="horizontal-quantity form-control" type="text">
											</div><!-- End .product-single-qty -->
										</td>
										<td class="text-right"><span class="subtotal-price">$17.90</span></td>
									</tr>
								</tbody>


								
							</table>
						</div><!-- End .cart-table-container -->
					</div><!-- End .col-lg-8 -->

					<div class="col-lg-4">
						<div class="cart-summary">
							<h3>Tổng giỏ hàng</h3>

							<table class="table table-totals">
								<tbody>
									<tr>
										<td>Subtotal</td>
										<td>$17.90</td>
									</tr>

									<tr>
										<td colspan="2" class="text-left">
											<h4>Giao hàng</h4>

											<div class="form-group form-group-custom-control">
												<div class="custom-control custom-radio">
													<input type="radio" class="custom-control-input" name="radio"
														checked>
													<label class="custom-control-label">Thanh toán khi giao hàng (COD)</label>
												</div><!-- End .custom-checkbox -->
											</div><!-- End .form-group -->

											<div class="form-group form-group-custom-control mb-0">
												<div class="custom-control custom-radio mb-0">
													<input type="radio" name="radio" class="custom-control-input">
													<label class="custom-control-label">Thanh toán bằng ví VNPAY</label>
												</div><!-- End .custom-checkbox -->
											</div><!-- End .form-group -->
											<br>

											<form action="#">
											<div class="form-group form-group-sm">
													
													<input type="text" class="form-control form-control-sm"
														placeholder=" Tên người nhận">
													
												</div><!-- End .form-group -->

												<div class="form-group form-group-sm">
													
													<input type="text" class="form-control form-control-sm"
														placeholder="Email:">
													
												</div><!-- End .form-group -->

												<div class="form-group form-group-sm">
													<input type="text" class="form-control form-control-sm"
														placeholder="Số điện thoại">
												</div><!-- End .form-group -->

												<div class="form-group form-group-sm">
													<input type="text" class="form-control form-control-sm"
														placeholder="Địa chỉ">
												</div><!-- End .form-group -->

												<button type="submit" class="btn btn-shop btn-update-total">
													Cập nhật thông tin
												</button>
											</form>
										</td>
									</tr>
								</tbody>

								<tfoot>
									<tr>
										<td>Total</td>
										<td>$17.90</td>
									</tr>
								</tfoot>
							</table>

							<div class="checkout-methods">
								<a href="?act=donhangcuaban" class="btn btn-block btn-dark">Hoàn tất đặt hàng
									<i class="fa fa-arrow-right"></i></a>
							</div>
						</div><!-- End .cart-summary -->
					</div><!-- End .col-lg-4 -->
				</div><!-- End .row -->
			</div><!-- End .container -->

			<div class="mb-6"></div><!-- margin -->
		</main><!-- End .main -->	