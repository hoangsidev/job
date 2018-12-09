@include('backend.components.header')
  <div class="content-wrapper container-fluid">
    @include('backend.components.sidebar')
    <div class="dashboard-contents">
      <div class="contents-inner">
        <div class="row">
          <div class="col-12">
            <div class="section-content">
              <div class="content-head">
                <h4 class="content-title">Danh sách người dùng</h4><!-- /.content-title -->
              </div><!-- /.content-head -->
              <div class="content-details show">
                <table id="data-table" class="table data-table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Họ đệm</th>
                      <th>Tên</th> 
                      <th>Tùy chọn</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($listUsers as $user) { ?>
                    <tr>
                      <td><?php  echo $user->id; ?></td>
                      <td><a href="#"><?php  echo $user->username; ?></a></td>
                      <td><?php  echo $user->email; ?></td>
                      <td><?php  echo $user->first_name; ?></td>
                      <td><?php  echo $user->last_name; ?></td>
                      <td> 
                      <a href="/admin/users/<?php echo $user->id; ?>/edit" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                      <form method="post" action="{{url('/')}}/admin/users/<?php echo $user->id; ?>/delete" style="display: inline-block;"> 
                      {{ csrf_field() }}
                      <input type="hidden" name="_method" value="DELETE">
                      <button class="btn btn-danger" type="submit" onclick="return confirm('Bạn chắc chắn xóa?')"><i class="fa fa-trash" aria-hidden="true"></i></button>
                  </form></td>
                    </tr>
                  <?php }?>
                  </tbody>
                </table>
                <!-- paginate -->
                <div class="pagi">
                  {{ $listUsers->appends(request()->query())->links() }}
                </div>
                  <!-- end paginate -->
              </div><!-- /.content-details -->
            </div>
          </div>

        </div>
      </div><!-- /.contents-inner -->
      @include('backend.components.footer')