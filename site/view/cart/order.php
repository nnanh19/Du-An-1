<style>
    .order-container{
        max-width:900px;
        margin:auto;
        
    }
    .order{
        display: grid;
        grid-template-columns: 400px 400px;
        grid-gap:40px;
    }
    .form-control{
        display:flex;
        justify-content: space-between
    }
</style>
<div class="content-custom">
    <hr>
    <form action="./order" method="post">
         
        <div class="order-container">
            <div class="order">
                <div>
                    <div>
                    <div class="title">
                        <h1>Thông tin nhận hàng</h1>
                    </div> 
                        <label for="">Nhập họ và tên</label>
                        <input class="form-control" type="text" name="ten_kh" id="">
                    </div>
                    <div>
                        <label for="">Địa chỉ</label>
                        <input class="form-control" type="text" name="dia_chi" id="">
                    </div>
                    <div>
                        <label for="">Số điện thoại</label>
                        <input class="form-control" type="text" name="sdt" id="">
                    </div>
                    
                </div>

                <div>
                    <div>
                    <div class="title">
                        <h1>Phương thức thanh toán</h1>
                    </div><br>
                        <div class="form-control">
                            <label class="custom-control-label" for="defaultChecked2">Thanh toán khi nhận hàng</label>
                            <input type="radio" class="form-check-input" name="pttt" value="0" checked>
                        </div>
                        <div class="form-control">
                            <label class="custom-control-label">Ví MoMo</label>
                            <input type="radio" class="form-check-input" name="pttt" value="1">
                        </div>
                    </div>
                  <br>
                  <br>
                    
                    <div align="center">
                        <input type="submit" class="btn btn-warning" value="Đặt hàng" ><br>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>