<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>TheJobs</title>

    <!-- Styles -->
    <link href="{{url('/')}}/frontend/assets/css/app.min.css" rel="stylesheet">
    <link href="{{url('/')}}/frontend/assets/css/custom.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../apple-touch-icon.html">
    <link rel="icon" href="{{url('/')}}/frontend/assets/img/favicon.ico">
  </head>

  <body class="nav-on-header smart-nav">

    <!-- Navigation bar -->
    <nav class="navbar">
      <div class="container">

        <!-- Logo -->
        <div class="pull-left">
          <a class="navbar-toggle" href="#" data-toggle="offcanvas"><i class="ti-menu"></i></a>

          <div class="logo-wrapper">
            <a class="logo" href="index.html"><img src="{{url('/')}}/frontend/assets/img/logo.png" alt="logo"></a>
            <a class="logo-alt" href="index.html"><img src="{{url('/')}}/frontend/assets/img/logo-alt.png" alt="logo-alt"></a>
          </div>

        </div>
        <!-- END Logo -->

        <!-- User account -->
        <div class="pull-right user-login">
          <a class="btn btn-sm btn-primary" href="user-login.html">Đăng nhập</a> or <a href="user-register.html">Đăng ký</a>
        </div>
        <!-- END User account -->

        <!-- Navigation menu -->
        <!-- <ul class="nav-menu">
          <li>
            <a class="active" href="index.html">Home</a>
            <ul>
              <li><a class="active" href="index.html">Version 1</a></li>
              <li><a href="index-2.html">Version 2</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Position</a>
            <ul>
              <li><a href="job-list-1.html">Browse jobs - 1</a></li>
              <li><a href="job-list-2.html">Browse jobs - 2</a></li>
              <li><a href="job-list-3.html">Browse jobs - 3</a></li>
              <li><a href="job-detail.html">Job detail</a></li>
              <li><a href="job-apply.html">Apply for job</a></li>
              <li><a href="job-add.html">Post a job</a></li>
              <li><a href="job-manage.html">Manage jobs</a></li>
              <li><a href="job-candidates.html">Candidates</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Resume</a>
            <ul>
              <li><a href="resume-list.html">Browse resumes</a></li>
              <li><a href="resume-detail.html">Resume detail</a></li>
              <li><a href="resume-add.html">Create a resume</a></li>
              <li><a href="resume-manage.html">Manage resumes</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Company</a>
            <ul>
              <li><a href="company-list.html">Browse companies</a></li>
              <li><a href="company-detail.html">Company detail</a></li>
              <li><a href="company-add.html">Create a company</a></li>
              <li><a href="company-manage.html">Manage companies</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Pages</a>
            <ul>
              <li><a href="page-blog.html">Blog</a></li>
              <li><a href="page-post.html">Blog-post</a></li>
              <li><a href="page-about.html">About</a></li>
              <li><a href="page-contact.html">Contact</a></li>
              <li><a href="page-faq.html">FAQ</a></li>
              <li><a href="page-pricing.html">Pricing</a></li>
              <li><a href="page-typography.html">Typography</a></li>
              <li><a href="page-ui-elements.html">UI elements</a></li>
            </ul>
          </li>
        </ul> -->
        <!-- END Navigation menu -->

      </div>
    </nav>
    <!-- END Navigation bar -->


    <!-- Site header -->
    <header class="site-header size-lg text-center" style="background-image: url({{url('/')}}/frontend/assets/img/bg-banner1.jpg)">
      <div class="container">
        <div class="col-xs-12">
          <br><br>
          <h2>Chúng tôi cung cấp hơn <mark>1,259</mark> công việc!</h2>
          <h5 class="font-alt">Tìm được công việc với bạn chỉ trong vài phút</h5>
          <br><br><br>
          <form class="header-job-search">
            <div class="input-keyword">
              <input type="text" class="form-control" placeholder="Tên công việc, vị trí, kỹ năng,...">
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
              <a class="item-block" href="job-detail.html">
                <header>
                  <img src="assets/img/logo-google.jpg" alt="">
                  <div class="hgroup">
                    <h4><?php  echo $post->title; ?></h4>
                    <h5>Google</h5>
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
          <p class="text-center"><a class="btn btn-info" href="job-list.html">Xem thêm</a></p>
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
            <a class="btn btn-primary" href="page-typography.html">Xem thêm</a>
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
    <footer class="site-footer">

      <!-- Top section -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>Giới thiệu</h6>
            <p class="text-justify">Một trang website để tìm kiếm việc làm phù hợp. Trang web việc làm được thiết kế để cho phép nhà tuyển dụng đăng yêu cầu công việc cho một vị trí cần tuyển. Cung cấp đánh giá sử dụng lao động, tư vấn nghề nghiệp và tìm kiếm việc làm, và mô tả các mô tả công việc khác nhau hoặc sử dụng lao động. Thông qua một trang web việc làm, một nhân viên tương lai có thể xác định vị trí và điền đơn xin việc.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Công ty</h6>
            <ul class="footer-links">
              <li><a href="page-about.html">Về chúng tôi</a></li>
              <li><a href="page-typography.html">Cách làm việc</a></li>
              <li><a href="page-faq.html">Trợ giúp</a></li>
              <li><a href="page-typography.html">Chính sách bảo mật</a></li>
              <li><a href="page-contact.html">Liên hệ với chúng tôi</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Xu hướng công việc</h6>
            <ul class="footer-links">
              <li><a href="job-list.html">Front-end developer</a></li>
              <li><a href="job-list.html">Android developer</a></li>
              <li><a href="job-list.html">iOS developer</a></li>
              <li><a href="job-list.html">Full stack developer</a></li>
              <li><a href="job-list.html">Project administrator</a></li>
            </ul>
          </div>
        </div>

        <hr>
      </div>
      <!-- END Top section -->

      <!-- Bottom section -->
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyrights &copy; 2018 All Rights Reserved by <a href="#">TheJobs</a>.</p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- END Bottom section -->

    </footer>
    <!-- END Site footer -->


    <!-- Back to top button -->
    <a id="scroll-up" href="#"><i class="ti-angle-up"></i></a>
    <!-- END Back to top button -->

    <!-- Scripts -->
    <script src="{{url('/')}}/frontend/assets/js/app.min.js"></script>
    <script src="{{url('/')}}/frontend/assets/js/custom.js"></script>

  </body>

<!-- Mirrored from thetheme.io/thejobs/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Dec 2018 10:33:30 GMT -->
</html>
