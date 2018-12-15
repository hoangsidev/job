
@include('frontend.components.header')

    <!-- Page header -->
    <header class="page-header">
      <div class="container page-name">
        <h1 class="text-center">Chỉnh sửa thông tin tuyển dụng</h1>
        <p class="lead text-center"></p>
      </div>

      <div class="container">
      
        <div class="row">
        <form action="/postEmployer/<?php  echo $postInfo[0]->id; ?>/update" method="POST" enctype="multipart/form-data" class="form-horizontal" id="formData">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">
          <div class="form-group col-xs-12 col-sm-6">
            <input type="text" name="title" class="form-control input-lg" placeholder="Tiêu đề tuyển dụng" value="<?php  echo $postInfo[0]->title; ?>">
          </div>

          <div class="form-group col-xs-12 col-sm-6">
            <input type="text" name="company" class="form-control input-lg" placeholder="Tên công ty của bạn" value="<?php  echo $postInfo[0]->company; ?>">
          </div>

          <div class="form-group col-xs-12">
            <textarea class="form-control" name="content" rows="1" placeholder="Nội dung công việc của bạn"><?php  echo $postInfo[0]->content; ?></textarea>
          </div>
          <div class="form-group col-xs-12">
            <textarea class="form-control" name="description" rows="3" placeholder="Mô tả công việc"><?php  echo $postInfo[0]->description; ?></textarea>
          </div>

          <div class="form-group col-xs-12 col-sm-6 col-md-4">
            <div class="input-group input-group-sm">
              <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
              <input type="text" name="address" class="form-control" placeholder="Địa chỉ, nơi làm việc" value="<?php  echo $postInfo[0]->address; ?>">
            </div>
          </div>

          <div class="form-group col-xs-12 col-sm-6 col-md-4">
            <div class="input-group input-group-sm">
              <span class="input-group-addon"><i class="fa fa-money"></i></span>
              <input type="text" name="salary" class="form-control" placeholder="Lương" value="<?php  echo $postInfo[0]->salary; ?>">
            </div>
          </div>
         

          


                   

            <?php $i =  1; foreach($resultTaxonomiesCategories as $taxonomyItem) { ?>
                <div class="form-group col-xs-12 col-sm-6 col-md-4">
                    <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-certificate"></i></span>
                    
                    <?php $categories =  $taxonomyItem->categories; ?>
                    <select id="<?php echo 'cat'.$i; ?>" class="form-control selectpicker" required>
                        
                        <?php foreach($categories as $category) { ?>
                            <option value="<?php echo $category->id; ?>" <?php if(in_array($category->id, $catOfPost)) { echo 'selected'; } ?>><?php echo $category->title; ?></option> 
                                <?php }?>
                        
                    </select>
                    </div>
                </div>
            <?php  $i++; }?>

            <input type="hidden"  name="categories" id="categories" >



        <div class="button-group">
          <div class="action-buttons">
            <div class="upload-button">
              <button id="btnSubmit" type="submit" class="btn btn-block btn-primary">Cập nhật</button>
              
            </div>
          </div>

          
        </div>

      </div>
    </header>
    <!-- END Page header -->


   
    </form>
    @include('frontend.components.footer')
