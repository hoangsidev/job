@include('frontend.components.header')
    <!-- Page header -->
    
    <header class="page-header bg-img size-lg" style="background-image: url({{url('/')}}/frontend/assets/img/bg-banner2.jpg)">
      <div class="container">
        <div class="header-detail">
          <img class="logo" src="{{url('/')}}/frontend/assets/img/logo-google.jpg" alt="">
          <div class="hgroup">
            <h1><?php  echo $detailPost[0]->title; ?></h1>
            <h3><a href="#"><?php  echo $detailPost[0]->company; ?></a></h3>
          </div>
          <time datetime="2016-03-03 20:00">2 days ago</time>
          <hr>
          <p class="lead"><?php  echo $detailPost[0]->content; ?></p>

          <ul class="details cols-3">
            <li>
              <i class="fa fa-map-marker"></i>
              <span><?php  echo $detailPost[0]->address; ?></span>
            </li>

            <li>
              <i class="fa fa-briefcase"></i>
              <span>Full time</span>
            </li>

            <li>
              <i class="fa fa-money"></i>
              <span><?php  echo $detailPost[0]->salary; ?>$ / tháng</span>
            </li>

            <li>
              <i class="fa fa-clock-o"></i>
              <span>40h / week</span>
            </li>

            <li>
              <i class="fa fa-flask"></i>
              <span>2+ years experience</span>
            </li>

            <li>
              <i class="fa fa-certificate"></i>
              <a href="#">Master or Bachelor</a>
            </li>
          </ul>

          <div class="button-group">
            

            <div class="action-buttons">
              
              <a class="btn btn-success" href="#">Nộp hồ sơ</a>
            </div>
          </div>

        </div>
      </div>
    </header>
    <!-- END Page header -->


    <!-- Main container -->
    <main>

      <!-- Job detail -->
      <section>
        <div class="container">
        <h3>Mô tả công việc:</h3>
          <?php  echo $detailPost[0]->description; ?>

        </div>
      </section>
      <!-- END Job detail -->

    </main>
    <!-- END Main container -->
    
@include('frontend.components.footer')