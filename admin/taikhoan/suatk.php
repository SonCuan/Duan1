<section class="tieude">
            <h4><a href="?act=taikhoan"  style="text-decoration: none; color: #000;">Danh sách tài khoản</a> / Cập nhập tài khoản</h4>
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
            <section class="them"> Cập nhập tài khoản</section>
            <section class="taotk">
                <form action="#" method="post">
                <div class="dm">
                   <p>Tên đăng nhập</p>  <br>
                    <input type="text" name="" id="" required placeholder="Nhập tên đăng nhập" style="background: white;">
                </div>
                <div class="dm">
                    <p>Email </p>  <br>
                    <input type="email" name="" id="" required placeholder="Nhập Email">
                </div>
                <div class="dm">
                    <p>Số điện thoại </p>  <br>
                    <input type="tel" name="" id="" required placeholder="Nhập số điện thoại">
                </div>
                <div class="dm">
                    <p>Mật khẩu </p>  <br>
                    <input type="password" name="" id="" required placeholder="Nhập mật khẩu">
                </div>
                <div class="dm">
                    <p>Địa chỉ </p>  <br>
                    <input type="text" name="" id="" required placeholder="Nhập địa chỉ">
                </div>
                <div class="dm cach">
                    <p>Vai trò </p>  <br>
                    <input type="radio" value="Admin" name="vaitro"> Admin <br><br>
                    <input type="radio" value="Người dùng" name="vaitro"> Người dùng
                </div>
                <div class="nut">
                    <input type="submit" name="" id="" value="Cập nhập">
                    <a href="index.php?act=taikhoan"><input type="button" value="Danh Sách" name="" id=""></a>
                </div>
                </form>
            </section><br>
        </section>