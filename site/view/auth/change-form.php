<style>
    .auth-grid_row{
        display: grid;
        max-width:900px;
        margin:auto;
 
    }
    .flex-column>input{
    width:900px;
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
            <h3>Đổi mật khẩu</h3>
        </div>
    </div>
    <div class="auth-flex-column">   
        <form action="http://localhost:81/du-an-1/submit-change-password" method="POST">
            <div class="flex-column">
                <label for="">Tên đăng nhập</label>
                <input class="form-control" type="text" name="ma_kh">
            </div>
            <div class="flex-column">
                <label for="">Mật khẩu cũ</label>
                <input class="form-control" type="password" name="mat_khau">
            </div>
            <div class="flex-column">
                <label for="">Mật khẩu mới</label>
                <input class="form-control" type="password" name="mat_khau2">
            </div>
            <div class="flex-column">
                <label for="">Xác nhận mật khẩu mới</label>
                <input class="form-control" type="password" name="mat_khau3">
            </div>
            <?php
                if(isset($MESSAGE)){
                    echo '<span style="color:red">'.$MESSAGE.'</span>';
                    unset($MESSAGE);
                }
            ?>
            <div class="flex-column">
                <input class="form-control custom" type="submit" value="Đổi mật khẩu">
            </div>
        </form>

    </div>
</div>
