<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="section-title text-center">
				<h2 class="title pb-4 text-dark text-capitalize">
					Chi Tiết Đơn Hàng
				</h2>
			</div>
		</div>
		<div class="col-12">
			<ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
				<li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
				<li class="breadcrumb-item active" aria-current="page">
					Chi tiết đơn hàng
				</li>
			</ol>
		</div>
	</div>
</div>
</nav>
<div class="containers">
	<form action="#" method="POST">
		<!-- start thông ting người nhận -->
		<h2>Thông tin người nhận</h2>

		<label for="name">Tên người nhận :</label>
		<input type="text" id="name" name="name" required>

		<label for="address">Địa chỉ giao hàng:</label>
		<textarea id="address" name="address" rows="4" required>.</textarea>

		<label for="name">Email : </label>
		<input type="text" id="name" name="name" required>

		<label for="name">Số điện thoại </label>
		<input type="number" id="name" name="name" required>



		<label class="lb">Phương thức thanh toán:</label>
		<div class="nut_radio">
			<input type="radio" class="ip" name="id_pttt" value="1" checked=""> Thanh toán khi giao hàng (COD) <br> <br>
			<input type="radio" class="ip" name="id_pttt" value="2"> Thanh toán bằng VNPAY
		</div>


		<label for="address">Ghi chú :</label>
		<textarea id="address" name="address" rows="4" required>.</textarea> <br> <br>

		<button type="submit">Xác nhận đặt hàng</button>

		<!-- End phần thông tin người nhận -->
	</form>

	<!-- Phần sản phẩm -->
	<div class="product">
		<h2>Đơn hàng của bạn</h2>
		<hr>

		<p><strong>Tên sản phẩm:</strong> Áo phông thể thao</p>
		<p><strong>Giá:</strong> $20</p>
		<p><strong>Mô tả:</strong> Áo phông thể thao chất liệu cotton thoáng mát.</p>
		<p><strong>Vận chuyển :</strong> Miễn phí vận chuyển</p>
		<p><strong>Thành tiền :</strong> Thành tiền</p>
	</div>
	<!-- End phẩn sản phẩm -->
</div>

<style>
	body {
		font-family: Arial, sans-serif, ;
		margin: 0;
		padding: 0;


	}

	.containers {
		max-width: 1400px;
		margin: 20px auto;
		background-color: #fff;
		padding: 20px;
		border-radius: 8px;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		display: grid;
		grid-template-columns: repeat(2, 1fr);
		grid-gap: 20px;
	}

	.product {
		padding: 20px;
		border: 1px solid #ccc;
		border-radius: 5px;
		background: #f6f6f6;
	}

	form {
		padding: 20px;
		border: 1px solid #ccc;
		border-radius: 8px;
	}

	label {
		font-weight: bold;
	}

	input[type="text"],
	input[type="number"],
	textarea {
		width: 100%;
		padding: 10px;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
	}

	button {
		background-color: #5a5ac9;
		color: #fff;
		border: none;
		padding: 10px 20px;
		border-radius: 4px;
		cursor: pointer;
	}

	button:hover {
		background-color: #555;
	}

	.nut_radio {
		width: 100%;
		padding: 20px;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
	}
</style>