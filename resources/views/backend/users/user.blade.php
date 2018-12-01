<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>User Info</title>
  <meta name="description" content="Hi5Dash - HTML5 Admin Template By Jewel Theme">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" href="apple-touch-icon.html">

  <!-- Import Template Icons CSS Files -->
  <link rel="stylesheet" href="{{url('/')}}/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{url('/')}}/assets/css/simple-line-icons.css">
  <link rel="stylesheet" href="{{url('/')}}/assets/css/linea-basic.css">

  <!-- Import Custom Country Select CSS Files -->
  <link rel="stylesheet" href="{{url('/')}}/assets/css/countrySelect.min.css">

  <!-- Import Perfect ScrollBar CSS Files -->
  <link rel="stylesheet" href="{{url('/')}}/assets/css/perfect-scrollbar.css">   

  <!-- Import Bootstrap CSS File -->

  <link rel="stylesheet" href="{{url('/')}}/assets/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="../../../../cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

  <!-- Import Template's CSS Files -->
  <link rel="stylesheet" href="../assets/css/presets.css">
  <link rel="stylesheet" href="{{url('/')}}/assets/css/style.css">
  <link rel="stylesheet" href="{{url('/')}}/assets/css/tables/tables.css">
  <link rel="stylesheet" href="{{url('/')}}/assets/css/responsive.css">
  <link rel="stylesheet" href="{{url('/')}}/assets/css/custom.css">

</head>


<body>


  <header class="top-header media">
    <div class="top-left mr-3">
      <a class="navbar-brand" href="../index.html"><img src="../images/logo.png" alt="Site Logo"></a><!-- /.navbar-brand -->
    </div><!-- /.top-left -->
    
    <div class="top-right media-body">
      <div class="left-content float-left">
        <button class="sidenav-toggle mr-2"><i class="fa fa-bars"></i></button><!-- /.sidenav-toggle -->

        <form class="search-form" action="#">
          <input type="text" class="form-control" id="search1" placeholder="Search ...">
          <input type="submit" class="form-control" id="submit1">
        </form><!-- /.search-form -->
      </div><!-- /.left-content -->

      <div class="right-content float-right">
       

    

        

        <div class="dropdown user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="../images/avatar/1.jpg" class="rounded-circle float-left mr-2" alt="User Image">
            <span class="status"></span>
            <h4 class="name">Jonathon Doe</h4>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#"><i class="fa fa-user"></i> My Profile</a></li>
            <li><a href="#"><i class="fa fa-envelope"></i> Inbox</a></li>
            <li><a href="#"><i class="fa fa-gears"></i> Account Setting</a></li>
            <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
          </ul>
        </div>

      </div><!-- /.right-content -->
    </div><!-- /.top-right -->
  </header><!-- /.top-header -->


  <div class="content-wrapper container-fluid">
    <aside class="left-panel">
      <div class="user-card background-bg" data-image-src="../images/bg5.jpg">
        <a href="#">
          <div class="avatar mr-3 float-left"><img class="rounded-circle" src="../images/avatar/4.jpg" alt="Avatar"></div><!-- /.avatar -->
          <div class="details">
            <h4 class="name">Bobby Payne</h4><!-- /.name -->
            <span class="designation">Designer</span><!-- /.designation -->
          </div><!-- /.details -->
        </a>
      </div>
      <nav class="navbar">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}/admin/posts?orderBy=created_at&order=DESC">
              <i class="fa fa-calendar-o"></i> <span class="menu-title">Danh sách tin tuyển dụng</span>
            </a>
          </li>

           <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}/admin/users?orderBy=created_at&order=DESC">
              <i class="fa fa-calendar-o"></i> <span class="menu-title">Danh sách Users</span>
            </a>
          </li>
          
       

        </ul>
      </nav>
    </aside><!-- /.left-panel -->

    <div class="dashboard-contents">
      <div class="contents-inner">
        <div class="row">
          <div class="col-12">
            <div class="section-content">
              <div class="content-head">
                <h4 class="content-title">Danh sách người dùng</h4><!-- /.content-title -->
                
              </div><!-- /.content-head -->

              <div class="content-details show">
                <table id="data-table" class="table data-table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Tên</th> 
                    </tr>
                  </thead>
                  
                  <tbody>

                    <?php foreach($listUsers as $user) { ?>
                    <tr>
                      <td><?php  echo $user->id; ?></td>
                      <td><a href="#"><?php  echo $user->username; ?></a></td>
                      <td><?php  echo $user->email; ?></td>
                      <td>61</td> 
                    </tr>
                  <?php }?>



                    
                   
                  </tbody>

                 
                </table>

                <!-- paginate -->
                <div class="pagi">
                  {{ $listUsers->appends(request()->query())->links() }}
                </div>
                  <!-- end paginate -->
              </div><!-- /.content-details -->
            </div>
          </div>

        </div>
      </div><!-- /.contents-inner -->

      <footer class="site-footer">
        <div class="copyright">
          <div class="float-left">
            Copyright © 2018 <a href="#" target="_blank">Job-Hunter</a>
          </div>

          <!-- <div class="float-right">
            abc <a href="#" rel="nofollow">d</a>
          </div> -->
        </div><!-- /.copyright -->
      </footer><!-- /.site-footer -->
    </div><!-- /.dashboard-contents -->
  </div><!-- /.content-wrapper -->



  <script src="{{url('/')}}/assets/js/jquery-3.2.1.slim.min.js"></script>
  <script src="{{url('/')}}/assets/js/plugins.js"></script>
  <script src="{{url('/')}}/assets/js/tables/jquery.dataTables.min.js"></script>
  <script src="{{url('/')}}/assets/js/tables/dataTables.bootstrap4.min.js"></script>

  <script src="{{url('/')}}/assets/js/main.js"></script>

 
  

</body>
 
</html>