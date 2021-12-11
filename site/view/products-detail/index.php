<head>
    <style>
        .title-category>span{
            font-size:18px;
            font-family: poppins;
            display: inline-block;
            padding-left:35px;
            padding-top:5px;
        }
        .title-category>h1{
            font-size: 40px;
            font-weight: 500;
           
        }
        .category-custom{
            z-index: 1;
            position: absolute;
        }

        .img-product{
            background:#D4D4D4;
            text-align:center;
            width:100%;
        }
        .img-product>a>img, .describe-img>img{
            max-width:600px;
            max-height:600px;
        }
        .content-product{
            display: grid;
            grid-gap: 25px;
            grid-template-columns: 75% 25%;
            position: relative;
            bottom:16px;
        
        }
        .info-product{
            font-weight: bold;
            
            padding-top: 20px;
        }
        .info-product>h1{
            font-family: tahoma;
            font-size:32px;
            line-height:50px;
        }
        
        .info-product>p,.chose-size>span{
            font-family: poppins;
            font-size: 14px;
            line-height:50px;
        }

        .title>h3{
           text-align:center;
           font-family: poppins;
           font-size:24px;
           text-transform: uppercase;
        }
        .more-product{
            max-width:1300px;
            margin:auto;
        }
        .describe{
            max-width:1300px;
            margin:auto;
            display: flex;
            flex-direction: row;
            align-content: center;
            justify-content: space-between;
            grid-gap: 50px;
        }
        p{
            margin-bottom:0;
        }
        .message>a{
            text-decoration :none;
        }
        .comments-list{
            font-family: tahoma;
            margin-top:20px;
        }
        .comments-list>h3{
            line-height:20px;
            font-size:24px;
        }
        .comments-list>span{
            font-size: 12px;
            padding-bottom:15px;
            display:inline-block;
        }
        .comments-list>p{
            font-size:15px;
        }
        .comments-list-child>h3{
            font-size:18px;
        }
       
        .check-chose-size{
            display: block;
            margin: 0;
            background: #fff;
            width: 40px;
            height: 40px;
            line-height: 40px;
            position: relative;
            border: 1px solid #e5e5e5;
            font-size: 12px;
            font-weight: 500;
            text-align: center;
            cursor: pointer;
        }
        .product-info{
            padding-top:25px;
            width:90%;
        }
        .product-info>h1,.info-rate{
            border-bottom:1px dashed #e5e5e5;
            padding-bottom:10px;
            
        }
        .product-info>h1{
            font-family: poppins;
            font-weight: 600;
            font-size:34px;
        }
        .info-rate{
            display:flex;
            grid-gap:10px;
            align-items:center;
        }
        .info-rate>span{
            background:#f7f5f0;
            color:red;
            padding:5px 15px;
        }
        .info-rate>p{
            color:red;
            font-weight: 600;
            font-family:tahoma;
            font-size:18px;
        }
        .info-rate>del{
            color: grey;
            font-weight: 500;
            font-family:tahoma;
            font-size:18px;
        }
        .product-buy{
            width:90%;
            height: 50px;   
            background: #FDC86A;
            padding:10px 5px;
            border:1px solid black;
            margin-top:20px;
        }
        .product-buy>a{
            font-family: "Noto Sans","AdihausDIN","Helvetica",Arial,sans-serif !important;
            font-weight: 600;
            font-size:21px;
            text-decoration:none;
            color:black;
            text-transform: uppercase;
            
        }
        .product-buy>a:hover{
            color:#fff;
        }
        .product-buy:hover ion-icon{
            color:#fff;
        }
        .product-buy>ion-icon{
            padding-left:50px;
        }
        .row>input{
            border: 1px solid #f7f5f0;
            border-radius:5px;
            outline:none;
            display:inline;
           
        }
        .cmt-admin{
            padding-left:25px;
        }
      
    </style>
</head>
<hr>
<div class="content-custom">
    <?php if(($product)==true){
        extract($product);
    }
    ?>
    <div class="category-custom">
        <div class="title-category">
            <span>Trang chủ / Sản Phẩm / <?=$ten_hh?></span>
        </div>
    </div>
    <div class="product-detail">
       <div class="content-product">
           <div class="img-product">
            <a href="">
                <img class="" src='content/images/products/<?= $hinh ?>'>
           </a>
           
           </div>
           <div class="container-fluid">
                <div class="product-info">
                    <h1><?=$ten_hh?></h1>
                    <div class="info-rate">
                        <span>-<?=$giam_gia?>%</span>
                        <p ><?=number_format($giam_gia > 0 ? $don_gia * ($giam_gia=(100-$giam_gia)/100) : $don_gia, 0, ',', '.') ?>đ</p>
                        <del class="rate"><?=number_format($don_gia, 0, ',', '.') ?>đ</del> 
                    </div>
                </div>             
                <div class="product-buy">
                    <a class="" href="add-cart?ma_hh=<?=$ma_hh?>" class="">Thêm vào giỏ hàng</a><ion-icon name="return-right"></ion-icon>
                </div>
           </div>
       </div>
        
       
    </div>

    <div class="title">
        <h3>Thông tin chi tiết sản phẩm</h3>
    </div>

    
    <div class="more-product">
    <hr>
        <div class="describe">
            <div class="describe-content">
                <div class="product-name">
                    <h1><?=$ten_hh?></h1>
                </div>
                <div class="product-describe">
                    <p><?=$mo_ta?></p>
                </div>
            </div>
            <div class="describe-img">
                <img class="" src='content/images/products/<?= $hinh ?>'>
            </div>
        </div>
    <hr>
        <div class="title">
            <h3>Bình luận</h3>
        </div>
        <div class="comments">
        <form action="http://localhost:81/du-an-1/comment?ma_hh=<?=$ma_hh?>" method="post">
           <div class="form-group">
               <div class="row">
                    <div class="col-sm">
                        <input type="text" name="noi_dung" class="form-control">
                    </div>
                    <div class="col-sm">
                        <input type="submit"  value="Bình luận" class="btn btn-primary">
                    </div>
               </div>
               <?php
                if(isset($MESSAGE)){
                    echo $MESSAGE; ?><span class="message"><a href="http://localhost:81/du-an-1/login-form">Nhấn vào đây</a> để đến trang đăng nhập!</span><?php
                }
            
               ?>
               
           </div> 
           
        </form>
        <?php

            foreach ($comments_list as $comment) {
                extract($comment);
             
            
            ?>
            <div class="comments-list">
                <h3><?=$ma_kh?></h3>
                <span><?=$ngay_lap?></span>
                <p><?=$noi_dung?></p>
                <!-- comment chủ top -->
                <?php
            foreach ($comments_nv as $comment_nv) {
                if($ma_bl == $comment_nv['ma_bl']){
                    ?>
                <div class="comments-list" style="padding-left:25px;">
                    <h3><?=$comment_nv['ma_nv']?></h3>
                    <span><?=$comment_nv['ngay_them']?></span>
                    <p><?=$comment_nv['phan_hoi']?></p>
                </div>
                    <?php
                }
            }
            ?>
                <!-- comment admin -->
            </div>
           
            <?php
            }
        ?>
         
        </div>
       
    </div>
</div>
