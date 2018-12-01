
@include('backend.components.header')
  <div class="content-wrapper container-fluid">
    @include('backend.components.sidebar')
    <div class="dashboard-contents">
      <div class="contents-inner">
        <div class="row">
          <div class="col-12">
            <div class="section-content">
              <div class="content-head">
                <h4 class="content-title">Danh sách tin tuyển dụng</h4><!-- /.content-title -->
              </div><!-- /.content-head -->
              <div class="content-details show">
                <table id="data-table" class="table data-table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th>Tin tuyển dụng</th>
                      <th>Chuyên mục</th>
                      <th>Ngày tạo</th>
                      <th>Tùy chọn</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($listPosts as $post) { ?>
                    <tr>
                      <td><?php echo $post->id; ?></td>
                      <td><a href="/admin/posts/<?php echo $post->id; ?>/edit"><?php  echo $post->title; ?></a></td>
                      <td>xx</td>
                      <td><?php  echo $post->created_at; ?></td>
                      <td>
                        <a href="/admin/posts/<?php echo $post->id; ?>/edit" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                      <form method="post" action="{{url('/')}}/admin/posts/<?php echo $post->id; ?>/delete" style="display: inline-block;"> 
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
                  {{ $listPosts->appends(request()->query())->links() }}
                </div>
                  <!-- end paginate -->
              </div><!-- /.content-details -->
            </div>
          </div>

        </div>
      </div><!-- /.contents-inner -->
      @include('backend.components.footer')