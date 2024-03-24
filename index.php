<?php
session_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/taikhoan.php";


if(isset($taikhoan['mand'])) {
    $id_user = $taikhoan['mand'];
}
$listtaikhoan = loadall_taikhoan(); 
$list_danhmuc = loadall_danhmuc();
$listsanpham = loadall_sanpham();
include_once "view/header.php";
if (isset($_GET['act']) && $_GET['act'] != "") {
    switch ($_GET['act']) {
        case 'home':
            include_once "view/home.php";
            break;
        case "productDentail":
            //code
            break;
        case "shop":
            include_once "view/shop.php";
            break;
        case "cart":
            include_once "view/cart.php";
            break;
        case "blog":
            include_once "view/blog.php";
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $hoten = $_POST['hoten'];
                $email = $_POST['email'];
                $matkhau = $_POST['matkhau'];
                $xacnhan_matkhau = $_POST['xacnhan_matkhau'];
                $checkemail = checkemail_dangky($email);
                // var_dump($typeEmail);
                $error = [];
                // validate email: bat buoc nhap, email dung dinh dang, email ton tai
                if(empty($email)) {
                    $error['email'] = 'Email không được để trống';
                } else {
                    if(!empty($checkemail)) {
                        $error['email'] = 'Email này đã tồn tại vui lòng nhập email khác';
                    }
                }
                // validate hoten
                if (empty($hoten)) {
                    $error['hoten'] = 'Họ và tên không được để trống';
                }

                if (empty(trim($matkhau))) {
                    $error['matkhau'] = 'Mật khẩu không được để trống';
                }

                if ($matkhau !== $xacnhan_matkhau) {
                    $error['xacnhan_matkhau'] = 'Xác nhận mật khẩu không trùng khớp';
                }

                if (empty($error)) {
                    insert_taikhoan($hoten, $email, $matkhau);
                    $thongbao="Đã đăng ký thành công. Vui lòng đăng nhập để thực hiện chức năng bình luận hoặc đặt hàng!";
                }
            }
            include "view/dangky.php";
            break;
            case 'dangnhap':
                if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                    $hoten = $_POST['hoten'];
                    $matkhau = $_POST['matkhau'];
                    $check_user = check_user($hoten, $matkhau);
                    if(is_array($check_user)) {
                        $_SESSION['taikhoan'] = $check_user;
                    } else {
                        $thongbao = "Tài khoản không tồn tại vui lòng đăng nhập lại hoặc đăng ký";
                    }
    
                    $error = [];
                    if(empty($hoten)) {
                        $error['hoten'] = "Họ tên không được để trống";
                    } else if($hoten !== $check_user) {
                        $error['hoten'] = "Tên người dùng không tồn tại vui lòng nhập lại ";
                    }
                    if(empty($matkhau)) {
                        $error['matkhau'] = "Mật khẩu không được để trống";
                    } else if($matkhau !== $check_user) {
                        $error['matkhau'] = "Mật khẩu không trùng khớp";
                    }
                }
               
                include "view/login.php";
                break;
                case 'thoat':
                    session_unset();
                    include "view/login.php";
                    break;
        case "gioithieu":
            include_once "view/gioithieu.php";
            break;

        case "category-list":
            include_once "view/category-list.php";
            break;
        case "product":
            include_once "view/product.php";
            break;
        case "quenmk":
            include_once "view/quenmk.php";
            break;
        case "checkout":
            include_once "view/checkout.php";
            break;
        case "donhangcuaban":
            include_once "view/donhangcuaban.php";
            break;
        case "dangky":
            include_once "view/dangky.php";
            break;
        default:
            ///
            echo "<h1>Fooder not file 404</h1>";
            break;
    }
} else {
    include_once "view/home.php";
}
include_once "view/footer.php";
