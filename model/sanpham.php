<?php
    function insert_sanpham($tensp,$hinh,$soluong,$gia,$mota,$madm){
        $sql="insert into sanpham(tensp,hinh,soluong,gia,mota,madm) values('$tensp','$hinh','$soluong','$gia','$mota','$madm')";
        pdo_execute($sql);
    }
    function loadall_sanpham(){
        $sql = "select sp.*, dm.tendm from sanpham as sp
        inner join danhmuc as dm on dm.madm=sp.madm order by masp desc";
        $tintuc = pdo_query($sql);
        return $tintuc;
    }
    function delete_sanpham($masp){
        $sql="delete from sanpham where masp=".$masp;
        pdo_execute($sql);
    }   
   
?>