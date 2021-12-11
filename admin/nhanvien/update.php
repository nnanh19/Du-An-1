<div class="content-wrapper">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Update Nhân Viên</h3>
        </div>
        <!---------------------- ENT TILE -------------------------->
        <form  method="post" action="index.php?act=update_nv" enctype="multipart/form-data">
            <?php 
            extract($dsnhanvien);
            ?>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mã Nhân Viên</label>
                    <input type="text" class="form-control" name = "ma_nv" value ="<?=$ma_nv?>" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên Nhân Viên</label>
                    <input  type="text" name="ten_nv" value = "<?=$ten_nv ?>"class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input value = "<?=$email ?>" type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Số Điện Thoại</label>
                    <input value = "<?=$sdt;?>" type="number" name="sdt" class="form-control">
                </div>
                <div class="form-group">
                    <label>Địa chỉ</label>
                    <input value = "<?=$dia_chi;?>" type="text" name="dia_chi" class="form-control">
                </div>
                <div class="form-group">
                    <label>Ngày Sinh</label>
                    <input value = "<?=$ngay_sinh;?>" type="date" name="ngay_sinh" class="form-control">  
                </div>
                <div class="form-group">
                    <label>mật khẩu</label>
                    <input value ="<?=$mat_khau;?>" type="password" name="mat_khau" class="form-control">  
                </div>
                <div class="form-group">
                    <label>Avatar</label>
                    <input class="form-control" type="file" name="hinh"/>
                </div>               
                <div class="form-group">
                    <label>Giới tính</label>
                    <div>
                        <label><input <?=!$gioi_tinh?'checked':''?> name="gioi_tinh" value="1" type="radio">Nữ</label>
                        <label><input <?=$gioi_tinh?'checked':''?> name="gioi_tinh" value="0" type="radio">Nam</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Kích hoạt</label>
                    <div>
                        <label><input <?=!$kich_hoat?'checked':''?> name="kich_hoat" value="0" type="radio">Vô hiệu hóa</label>
                        <label><input <?=$kich_hoat?'checked':''?> name="kich_hoat" value="1" type="radio">Kích hoạt</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>VAI TRÒ</label>
                    <div>
                        <label><input <?=!$vai_tro?'checked':''?> name="vai_tro" value="0" type="radio">Nhân Viên</label>
                        <label><input <?=$vai_tro?'checked':''?> name="vai_tro" value="1" type="radio">Admin</label>
                    </div>
                </div>

                <div class="card-footer">
                    <button class="btn btn-primary" type="submit" name="btn_update">Thực hiện</button>
                    <a href="index.php?act=dsnhanvien" class="btn btn-defaulf">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>

   