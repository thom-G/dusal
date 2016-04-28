    <header class="main-header">
      <a href="#" class="logo">
        <p>Admin</p>
        <span class="logo-lg"></span>
      </a>
         
         <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="label label-primary" id = "lbl-info">
                  </span>
                  <span class="ion ion-clock"></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">
                    <li>
                    <ul class="menu">
                        <li>
                          <a href="#">
                            <h4>
                              <small><i class="fa fa-clock-o"></i></small>
                            </h4>
                            <p></p>
                          </a>
                        </li>
                    </ul>
                  </li>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset('admin/6xfI4avatar04.png') }}" class="user-image" alt="User Image">
                  <span class="hidden-xs">Admin</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-header">
                      {{-- <img src="{{ asset('admin/6xfI4avatar04.png') }}" class="user-image" alt="User Image"> --}}
                    <p>
                      <small></small>
                    </p>
                  </li>
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
    </header>
