<main class="main">
    <div class="page-header">
        <div class="container d-flex flex-column align-items-center">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>

                        <li class="breadcrumb-item active" aria-current="page">
                            Đăng ký tài khoản
                        </li>
                    </ol>
                </div>
            </nav>
            <br>
            <h1>Đăng nhập và đăng ký</h1>
        </div>
    </div>




    <div class="container">
        <div class="register-box">
            <style>
                body {
                    margin: 0;
                    padding: 0;
                    font-family: Arial, sans-serif;
                    background: #f4f4f4;
                }

                .container {
                    display: flex;
                    justify-content: center;
                    align-items: center;

                }

                .login-box,
                .register-box {
                    width: 600px;
                    padding: 40px;
                    background: #fff;
                    border-radius: 10px;
                    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                }

                h2 {
                    margin: 0 0 20px;
                    padding: 0;
                    color: #333;
                    text-align: center;
                }

                .textbox {
                    position: relative;
                    margin-bottom: 30px;
                }

                .textbox input {
                    width: 100%;
                    padding: 10px;
                    background: #f0f0f0;
                    border: none;
                    outline: none;
                    border-radius: 5px;
                }

                .btn {
                    width: 100%;
                    padding: 10px;
                    background: #007bff;
                    border: none;
                    border-radius: 5px;
                    color: #fff;
                    cursor: pointer;
                }

                .btn:hover {
                    background: #0056b3;
                }

                .bottom-text {
                    margin-top: 20px;
                    text-align: center;
                    font-size: 16px;
                    cursor: pointer;
                    transition: font-size 0.3s ease;
                }

                .bottom-text a {
                    text-decoration: none;
                    color: #007bff;
                }
                .bottom-text a:hover{
                    font-size:18px;
                    text-decoration: underline;
                    color: red;
                }
            </style>
            <h2>Đăng ký</h2>
            <form action="/register" method="POST">
                <div class="textbox">
                    <input type="text" name="username" placeholder="Tên đăng nhập" required>
                </div>
                <div class="textbox">
                    <input type="text" name="password" placeholder="Email" required>
                </div>
                <div class="textbox">
                    <input type="password" name="password" placeholder="Mật khẩu" required>
                </div>
                <div class="textbox">
                    <input type="password" name="password" placeholder="Xác nhận mật khẩu" required>
                </div>
                <button type="submit" class="btn">Đăng ký</button>
            </form>
            <div class="bottom-text">
                Bạn đã có sẵn tài khoản? <a href="?act=login">Bấm vào đây để đăng nhập</a>
            </div>
        </div>
    </div>
</main><!-- End .main -->