<?php 
    function loadall_thetich(){
        $sql = "SELECT * from thetich where 1";
        $listthetich = pdo_query($sql);
        return $listthetich;
    }
    function check_thetich($masp){
       $sql = "SELECT matt from sanpham_thetich
        where masp_sanpham = $masp";
        $check_thetich = pdo_query($sql);
        return $check_thetich;
    }
?>