<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color:red">
                <?php
                
                    if(isset($MESSAGE)){
                      echo $MESSAGE;
                      unset($MESSAGE);
                }
                ?>  
            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Đăng nhập</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">
                
                </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  id="quickForm" method="post" action="index.php?act=login">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tài khoản</label>
                    <input type="text" name="ma_nv" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mật khẩu</label>
                    <input type="password" name="mat_khau" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">Nhớ mật khẩu</label>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox" style="color:red; font-size:18px">
                    <?php
                
                        if(isset($MESSAGE_LOGIN)){
                          echo $MESSAGE_LOGIN;
                          unset($MESSAGE_LOGIN);
                    }
                    ?>
                    </div>
                  </div>
                </div>
                
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="btn-login">Đăng nhập</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>