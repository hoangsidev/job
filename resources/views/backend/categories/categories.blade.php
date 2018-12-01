    

@include('backend.components.header')
  <div class="content-wrapper container-fluid">
    @include('backend.components.sidebar')
    <div class="dashboard-contents">
      <div class="contents-inner">
        <div class="row">
          <div class="col-12">
            <div class="section-content">
              <div class="content-head">
                <h4 class="content-title">Danh sách chuyên mục</h4><!-- /.content-title -->
              </div><!-- /.content-head -->
              <div class="content-details show">
                <table id="data-table" class="table data-table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th>Tiêu đề</th>
                      <th>Mô tả</th>
                      <th>Tùy chọn</th>
                    </tr>
                  </thead>
                  
                  <tbody>

                    <?php foreach($listCategories as $category) { ?>
                    <tr>
                      <td><?php  echo $category->id; ?></td>
                      <td><a href="#"><?php  echo $category->title; ?></a></td>
                      <td><?php  echo $category->description; ?></td>
                      <td>
                        <a href="/admin/categories/<?php echo $category->id; ?>/edit" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                      <form method="post" action="{{url('/')}}/admin/categories/<?php echo $category->id; ?>/delete" style="display: inline-block;"> 
                      {{ csrf_field() }}
                      <input type="hidden" name="_method" value="DELETE">
                      <button class="btn btn-danger" type="submit" onclick="return confirm('Bạn chắc chắn xóa?')"><i class="fa fa-trash" aria-hidden="true"></i></button>
                  </form></td>
                    </tr>
                  <?php }?>



                    
                   
                  </tbody>

                 
                </table>
                <!-- paginate -->
{{ $listCategories->appends(request()->query())->links() }}
<!-- end paginate -->
              </div><!-- /.content-details -->
            </div>
          </div>

        </div>
      </div><!-- /.contents-inner -->
      @include('backend.components.footer')