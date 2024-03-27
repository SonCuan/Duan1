<?php
    function insert_sanpham($tensp,$hinh,$mota,$id_danhmuc){
        $sql="insert into sanpham(tensp,hinh,mota,id_danhmuc) values('$tensp','$hinh','$mota','$id_danhmuc')";
        pdo_execute($sql);
    }
    // function loadall_sanpham(){
    //     $sql = "select sp.*, dm.tendm from sanpham as sp
    //     inner join danhmuc as dm on dm.madm=sp.madm";
    //     $sql.=" order by masp desc";
    //     $tintuc = pdo_query($sql);
    //     return $tintuc;
    // }
    function loadall_sanpham($kyw,$iddm =0){
        $sql = "SELECT sanpham.id,sanpham_thetich.id as id_bienthe ,sanpham.tensp as tensp ,danhmuc.tendm as tendm,hinh,mota,soluong ,gia,sum(soluong) as tongsoluong ,max(gia) as giamax,min(gia) as giamin from sanpham
        left join sanpham_thetich on sanpham.id = sanpham_thetich.id_sanpham  
        left join thetich on thetich.id = sanpham_thetich.id_thetich
        join danhmuc on sanpham.id_danhmuc = danhmuc.id ";
        if($iddm>0){
            $sql .=" where id_danhmuc=$iddm";
        }
        if($kyw!=""){
           $sql .= " where sanpham.tensp like '%$kyw%'";
        }
        $sql .= " group by sanpham.id order by sanpham.id asc ";
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
    function update_sanpham($id,$tensp,$hinh,$mota,$id_danhmuc	){
        if($hinh!="")
        $sql = "update sanpham set id_danhmuc	 ='".$id_danhmuc	."', tensp ='".$tensp."',mota ='".$mota."',hinh ='".$hinh."' where id=" .$id;
        else 
        $sql = "update sanpham set id_danhmuc	 ='".$id_danhmuc	."', tensp ='".$tensp."',mota ='".$mota."' wherewhere id=" .$id;
        pdo_execute($sql);
    }
    function check_thetich_in_sanpham($id){
        $sql = "select count(*) tongthetich from sanpham_thetich
        where id =$id";
        $sp = pdo_query_one($sql);
        return $sp['tongthetich'];
    }
    
   
?>