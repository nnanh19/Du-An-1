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
    .flex-column>li>a{
        text-decoration:none;
        color: #000;
        font-size: 24px;
        font-family: inherit;
    }
</style>
<hr>

<div class="auth-grid_row">
    <div class="auth-flex-column">
        <div class="auth-title">
            <h3>Tài khoản</h3>
            <div class="info">
                    <img class="avatar" src='<?=$_SESSION['user']['hinh']?>'>
                    <br>      
            </div>
        </div>
    </div>
    <div class="auth-flex-column">
        <div class="auth-title">
            <h3 class="text-center text-danger"><?= $_SESSION['user']['ma_kh']?></h3>
        </div>
        <div class="flex-column">
            <li class="list-group-item"><a href="./log-out">Đăng xuất</a></li>
            <li class="list-group-item"><a href="./change-password-form">Đổi mật khẩu</a></li>
            <li class="list-group-item"><a href="./update-account-form">Cập nhật tài khoản</a></li>
            <li class="list-group-item"><a href="./my-order">Đơn hàng</a></li>
        </div>
    </div>
</div>
