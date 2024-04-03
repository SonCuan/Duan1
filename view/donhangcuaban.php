<div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title text-center">
          <h2 class="title pb-4 text-dark text-capitalize">
            Đơn Hàng Của Bạn
          </h2>
        </div>
      </div>
      <div class="col-12">
        <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
          <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
          <li class="breadcrumb-item active" aria-current="page">
          Đơn hàng của bạn
          </li>
        </ol>
      </div>
    </div>
  </div>
</nav>
<section class="whish-list-section theme1 pt-80 pb-80">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="table-responsive">
          <table class="table">
            <thead class="thead-light">
              <tr>
                <th class="text-center" scope="col">#</th>
                <th class="text-center" scope="col">Người Nhận</th>
                <th class="text-center" scope="col">SĐT</th>
                <th class="text-center" scope="col">Phương Thức Thanh Toán</th>
                <th class="text-center" scope="col">Tổng Tiền</th>
                <th class="text-center" scope="col">Trạng Thái</th>
                <th class="text-center" scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
           
              <tr>
                <td class="text-center" scope="row">
                  1
                </td>
                <td class="text-center" scope="row">
                  chung
                </td>
                <td class="text-center" scope="row">
                  00000000
                </td>
                <td class="text-center" scope="row">
                  nhận
                </td>
                <td class="text-center" scope="row">
                  30000
                </td>
                <td class="text-center " scope="row">
                  hủy
                </td>
                <td class="text-center">
                  <a href="index.php?act=chitietdonhang&id_donhang=<?=$id??""?>" class="btn btn-dark btn--lg">Xem</a>
                </td>
              </tr>
              <style>
                .trangthai{
                  border-radius: 15px;
                  color:white;
                  padding: 1px 5px;
                  font-size:10px;
                }
              </style>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</section>
<!-- product tab end -->
