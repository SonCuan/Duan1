<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="section-title text-center">
        <h2 class="title pb-4 text-dark text-capitalize">
        Các Sản Phẩm Trong Giỏ Hàng
        </h2>
      </div>
    </div>
    <div class="col-12">
      <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
        <li class="breadcrumb-item active" aria-current="page">
         Giỏ Hàng
        </li>
      </ol>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="table-responsive">
      <?php 
              foreach($listgiohang as $giohang):
                extract($giohang);
             ?>
        <table class="table">
          <thead class="thead-light">
            <tr>
              <th class="text-center" scope="col">#</th>
              <th class="text-center" scope="col">Tên sản phẩm</th>
              <th class="text-center" scope="col">Hình ảnh</th>
              <th class="text-center" scope="col">Thể tích</th>
              <th class="text-center" scope="col">Tổng kho</th>
              <th class="text-center" scope="col">Giá tiền</th>
              <th class="text-center" scope="col">Số lượng</th>
              <th class="text-center" scope="col">Thành tiền</th>
              <th class="text-center" scope="col">Chức năng</th>
              <th class="text-center" scope="col">Thanh toán</th>
            </tr>
          </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox" name="id_giohang[]" class="checkbox" value="<?=$id?>" checked></td>
                    <td><?=$ten?></td>
                    <td>
                    <img src="upload/<?=$hinh?>" alt="img" />
                    </td>
                    <td><?=$thetich?></td>
                    <td><?=$conlai?></td>
                    <td><?=number_format($gia,0,",",".")."<u>đ</u>"?></td>
                    <td>
                    <input id="soluong_<?=$id?>" type="number" min="1" max="<?=$conlai?>" step="1" value="<?=$soluong?>" oninput="updateSoLuong(<?=$id?>,<?=$conlai?>)" />
                    </td>
                    <td> <?=number_format($gia*$soluong,0,",",".")."<u>đ</u>"?></td>
                    <td>
                    <a href="index.php?act=xoagiohang&id_giohang=<?=$id?>" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này chứ ?')">
                    <span class="trash"><i class="fas fa-trash-alt"></i> </span>
                    </a>
                    </td>
                    <td>
                    <a href="index.php?act=thanhtoan&id_giohang=<?=$id?>" class="btn btn-dark btn--lg">Đặt Hàng</a>
                    </td>

                </tr>
            </tbody>
        </table>
        <?php endforeach ?>

      </div>
    </div>
  </div>
</div>