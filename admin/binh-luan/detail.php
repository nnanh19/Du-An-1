
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Chi tiết bình luận</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="alert alert-info">
        <h3>Tổng hợp bình luận</h3>
    </div>
    <div class="card-body" align="right">
    
        <form action="index.php" method="post" class="form">
            <table class="table table-bordered table-hover"> 
                    <thead class="alert-info">
                     <tr>
                        <th>Mã bình luận</th>
                        <th>Nội dung</th>
                        <th>Ngày bình luận</th>
                        <th>Người bình luận</th>
                        <th>Phản hồi</th>
                        <th>Chức năng</th>
                     </tr>
                    </thead>
                <tbody>
                <?php
          
                    foreach ($items as $item) {
                        extract($item);
                    ?>
                    <tr>

                        <td><input type="checkbox" name="ma_bl[]" value="<?=$ma_bl?>" id=""><?=$ma_bl?></td>
                        <td><?=$noi_dung?></td>
                        <td><?=$ngay_lap?></td>
                        <td><?=$ma_kh?></td>
                        <td>
                        <form action="index.php?act=phan-hoi-binh-luan&ma_bl=<?=$ma_bl?>" method="post" class="form-reppy">
                            <input type="text" name="phan_hoi" id="" class="form-control" placeholder="Phản hồi">
                            <input type="submit" name="" id="" class="btn-secondary col-md-3">
                        </form>
                        </td>
                        <td>
                            <button class="btn btn-default"><a href="index.php?act=xoa-binh-luan&btn_delete&ma_bl=<?=$ma_bl?>&ma_hh=<?=$ma_hh?>">Xóa</a></button>
                        </td>
            
                        <!-- <a href="index.php?act=form-phan-hoi-binh-luan&ma_bl=">Phản hồi</a -->
                        </tr>
                      
                    <?php
                   
                    }
                ?>
                </tbody>
            </table>
        </form>
    </div>
    <script>
      function showform(){
        $(".form-reppy").slideToggle();
      }
    </script>
    
</div
