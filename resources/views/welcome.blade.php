@extends('layouts.master')

@section('content')
<div class="row">

    <div class="col-md-7 _center">
      <form action="/search" method="post">
          {!! csrf_field() !!}
          <div class="container">
          <div class="row">
              <div class="col-md-7">
                  <div id="custom-search-input">
                      <div class="input-group col-md-12">
                          <input type="text" class="form-control input-lg" placeholder="Buscar" />
                          <span class="input-group-btn">
                              <button class="btn btn-info btn-lg" type="button">
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
@endsection