<div class="col-md-3" style="margin:auto">
    <form  id="quickForm" method="post" action="./order-edit">
        <div class="card-body">
            <div class="form-group">
                <?php
                extract($_REQUEST);
                ?>
                <input type="hidden" name="ma_hd" value="<?=$ma_hd?>">
                <label for="exampleInputEmail1">Tên khách hàng</label>
                <input type="text" name="ten_kh" value="<?=$ten_kh?>" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Địa chỉ</label>
                <input type="text" name="dia_chi" value="<?=$dia_chi?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Số điện thoại</label>
                <input type="text" name="sdt" value="<?=$sdt?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
        </div>

        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary form-control" name="btn-login">Sửa</button>
        </div>
    </form>
</div>