<aside class="left-panel">
      
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