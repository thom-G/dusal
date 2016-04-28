@extends('layouts.master')

@section('content')

	<div class="_allevent">
		<div class="row">
			<h3>{{$cat->category_name}}<small>&nbsp;ангилалын&nbsp;</small>{{$sub->sub}}үүд</h3><hr>
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