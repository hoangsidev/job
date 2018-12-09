<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>Đăng ký</title>

    <!-- Styles -->
    <link href="{{url('/')}}/frontend/assets/css/app.min.css" rel="stylesheet">
    <link href="{{url('/')}}/frontend/assets/css/custom.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../apple-touch-icon.html">
    <link rel="icon" href="{{url('/')}}/frontend/assets/img/favicon.ico">
  </head>

  <body class="login-page">


    <main>

      <div class="login-block">
        <img src="{{url('/')}}/frontend/assets/img/logo.png" alt="">
        <h1>Mời nhập thông tin tài khoản</h1>

        <form action="/register" method="post">
        {{ csrf_field() }}
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-user"></i></span>
              <input type="text" id="username" name="username" class="form-control" placeholder="Tên tài khoản" required>
            </div>
          </div>
          <hr class="hr-xs">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-user"></i></span>
              <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Họ đệm" required>
            </div>
          </div>
          <hr class="hr-xs">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-user"></i></span>
              <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Tên" required>
            </div>
          </div>

          <hr class="hr-xs">

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-email"></i></span>
              <input type="email" id="email" name="email" class="form-control" placeholder="Địa chỉ email" required>
            </div>
          </div>
          
          <hr class="hr-xs">

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-unlock"></i></span>
              <input type="password" id="password" name="password" class="form-control" placeholder="Mật khẩu" required>
            </div>
          </div>

          <button class="btn btn-primary btn-block" type="submit">Đăng ký</button>

          <div class="login-footer">
            <h6>Đăng ký với</h6>
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>

        </form>
      </div>

      <div class="login-links">
        <p class="text-center">Bạn đã có tài khoản? <a class="txt-brand" href="user-login.html">Đăng nhập</a></p>
      </div>

    </main>


    <!-- Scripts -->
    <script src="{{url('/')}}/frontend/assets/js/app.min.js"></script>
    <script src="{{url('/')}}/frontend/assets/js/custom.js"></script>

  </body>

</html>
