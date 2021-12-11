  
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Quản lý bình luận</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="alert alert-info">
        <h3>Tổng hợp bình luận</h3>
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
        <form action="index.php" method="post">
            <table class="table table-bordered table-hover"> 
                <thead class="alert-info">
                    <tr>
                        <th>Tên hàng hóa</th>
                        <th>Số lượng</th>
                        <th>Cũ nhất </th>
                        <th>Mới nhất</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($items as $item) {
                            extract($item);
                        ?>
                        <tr>
                            <td><?=$ten_hh?></td>
                            <td><?=$so_luong?></td>
                            <td><?=$cu_nhat?></td>
                            <td><?=$moi_nhat?></td>
                            <td>
                                <button class="btn btn-default"><a href="index.php?act=chi-tiet-binh-luan&ma_hh=<?=$ma_hh?>">Chi tiết</a></button>
                            </td>
                        
                        <?php
                        }
                    ?>
                </tbody>
            </table>
        </form>
    </div>
</div>
