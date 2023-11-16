<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tạo sản phẩm mới</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="AdminController.php?act=home">Home</a></li>
                        <li class="breadcrumb-item active">Thêm sản phẩm</li>
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
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="product-name">Tên sản phẩm</label>
                                    <input type="text" class="form-control" id="product-name"
                                        placeholder="Tối đa 35 ký tự">
                                </div>
                                <div class="form-group">
                                    <label for="product-size">Mã sản phẩm</label>
                                    <input type="text" class="form-control" id="product-name" placeholder="Mã sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="product-size">Giá bán</label>
                                    <input type="text" class="form-control" id="product-name"
                                        placeholder="Giá bán Việt Nam Đồng">
                                </div>
                                <div class="form-group">
                                    <label for="product-color">Số lượng</label>
                                    <input type="number" class="form-control" id="product-name"
                                        placeholder="Số lượng sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="product-color">Size : </label>
                                    <select id="product-size" name="product-size" class="form-control">
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                        <option value="XLL">XLL</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="product-color">Màu : </label>
                                    <select id="product-color" name="product-color" class="form-control">
                                        <option value="red">Đỏ</option>
                                        <option value="black">Đen</option>
                                        <option value="White">Trắng</option>
                                        <option value="grey">Xám</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Ảnh hồ sơ</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="product-join">Ngày nhập</label>
                                    <input type="date" class="form-control" id="product-join"
                                        placeholder="Ngày nhập vào">
                                </div>
                                <div class="form-group">
                                    <label for="product-status">Tình trạng</label>
                                    <select name="status" id="product-status" class="form-control">
                                        <option value="on">Còn</option>
                                        <option value="off">Hết</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="product-describe">Mô tả</label>
                                    <textarea rows="5" class="form-control"
                                        placeholder="Nội dung không được quá 255 chữ."></textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
                            </div>
                            <!-- /.card-body -->
                        </form>
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