<?php
include "../model/pdo.php";
include "../model/danhmuc.php";


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
                update_danhmuc($madm,$tendm,$noidungdm);
                $thongbao = "cap nhat thanh cong";
            }
            $sql = "select * from danhmuc order by madm desc";
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/danhmuc.php";
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
        case 'sanpham':
            include "sanpham/sanpham.php";
            break;
        case 'suasp':
            include "sanpham/suasp.php";
            break;
        case 'taosp':
            include "sanpham/taosp.php";
            break;
        case 'bienthe':
            include "bienthe/bienthe.php";
            break;
        case 'addbienthe':
            include "bienthe/add.php";
        default:
            # code...
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
