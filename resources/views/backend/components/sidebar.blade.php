<aside class="left-panel">
      <div class="user-card background-bg" data-image-src="{{url('/')}}/images/bg5.jpg">
        <a href="#">
          <div class="avatar mr-3 float-left"><img class="rounded-circle" src="{{url('/')}}/images/avatar/4.jpg" alt="Avatar"></div><!-- /.avatar -->
          <div class="details">
            <h4 class="name">Bobby Payne</h4><!-- /.name -->
            <span class="designation">Designer</span><!-- /.designation -->
          </div><!-- /.details -->
        </a>
      </div>
      <nav class="navbar">
        <ul class="navbar-nav">


         <li class="nav-item dropdown active show">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <i class="fa fa-dashboard"></i> <span class="menu-title">Tin tuyển dụng</span>
            </a>
            <div class="dropdown-menu show">
              <a class="dropdown-item" href="{{url('/')}}/admin/posts?orderBy=created_at&order=DESC">Danh sách tin</a>
              <a class="dropdown-item" href="{{url('/')}}/admin/posts/create">Tạo mới tin</a>
            </div>
          </li>

          <li class="nav-item dropdown active show">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <i class="fa fa-dashboard"></i> <span class="menu-title">Chuyên mục</span>
            </a>
            <div class="dropdown-menu show">
              <a class="dropdown-item" href="{{url('/')}}/admin/categories?orderBy=created_at&order=DESC">Danh sách chuyên mục</a>
              <a class="dropdown-item" href="{{url('/')}}/admin/categories/create">Tạo chuyên mục mới</a>
            </div>
          </li>

          <li class="nav-item dropdown active show">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <i class="fa fa-dashboard"></i> <span class="menu-title">Người dùng</span>
            </a>
            <div class="dropdown-menu show">
              <a class="dropdown-item" href="{{url('/')}}/admin/users?orderBy=created_at&order=DESC">Danh sách người dùng</a>
              <a class="dropdown-item" href="{{url('/')}}/admin/users/create">Tạo người dùng mới</a>
            </div>
          </li>

        

          
       

        </ul>
      </nav>
    </aside>