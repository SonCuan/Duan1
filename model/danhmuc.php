<?php
    function insert_danhmuc($tendm,$noidungdm){
        $sql="insert into danhmuc(tendm,noidungdm) values('$tendm','$noidungdm')";
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
    function update_danhmuc($madm,$tendm,$noidungdm){
        $sql = "update danhmuc set tendm ='".$tendm."',noidungdm='".$noidungdm."' where madm=" .$madm;
        pdo_execute($sql);
    }
?>