<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Danh sách tài khoản</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="AdminController.php?act=home">Home</a></li>
                <li class="breadcrumb-item active">Danh sách tài khoản</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
        <div class="card-footer">
          <a href="AdminController.php?act=addtk">

            <button class="btn btn-primary">Thêm tài khoản</button>
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
                        <th>Thứ tự</th>
                        <th>Tên </th>
                        <th>Giới tính</th>
                        <th>Số điện thoại</th>
                        <th>Chức vụ</th>
                        <th>Trạng thái</th>
                        <th>Chức năng</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Triệu</td>
                        <td>Nam</td>
                        <td>098999999</td>
                        <td>Admin</td>
                        <td>Hoạt động</td>
                        <td>
                          <a href="AdminController.php?act=cttk"><button type="button" class="btn btn-outline-primary">Xem
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