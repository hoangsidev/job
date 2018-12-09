@include('backend.components.header')
  <div class="content-wrapper container-fluid">
    @include('backend.components.sidebar')
    <div class="dashboard-contents">
      <div class="contents-inner">
        <div class="row">
          <div class="col-12">
            <div class="section-content">
              <div class="content-head">
                <h4 class="content-title">Chỉnh sửa tin tuyển dụng</h4><!-- /.content-title -->
              </div><!-- /.content-head -->
              <div class="content-details show">
                
              <!-- form -->
              <div class="card basic-form">
                  <div class="card-body card-block"> 


                    <form action="/admin/posts/<?php  echo $postInfo[0]->id; ?>/update" method="POST" enctype="multipart/form-data" class="form-horizontal"  id="formData">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">
                      <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tiêu đề</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="title" placeholder="Tiêu đề" class="form-control" value="<?php  echo $postInfo[0]->title; ?>"></div>
                      </div>
                     
                      <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Nội dung</label></div>
                        <div class="col-12 col-md-9"><textarea name="content" id="textarea-input" rows="4" placeholder="Nội dung" class="form-control"><?php  echo $postInfo[0]->content; ?></textarea></div>
                      </div>
                      

                 


                     
                     <?php $i =  1; foreach($resultTaxonomiesCategories as $taxonomyItem) { ?>
                      <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label"><?php echo $taxonomyItem->title; ?></label></div>
                        <div class="col-12 col-md-9">
                        <?php $categories =  $taxonomyItem->categories; ?>
                          <select id="<?php echo 'cat'.$i; ?>" class="form-control" required>
                            <option value="">Vui lòng chọn <?php echo $taxonomyItem->title; ?></option>
                            <?php foreach($categories as $category) { ?>
                            <option value="<?php echo $category->id; ?>" <?php if(in_array($category->id, $catOfPost)) { echo 'selected'; } ?>><?php echo $category->title; ?></option> 
                            <?php }?>
                          </select>
                         
                        </div>
                      </div>


                   <?php  $i++; }?>

 <input type="hidden"  name="categories" id="categories" >


                      <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm"  id="btnSubmit">
                      <i class="fa fa-dot-circle-o"></i> Cập nhật
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