<head>
    <style>
    .carousel-item {
        position: relative;
    }

    .tile {
        position: absolute;
        left: 0;
        bottom: 450px;
        display: inline-block !important;
    }

    .content-banner {
        position: absolute;
        left: 0;
        bottom: 400px;
        display: inline-block !important;
    }
    .rate-sale{
            position:absolute;
            top:25px;
            left:25px;
            padding:5px 15px;
            color:red;
            font-weight: 600;
            background: #f7f5f0;
            font-size:13px;
    }
    .link-banner {
        position: absolute;
        left: 0;
        bottom: 350px;
        display: inline-block !important;
    }
    .link-banner a{
        text-decoration: none;
    }
    .btn{
        padding: 10px 20px;
        border: 1px solid #333 ;
        display: inline-block;
        color: white;
        position: relative;
        background-color: black;
        transition: ease-in-out 0.5s;
    }
    
    .link-banner:hover a{
    background: #FDC86A;
    transition: ease-in-out 0.5s;
    -moz-box-shadow: 3px 3px 5px 0px #333;
    -webkit-box-shadow: 3px 3px 5px 0px #333;
    box-shadow: 3px 3px 5px 0px #333;
    }

    .slick-dots li button:before {
    bottom:20px;
    font-family: slick;
    font-size: 15px;
    line-height: 20px;
    position: absolute;
    top: 0;
    left: 0;
    width: 20px;
    height: 20px;
    content: '•';
    text-align: center;
    opacity: .25;
    color: #000;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
    .slide {
        width:100%;
        height: 50%;
    }
    .carousel-item>img{
        width:100%;
        height: 50%;
    }
      
    </style>
</head>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="one-time">
        <?php foreach ($slides as $slide) {
            extract($slide);
        ?>
            <div class="carousel-item active">
                <img src="content/images/slide/<?= $hinh_anh ?>" class="d-block w-100"  alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="tile">
                        <h1><?= $tieu_de ?></h1>
                    </div>
                    <div class="content-banner">
                        <p><?= $noi_dung ?></p>
                    </div>
                    <div class="link-banner">
                        <a  href="<?= $duong_dan ?>" class="btn">Xem Thêm</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<!-- end slide -->
<!-- end slide -->
<div class="content-custom">
    <div class="title">
        <h1>Sản phẩm thịnh hành</h1>
    </div>
    <div class="products trend-products">
        <div class="product">
            <?php
            foreach ($trend_products as $trend_product) {
                extract($trend_product);
                $href = "chi-tiet-san-pham?ma_hh=$ma_hh";
            ?>
            <div class="product-box">
                <div class="product-box-img">
                    <span class="rate-sale"><?=$giam_gia?>%</span>
                    <a href="<?=$href?>">
                    <img src="content/images/products/<?=$hinh?>" alt="">
                    </a>
                </div>
                <div class="product-box-text">
                    <p class="product-name"><?=$ten_hh?></p>
                    <p class="product-rate-sale"><?=number_format($giam_gia > 0 ? $don_gia * ($giam_gia=(100-$giam_gia)/100) : $don_gia, 0, ',', '.') ?> VNĐ</p>
                    <del class="product-rate"><?= number_format($don_gia, 0, ',', '.');?> VNĐ</del>
                    <a href="add-cart?ma_hh=<?=$ma_hh?>" class="form-control-custom"><h3>Thêm vào giỏ hàng</h3></a> 
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
    <!-- end trent products trend-products-->
    <div class="title">
        <h1>Sản phẩm đặc biệt</h1>
    </div>
    <div class="products">
        <div class="product">
            <?php
            foreach ($special_products as $special_product) {
                extract($special_product);
                $href = "chi-tiet-san-pham?ma_hh=$ma_hh";
            ?>
            <div class="product-box">
                <div class="product-box-img">
                <span class="rate-sale"><?=$giam_gia?>%</span>
                    <a href="<?=$href?>">
                    <img src="content/images/products/<?=$hinh?>" alt="">
                    </a>
                </div>
                <div class="product-box-text">
                    <p class="product-name"><?=$ten_hh?></p>
                    <p class="product-rate-sale"><?=number_format($giam_gia > 0 ? $don_gia * ($giam_gia=(100-$giam_gia)/100) : $don_gia, 0, ',', '.') ?> VNĐ</p>
                    <del class="product-rate"><?= number_format($don_gia, 0, ',', '.');?> VNĐ</del>
                    <a href="add-cart?ma_hh=<?=$ma_hh?>" class="form-control-custom"><h3>Thêm vào giỏ hàng</h3></a>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
    <!-- end san pham dac biet-->
    <div class="title">
        <h1>Sản phẩm</h1>
    </div>
    <div class="products">
        <div class="product">
            <?php
            foreach ($products as $product) {
                extract($product);
                $href = "chi-tiet-san-pham?ma_hh=$ma_hh";
            ?>
            <div class="product-box">
                <div class="product-box-img">
                <span class="rate-sale"><?=$giam_gia?>%</span>
                    <a href="<?=$href?>">
                    <img src="content/images/products/<?=$hinh?>" alt="">
                    </a>
                </div>
                <div class="product-box-text">
                    <p class="product-name"><?=$ten_hh?></p>
                    <p class="product-rate-sale"><?=number_format($giam_gia > 0 ? $don_gia * ($giam_gia=(100-$giam_gia)/100) : $don_gia, 0, ',', '.') ?> VNĐ</p>
                    <del class="product-rate"><?= number_format($don_gia, 0, ',', '.');?> VNĐ</del>
                    <a href="add-cart?ma_hh=<?=$ma_hh?>" class="form-control-custom"><h3>Thêm vào giỏ hàng</h3></a>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
    <!-- end products-->
    
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js" integrity="sha512-eP8DK17a+MOcKHXC5Yrqzd8WI5WKh6F1TIk5QZ/8Lbv+8ssblcz7oGC8ZmQ/ZSAPa7ZmsCU4e/hcovqR8jfJqA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    $('.one-time').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true
    });
</script>