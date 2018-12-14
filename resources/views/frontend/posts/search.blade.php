@include('frontend.components.header')

    <!-- Page header -->
    <header class="page-header bg-img" style="background-image: url({{url('/')}}/frontend/assets/img/bg-banner1.jpg);">
      <div class="container page-name">
      <form action="/search" method="GET" class="header-job-search">
            <div class="input-keyword">
              <input type="text" name="search" class="form-control" placeholder="Tên công việc, vị trí, kỹ năng,..." required>
            </div>
            <div class="btn-search">
              <button class="btn btn-primary" type="submit">Tìm kiếm</button>
              
            </div>
          </form>
        <h1 class="text-center">Kết quả tìm kiếm</h1>
        <p class="lead text-center">Đây là những công việc mới nhất phù hợp với nhu cầu tìm kiếm của bạn!</p>
      </div>

      

    </header>
    <!-- END Page header -->


    <!-- Main container -->
    <main>
      <section class="no-padding-top bg-alt">
        <div class="container">
          <div class="row item-blocks-condensed">
          <div class="col-xs-12">
              <br>
              <h5>Đây là kết quả tìm kiếm với từ khóa của bạn!</h5>
            </div>
            


            <?php foreach($listPosts as $post) { ?>
            <!-- Job item -->
            <div class="col-xs-12">
              <a class="item-block" href="/detail/<?php echo $post->id; ?>">
                <header>
                  <img src="{{url('/')}}/frontend/assets/img/logo-google.jpg" alt="">
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

<div class="text-center">{{ $listPosts->appends(request()->query())->links() }}</div>
          


        </div>
      </section>
    </main>
    <!-- END Main container -->


    <!-- Site footer -->
    @include('frontend.components.footer')