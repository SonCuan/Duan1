<?php
include "../model/pdo.php";
include "../model/danhmuc.php";


include "header.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    switch ($_GET['act']) {
        case 'homedanhmuc':
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/danhmuc.php";
            break;  
        case 'xoadm':
            if (isset($_GET['madm']) && ($_GET['madm'] > 0)) {
                delete_danhmuc($_GET['madm']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/danhmuc.php";
            break;
            break;
        case 'taodm':

            include "danhmuc/taodm.php";
            break;
        case 'suadm':
            include "danhmuc/suadm.php";
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
        default:
            # code...
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
