<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Нүүр хуудас</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Математик <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/article/category/1/1">Судалгааны бүтээл</a></li>
                <li><a href="/article/category/1/2">Эрдэм шинжилгээний хурлын илтгэл, эмхтгэл</a></li>
                <li><a href="/article/category/1/3">Лекц</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Физик <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/article/category/2/1">Судалгааны бүтээл</a></li>
                <li><a href="/article/category/2/2">Эрдэм шинжилгээний хурлын илтгэл, эмхтгэл</a></li>
                <li><a href="/article/category/2/3">Лекц</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Хими <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/article/category/3/1">Судалгааны бүтээл</a></li>
                <li><a href="/article/category/3/2">Эрдэм шинжилгээний хурлын илтгэл, эмхтгэл</a></li>
                <li><a href="/article/category/3/3">Лекц</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Газарзүй, Геологи <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/article/category/4/1">Судалгааны бүтээл</a></li>
                <li><a href="/article/category/4/2">Эрдэм шинжилгээний хурлын илтгэл, эмхтгэл</a></li>
                <li><a href="/article/category/4/3">Лекц</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ХАА, Биологи <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/article/category/5/1">Судалгааны бүтээл</a></li>
                <li><a href="/article/category/5/2">Эрдэм шинжилгээний хурлын илтгэл, эмхтгэл</a></li>
                <li><a href="/article/category/5/3">Лекц</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            @if(Auth::check())
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  <img src="/uploads/{{Auth::user()->image}}" width="30" height="30">
                    <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    @if(Auth::user()->type == 2)
                      <li><a href="#">Profile</a></li>
                      <li><a href="/logout">Logout</a></li>
                    @elseif(Auth::user()->type == 1)
                      <li><a href="#">Dashboard</a></li>
                      <li><a href="/logout">Logout</a></li>
                    @else 
                      <li><a href="#">Profile</a></li>
                      <li><a href="/new">Бүтээл нэмэх</a></li>
                      <li><a href="/logout">Logout</a></li>
                    @endif
                  </ul>
                </li>
            @else 
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  <span class="glyphicon glyphicon-user"></span>
                  <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li data-toggle="modal" data-target="#loginModal"><a href="#">Нэвтрэх</a></li>
                  <li data-toggle="modal" data-target="#registerModal"><a href="#">Бүртгүүлэх</a></li>
                </ul>
              </li>
            @endif
{{--             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ХАА, Биологи <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Судалгааны бүтээл</a></li>
                <li><a href="#">Эрдэм шинжилгээний хурлын илтгэл, эмхтгэл</a></li>
                <li><a href="#">Лекц</a></li>
              </ul>
            </li>
 --}}            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


<!-- Login Modal -->
<div id="loginModal" class="modal fade " role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Нэвтрэх</h4>
      </div>
      <div class="modal-body">
        <form role="form" action="/login" method="post">
          {!! csrf_field() !!}
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name = "password">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </div>

  </div>
</div>

<!-- Register Modal -->
<div id="registerModal" class="modal fade " role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Бүртгүүлэх</h4>
      </div>
      <div class="modal-body">
        <form role="form" action="/register" method="post" enctype="multipart/form-data">
          {!! csrf_field() !!}
          <div class="form-group">
            <label for="email">First Name:</label>
            <input type="text" class="form-control" id="f_name" placeholder="Enter first name" name="f_name">
          </div>
          <div class="form-group">
            <label for="email">Last Name:</label>
            <input type="text" class="form-control" id="f_name" placeholder="Enter last name" name="l_name">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
          </div>
          <div class="form-group">
            <label for="email">Type:</label>
            <select name = "type">
              <option value="2">
                Хэрэглэгч
              </option>
              <option value="3">
                Зохиолч
              </option>
            </select>
          </div>
          <div class="form-group">
            <label for="pwd">Profile Picture:</label>
            <input type="file" class="form-control" id="pwd" name = "image">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name = "password">
          </div>
          <div class="form-group">
            <label for="pwd">Password Confirmation:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Confirm password" name="password_confirmation">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </div>

  </div>
</div>