    <aside class="main-sidebar">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('admin/6xfI4avatar04.png') }}" class="user-image" alt="User Image">
              <a href="#"></i></a>
            </div>
          </div>
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <li class="treeview">
              <a href="#"><i class="fa fa-archive"></i> <span>Бүтээлүүд</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="/new">Шинээр үүсгэх</a></li>
                <li><a href="/dashboard/articles/requests">Ирсэн бүтээлүүд</a></li>
              </ul>
            </li><li class="treeview">
              <a href="#"><i class="fa fa-edit"></i> <span>Үйл ажиллагаа</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="/dashboard/events/create">Шинээр үүсгэх</a></li>
                <li><a href="/dashboard/events">Бүх үйл ажиллагаа</a></li>
              </ul>
            </li>
            </ul>
        </section>
    </aside>
