@include('backend.components.header')
  <div class="content-wrapper container-fluid">
    @include('backend.components.sidebar')
    <div class="dashboard-contents">
      <div class="contents-inner">
        <div class="row">
          <div class="col-12">
            <div class="section-content">
              <div class="content-head">
                <h4 class="content-title">Tạo tin tuyển dụng mới</h4><!-- /.content-title -->
              </div><!-- /.content-head -->
              <div class="content-details show">
                
              <!-- form -->
              <div class="card basic-form">
                  <div class="card-body card-block"> 
                    <form action="/admin/posts/create" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    {{ csrf_field() }}
                      <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tiêu đề</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="title" placeholder="Tiêu đề" class="form-control"></div>
                      </div>
                     
                      <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Nội dung</label></div>
                        <div class="col-12 col-md-9"><textarea name="content" id="textarea-input" rows="4" placeholder="Nội dung" class="form-control"></textarea></div>
                      </div>
                      <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Chuyên mục</label></div>
                        <div class="col-12 col-md-9">
                          <select name="select" id="select" class="form-control">
                            <option value="0">Vui lòng chọn chuyên mục</option>
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                          </select>
                        </div>
                      </div>
                      <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                      <i class="fa fa-dot-circle-o"></i> Tạo mới
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                      <i class="fa fa-ban"></i> Nhập lại
                    </button>
                  </div>
                     
                    </form>
                  </div>
                  
                </div>
              <!-- end form -->
              </div><!-- /.content-details -->
            </div>
          </div>

        </div>
      </div><!-- /.contents-inner -->
      @include('backend.components.footer')