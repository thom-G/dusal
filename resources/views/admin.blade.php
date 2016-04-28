<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('admin/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('admin/skin-blue.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/mystyle.css') }}" rel="stylesheet" type="text/css" >
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
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
                      <img src="{{ asset('admin/6xfI4avatar04.png') }}" class="user-image" alt="User Image">
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
            <li><a href="#">
              <i class="fa fa-archive"></i> <span>All Tickets</span></a></li>
            <li><a href="#">
              <i class="fa fa-laptop"></i> <span>Devices</span></a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-edit"></i> <span>Register</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Ticket</a></li>
                <li><a href="#">Device</a></li>
              </ul>
            </li>
            </ul>
        </section>
    </aside>

    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Нийтлэгдээгүй Бүтээлүүд</h3>
                        </div>
                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Publisher</th>
                                        <th>Created Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pendings as $ticket)
                                        <tr>
                                            <td><a href = "/adminpage/show/{{$ticket->id}}">#{{$ticket->id}}</a></td>
                                            <td>{{$ticket->title}}</td>
                                            <td>{{$ticket->f_name}}</td>
                                            <td>{{$ticket->created_at}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class = "row">
                                <div class="col-md-4 col-md-offset-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
          Supreme Solution LLC
      </div>
      <strong>Copyright &copy; 2016 <a href="#">SupremeSolution</a>.</strong> All rights reserved.
    </footer>
  </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/app.min.js') }}"></script>
   
</body>
</html>