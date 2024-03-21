<?php
    function insert_danhmuc($tendm,$noidungdm){
        $sql="insert into danhmuc(tendm,noidungdm) valuse('$tendm','$noidungdm')";
        pdo_execute($sql);
    }
    function delete_danhmuc($madm){
        $sql="delete from danhmuc where madm=".$madm;
        pdo_execute($sql);
    }   
    function loadall_danhmuc(){
        $sql = "select * from danhmuc order by madm desc";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }
?>