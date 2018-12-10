<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>Thông tin người dùng</title>

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
        <h1>Thông tin người dùng</h1>

      <form action="/information/<?php  echo $information[0]->id; ?>/update" method="post" class="example-form">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-user"></i></span>
              <input type="text" id="username" name="username" class="form-control" placeholder="Tên tài khoản" value="<?php  echo $information[0]->username; ?>" readonly>
            </div>
          </div>
          <hr class="hr-xs">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-user"></i></span>
              <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Họ đệm" value="<?php  echo $information[0]->first_name; ?>">
            </div>
          </div>
          <hr class="hr-xs">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-user"></i></span>
              <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Tên" value="<?php  echo $information[0]->last_name; ?>">
            </div>
          </div>

          <hr class="hr-xs">

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-email"></i></span>
              <input type="email" id="email" name="email" class="form-control" placeholder="Địa chỉ email" value="<?php  echo $information[0]->email; ?>">
            </div>
          </div>
          
          <hr class="hr-xs">

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-unlock"></i></span>
              <input type="password" id="password" name="password" class="form-control" placeholder="Mật khẩu" value="<?php  echo $information[0]->password; ?>">
            </div>
          </div>

      
          <button type="submit" class="btn btn-primary btn-block">Cập nhật thông tin</button>
          </form>
      </div>      
    </main>
    <!-- Scripts -->
    <script src="{{url('/')}}/frontend/assets/js/app.min.js"></script>
    <script src="{{url('/')}}/frontend/assets/js/custom.js"></script>

  </body>

</html>
