<?php
session_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "model/thetich.php";
include "model/binhluan.php";
include "model/giohang.php";




if (isset($taikhoan['id'])) {
    $id_user = $taikhoan['id'];
}
$listtaikhoan = loadall_taikhoan();
$listdm = loadall_danhmuc();
$listsanpham = loadall_sanpham("", "");
include_once "view/header.php";
if (isset($_GET['act']) && $_GET['act'] != "") {
    switch ($_GET['act']) {
        case 'home':
            include_once "view/home.php";
            break;
            /**
             * ***** Đăng nhập đăng ký
             */
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
                if (empty($email)) {
                    $error['email'] = 'Email không được để trống';
                } else {
                    if (!empty($checkemail)) {
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
                    $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập để thực hiện chức năng bình luận hoặc đặt hàng!";
                }
            }
            include "view/taikhoan/dangky.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $hoten = $_POST['hoten'];
                $matkhau = $_POST['matkhau'];
                $check_user = check_user($hoten, $matkhau);
                if (is_array($check_user)) {
                    $_SESSION['taikhoan'] = $check_user;
                } else {
                    $thongbao = "Tài khoản không tồn tại vui lòng đăng nhập lại hoặc đăng ký";
                }

                $error = [];
                if (empty($hoten)) {
                    $error['hoten'] = "Họ tên không được để trống";
                } else if ($hoten !== $check_user) {
                    $error['hoten'] = "Tên người dùng không tồn tại vui lòng nhập lại ";
                }
                if (empty($matkhau)) {
                    $error['matkhau'] = "Mật khẩu không được để trống";
                } else if ($matkhau !== $check_user) {
                    $error['matkhau'] = "Mật khẩu không trùng khớp";
                }
            }
            include 'view/taikhoan/login.php';
            break;
        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];

                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là " . $checkemail['matkhau'];
                } else {
                    $thongbao = "Email này không tồn tại!";
                }
            }
            include "view/taikhoan/quenmk.php";
            break;
        case 'capnhaptk':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $hoten = $_POST['hoten'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $matkhau = $_POST['matkhau'];
                $diachi = $_POST['diachi'];
                $id = $_POST['id'];
                edit_taikhoan($id, $hoten, $email, $sdt, $matkhau, $diachi);
                $_SESSION['taikhoan'] = check_user($hoten, $matkhau);
            }
            include 'view/taikhoan/capnhap.php';
            break;
        case 'thoat':
            session_unset();
            include "view/taikhoan/login.php";
            break;
        case "productDentail":
            //code
            break;
        case "shop":
            // gán trước nếu không có đỡ lỗi dòng 30
            $iddm = 0;
            $loc = "";
            if (isset($_GET['iddm']) && $_GET['iddm'] > 0) {
                $iddm = $_GET['iddm'];
                $namedm = " In " . check_name_danhmuc($iddm);
            }
            // chức năng xắp xếp
            // if (isset($_GET['loc']) && $_GET['loc'] != "") {
            //     $loc = $_GET['loc'];
            // }
            // $kyw = "";
            // if (isset($_POST['kyw'])) {
            //     $kyw = $_POST['kyw'];
            // }
            $listsp = loadall_sanpham_thetich_chitiet($iddm);

            include_once "view/shop.php";
            break;
        
            break;
        case "category-list":
            $listsp = loadall_sanpham_thetich_chitiet("", "", "");

            include_once "view/category-list.php";
            break;
        case "product":
            if(isset($_POST['guibinhluan'])) {
                extract($_POST);
                insert_binhluan($id_sanpham, $noidung);
            }
            if(isset($_GET['id_sanpham']) && ($_GET['id_sanpham'] > 0)) {
                $id_sanpham = $_GET['id_sanpham'];
                $onesp = loadone_sanpham($id_sanpham);
    
                $binhluan = loadall_binhluan($_GET['id_sanpham']);
                $sp_tt = loadall_sanpham_thetich_view($id_sanpham);
                $thetich_in_sanpham = load_thetich_in_sanpham($id_sanpham);
                $danhmuc = check_danhmuc($id_sanpham);
                $name_dm = $danhmuc['tendm'];
                $iddm = $danhmuc['id'];
                $hinhanh = hinhanh_sanpham($id_sanpham);
                $splq = cac_sp_lienquan($iddm, $id_sanpham);
            }
            //them vào giỏ hàng
            if(isset($_POST['themgiohang'])) {
                extract($_POST);
                //kiểm tra người dùng đăng nhập hay chưa nếu chưua thì yêu cầu đăng nhập 
                // if(isset($taikhoan['id'])) {
                    // check xem sản phẩm này đã có trong giỏ hàng chưa , nếu đã có thì + thêm số lượng
                    $check = check_giohang($id_sanpham_thetich, $taikhoan['id']);
                    $tongkho = check_tongkho($id_sanpham_thetich);
                    if(is_array($check)) {
                        $soluong += $check['soluong'];
                        if($soluong >= $tongkho) {
                            $soluong = $tongkho;
                        }
                        update_giohang($soluong, $check['id']);
                    } else {
                        insert_giohang($id_sanpham_thetich, $soluong, $taikhoan['id']);
                    }
                    setcookie("thongbaotgh", "Bạn đã thêm vào giỏ hàng thành công", time() + 10);
                    header("Location:index.php?act=product&id_sanpham=$id_sanpham");
                // } else {
                //     include "view/yeucaudangnhap.php";
                // }
            }
            //lấy số lượng và id-sanpham-bienthe người dùng muốn đặt hàng ngay
            // if(isset($_POST['dathangngay'])) {
            //     $soluong = $_POST['soluong'];
            //     $id_sanpham_thetich = $_POST['id_sanpham_thetich'];
            //     header("Location:index.php?act=thanhtoan&id_sanpham_thetich=$id_sanpham_thetich&soluong=$soluong");
            // }
            include_once "view/product.php";
            break;
            case "giohang":
                if(isset($taikhoan['id'])) {
                    $listgiohang = loadall_giohang($taikhoan['id']);
                    include_once "view/giohang.php";
                } else {
                    include "view/yeucaudangnhap.php";
                }
                break;
                
        case "checkout":
            include_once "view/checkout.php";
            break;
        case "donhangcuaban":
            include_once "view/donhangcuaban.php";
            break;
            case 'chitietdonhang':
                include_once 'view/chitietdonhang.php';
                break;
        case "blog":
            include_once "view/blog.php";
            break;
        case "gioithieu":
            include_once "view/gioithieu.php";
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
