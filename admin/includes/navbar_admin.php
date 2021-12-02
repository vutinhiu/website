<!-- Topbar -->

<nav CLASS="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
  
  <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" CLASS="btn btn-link d-md-none rounded-circle mr-3">
  <i CLASS="fa fa-bars"></i>
  </button>
  
  <!-- Topbar Search -->
  
  <div CLASS="input-group">
    <input type="text" CLASS="form-control bg-light border-0 small" placeholder="Tìm kiếm..." aria-label="Search" aria-describedby="basic-addon2">
    <div CLASS="input-group-append">
      <button CLASS="btn btn-info" type="button">
      <i CLASS="fas fa-search fa-sm"></i>
      </button>
    </div>
  </div>
  
  
  <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
    
    <!-- Nav Item - Alerts -->
    
    
    <div CLASS="topbar-divider d-none d-sm-block"></div>
    
    <!-- Nav Item - User Information -->
    <li CLASS="nav-item dropdown no-arrow">
      <a CLASS="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span CLASS="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['dangnhap'] ?>
        </span>
        <i class="fas fa-user-circle"></i>
      </a>
      <!-- Dropdown - User Information-->
      <div CLASS="dropdown-menu dropdown-menu-right shadow animated-grow-in" aria-labelledby="userDropdown">
        <a CLASS="dropdown-item btn-info" href="#" id="profile" role="button" data-toggle="dropdown"><i CLASS="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
          Cá nhân
        </a>
        <div CLASS="dropdown-list dropdown-menu dropdown-menu-right shadow animated-grow-in" aria-labelledby="profile" style="top: 12px; right: 165px; ">
          <h6 CLASS="dropdown-header bg-info">
          Thông tin cá nhân
          </h6>
        </div> 
        <div CLASS="dropdown-divider"></div>
        <a class="dropdown-item btn-info" href="?login=dangxuat">
          <i CLASS="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Đăng xuất
        </a>
      </div>
    </li>
    
  </ul>
  
</nav>
<!-- End of Topbar -->