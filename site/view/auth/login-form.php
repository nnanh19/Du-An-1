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
</style>
<hr>

<div class="auth-grid_row">
    <div class="auth-flex-column">
        <div class="auth-title">
            <h3>Đăng nhập</h3>
            <a href="./forgot-form">Bạn quyên mật khẩu?</a>
        </div>
        <form action="./submit-login">
            <div class="flex-column">
                <input class="form-control" type="text" name="ma_kh">
            </div>
            <div class="flex-column">
                <input class="form-control" type="password" name="mat_khau">
            </div>
            <?php
                if(isset($MESSAGE)){
                    echo '<span style="color:red">'.$MESSAGE.'</span>';
                    unset($MESSAGE);
                }
            ?>
            <div class="flex-column">
                <input type="checkbox" name="ghi_nho">
                <label for="">Giữ đăng nhập?</label>
            </div>
            <div class="flex-column">
                <input class="form-control custom" type="submit" value="Đăng nhập">
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
        <div class="flex-column">
            <button class="form-control custom"><a href="./register-form">Đăng ký tài khoản</a></button>
        </div>
    </div>
</div>
