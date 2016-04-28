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
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
       </div>
    </div>

    <div class="row">
      <div class="col-md-5">
        <h3 id = "birder">Хамгийн их хандалттай бүтээл</h3>
         @foreach($most as $item)
          <h4>
            <strong>{{$item->title}}</strong> by <strong>{{$item->publisher_name}}</strong>&nbsp;&nbsp;{{$item->publication_date}}
          </h4>
          Төрөл: <strong>{{$item->category_name}}</strong><br><br>
          Товч танилцуулга: {{substr($item->some_text, 0, 180)}}&nbsp;&nbsp;<a href="/article/{{$item->id}}" >Дэлгэрэнгүй...</a>
          <br><br>
          <hr>
        @endforeach
      </div>

      <div class="col-md-5 col-md-offset-2">
        <h3 id = "birder">Шинээр нэмэгдсэн бүтээлүүд</h3>
        @foreach($last as $item)
          <h4>
            <strong>{{$item->title}}</strong> by <strong>{{$item->publisher_name}}</strong>&nbsp;&nbsp;{{$item->publication_date}}
          </h4>
          Төрөл: <strong>{{$item->category_name}}</strong><br><br>
          Товч танилцуулга: {{substr($item->some_text, 0, 180)}}&nbsp;&nbsp;<a href="/article/{{$item->id}}" >Дэлгэрэнгүй...</a>
          <br><br>
          <hr>
        @endforeach

      </div>
    </div>
</div>
@endsection