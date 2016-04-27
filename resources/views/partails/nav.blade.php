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
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Нүүр хуудас</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Математик <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Судалгааны бүтээл</a></li>
                <li><a href="#">Эрдэм шинжилгээний хурлын илтгэл, эмхтгэл</a></li>
                <li><a href="#">Лекц</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Физик <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Судалгааны бүтээл</a></li>
                <li><a href="#">Эрдэм шинжилгээний хурлын илтгэл, эмхтгэл</a></li>
                <li><a href="#">Лекц</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Хими <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Судалгааны бүтээл</a></li>
                <li><a href="#">Эрдэм шинжилгээний хурлын илтгэл, эмхтгэл</a></li>
                <li><a href="#">Лекц</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Газарзүй, Геологи <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Судалгааны бүтээл</a></li>
                <li><a href="#">Эрдэм шинжилгээний хурлын илтгэл, эмхтгэл</a></li>
                <li><a href="#">Лекц</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ХАА, Биологи <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Судалгааны бүтээл</a></li>
                <li><a href="#">Эрдэм шинжилгээний хурлын илтгэл, эмхтгэл</a></li>
                <li><a href="#">Лекц</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  <span class="glyphicon glyphicon-user"></span>
                <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li data-toggle="modal" data-target="#loginModal"><a href="#">Нэвтрэх</a></li>
                <li data-toggle="modal" data-target="#registerModal"><a href="#">Бүртгүүлэх</a></li>
              </ul>
            </li>
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
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>