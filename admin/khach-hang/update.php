<div class="content-wrapper">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Update Khách Hàng</h3>
        </div>
        <!---------------------- ENT TILE -------------------------->
        <form  method="post" action="index.php?act=update_kh" enctype="multipart/form-data">
            <?php 
            extract($dskhachhang);
            ?>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mã Khách Hàng</label>
                    <input type="text" class="form-control" name = "ma_kh" value ="<?=$ma_kh?>" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên Khách Hàng</label>
                    <input  type="text" name="ten_kh" value = "<?=$ten_kh ?>"class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input value = "<?=$email ?>" type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Số Điện Thoại</label>
                    <input value = "<?=$sdt?>" type="number" name="sdt" class="form-control">
                </div>
                <div class="form-group">
                    <label>Địa chỉ</label>
                    <input value = "<?=$dia_chi?>" type="text" name="dia_chi" class="form-control">
                </div>
                <div class="form-group">
                    <label>Ngày Sinh</label>
                    <input value = "<?=$ngay_sinh?>" type="date" name="ngay_sinh" class="form-control">  
                </div>
                <div class="form-group">
                    <label>mật khẩu</label>
                    <input value ="<?=$mat_khau?>" type="password" name="mat_khau" class="form-control">  
                </div>
                <div class="form-group">
                    <label>Avatar</label>
                    <input class="form-control" type="file" name="hinh"/>
                </div>               
                <div class="form-group">
                    <label>Giới tính</label>
                    <div>
                        <label><input <?=!$gioi_tinh?'checked':''?> name="gioi_tinh" value="1" type="radio">Nam</label>
                        <label><input <?=$gioi_tinh?'checked':''?> name="gioi_tinh" value="0" type="radio">Nữ</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Kích hoạt</label>
                    <div>
                        <label><input <?=!$kich_hoat?'checked':''?> name="kich_hoat" value="0" type="radio">Vô hiệu hóa</label>
                        <label><input <?=$kich_hoat?'checked':''?> name="kich_hoat" value="1" type="radio">Kích hoạt</label>
                    </div>
                </div>


                <div class="card-footer">
                    <button class="btn btn-primary" type="submit" name="btn_update">Thực hiện</button>
                    <a href="index.php?act=dsnhakhien" class="btn btn-defaulf">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>

   