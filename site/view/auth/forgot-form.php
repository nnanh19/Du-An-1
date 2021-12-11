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
    .flex-column>span{
        color:red;
        font-size:13px;
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
            <h3>Quyên mật khẩu</h3>
            <a href="http://localhost:81/du-an-1/register-form">Bạn muốn một tài khoản mới?</a>
        </div>
        <form action="./forgot?ma_kh=<?=$ma_kh?>">
            <div class="flex-column">
                <input class="form-control" type="text" name="ma_kh">
            </div>
            <div class="flex-column">
                <input class="form-control" type="text" name="email">
            </div>

            <div class="flex-column">
                <span><?php
                if(isset($MESSAGE_ER)){
                    echo $MESSAGE_ER;
                    unset($MESSAGE_ER);
                }
                ?></span>
                <input class="form-control custom" type="submit" value="Đặt lại mật khẩu">
            </div>
        </form>

    </div>
    <div class="auth-flex-column">
        <div class="auth-title">
            <h3>Mật khẩu của bạn</3>
            
        </div>
        <div class="flex-column">
           
            <p><ion-icon name="checkmark"></ion-icon> <?php
            if(isset($MESSAGE)){
                echo $MESSAGE;
                unset($MESSAGE);
            }
            ?> </p>
        </div>
       
    </div>
</div>
