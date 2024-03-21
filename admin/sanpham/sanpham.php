<section class="tieude">
    <h3>Danh sách sản phẩm</h3>
    <div class="lich">
        <div id="days"></div>
        <div id="dates"></div>
        <div class="gach">-</div>
        <div id="times"></div>
    </div>
    <script>
        window.onload = setInterval(clock, 1000);

        function clock() {
            var d = new Date();
            var date = d.getDate();
            var month = d.getMonth();
            var montharr = ["/1", "/2", "/3", "/4", "/5", "/6", "/7", "/8", "/9", "/10", "/11", "/12"];
            month = montharr[month];
            var year = d.getFullYear();
            var day = d.getDay();
            var dayarr = ["Chủ Nhật, ", "Thứ 2, ", "Thứ 3, ", "Thứ 4, ", "Thứ 5, ", "Thứ 6, ", "Thứ 7, "];
            day = dayarr[day];
            var hour = d.getHours();
            var min = d.getMinutes();
            var sec = d.getSeconds();
            document.getElementById("days").innerHTML = day + " ";
            document.getElementById("dates").innerHTML = date + "" + month + "/" + year;
            document.getElementById("times").innerHTML = hour + " giờ " + min + " phút " + sec + " giây";
        }
    </script>
</section>
<section class="danhmuc">
    <section class="themmoi"><a href="?act=taosp"><i class="fa-solid fa-plus"></i> Tạo mới sản phẩm</a></section>
    <section class="danhsach">
        <section class="from">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="text" name="" placeholder="Tìm Kiếm Tên Sản Phẩm ...">
                <select name="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value=' . $madm . '>' . $tendm . '</option>';
                    }
                    ?>
                </select>
                <input type="submit" name="" value="OK">
            </form>
        </section>
        <form action="" method="post">
            <table>
                <tr>
                    <th>#</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Hình Ảnh</th>
                    <th>Số Lượng</th>
                    <th>Giá Tiền</th>
                    <th>Danh Mục</th>
                    <th>Chức Năng</th>
                </tr>
                <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&masp=" . $masp;
                    $xoasp = "index.php?act=xoasp&masp=" . $masp;
                    $thongbaoxoa= "'"."Bạn có muốn xóa: ".$tensp."'";
                    $hinhpath = "../upload/" . $hinh;
                    if (is_file($hinhpath)) {
                        $hinh = "<img src='" . $hinhpath . "' height = '80'>";
                    } else {
                        $hinh = "no photo";
                    }
                    echo ' <tr>
                    <td>'.$masp.'</td>
                    <td>'.$tensp.'</td>
                    <td><img src="'.$hinh.'" style="width: 100px; height: 100px;" alt=""></td>
                    <td>'.$soluong.'</td>
                    <td>'.$gia.' đ</td>
                    <td>'.$tendm.'</td>
                    <td><a href="'.$suasp.'"><i class="fa-solid fa-pen-to-square" style="background: rgb(241, 241, 143);color: rgb(110, 110, 6);font-weight: 700;"></i></a><a href="?act=bienthe"><i class="fa-regular fa-eye"></i></a><a href="'.$xoasp.'" onclick = "return confirm('.$thongbaoxoa.')"><i class="fa-regular fa-trash-can" style="background: rgb(237, 144, 144);color: rgb(125, 4, 4); font-weight: 700;"></i></a></td>
                </tr>';
                }
                ?>
                <!-- <tr>
                    <td>1</td>
                    <td>Dior nữ</td>
                    <td><img src="img/adidas3.png" style="width: 100px; height: 100px;" alt=""></td>
                    <td>50</td>
                    <td>12.500.000 đ</td>
                    <td>channer</td>
                    <td><a href="?act=suasp"><i class="fa-solid fa-pen-to-square" style="background: rgb(241, 241, 143);color: rgb(110, 110, 6);font-weight: 700;"></i></a><a href="?act=bienthe"><i class="fa-regular fa-eye"></i></a><a href="" onclick="return confirm('Bạn Có muốn Xóa không ?')"><i class="fa-regular fa-trash-can" style="background: rgb(237, 144, 144);color: rgb(125, 4, 4); font-weight: 700;"></i></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>channer hãng cao cấp</td>
                    <td><img src="img/gucci2.png" style="width: 100px; height: 100px;" alt=""></td>
                    <td>50</td>
                    <td>13.500.000 đ</td>
                    <td>channer</td>
                    <td><a href="?act=suasp"><i class="fa-solid fa-pen-to-square" style="background: rgb(241, 241, 143);color: rgb(110, 110, 6);font-weight: 700;"></i></a><a href="?act=bienthe"><i class="fa-regular fa-eye"></i></a><a href="" onclick="return confirm('Bạn Có muốn Xóa không ?')"><i class="fa-regular fa-trash-can" style="background: rgb(237, 144, 144);color: rgb(125, 4, 4); font-weight: 700;"></i></a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Dior nam </td>
                    <td><img src="img/nike3.png" style="width: 100px; height: 100px;" alt=""></td>
                    <td>50</td>
                    <td>16.000.000 đ</td>
                    <td>channer</td>
                    <td><a href="?act=suasp"><i class="fa-solid fa-pen-to-square" style="background: rgb(241, 241, 143);color: rgb(110, 110, 6);font-weight: 700;"></i></a><a href="?act=bienthe"><i class="fa-regular fa-eye"></i></a><a href="" onclick="return confirm('Bạn Có muốn Xóa không ?')"><i class="fa-regular fa-trash-can" style="background: rgb(237, 144, 144);color: rgb(125, 4, 4); font-weight: 700;"></i></a></td>
                </tr> -->
            </table>
        </form>
    </section><br>
</section>