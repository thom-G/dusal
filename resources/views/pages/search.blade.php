@extends('layouts.master')

@section('content')

	<div class="_allevent">
		<div class="row">
			<h4>Хайлтын үр дүн</h4><hr>
			<span>Таны хайсан үг:</span><span> <b> {{$array[0]}}</b></span>
		</div>
		@foreach($results as $event)
			<div class="row">
				<h3 class="col-md-12"><a href="/article/{{$event->id}}">{{$event->title}}</a></h3>
			</div>
			<div class="row">
				<span class="col-md-12">{{substr($event->some_text, 0,200) }}...</span>
			</div>
			<div class="row _bottobrder">
				<span class="col-md-3"><small>Зохиогч:</small>{{$event->publisher_name}}</span>
				<span class="col-md-3"><small>Огноо: </small>{{$event->publication_date}}</span>
				<span class="col-md-2"><a href="/article/{{$event->id}}">Дэлгэрэнгүй ...</a></span>
			</div>
		@endforeach
	</div>
@endsection