<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Thêm danh mục</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm Mới Loại Hàng</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="index.php?act=adddanhmuc" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mã Loại</label>
                    <input type="text" name="maloai" disabled>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên Loại</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="ten_loai"
                        placeholder="Nhập tên loại">
                </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <input type="submit" name="themmoi" class="btn btn-primary" value="THÊM MỚI">
                <input type="reset" class="btn btn-primary" value="NHẬP LẠI">
                <a href="index.php?act=listdanhmuc"><input type="button" class="btn btn-primary" value="DANH SÁCH"></a>
            </div>
            <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
        </form>
    </div>
</div>