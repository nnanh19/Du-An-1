<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Quản lý đơn hàng</li>
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
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Mã hóa đơn</th>
                        <th>Mã khách hàng</th>
                        <th>Mã nhân viên</th>
                        <th>Tên khách hàng</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Ngày lập hóa đơn</th>
                        <th>Phương thức thanh toán</th>
                        <th>Tình trạng</th>
                        <th>Tổng tiền</th>
                        <th colspan="2" style="text-align:center">Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    if(isset($order_list)){ foreach ($order_list as $order) {
                        extract($order);
                    ?>
                    <tr>
                        <td><?=$ma_hd?></td>
                        <td><?=$ma_kh?></td>
                        <td><?=$ma_nv?></td>
                        <td><?=$ten_kh?></td>
                        <td><?=$dia_chi?></td>
                        <td><?=$sdt?></td>
                        <td><?=$ngay_lap?></td>
                        <td><?=$pttt?'Thanh toán khi nhận hàng':'Thanh toán bằng momo';?></td>
                        <th><?php if ($tinh_trang == 0) {
                            ?>
                            <a href="index.php?act=order-update-total-dang-dong-goi&ma_hd=<?=$ma_hd?>">Mới</a>
                            <?php
                        }else if($tinh_trang == 1){
                            ?>
                            <a href="index.php?act=order-update-total-dang-giao-hang&ma_hd=<?=$ma_hd?>">Đang đóng gói</a>
                            <?php
                        }else if($tinh_trang == 2){
                            ?>
                            <a href="index.php?act=order-update-total-da-nhan-hang&ma_hd=<?=$ma_hd?>">Đang giao hàng</a>
                            <?php
                        }else if($tinh_trang == 3){
                            ?>
                            <a href="index.php?act=order-update-total-bi-huy&ma_hd=<?=$ma_hd?>"">Đã nhận hàng</a>
                            <?php
                        }else if($tinh_trang == 4){
                            ?>
                            <a href="index.php?act=order-update-total-khong-bi-huy&ma_hd=<?=$ma_hd?>"">Bị hủy</a>
                            <?php
                        }
                        ?>
                        
                        </th>
                        <td><?=number_format($tong_tien, 0, ',', '.')?>đ</td>
                        <td><a href="index.php?act=order-delete&ma_hd=<?=$ma_hd?>" class="btn btn-warning">Xóa</a> </td>
                        <td><a href="index.php?act=order-detail&ma_hd=<?=$ma_hd?>" class="btn btn-primary">Xem chi tiết</a></td>
                    </tr>
                    <?php
                    }
                }
                ?>
                </tbody>
            </table>
            <div class="card-footer">
            <!-- <a href="index.php?act="><input class="btn btn-primary" type="button" value=""></a> -->
            </div>
           
        </div>
    </div>
</div>