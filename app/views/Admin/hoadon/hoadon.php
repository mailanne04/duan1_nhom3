<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Danh sách hóa đơn</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="AdminController.php?act=home">Home</a></li>
            <li class="breadcrumb-item active">Danh sách hóa đơn</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thông tin</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Khách hàng</th>
                    <th>Địa chỉ</th>
                    <th>Ngày đặt</th>
                    <th>Sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Thành tiền</th>
                    <th>Chức năng</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Triệu</td>
                    <td>Hà Lội</td>
                    <td>15/11/2023</td>
                    <td>Áo</td>
                    <td>5</td>
                    <td>20.000 VNĐ</td>
                    <td>100.000 VNĐ</td>
                    <td>
                    <a href="AdminController.php?act=cthd"><button type="button" class="btn btn-outline-primary">Xem
                          chi tiết</button></a>
                      <a href="#"><button type="button" class="btn btn-outline-danger">Sửa</button></a>
                      <a href="#"><button type="button" class="btn btn-outline-dark">Xóa</button></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>