<?php
session_start();
if (isset($_SESSION['taikhoan']) && ($_SESSION['taikhoan']['vaitro'] == 1)) {
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/thongke.php";
    include "../model/taikhoan.php";




    include "header.php";


    if (isset($_GET['act']) && ($_GET['act'] != "")) {
        switch ($_GET['act']) {
            case 'homedanhmuc':
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/danhmuc.php";
                break;
                /* controller danh mục */

            case 'xoadm':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/danhmuc.php";
                break;
            case 'taodm':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $tendm = $_POST['tendm'];
                    $noidungdm = $_POST['noidungdm'];
                    insert_danhmuc($tendm, $noidungdm);
                    $thongbao = "Them thanh cong";
                }
                include "danhmuc/taodm.php";
                break;
            case 'suadm':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $sql = "select * from danhmuc where id=" . $_GET['id'];
                    $dm = pdo_query_one($sql);
                }
                include "danhmuc/update.php";
                break;
            case 'updatedm':
                if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                    $tendm = $_POST['tendm'];
                    $noidungdm = $_POST['noidungdm'];
                    $id = $_POST['id'];
                    update_danhmuc($id, $tendm, $noidungdm);
                    $thongbao = "cap nhat thanh cong";
                }
                $sql = "select * from danhmuc order by id desc";
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/danhmuc.php";
                break;

                /* controller sản phẩm */

            case 'homesanpham':
                $listdanhmuc = loadall_danhmuc();
                $kyw = "";
                $id = 0;
                if (isset($_POST['listok']) && ($_POST['listok'])) {
                    $kyw = $_POST['kyw'];
                    $id = $_POST['id'];
                }
                $listsanpham = loadall_sanpham($kyw, $id);
                include "sanpham/sanpham.php";
                break;
            case 'taosp':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $id = $_POST['id'];
                    $tensp = $_POST['tensp'];
                    $mota = $_POST['mota'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    insert_sanpham($tensp,$hinh,$mota,$id);
                    $thongbao = "Them thanh cong";
                }
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/taosp.php";
                break;
            case 'xoasp':
                if (isset($_GET['masp']) && ($_GET['masp'] > 0)) {
                    delete_sanpham($_GET['masp']);
                }
                $listsanpham = loadall_sanpham("","");
                include "sanpham/sanpham.php";
                break;
            case 'suasp':
                if (isset($_GET['masp']) && ($_GET['masp'] > 0)) {
                    $sanpham = loadone_sanpham($_GET['masp']);
                }
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/update.php";
                break;
            case 'updatesp':
                if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                    $madm = $_POST['madm'];
                    $masp = $_POST['masp'];
                    $tensp = $_POST['tensp'];
                    $mota = $_POST['mota'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    update_sanpham($masp, $tensp, $hinh, $mota, $madm);
                    $thongbao = "cap nhat thanh cong";
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham("","");
                include "sanpham/sanpham.php";
                break;

            case 'bienthe':
                include "bienthe/bienthe.php";
                break;
            case 'homedonhang':
                include "donhang//donhang.php";
                break;
            case 'addbienthe':
                include "bienthe/add.php";
                break;
            case 'suabt':
                include "bienthe/add.php";
                break;
            case 'bl':
                include "binhluan/binhluan.php";
                break;
                /* controller tài khoản */

            case 'hometaikhoan':
                $kyw = "";
                $vaitro = "";
                if (isset($_POST['listok']) && ($_POST['listok'])) {
                    $kyw = $_POST['kyw'];
                    $vaitro = $_POST['vaitro'];
                }
                $listtaikhoan = loadall_taikhoantk($kyw, $vaitro);
                include "taikhoan/taikhoan.php";
                break;
            case 'taotaikhoan':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $hoten = $_POST['hoten'];
                    $email = $_POST['email'];
                    $sdt = $_POST['sdt'];
                    $diachi = $_POST['diachi'];
                    $matkhau = $_POST['matkhau'];
                    $vaitro = $_POST['vaitro'];
                    insert_taikhoan_admin($hoten, $email, $sdt, $matkhau, $diachi, $vaitro);
                    $thongbao = "Them thanh cong";
                }
                $listtaikhoan = loadall_taikhoan();
                include "taikhoan/taotaikhoan.php";
                break;
            case 'xoatk':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_taikhoan($_GET['id']);
                }
                $listtaikhoan = loadall_taikhoan();
                include "taikhoan/taikhoan.php";
                break;
            case 'suatk':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $taikhoan = loadone_taikhoan($_GET['id']);
                }
                $listtaikhoan = loadall_taikhoan();
                include "taikhoan/update.php";
                break;
            case 'updatetk':
                if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                    $id = $_POST['id'];
                    $hoten = $_POST['hoten'];
                    $email = $_POST['email'];
                    $sdt = $_POST['sdt'];
                    $matkhau = $_POST['matkhau'];
                    $diachi = $_POST['diachi'];
                    $vaitro = $_POST['vaitro'];
                    // extract($taikhoan);
                    update_taikhoan($id, $hoten, $email, $sdt, $matkhau, $diachi, $vaitro);
                    $thongbao = 'Cập nhật tài khoản thành công';
                }
                $listtaikhoan = loadall_taikhoan();
                include "taikhoan/taikhoan.php";
                break;
            case "bieudothongke":
                $listthongke = thongke();
                // $rows = doanhthutheothang();
                include "thongke/bieudothongke.php";
                break;
            default:
                # code...
                break;
        }
    } else {
        include "home.php";
    }
    include "footer.php";
} else {
    echo '<div style="margin:120px 30%">
          <img src="da4242" alt="">
          <h1 style="font-size:170px;padding 0;margin:0;">504</h1>
          <h2>Bạn không có quyền truy cập trang web này</h2>
          <a href="../index.php">Quay lại tại đây</a>
      </div>';
}
