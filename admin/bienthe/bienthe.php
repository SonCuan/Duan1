<section class="tieude">

    <h4><a href="?act=homesanpham" style="text-decoration: none; color: #000;">Danh sách sản phẩm</a> / Biến thể sản phẩm</h4>
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
<section class="themmoi"><a href="?act=addbienthe"><i class="fa-solid fa-plus"></i> thêm biến thể sản phẩm</a></section>
<section class="danhsach">
    <form action="" method="post">
        <table>
            <tr>
                <th>#</th>
                <th>Thể Tích</th>
                <th>số Lượng</th>
                <th>Tình trạng</th>
                <th>Giá tiền</th>
                <th>Trạng thái</th>
                <th>Chức Năng</th>

            </tr>
            <tr>
                <td>1</td>
                <td>50ml</td>
                <td>56</td>
                <td>
                    <div class="trangthai" style="padding: 10px 15px; background: rgb(134, 244, 134); border-radius:5px;color:rgb(13, 93, 13);font-weight: 600; ">
                        Còn hàng
                    </div>
                </td>
                <td>5000</td>
                <td>hiển thị</td>
                <td><a href=""><i class="fa-regular fa-trash-can" style="background: rgb(237, 144, 144);color: rgb(125, 4, 4); font-weight: 700;"></i></a><a href=""><i class="fa-solid fa-pen-to-square" style="background: rgb(241, 241, 143);color: rgb(110, 110, 6);font-weight: 700;"></i></a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>50ml</td>
                <td>56</td>
                <td>
                    <div class="trangthai" style="padding: 10px 15px; background: rgb(134, 244, 134); border-radius:5px;color:rgb(13, 93, 13);font-weight: 600; ">
                        Còn hàng
                    </div>
                </td>
                <td>5000</td>
                <td>hiển thị</td>
                <td><a href=""><i class="fa-regular fa-trash-can" style="background: rgb(237, 144, 144);color: rgb(125, 4, 4); font-weight: 700;"></i></a><a href=""><i class="fa-solid fa-pen-to-square" style="background: rgb(241, 241, 143);color: rgb(110, 110, 6);font-weight: 700;"></i></a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>50ml</td>
                <td>56</td>
                <td>
                    <div class="trangthai" style="padding: 10px 15px; background: rgb(134, 244, 134); border-radius:5px;color:rgb(13, 93, 13);font-weight: 600; ">
                        Còn hàng
                    </div>
                </td>
                <td>5000</td>
                <td>hiển thị</td>
                <td><a href=""><i class="fa-regular fa-trash-can" style="background: rgb(237, 144, 144);color: rgb(125, 4, 4); font-weight: 700;"></i></a><a href=""><i class="fa-solid fa-pen-to-square" style="background: rgb(241, 241, 143);color: rgb(110, 110, 6);font-weight: 700;"></i></a></td>
            </tr>
        </table>
        <div class="nut">
            <a href="?act=homesanpham"><input style="margin: 10px 20px;" type="button" value="Danh Sách sản phẩm" name="" id=""></a>
        </div>
    </form>
</section><br></section>
</section>