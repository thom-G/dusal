@extends('layouts.master')

@section('content')
<div>
  <div class="row">

    <div class="col-md-7 _left">
      <div>
      <form action="/search" method="post">
            {!! csrf_field() !!}
            <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div>
                      <div class="input-group col-md-12">
                        <div class="input-group-btn">
                          <div class="styled-select blue">
                            <select name = "type">
                              <option value="1">Бүгд</option>
                              <option value="2">Гарчиг</option>
                              <option value="3">Түлхүүр үг</option>
                              <option value="4">Товч тайлбар</option>
                              <option value="5">Зохиолчоор</option>
                            </select>
                          </div>

                        </div>
                        <input type="text" class="form-control input-lg" name = "search" placeholder="Хайх үгээ оруулна уу" />
                        <span class="input-group-btn">
                            <button class="btn btn-primary btn-lg" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </span>
                      </div>
                    </div>
                </div>
            </div>
          </div>
        </form>
      </div>
      <div class="_uthsrti">
        <input class="btn btn-md btn-danger" value="13" type="button">
        <span>ЗИХИОЛЧИЙН</span>
        <input class="btn btn-md btn-danger" value="56" type="button"><span>БҮТЭЭЛ БАЙНА.</span>
      </div>
    </div>


    <div class="col-md-3 col-md-offset-2">
      <div class="blog-sidebar">
          <div class="sidebar-module sidebar-module-inset _viewevent">
            <h4>ЭШ хурлын тов</h4>
            <ul>
              @foreach($event as $event)
              
                <li><div class="row">
                  <span class="col-md-12">{{ $event->title }}</span>
                  <small class="col-md-12">{{ $event->when_year}} - {{ $event->when_month}} - {{$event->when_day}} <a href="/event/{{$event->id}}">Дэлгэрэнгүй ...</a></small>
                </div></li>
              
              @endforeach
            </ul>
            <div class="row">
              <span class="col-md-12">
                <a href="/events"><input type="button" class="btn btn-default btn-sm col-md-12" value="Бүх хурлын тов харах"/></a>
              </span>
            </div>
          </div>
       </div>
    </div>
  </div>
</div>
  <div class="row">
      <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h4 id = "birder" class="birder">Хамгийн их хандалттай бүтээл</h4>
          <ul>
           @foreach($most as $item)
            <li class="_listnone">
              <h5>
                <strong>{{$item->title}}</strong> by <strong>{{$item->publisher_name}}</strong>&nbsp;&nbsp;{{$item->publication_date}}
              </h5>
              Төрөл: <strong>{{$item->category_name}}</strong><br>
              <small>
              Товч танилцуулга: {{substr($item->some_text, 0, 165)}}&nbsp;&nbsp;<a href="/article/{{$item->id}}" >Дэлгэрэнгүй...</a>
              </small><br>
            </li>
          @endforeach
          </ul>
        </div>

        <div class="col-md-6">
          <h4 id = "birder">Шинээр нэмэгдсэн бүтээлүүд</h4>
          <ul>
          @foreach($last as $item)
            <li class="_listnone">
            <h5>
              <strong>{{$item->title}}</strong> by <strong>{{$item->publisher_name}}</strong>&nbsp;&nbsp;{{$item->publication_date}}
            </h5>
            Төрөл: <strong>{{$item->category_name}}</strong><br>
            <small>
            Товч танилцуулга: {{substr($item->some_text, 0, 165)}}&nbsp;&nbsp;<a href="/article/{{$item->id}}" >Дэлгэрэнгүй...</a>
            </small><br>
            </li>
          @endforeach
          </ul>
        </div>
        </div>
      </div>
  </div>
</div>
  <div class="container-fluid">
    <div class="row _supports">
      <div class="col-md-1 col-md-offset-1">
        <div class="_circle"><a href="http://zorigfoundation.org/" target="_blank"><img src="{{asset("img/zorigfoundation.png")}}"></a></div>
      </div>
      <div class="col-md-1">
        <div class="_circle"><a href="http://zorigfoundation.org/efp/" target="_blank"><img src="{{asset("img/efp.jpg")}}"></a></div>
      </div>
      <div class="col-md-1">
        <div class="_circle"><a href="http://www.xacbank.mn/" target="_blank"><img src="{{asset("img/hasbank.png")}}"></a></div>
      </div>
      <div class="col-md-1">
        <div class="_circle"><a href="http://www.num.edu.mn/" target="_blank"><img src="{{asset("img/muis.jpg")}}"></a></div>
      </div>
      <div class="col-md-1">
        <div class="_circle"><a href="http://mongolian.mongolia.usembassy.gov/" target="_blank"><img src="{{asset("img/us_emb.jpg")}}"></a></div>
      </div>
      <div class="col-md-1">
        <div class="_circle"><a href="http://zorigfoundation.org/" target="_blank"><img src="{{asset("img/zorigfoundation.png")}}"></a></div>
      </div>
      <div class="col-md-1">
        <div class="_circle"><a href="http://zorigfoundation.org/efp/" target="_blank"><img src="{{asset("img/efp.jpg")}}"></a></div>
      </div>
      <div class="col-md-1">
        <div class="_circle"><a href="http://www.xacbank.mn/" target="_blank"><img src="{{asset("img/hasbank.png")}}"></a></div>
      </div>
      <div class="col-md-1">
        <div class="_circle"><a href="http://www.num.edu.mn/" target="_blank"><img src="{{asset("img/muis.jpg")}}"></a></div>
      </div>
      <div class="col-md-1">
        <div class="_circle"><a href="http://mongolian.mongolia.usembassy.gov/" target="_blank"><img src="{{asset("img/us_emb.jpg")}}"></a></div>
      </div>
    </div>
  </div>
@endsection