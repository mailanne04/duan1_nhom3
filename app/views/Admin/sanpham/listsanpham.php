<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Danh sách sản phẩm</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="AdminController.php?act=home">Home</a></li>
            <li class="breadcrumb-item active">Danh sách sản phẩm</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
    <div class="card-footer">
      <a href="AdminController.php?act=addsp">

        <button class="btn btn-primary">Tạo sản phẩm mới</button>
      </a>

    </div>
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
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh</th>
                    <th>Số lượng</th>
                    <th>Tình trạng</th>
                    <th>Giá tiền</th>
                    <th>Danh mục</th>
                    <th>Chức năng</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>123456</td>
                    <td>Áo dài tay</td>
                    <td><img src="../../public/img/photo1.png" alt="" width="150px"></td>
                    <td>40</td>
                    <td>Còn hàng</td>
                    <td>459.000đ</td>
                    <td>Áo</td>
                    <td>
                      <a href="AdminController.php?act=ctsp"><button type="button" class="btn btn-outline-primary">Xem
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