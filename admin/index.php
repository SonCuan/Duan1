<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/thongke.php";



include "header.php";


if (isset($_GET['act']) && ($_GET['act'] != "")) {
    switch ($_GET['act']) {
        case 'homedanhmuc':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/danhmuc.php";
            break;
        case 'xoadm':
            if (isset($_GET['madm']) && ($_GET['madm'] > 0)) {
                delete_danhmuc($_GET['madm']);
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
            if (isset($_GET['madm']) && ($_GET['madm'] > 0)) {
                $sql = "select * from danhmuc where madm=" . $_GET['madm'];
                $dm = pdo_query_one($sql);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $tendm = $_POST['tendm'];
                $noidungdm = $_POST['noidungdm'];
                $madm = $_POST['madm'];
                update_danhmuc($madm, $tendm, $noidungdm);
                $thongbao = "cap nhat thanh cong";
            }
            $sql = "select * from danhmuc order by madm desc";
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/danhmuc.php";
            break;

            /* controller sản phẩm */

        case 'homesanpham':
            $listdanhmuc = loadall_danhmuc();
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $madm = $_POST['madm'];
            } else {
                $kyw = '';
                $madm = 0;
            }
            $listsanpham = loadall_sanphammoi($kyw, $madm);
            include "sanpham/sanpham.php";
            break;
        case 'taosp':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $madm = $_POST['madm'];
                $tensp = $_POST['tensp'];
                $gia = $_POST['gia'];
                $soluong = $_POST['soluong'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                insert_sanpham($tensp, $hinh, $soluong, $gia, $mota, $madm);
                $thongbao = "Them thanh cong";
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/taosp.php";
            break;
        case 'xoasp':
            if (isset($_GET['masp']) && ($_GET['masp'] > 0)) {
                delete_sanpham($_GET['masp']);
            }
            $listsanpham = loadall_sanpham();
            include "sanpham/sanpham.php";
            break;
            include "sanpham/suasp.php";
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
                $soluong = $_POST['soluong'];
                $gia = $_POST['gia'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($masp, $tensp, $hinh, $soluong, $gia, $mota, $madm);
                $thongbao = "cap nhat thanh cong";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham();
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
        case 'taikhoan':
            include "taikhoan/taikhoan.php";
            break;
        case 'taotaikhoan':
            include "taikhoan/taotaikhoan.php";
            break;
        case 'suatk':
            include "taikhoan/suatk.php";
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
