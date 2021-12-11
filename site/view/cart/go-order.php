<style>
    .row>img{
        width:50px;
        height:50px;
    }
</style>
<div class="content-custom">
    <hr>
    <div class="title" align="center">
        <h1>Đơn hàng của bạn</h1>
        <?php
                if(isset($MESSAGE_UPDATE)){
                    echo $MESSAGE_UPDATE;
                }
        ?>
    </div>  
    
    <div class="products trend-products">
        <div class="product">
            <form action="./cart-update" method="post">
                <table class="table table-bordered" style="text-align:center";>
                    <thead>
                        <tr>
                            <th scope="col">Mẫ hàng đơn</th>
                            <th>Mã khách hàng</th>
                            <th scope="col">Mã nhân viên</th>
                            <th scope="col">Tên khách hàng</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Ngày lập hóa đơn</th>
                            <th scope="col">Phương thức thanh toán</th>
                            <th scope="col">Tình trạng</th>
                            <th scope="col">Tổng tiền</th>
                            <th scope="col" colspan="2">Chức năng</th>
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
                            <p>Mới</p>
                            <?php
                            }else if($tinh_trang == 1){
                                ?>
                                <p>Đang đóng gói</p>
                                <?php
                            }else if($tinh_trang == 2){
                                ?>
                                <p>Đang giao hàng</p>
                                <?php
                            }else if($tinh_trang == 3){
                                ?>
                                <p>Đã nhận hàng</p>
                                <?php
                            }else if($tinh_trang == 4){
                                ?>
                                <p>Bị hủy</p>
                                <?php
                                 
                            }
                           
                            ?>
                            
                            </th>
                                <td><?=number_format($tong_tien, 0, ',', '.')?>đ</td>
                                <?php
                      
                                if($tinh_trang == 3 or $tinh_trang ==4){
                                    ?>
                                        <td><a href="./order-delete&ma_hd=<?=$ma_hd?>" class="btn btn-warning">Xóa</a> </td>
                                    <?php
                                }else{
                                    echo '';
                                }
                                ?>
                                
                                <?php 
                                if($tinh_trang == 0 || $tinh_trang == 1){
                                    
                                    ?>
                                        <td><a href="./form-order-edit&ma_hd=<?=$ma_hd?>&ten_kh=<?=$ten_kh?>&dia_chi=<?=$dia_chi?>&sdt=<?=$sdt?>" class="btn btn-warning">Sửa</a> </td>
                                    <?php
                                }else{
                                   echo ''; 
                                }
                                ?>
                                <td><a href="./order-detail&ma_hd=<?=$ma_hd?>" class="btn btn-primary">Xem chi tiết</a></td>
                            </tr>
                            <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </form>  
        </div>
    </div>
</div>