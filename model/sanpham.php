<?php
    function insert_sanpham($tensp,$hinh,$mota,$madm){
        $sql="insert into sanpham(tensp,hinh,mota,madm) values('$tensp','$hinh','$mota','$madm')";
        pdo_execute($sql);
    }
    // function loadall_sanpham(){
    //     $sql = "select sp.*, dm.tendm from sanpham as sp
    //     inner join danhmuc as dm on dm.madm=sp.madm";
    //     $sql.=" order by masp desc";
    //     $tintuc = pdo_query($sql);
    //     return $tintuc;
    // }
    function loadall_sanpham($kyw="",$madm =0){
        $sql = "SELECT sanpham.masp,sanpham_thetich.mabt as id_bienthe ,sanpham.tensp as tensp ,danhmuc.tendm as tendm,hinh,soluong ,gia,mota,sum(soluong) as tongsoluong ,max(gia) as giamax,min(gia) as giamin from sanpham
        left join sanpham_thetich on sanpham.masp = sanpham_thetich.masp    
        left join thetich on thetich.matt = sanpham_thetich.matt
        join danhmuc on sanpham.madm = danhmuc.madm ";
        if($madm>0){
            $sql .=" where sanpham.madm=$madm";
        }
        if($kyw!=""){
           $sql .= " where sanpham.tensp like '%$kyw%'";
        }
        $sql .= " group by sanpham.masp order by sanpham.masp asc ";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    // function loadall_sanphammoi($kyw="",$madm=0){
    //     $sql = "select sp.*, dm.tendm from sanpham as sp
    //     inner join danhmuc as dm on dm.madm=sp.madm";
    //     if($kyw!=""){
    //         $sql.=" and sp.tensp like '%".$kyw."%'";
    //     }
    //     if($madm > 0){
    //         $sql.=" and dm.madm = '".$madm."'";
    //     }
    //     $sql.=" order by masp desc";
    //     $listsanpham = pdo_query($sql);
    //     return $listsanpham;
    // }
    function delete_sanpham($masp){
        $sql="delete from sanpham where masp=".$masp;
        pdo_execute($sql);
    }   
    function loadone_sanpham($masp){
        $sql="select * from sanpham where masp=" .$masp;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function update_sanpham($masp,$tensp,$hinh,$mota,$madm){
        if($hinh!="")
        $sql = "update sanpham set madm ='".$madm."', tensp ='".$tensp."',mota ='".$mota."',hinh ='".$hinh."' where masp=" .$masp;
        else 
        $sql = "update sanpham set madm ='".$madm."', tensp ='".$tensp."',mota ='".$mota."' where masp=" .$masp;
        pdo_execute($sql);
    }
    function check_thetich_in_sanpham($masp){
        $sql = "select count(*) tongthetich from sanpham_thetich
        where masp =$masp";
        $sp = pdo_query_one($sql);
        return $sp['tongthetich'];
    }
    
   
?>