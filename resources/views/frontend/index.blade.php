
@include('frontend.components.header')
    <!-- Site header -->
    <header class="site-header size-lg text-center" style="background-image: url({{url('/')}}/frontend/assets/img/bg-banner1.jpg)">

      <div class="container">
        <div class="col-xs-12">
          <br><br>
          <h2>Chúng tôi cung cấp hơn <mark>1,259</mark> công việc!</h2>
          <h5 class="font-alt">Tìm được công việc với bạn chỉ trong vài phút</h5>
          <br><br><br>
          <form action="/search" method="GET" class="header-job-search">
            <div class="input-keyword">
              <input type="text" name="search" class="form-control" placeholder="Tên công việc, vị trí, kỹ năng,..." required>
            </div>

            <!-- <div class="input-location">
              <input type="text" class="form-control" placeholder="Chọn thành phố">
            </div> -->

            <div class="btn-search">
              <button class="btn btn-primary" type="submit">Tìm kiếm</button>
              <!-- <a href="job-list.html">Advanced Job Search</a> -->
            </div>
          </form>
        </div>

      </div>
    </header>
    <!-- END Site header -->


    <!-- Main container -->
    <main>



      <!-- Recent jobs -->
      <section>
        <div class="container">
          <header class="section-header">
            <span>Công việc</span>
            <h2>Công việc đăng gần đây</h2>
          </header>

          <div class="row item-blocks-connected">

             <?php foreach($listPosts as $post) { ?>

            <!-- Job item -->
            <div class="col-xs-12">
              <a class="item-block" href="/detail/<?php echo $post->id; ?>">
                <header>
                  <img src="assets/img/logo-google.jpg" alt="">
                  <div class="hgroup">
                    <h4><?php  echo $post->title; ?></h4>
                    <h5><?php  echo $post->company; ?></h5>
                  </div>
                  <div class="header-meta">
                    <span class="location">Menlo park, CA</span>
                    <span class="label label-success">Full-time</span>
                  </div>
                </header>
              </a>
            </div>
            <!-- END Job item -->
            <?php }?>

          

          </div>

          <br><br>
          <p class="text-center"><a class="btn btn-info" href="/search">Xem thêm</a></p>
        </div>
      </section>
      <!-- END Recent jobs -->


      <!-- Facts -->
      <section class="bg-img bg-repeat no-overlay section-sm" style="background-image: url({{url('/')}}/frontend/assets/img/bg-pattern.png)">
        <div class="container">

          <div class="row">
            <div class="counter col-md-3 col-sm-6">
              <p><span data-from="0" data-to="6890"></span>+</p>
              <h6>Công việc</h6>
            </div>

            <div class="counter col-md-3 col-sm-6">
              <p><span data-from="0" data-to="1200"></span>+</p>
              <h6>Thành viên</h6>
            </div>

            <div class="counter col-md-3 col-sm-6">
              <p><span data-from="0" data-to="36800"></span>+</p>
              <h6>Hồ Sơ</h6>
            </div>

            <div class="counter col-md-3 col-sm-6">
              <p><span data-from="0" data-to="15400"></span>+</p>
              <h6>Công ty</h6>
            </div>
          </div>

        </div>
      </section>
      <!-- END Facts -->


      <!-- How it works -->
      <section>
        <div class="container">

          <div class="col-sm-12 col-md-6">
            <header class="section-header text-left">
              <span>Bài viết nổi bật</span>
              <h2>Bí quyết</h2>
            </header>

            <p class="lead">Bí quyết thiết lập sự tự tin một cách nhanh chóng để được nể trọng.</p>
            <p>Dù bạn là người thông minh, suy nghĩ thấu đáo và đáng tin cậy, không có nghĩa là mọi người hiểu đúng về bạn như vậy. Nếu bạn muốn bạn bè, đồng nghiệp nể trọng mình, bạn phải suy nghĩ một cách nghiêm túc về hình ảnh cá nhân mình đang tạo ra, từ cách ăn mặc, phong cách trò chuyện đến ngôn ngữ cơ thể.</p>
            
            
            <br><br>
            <a class="btn btn-primary" href="/newspaper">Xem thêm</a>
          </div>

          <div class="col-sm-12 col-md-6 hidden-xs hidden-sm">
            <br>
            <img class="center-block" src="{{url('/')}}/frontend/assets/img/how-it-works.png" alt="how it works">
          </div>

        </div>
      </section>
      <!-- END How it works -->


      <!-- Categories -->
      <section class="bg-alt">
        <div class="container">
          <header class="section-header">
            <span>Danh mục</span>
            <h2>Danh mục nổi bật</h2>
            <p>Đây là những danh mục phổ biến nhất</p>
          </header>

          <div class="category-grid">
            <a href="job-list-1.html">
              <i class="fa fa-laptop"></i>
              <h6>Technology</h6>
              <p>Designer, Developer, IT Service, Front-end developer, Project management</p>
            </a>

            <a href="job-list-2.html">
              <i class="fa fa-line-chart"></i>
              <h6>Accounting</h6>
              <p>Finance, Tax service, Payroll manager, Book keeper, Human resource</p>
            </a>

            <a href="job-list-3.html">
              <i class="fa fa-medkit"></i>
              <h6>Medical</h6>
              <p>Doctor, Nurse, Hospotal, Dental service, Massagist</p>
            </a>

            <a href="job-list-1.html">
              <i class="fa fa-cutlery"></i>
              <h6>Food</h6>
              <p>Restaurant, Food service, Coffe shop, Cashier, Waitress</p>
            </a>

            <a href="job-list-2.html">
              <i class="fa fa-newspaper-o"></i>
              <h6>Media</h6>
              <p>Journalism, Newspaper, Reporter, Writer, Cameraman</p>
            </a>

            <a href="job-list-3.html">
              <i class="fa fa-institution"></i>
              <h6>Government</h6>
              <p>Federal, Law, Human resource, Manager, Biologist</p>
            </a> 
          </div>

        </div>
      </section>
      <!-- END Categories -->


      <!-- Newsletter -->
      <section class="bg-img text-center" style="background-image: url({{url('/')}}/frontend/assets/img/bg-facts.jpg)">
        <div class="container">
          <h2><strong>Đăng ký</strong></h2>
          <h6 class="font-alt">Nhận công việc mới hàng tuần được gửi đến hộp thư đến của bạn</h6>
          <br><br>
          <form class="form-subscribe" action="#">
            <div class="input-group">
              <input type="text" class="form-control input-lg" placeholder="Địa chỉ email">
              <span class="input-group-btn">
                <button class="btn btn-success btn-lg" type="submit">Đăng ký</button>
              </span>
            </div>
          </form>
        </div>
      </section>
      <!-- END Newsletter -->


    </main>
    <!-- END Main container -->


    <!-- Site footer -->
    @include('frontend.components.footer')

