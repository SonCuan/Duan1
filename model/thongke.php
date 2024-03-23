<?php
function thongke(){
    $sql = "SELECT danhmuc.tendm as tendm,count(sanpham.madm) as count_sp FROM sanpham INNER JOIN danhmuc ON sanpham.madm=danhmuc.madm GROUP BY sanpham.madm";
    return pdo_query($sql);
}

function doanhthutheothang()
{
    $sql = "SELECT 
        MONTH(ngaydat) AS thang, 
        YEAR(ngaydat) AS nam, 
        SUM(tongtien) AS tongDoanhThu
    FROM donhang 
    where id_trangthai=4
    GROUP BY thang, nam
    ORDER BY nam DESC, thang asC";
    return pdo_query($sql);
}
?>