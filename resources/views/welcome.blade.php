@extends('layouts.master')

@section('content')
<div class="row">
{{--     <div class="col-md-3">
      <div class="blog-sidebar _holsites">
          <div class="sidebar-module sidebar-module-inset">
            <h4>Холбогдолтой сайтууд</h4><hr>
            <ul>
              <li><a href="http://www.mne.mn" target="_blank">Монгол Улсын Байгаль Орчны Яам</a></li>
              <li><a href="http://www.arigsor.mn" target="_blank">Байгаль орчны лавлах</a></li>
              <li><a href="http://www.icc.mn" target="_blank">Ус цаг уур, орчны судалгаа, мэдээллийн хүрээлэн</a></li>
              <li><a href="http://www.eic.mn/" target="_blank">Байгаль орчны мэдээллийн сан</a></li>
            </ul>
          </div>
       </div>
    </div>
<<<<<<< HEAD

    <div class="col-md-6 _center">
      <form action="/search" method="post">
          {!! csrf_field() !!}
          <input type = "text" name = "search">
          <input type="submit"> `1
      </form>
=======
 --}}
    <div class="col-md-9 _left">
    </div>

    <div class="col-md-3">
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