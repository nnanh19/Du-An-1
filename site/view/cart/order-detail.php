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
                            <th scope="col">Mẫ hóa đơn</th>
                            <th>Mã hàng hóa</th>
                            <th scope="col">Size</th>
                            <th scope="col">Đơn giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Giảm giá</th>
                            <th scope="col">Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        
                        if(isset($order_list)){ foreach ($order_list as $order) {
                            extract($order);

                            ?>    
                            <tr>
                                <td><?=$ma_hd?></td>
                                <td><?=$ma_hh?></td>
                                <td><?=$size?></td>
                                <td><?=$don_gia?></td>
                                <td><?=$so_luong?></td>
                                <td><?=$giam_gia?></td>
                                <td><?=number_format($thanh_tien, 0, ',', '.')?></td>
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