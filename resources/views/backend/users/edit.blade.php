
@include('backend.components.header')
  <div class="content-wrapper container-fluid">
    @include('backend.components.sidebar')
    <div class="dashboard-contents">
      <div class="contents-inner">
        <div class="row">
          <div class="col-12">
            <div class="section-content">
            <div class="content-head">
                <h4 class="content-title">Tạo người dùng mới</h4><!-- /.content-title -->
                
              </div><!-- /.content-head -->

              <div class="content-details show">
                <div class="card company-form">
                  <div class="card-body card-block">
                    <form action="/admin/users/<?php  echo $userInfo[0]->id; ?>/update" method="post" class="example-form">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-user"></i></div>
                          <input type="text" id="username" name="username" placeholder="Username" class="form-control" value="<?php  echo $userInfo[0]->username; ?>" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                          <input type="email" id="email" name="email" placeholder="Email" class="form-control" value="<?php  echo $userInfo[0]->email; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-user"></i></div>
                          <input type="text" id="firstname" name="firstname" placeholder="Họ đệm" class="form-control" value="<?php  echo $userInfo[0]->first_name; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-user"></i></div>
                          <input type="text" id="lastname" name="lastname" placeholder="Tên" class="form-control" value="<?php  echo $userInfo[0]->last_name; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                          <input type="password" id="password" name="password" placeholder="Password" class="form-control" value="<?php  echo $userInfo[0]->password; ?>">
                        </div>
                      </div>
                      <div class="form-actions form-group">
                      <button type="submit" class="btn btn-primary btn-sm">
                      <i class="fa fa-dot-circle-o"></i> Cập nhật
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                      <i class="fa fa-ban"></i> Nhập lại
                    </button>
                    </div>
                    </form>
                  </div>
                </div>
              </div><!-- /.content-details -->
            </div>
          </div>

        </div>
      </div><!-- /.contents-inner -->
      @include('backend.components.footer')


   