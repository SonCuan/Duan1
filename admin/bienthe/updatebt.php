<section class="tieude">
            <h4><a href="#"  style="text-decoration: none; color: #000;">Danh sách biến thể</a> / Cập nhập biến thể</h4>
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
            <section class="them"> Cập nhập biến thể</section>
            <section class="taodm">
                <form action="#" method="post">
                    <div class="css">
                <div class="dm">
                   <p>Tên sản phẩm</p>  <br>
                    <input type="text" name="" id="" disabled style="background: white;">
                </div>
                <div class="dm">
                    <p>Thể tích </p>  <br>
                    <input type="text" name="" id="" required placeholder="Nhập Tên Danh Mục">
                </div>
                <div class="dm">
                    <p>Giá</p>  <br>
                    <input type="text"  name="" id="" required placeholder="Nhập Tên Danh Mục">
                </div>
                <div class="dm">
                    <p>Số lượng</p>  <br>
                    <input type="text" name="" id="" required placeholder="Nhập Tên Danh Mục">
                </div></div>
                <div class="nut">
                    <input type="submit" name="" id="" value="Cập nhập">
                    <a href="?act=bienthe"><input type="button" value="Danh Sách" name="" id=""></a>
                </div>
                </form>
            </section><br>
        </section>