@extends('layouts.master')

@section('content')
<div class="_allevent">
	<div class="row">
		<h4>Бүх үйл ажиллагаа</h4><hr>
	</div>
	@foreach($events as $event)
	<div class="row">
		<h3 class="col-md-12"><a href="/event/{{$event->id}}">{{$event->title}}</a></h3>
	</div>
	<div class="row">
		<span class="col-md-12">{{substr($event->body, 0,200) }}</span>
	</div>
	<div class="row _bottobrder">
		<span class="col-md-3"><small>Зохион байгуулагч:</small>{{$event->author}}</span>
		<span class="col-md-3"><small>Илтгэгч: </small>{{$event->lector}}</span>
		<span class="col-md-2"><small>Хаана:</small>{{$event->where_is}}</span>
		<span class="col-md-2"><small>Хэзээ:</small>{{$event->when_year}} / {{$event->when_month}} / {{$event->when_day}} -нд {{$event->when_time}} цагаас</span>
		<span class="col-md-2"><a href="/event/{{$event->id}}">Дэлгэрэнгүй ...</a></span>
	</div>
	@endforeach
</div>
@endsection