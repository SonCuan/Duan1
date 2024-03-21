<section class="tieude">
            <h4><a href="?act=sanpham"  style="text-decoration: none; color: #000;">Danh sách sản phẩm</a> / Thêm mới sản phẩm</h4>
            <div class="lich">
                <div id="days"></div>
                <div id="dates"></div>
                <div class="gach">-</div>
                <div id="times"></div>
          </div>
          <script>
            window.onload = setInterval(clock,1000);
            function clock()
            {
            var d = new Date();
            var date = d.getDate();
            var month = d.getMonth();
            var montharr =["/1","/2","/3","/4","/5","/6","/7","/8","/9","/10","/11","/12"];
            month=montharr[month];
            var year = d.getFullYear();
            var day = d.getDay();
            var dayarr =["Chủ Nhật, ","Thứ 2, ","Thứ 3, ","Thứ 4, ","Thứ 5, ","Thứ 6, ","Thứ 7, "];
            day=dayarr[day];
            var hour =d.getHours();
            var min = d.getMinutes();
            var sec = d.getSeconds();
            document.getElementById("days").innerHTML=day+" ";
            document.getElementById("dates").innerHTML=date+""+month+"/"+year;
            document.getElementById("times").innerHTML=hour+" giờ "+min+" phút "+sec+" giây";
            }
            </script>
        </section>
        <section class="danhmuc">
            <section class="them"> Thêm mới sản phẩm</section>
            <section class="taotk">
                <form action="#" method="post">
                <div class="dm">
                   <p>Tên Sản Phẩm</p>  <br>
                    <input type="text" name="" id="" required placeholder="Nhập tên đăng nhập" style="background: white;">
                </div>
                
                <div class="dm">
                    <p>Số Lượng </p>  <br>
                    <input type="text" name="" id="" required placeholder="Nhập số điện thoại">
                </div>
                <div class="dm">
                    <p>Giá Tiền </p>  <br>
                    <input type="text" name="" id="" required placeholder="Nhập mật khẩu">
                </div>
                <div class="dm">
                    <p>Danh Mục </p>  <br>
                    <select style="width: 32%; height: 40px;font-size: 20px;line-height: 40px;text-align: center;border-radius: 3px;border:none;" name="" id="">
                        <option value="">Tất cả</option>
                        <option value="">Channer</option>
                        <option value="">Dior</option>
                        <option value="">men</option>
                    </select>
                </div>
                <div class="anh">
                    <p>Hình Ảnh </p>  <br>
                    <input type="file" name="" id="" required >
                </div>
               
                <div class="nut">
                    <input type="submit" name="" id="" value="Thêm mới">
                    <a href="?act=sanpham"><input type="button" value="Danh Sách" name="" id=""></a>
                </div>
                </form>
            </section><br>
        </section>