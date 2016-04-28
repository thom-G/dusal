@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-3">
      <div class="blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
       </div>
    </div>

    <div class="col-md-6 _center">
      d
    </div>

    <div class="col-md-3">
      <div class="blog-sidebar">
          <div class="sidebar-module sidebar-module-inset _viewevent">
            <h4>ЭШ хурлын тов</h4><hr>
            <ul>
              @foreach($event as $event)
              
                <li><div class="row">
                  <span class="col-md-12">{{ $event->title }}</span>
                  <small class="col-md-12">{{ $event->when_year}} / {{ $event->when_month}} / {{$event->when_day}} <a href="/event/{{$event->id}}">Дэлгэрэнгүй ...</a></small>
                </div></li>
              
              @endforeach
            </ul>
            <div class="row">
              <span class="col-md-12">
                <a href="/events"><input type="button" class="btn btn-default btn-sm col-md-12" value="Бүх үйл ажиллагаа харах"/></a>
              </span>
            </div>
          </div>
       </div>
    </div>

    <div class="row">
      <div class="col-md-5">
        <h3>Хамгийн их хандалттай бүтээл</h3>
      </div>

      <div class="col-md-5 col-md-offset-2">
        <h3>Шинээр нэмэгдсэн бүтээлүүд</h3>
      </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 _maxcount">
        <div class="row _maxc">
           f <div clss="col-md-"></div>
        </div>
    </div>
    <div class="col-md-6 _newarticles">
        <div class="row _nart">
          f
        </div>
    </div>
</div>
@endsection