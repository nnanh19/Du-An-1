<head>
    <style>
        .category-custom{     
        max-width: 1300px;
        margin:auto;
        }
        .title-category{
            font-family: poppins;
            color: #000;
        }
        .title-category>span{
            font-size:13px;
        }
        .title-category>h1{
            font-size: 40px;
            font-weight: 500;
        }
        .filter-category{
            display:flex;
            flex-direction: row;
        }
        .filter-category>.first-filter{
            padding: 0;
        }
        .filter-category>p{
            padding:0 20px ;
        }
        .product{
            display: flex;
            max-width:1300px;
            flex-wrap: wrap;
            justify-content: center;
            margin:auto;
            grid-gap:20px;
        }
        .product-box{
            margin-left:0;
            
        }
        select{
            border:none;
            outline:none;
        }
      
        .filter-category{
            position: absolute;
            top: 255px;
            z-index: 1;
        }
        .filter-3>.filter-rate{
            position: relative;
            left: 750px;
           
        }
        .filter-2>.filter-rate{
            position: relative;
            left: 350px;
        }
        .filter-1>.filter-rate{
            position: relative;
            left: 550px;
        }
        .filter-category:hover .filter-rate>ul>li{
            display: block;
        }
        .filter-category{
            cursor: pointer;
        }
        .filter-rate>ul{
            font-size:18px;
        }
        .filter-rate>ul>li>a{
            font-size:14px;
        }
        .filter-rate>ul{
            text-align:center;
            border: 0.5px solid #f7f5f0;
        }
        ol, ul {
            padding-left: 0;
        }
        .filter-rate>ul>li{
            list-style: none;
            background: #fff;
            padding: 10px;
            display: none;
        }
        .link-end{
            border-bottom:none;
        }
        .filter-rate>ul>li>a{
            list-style: none;
            color:black;
            text-decoration:none;
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
    </style>
</head>
<hr>
<?php extract($_REQUEST);

?>
<div class="content-custom">
    <div class="category-custom">
        <div class="title-category">
            <span>Trang chủ / Sản Phẩm / <?=$name_category['ten_loai']?></span>
        </div>
        <div class="title-category">
            <h1>Sản Phẩm</h1>
        </div>
        
        <hr><br>

        <div class="filter-category filter-1">
            <div class="filter-rate">
                <ul>Kích cỡ &ensp; <ion-icon name="arrow-dropdown"></ion-icon>
                    <li class="link-first"><a href="filter-size&ma_loai=<?=$ma_loai?>&size=S">S</a></li>
                    <li class="link-first"><a href="filter-size&ma_loai=<?=$ma_loai?>&size=M">M</a></li>
                    <li class="link-first"><a href="filter-size&ma_loai=<?=$ma_loai?>&size=L">L</a></li>
                    <li class="link-first"><a href="filter-size&ma_loai=<?=$ma_loai?>&size=XL">XL</a></li>
                    <li class="link-first"><a href="filter-size&ma_loai=<?=$ma_loai?>&size=XXL">XXL</a></li>
                </ul>
            </div>
        </div>
        <div class="filter-category filter-2">
            <div class="filter-rate">
                <ul>Loại hàng &ensp; <ion-icon name="arrow-dropdown"></ion-icon>
                    <?php
                    foreach ($categories as $category) {
                        extract($category);
                    
                    ?>
                    <li><a href="filter-rate-hight&ma_loai=<?=$ma_loai?>"><?=$ten_loai?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="filter-category filter-3">
            <div class="filter-rate">
                <ul>Sort By &ensp; <ion-icon name="arrow-dropdown"></ion-icon>
                    <li><a href="filter-rate-short?ma_loai=<?=$name_category['ma_loai']?>">Giá (thấp - cao)</a></li>
                    <li><a href="filter-rate-hight?ma_loai=<?=$name_category['ma_loai']?>">Giá (cao - thấp)</a></li>
                </ul>
            </div>
        </div>

        <hr>
    </div>
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
