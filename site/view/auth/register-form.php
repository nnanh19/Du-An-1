<style>
    .auth-grid_row{
        display: grid;
        grid-template-columns: 1fr 1fr;
        max-width:900px;
        margin:auto;
        grid-gap:100px;
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
    .flex-column>label{
        line-height: 30px;
    }
</style>
<hr>
<div class="auth-grid_row">
    <div class="auth-flex-column">
        <div class="auth-title">
            <h3>Đăng ký</h3>
            <a href="./login-form">Bạn đã có tài khoản?</a>
            <br>
        </div>
        <div class="flex-column">
            <?php
                if(isset($MESSAGE)){
                    echo '<span style="color:red">'.$MESSAGE.'</span>';
                    unset($MESSAGE);
                }
            ?>
            </div>
        <form action="./register-submit" method="POST" enctype="multipart/form-data">
            <div class="flex-column">
                <label for="">Mã khách hàng</label>
                <input class="form-control" type="text" name="ma_kh">
            </div>
            <div class="flex-column">
                <label for="">Họ tên</label>
                <input class="form-control" type="text" name="ten_kh">
            </div>
            <div class="flex-column">
                <label for="">Mật khẩu</label>
                <input class="form-control" type="password" name="mat_khau">
            </div>
            <div class="flex-column">
                <label for="">Xác nhận mật khẩu</label>
                <input class="form-control" type="password" name="mat_khau2">
            </div>
            <div class="flex-column">
                <label for="">Địa chỉ</label>
                <input class="form-control" type="text" name="dia_chi">
            </div>
            <div class="flex-column">
                <label for="">Số điện thoại</label>
                <input class="form-control" type="text" name="sdt">
            </div>
            <div class="flex-column">
                <label for="">Ngày sinh</label>
                <input class="form-control" type="date" name="ngay_sinh">
            </div>
            <div class="flex-column">
                <label for="">Email</label>
                <input class="form-control" type="email" name="email">
            </div>
            <div class="flex-column">
                <input type="radio" name="gioi_tinh" value="0">  
                <label for="">Nam</label>
                <input type="radio" name="gioi_tinh" value="1" checked>  
                <label for="">Nữ</label>
                
            </div>
            <div class="flex-column">
                <label for="">Ảnh đại diện</label>
                <input class="form-control" type="file" name="hinh">
            </div>
            <!--  -->
            <input type="hidden" name="kich_hoat" value="0">
            <!--  -->
            
            <div class="flex-column">   
                <input class="form-control custom" type="submit" name="" value="Đăng ký">
            </div>
        </form>

    </div>
    <div class="auth-flex-column">
        <div class="auth-title">
            <h3>Tạo một tài khoản</3>
        </div>
        <div class="flex-column">
            <p><ion-icon name="checkmark"></ion-icon> Thanh toán đơn hàng</p>
            <p><ion-icon name="checkmark"></ion-icon> Bình luận sản phẩm</p>
            <p><ion-icon name="checkmark"></ion-icon> Cùng nhiều ưu đãi khác</p>
        </div>
    </div>
</div>
