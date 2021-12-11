<div class="title">
        <h1 style="text-transform:uppercase;">Tìm kiếm cho từ khóa<br/>(<?=$keyword?>)</h1>
</div>
<div class="products">
<div class="product">
    <hr>
    <?php
    foreach ($products as $product) {
        extract($product);
        $href = "chi-tiet-san-pham?ma_hh=$ma_hh";
    ?>
    <div class="product-box">
        <div class="product-box-img">
            <a href="<?=$href?>">
            <img src="content/images/products/<?=$hinh?>" alt="">
            </a>
        </div>
        <div class="product-box-text">
            <p class="product-name"><?=$ten_hh?></p>
            <p class="product-rate-sale"><?=$don_gia?></p>
            <del class="product-rate">500k</del>
            <a href="them-vao-gio-hang?ma_hh=<?=$ma_hh?>" class="form-control-custom"><h3>Thêm giỏ hàng</h3></a>
        </div>
    </div>
    <?php
    }
    ?>
</div>
</div>