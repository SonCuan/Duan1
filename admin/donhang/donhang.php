<section class="tieude">
    <h3>Đơn hàng</h3>
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
    <br>
    <section class="danhsach">
        <section class="from">
            <form action="index.php?act=homedonhang" method="post" enctype="multipart/form-data">
                <select name="#" class="donhang">
                    <option value="0" selected>Tất cả</option>
                </select>
                <input type="submit" name="" value="OK" class="donhang">
            </form>
        </section>
        <form action="" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <th>#</th>
                    <th>Người nhận</th>
                    <th>Phương thức thanh toán</th>
                    <th style="width: 15%;">Trạng thái</th>
                    <th>Ngày đặt</th>
                    <th>Tổng Tiền</th>
                    <th>Chức Năng</th>
                </tr>

                <tr>
                    <td>1</td>
                    <td>Hoan thịnh</td>
                    <td>Chuyển tiền mặt</td>
                    <td>
                        <div class="trangthai" style="padding: 10px 15px; background: rgb(134, 244, 134); border-radius:5px;color:rgb(13, 93, 13);font-weight: 600; ">
                            Đã hoàn thành
                        </div>
                    </td>
                    <td>12/2/2024</td>
                    <td>12.500.000 đ</td>
                    <td><a href="?act=suasp"><i class="fa-solid fa-pen-to-square" style="background: rgb(241, 241, 143);color: rgb(110, 110, 6);font-weight: 700;"></i></a><a href="?act=bienthe"><i class="fa-regular fa-eye"></i></a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Hoan thịnh</td>
                    <td>Chuyển tiền mặt</td>
                    <td>
                        <div class="trangthai" style="padding: 10px 15px; background: rgb(134, 244, 134); border-radius:5px;color:rgb(13, 93, 13);font-weight: 600; ">
                            Đã hoàn thành
                        </div>
                    </td>
                    <td>12/2/2024</td>
                    <td>12.500.000 đ</td>
                    <td><a href="?act=suasp"><i class="fa-solid fa-pen-to-square" style="background: rgb(241, 241, 143);color: rgb(110, 110, 6);font-weight: 700;"></i></a><a href="?act=bienthe"><i class="fa-regular fa-eye"></i></a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Hoan thịnh</td>
                    <td>Chuyển tiền mặt</td>
                    <td>
                        <div class="trangthai" style="padding: 10px 15px; background: rgb(134, 244, 134); border-radius:5px;color:rgb(13, 93, 13);font-weight: 600; ">
                            Đã hoàn thành
                        </div>
                    </td>
                    <td>12/2/2024</td>
                    <td>12.500.000 đ</td>
                    <td><a href="?act=suasp"><i class="fa-solid fa-pen-to-square" style="background: rgb(241, 241, 143);color: rgb(110, 110, 6);font-weight: 700;"></i></a><a href="?act=bienthe"><i class="fa-regular fa-eye"></i></a></td>
                </tr>
            </table>
        </form>
    </section><br>
</section>