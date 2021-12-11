<style>
    .auth-grid_row{
        display: grid;
        grid-template-columns: 1fr 1fr;
        max-width:900px;
        margin:auto;
        grid-gap:100px;
    }
    .auth-flex-column>img{
        padding-top:90px;
    }
    .auth-title{
        padding-bottom:30px;
    }
    .auth-title>h3{
        font-size: 34px;
        font-family: poppins;
        font-weight: bold;
        
    }
    .auth-title>a{
        font-size: 14px;
        font-family: poppins;
        color:black;
    }
    form{
        display:flex;
        
    }
    .flex-column>input{

    }
    form{
    display:flex;
    flex-direction:column;
    grid-gap: 20px;
    }
    
    .flex-column>button>a{
        text-decoration:none;
        color: #fff;
    }
    .custom{
        background: #FDC86A;
        color: #fff;
    }
</style>
<hr>

<div class="auth-grid_row">
    <div class="auth-flex-column">
        <div class="auth-title">
            <h3>Cập nhật tài khoản</h3>
    
        </div>
        <form action="./du-an-1/update-account" enctype="multipart/form-data" method="POST" >
            <div class="flex-column">
                <label for="">Mã khách hàng</label>
                <input class="form-control" type="text" name="ma_kh" value="<?=$_SESSION['user']['ma_kh']?>">
            </div>
            <div class="flex-column">
                <label for="">Tên khách hàng</label>
                <input class="form-control" type="text" name="ten_kh" value="<?=$_SESSION['user']['ten_kh']?>">
            </div>
            <div class="flex-column">
                <label for="">Email</label>
                <input class="form-control" type="email" name="email" value="<?=$_SESSION['user']['email']?>">
            </div>
            <div class="flex-column">
                <label for="">Số điện thoại</label>
                <input class="form-control" type="text" name="sdt" value="<?=$_SESSION['user']['sdt']?>">
            </div>
            <div class="flex-column">
                <label for="">Địa chỉ</label>
                <input class="form-control" type="text" name="dia_chi" value="<?=$_SESSION['user']['dia_chi']?>">
            </div>
            <div class="flex-column">
                <label for="">Ngày sinh</label>
                <input class="form-control" type="date" name="ngay_sinh" value="<?=$_SESSION['user']['ngay_sinh']?>">
            </div>
            <div class="flex-column">
                <label for="">Ảnh đại diện</label>
                <input class="form-control" type="file" name="hinh" value="<?=$_SESSION['user']['hinh']?>">
            </div>
            <div class="flex-column">
            <?php
                if(isset($MESSAGE)){
                    echo '<span style="color:red">'.$MESSAGE.'</span>';
                    unset($MESSAGE);
                }
            ?>
            </div>
            <!-- ẩn -->

                <input class="form-control" type="hidden" name="kich_hoat" value="<?=$_SESSION['user']['kich_hoat']?>">


                <input class="form-control" type="hidden" name="mat_khau" value="<?=$_SESSION['user']['mat_khau']?>">


                <input class="" type="hidden" name="gioi_tinh" value="<?=$_SESSION['user']['gioi_tinh']?>" checked>

            <!-- / -->
            <?php
                if(isset($MESSAGE)){
                    echo '<span style="color:red">'.$MESSAGE.'</span>';
                    unset($MESSAGE);
                }
            ?>

            <div class="flex-column">
                <input class="form-control custom" type="submit" value="Cập nhật">
            </div>
        </form>

    </div>
    <div class="auth-flex-column">
        <img src="<?=$_SESSION['user']['hinh']?>"" alt=""> 
    </div>
</div>
