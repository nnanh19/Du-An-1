<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Chi tiết đơn hàng</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Danh Sách đơn hàng</h3>
            </div>
            <table id="example2" class="table table-bordered table-hover" style="text-align:center;">
                <thead>
                    <tr>
                        <th>Mã chi tiết hóa đơn</th>
                        <th>Mã hóa đơn</th>
                        <th>Mã hàng hóa</th>
                        <th>Size</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Giảm giá</th>
                        <th>Thành tiền</th>

                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($order_detail_list as $order_detail) {
                        extract($order_detail);
                    ?>
                    <tr>
                        <td><?=$ma_cthd?></td>
                        <td><?=$ma_hd?></td>
                        <td><?=$ma_hh?></td>
                        <th><?=$size?></th>
                        <td><?=number_format($don_gia, 0, ',', '.')?>đ</td>
                        <td scope="col"><input class="col-md-3" style=" outline:none;" type="number" name="so_luong[<?=$ma_hh?>]" value="<?=$so_luong?>" id=""></td>
                        <td><?=$giam_gia?></td>
                        <td><?=number_format($thanh_tien, 0, ',', '.')?>đ</td>

                    </tr>
                    <?php
                    }
                ?>
                </tbody>
            </table>
            <div class="card-footer">
            <a href="index.php?act=order"><input class="btn btn-primary" type="button" value="Quay lại"></a>
            </div>
           
        </div>
    </div>
</div>