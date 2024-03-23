<?php
function loadall_taikhoantk($kyw,$vaitro)
{
    $sql = "SELECT * FROM taikhoan";
    if($kyw!=""){
        $sql .= " Where hoten like '%$kyw%'";
    }
    if($vaitro!=""){
        $sql .=" Where vaitro =$vaitro";
    }
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function loadall_taikhoan()
{
    $sql = "SELECT * FROM taikhoan";
    
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function insert_taikhoan_admin($hoten,$email,$sdt,$matkhau,$diachi,$vaitro){
    $sql = "INSERT INTO taikhoan(hoten,email,sdt,matkhau,diachi,vaitro) VALUES('$hoten','$email','$sdt','$matkhau','$diachi','$vaitro') ";
    pdo_execute($sql);
}
function delete_taikhoan($mand){
    $sql = "delete from taikhoan where mand=".$mand;
    pdo_execute($sql);
}
function loadone_taikhoan($mand){
    $sql="select * from taikhoan where mand=" .$mand;
    $tk= pdo_query_one($sql);
    return $tk;
}
function update_taikhoan($mand, $hoten, $email, $sdt, $matkhau, $diachi, $vaitro)
{
    $sql = "update taikhoan set hoten ='".$hoten."',email='".$email."',sdt='".$sdt."',matkhau='".$matkhau."',diachi='".$diachi."',vaitro='".$vaitro."' where mand=" .$mand;

    pdo_execute($sql);
}
?>