<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>Đăng nhập</title>

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
        <h1>Đăng nhập</h1>

          <span style="color:red;"><?php echo $error;  ?></span>
        <form action="/login" method="post">
        {{ csrf_field() }}
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-user"></i></span>
              <input type="text" id="username" name="username" class="form-control" placeholder="Tên tài khoản">
            </div>
          </div>
          
          <hr class="hr-xs">

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-unlock"></i></span>
              <input type="password" id="password" name="password" class="form-control" placeholder="Mật khẩu">
            </div>
          </div>

          <button class="btn btn-primary btn-block" type="submit">Đăng nhập</button>

          <div class="login-footer">
            <h6>Đăng nhập với</h6>
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>

        </form>
      </div>

      <div class="login-links">
        <a class="pull-left" href="user-forget-pass.html">Quên mật khẩu?</a>
        <a class="pull-right" href="user-register.html">Tạo tài khoản</a>
      </div>

    </main>


    <!-- Scripts -->
    <script src="{{url('/')}}/frontend/assets/js/app.min.js"></script>
    <script src="{{url('/')}}/frontend/assets/js/custom.js"></script>

  </body>

</html>
