<main class="main">
	<div class="page-header">
		<div class="container d-flex flex-column align-items-center">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Home</a></li>
						<li class="breadcrumb-item"><a href="?act=shop">Shop</a></li>
						<li class="breadcrumb-item active" aria-current="page">
							My Account
						</li>
					</ol>
				</div>
			</nav>

			<h1>My Account</h1>
		</div>
	</div>

	<div class="container login-container">
		<div class="row">
			<div class="col-lg-10 mx-auto">
				<div class="row">
					<div class="col-md-6">
						<div class="heading mb-1">
							<h2 class="title">Đăng nhập</h2>
						</div>

						<form action="#">
							<label for="login-email">
								Tên người dùng hoặc email
								<span class="required">*</span>
							</label>
							<input type="email" class="form-input form-wide" id="login-email" required />

							<label for="login-password">
								Mật khẩu
								<span class="required">*</span>
							</label>
							<input type="password" class="form-input form-wide" id="login-password" required />

							<div class="form-footer">
								<div class="custom-control custom-checkbox mb-0">
									<input type="checkbox" class="custom-control-input" id="lost-password" />
									<label class="custom-control-label mb-0" for="lost-password">Lưu tài khoản
									</label>
								</div>

								<a href="?act=quenmk" class="forget-password text-dark form-footer-right"> Quên mật khẩu
								</a>
							</div>
							<button type="submit" class="btn btn-dark btn-md w-100">
								ĐĂNG NHẬP
							</button>
						</form>
					</div>
					<div class="col-md-6">
						<div class="heading mb-1">
							<h2 class="title">Đăng ký</h2>
						</div>

						<form action="#">
							<label for="register-email">
								Email
								<span class="required">*</span>
							</label>
							<input type="email" class="form-input form-wide" id="register-email" required />

							<label for="register-password">
								Tài khoản
								<span class="required">*</span>
							</label>
							<input type="text" class="form-input form-wide" id="register-password" required />
							<label for="register-password">
								Mật khẩu
								<span class="required">*</span>
								<!--js  -->

								<!-- end js -->
							</label>
							<input type="password" class="form-input form-wide" id="register-password" required />
							<label for="register-password">
								Số điện thoại
								<span class="required">*</span>
							</label>
							<input type="text" class="form-input form-wide" id="register-password" required />

							<div class="form-footer mb-2">
								<button type="submit" class="btn btn-dark btn-md w-100 mr-0">
									ĐĂNG KÝ
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</main><!-- End .main -->