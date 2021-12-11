<style>
    .row>img{
        width:50px;
        height:50px;
    }
</style>
<div class="content-custom">
    <hr>
    <div class="title">
        <h1>Giỏ hàng của bạn</h1>
    </div>  
    <div class="products trend-products">
        <div class="product">
            <form action="./cart-update" method="post">
                <table class="table table-bordered" style="text-align:center";>
                    <thead>
                        <tr>
                            <th scope="col">Mẫ hàng hóa</th>
                            <th>Hình</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Giá sản phẩm</th>
                            <th scope="col">size</th>
                            <th scope="col">Giảm giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Thành tiền</th>
                            <th scope="col">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        if(isset($_SESSION['cart'])){ 
                            foreach ($_SESSION['cart'] as $product) {
                                extract($product);
                            ?>    
                            <tr>
                                <th scope="row"><?=$ma_hh?></th>
                                <th style="width:200px; height:100px"><img width="100px;" src="./content/images/products/<?=$hinh?>" alt="" width="20%" ></th>
                                <td scope="col"><?=$ten_hh?></td>
                                <td scope="col"><?=$don_gia?></td>
                                <td scope="col">
                                    <select class="col-md-12" name="size" id="">
                                        <option style="text-transform:uppercase" value="<?=$size?>"><?=$size?></option>
                                        <option value="s">S</option>
                                        <option value="m">M</option>
                                        <option value="l">L</option>
                                        <option value="xl">XL</option>
                                        <option value="xxl">XXL</option>
                                    </select>
                                </td>
                                <td scope="col"><?=$giam_gia ?>%</td>
                                <td scope="col"><input class="col-md-3" style=" outline:none;" type="number" name="so_luong[<?=$ma_hh?>]" value="<?=$so_luong?>" id=""></td>
                                <td scope="col"><?= number_format($giam_gia > 0 ? ($don_gia * $so_luong) * ($giam_gia=(100-$giam_gia)/100) : $don_gia, 0, ',', '.') ?> VNĐ</td>
                                <td><a class="btn btn-warning" href="./cart-delete?ma_hh=<?=$ma_hh?>">Xóa</a></button></td>
                            </tr>
                            <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <a href="./cart-destroy" class="btn btn-warning">Xóa tất cả</a>
                <a href="./" class="btn btn-light">Tiếp tục mua</a>
                <input type="submit" class="btn btn-light" value="Cập nhật giỏ hàng">
                <a href="./cart-order?ma_hh=<?=$ma_hh?>" class="btn btn btn-primary">Đặt hàng</a>
                <?php
                if(isset($MESSAGE)){
                    echo '<span>'.$MESSAGE.' <a href="./login-form">Nhấn vào đây để đăng nhập!</a></span>';
                    unset($MESSAGE);
                }
            ?>
            </form>  
        </div>
    </div>
</div>