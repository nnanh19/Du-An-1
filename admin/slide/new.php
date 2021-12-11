  
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Quản lý slide</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="alert alert-info">
        <h3>Thêm mới slide</h3>
    </div>
    <div class="alert">
    <?php
    if(isset($MESSAGE)){
        echo $MESSAGE;
        unset($MESSAGE);
    }
    ?>
    </div>
    <div class="card-body">
        <form action="index.php?act=them-moi-slide" method="post" enctype="multipart/form-data">
           <div class="form-group col-sm-4">
               <label for="">Tiêu đề</label>
               <input type="text" class="form-control" name="tieu_de">
           </div>
           <div class="form-group col-sm-4">
               <label for="">Nội dung</label>
               <input type="text" class="form-control" name="noi_dung">
           </div>
           <div class="form-group col-sm-4">
               <label for="">Đường dẫn</label>
               <input type="text" class="form-control" name="duong_dan">
           </div>
           <div class="form-group col-sm-4">
               <label for="">Hình ảnh</label>
               <input type="file" class="form-control" name="hinh_anh">
           </div>
           <div class="form-group col-sm-4">
               <button class="btn-default" name="btn_insert">Thêm mới</button>
               <button class="btn-default"><a href="index.php?act=dsslide">Danh sách</a></button>
           </div>
        </form>
    </div>
</div
