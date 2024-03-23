<?php
    function insert_sanpham($tensp,$hinh,$soluong,$gia,$mota,$madm){
        $sql="insert into sanpham(tensp,hinh,soluong,gia,mota,madm) values('$tensp','$hinh','$soluong','$gia','$mota','$madm')";
        pdo_execute($sql);
    }
    function loadall_sanpham(){
        $sql = "select sp.*, dm.tendm from sanpham as sp
        inner join danhmuc as dm on dm.madm=sp.madm";
        $sql.=" order by masp desc";
        $tintuc = pdo_query($sql);
        return $tintuc;
    }
    function loadall_sanphammoi($kyw="",$madm=0){
        $sql = "select * from sanpham where masp "; 
        if($kyw!=""){
            $sql.=" and tensp like '%".$kyw."%'";
        }
        if($madm > 0){
            $sql.=" and madm = '".$madm."'";
        }
        $sql.=" order by masp desc";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function delete_sanpham($masp){
        $sql="delete from sanpham where masp=".$masp;
        pdo_execute($sql);
    }   
    function loadone_sanpham($masp){
        $sql="select * from sanpham where masp=" .$masp;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function update_sanpham($masp,$tensp,$hinh,$soluong,$gia,$mota,$madm){
        if($hinh!="")
        $sql = "update sanpham set madm ='".$madm."', tensp ='".$tensp."',gia ='".$gia."',mota ='".$mota."',soluong ='".$soluong."',hinh ='".$hinh."' where masp=" .$masp;
        else 
        $sql = "update sanpham set madm ='".$madm."', tensp ='".$tensp."',gia ='".$gia."',mota ='".$mota."',soluong ='".$soluong."' where masp=" .$masp;
        pdo_execute($sql);
    }
   
    
   
?>