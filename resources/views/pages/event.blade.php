@extends('layouts.master')

@section('content')
<div class="_oneevent">
<div class="row">
	<h3>{{$event->title}}</h3><hr>
</div>
<div class="row">
	<label class="col-md-3">Үйл ажиллагаа:</label>
	<span class="col-md-9">{{$event->body}}</span>
</div>
<div class="row">
	<label class="col-md-3">Зохион байгуулагч:</label>
	<span class="col-md-9">{{$event->author}}</span>
</div>
<div class="row">
	<label class="col-md-3">Илтгэгч:</label>
	<span class="col-md-9">{{$event->lector}}</span>
</div>
<div class="row">
	<label class="col-md-3">Хаана:</label>
	<span class="col-md-9">{{$event->where_is}} -д</span>
</div>
<div class="row">
	<label class="col-md-3">Хэзээ:</label>
	<span class="col-md-9">{{$event->when_year}} / {{$event->when_month}} / {{$event->when_day}} -нд {{$event->when_time}} цагаас</span>
</div>
</div>
@endsection