<style>
h3{
    text-transform: uppercase;
}
</style>
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Thống kê</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="alert alert-info">
        <h3>Thống kê</h3>
    </div>
    <div class="alert">
        <h3>Thống kê doanh thu theo hàng hóa</h3>
    </div>
    <div class="card-body">
        <form action="index.php" method="post">
            <table class="table table-bordered table-hover"> 
                <thead class="alert-info">
                    <tr>
                        <th>Mã hàng hóa</th>
                        <th>Tên hàng hóa</th>
                        <th>Số lượng</th>
                        <th>Tổng tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($list_statistics_products as $list_statistic) {
                        extract($list_statistic);
                    ?>
                    <tr>
                        <td><?=$ma_hh?></td>
                        <td><?=$ten_hh?></td>
                        <td><?=$so_luong?></td>
                        <td><?=$thanh_tien?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </form>
    </div>
    <div class="card-body">
    <h3>Thống kê doanh thu theo tháng</h3>
        <form action="index.php?act=thong-ke-theo-thang" method="post">
            <select name="ngay_lap" id="">
                <option value="'2021-12-1' AND ngay_lap < '2021-12-30'">Tháng 12</option>
                <option value="'2021-11-1' AND ngay_lap < '2021-11-30'">Tháng 11</option>
                <option value="'2021-10-1' AND ngay_lap < '2021-10-30'">Tháng 10</option>
                <option value="'2021-9-1' AND ngay_lap < '2021-9-30'">Tháng 9</option>
                <option value="'2021-8-1' AND ngay_lap < '2021-8-30'">Tháng 8</option>
                <option value="'2021-7-1' AND ngay_lap < '2021-7-30'">Tháng 7</option>
                <option  value="'2021-6-1' AND ngay_lap < '2021-6-30'">Tháng 6</option>
                <option value="'2021-5-1' AND ngay_lap < '2021-5-30'">Tháng 5</option>
                <option value="'2021-4-1' AND ngay_lap < '2021-4-30'">Tháng 4</option>
                <option value="'2021-3-1' AND ngay_lap < '2021-3-30'">Tháng 3</option>
                <option value="'2021-2-1' AND ngay_lap < '2021-2-30'">Tháng 2</option>
                <option value="'2021-1-1' AND ngay_lap < '2021-1-30'">Tháng 1</option>
            </select><br><br>
            <input type="submit" class="btn btn-primary" name="btn_submit" value="Xem thống kê">
        </form>
        <?php
            if(isset($view)){
                include_once $view;
            }
        ?>
    </div>
</div
