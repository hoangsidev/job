
@include('frontend.components.header')

    <!-- Page header -->
    <header class="page-header">
      <div class="container page-name">
        <h1 class="text-center">Thêm tin tuyển dụng mới</h1>
        <p class="lead text-center">Tạo một vị trí cần tuyển dụng mới.</p>
      </div>

      <div class="container">
      <form action="/postemployer" method="POST" enctype="multipart/form-data" class="form-horizontal" id="formData">
                    {{ csrf_field() }}
        <div class="row">
          <div class="form-group col-xs-12 col-sm-6">
            <input type="text" name="title" class="form-control input-lg" placeholder="Tiêu đề tuyển dụng" required>
          </div>

          <div class="form-group col-xs-12 col-sm-6">
            <input type="text" name="company" class="form-control input-lg" placeholder="Tên công ty của bạn" required>
          </div>

          <div class="form-group col-xs-12">
            <textarea class="form-control" name="content" rows="3" placeholder="Nội dung công việc của bạn" required></textarea>
          </div>

          <div class="form-group col-xs-12 col-sm-6 col-md-4">
            <div class="input-group input-group-sm">
              <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
              <input type="text" name="address" class="form-control" placeholder="Địa chỉ, nơi làm việc" required>
            </div>
          </div>

          <div class="form-group col-xs-12 col-sm-6 col-md-4">
            <div class="input-group input-group-sm">
              <span class="input-group-addon"><i class="fa fa-money"></i></span>
              <input type="text" name="salary" class="form-control" placeholder="Lương" required>
            </div>
          </div>
         

          


                   

            <?php $i =  1; foreach($resultTaxonomiesCategories as $taxonomyItem) { ?>
                <div class="form-group col-xs-12 col-sm-6 col-md-4">
                    <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-certificate"></i></span>
                    
                    <?php $categories =  $taxonomyItem->categories; ?>
                    <select id="<?php echo 'cat'.$i; ?>" class="form-control selectpicker" required>
                        <option selected><?php echo $taxonomyItem->title; ?></option>
                        <?php foreach($categories as $category) { ?>
                            <option value="<?php echo $category->id; ?>"><?php echo $category->title; ?></option> 
                                <?php }?>
                        
                    </select>
                    </div>
                </div>
            <?php  $i++; }?>





        <div class="button-group">
          <div class="action-buttons">
            <div class="upload-button">
              <button class="btn btn-block btn-primary">Chọn hình công ty của bạn</button>
              <input id="cover_img_file" type="file">
            </div>
          </div>
        </div>

      </div>
    </header>
    <!-- END Page header -->


    <!-- Main container -->
    <main>

        <!-- Submit -->
        <section class="bg-alt">
          <div class="container">
            <header class="section-header">
              <span>Bạn đã điền đầy đủ thông tin?</span>
              <h2>Đăng tin</h2>
              <p>Vui lòng kiểm tra lại thông tin một lần nữa trước khi nhấn đăng tin.</p>
            </header>

            <p class="text-center"><button type="submit" class="btn btn-success btn-xl btn-round">Đăng tin</button></p>

          </div>
        </section>
        <!-- END Submit -->
        </form>

    </main>
    <!-- END Main container -->

    @include('frontend.components.footer')
