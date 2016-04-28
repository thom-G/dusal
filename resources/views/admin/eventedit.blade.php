@extends('layouts.admin')

@section('content')
<div class="_eventedit">
	<div class="row">
		<h4>Үйл ажиллагаа засах</h4><hr>
	</div>
	<form action="{{$event->id}}/edit" method="POST">
		<input name="_token" type="hidden" value="{!! csrf_token() !!}" />
		<div class="row">
			<label class="col-md-3 col-md-offset-1">Гарчиг:</label>
			<span class="col-md-5"><input type="text" class="form-control" name="title" value="{{ $event->title }}" required ></span>
		</div><br>
		<div class="row">
			<label class="col-md-3 col-md-offset-1">Үйл ажииллагаа:</label>
			<span class="col-md-5"><textarea type="text" class="form-control" name="body" required>{{ $event->body }}</textarea></span>
		</div><br>
		<div class="row">
			<label class="col-md-3 col-md-offset-1">Зохион байгуулагч:</label>
			<span class="col-md-5"><input type="text" class="form-control" name="author" value="{{ $event->author }}" required></span>
		</div><br>
		<div class="row">
			<label class="col-md-3 col-md-offset-1">Илтгэгч:</label>
			<span class="col-md-5"><input type="text" class="form-control" name="lector" value="{{ $event->lector }}"></span>
		</div><br>
		<div class="row">
			<label class="col-md-3 col-md-offset-1">Хаана:</label>
			<span class="col-md-5"><input type="text" class="form-control" name="where_is" value="{{ $event->where_is }}" required></span>
		</div><br>
		<div class="row">
			<label class="col-md-3 col-md-offset-1">Хэзээ:</label>
			<span class="col-md-5">
				<div class="row">
					<div class=" col-md-3">
						<input type="text" name="when_year" class="form-control" placeholder="YYYY" value="{{$event->when_year}}" required>
					</div>
					<div class="col-md-3">
						<input type="text" name="when_month" class="form-control" placeholder="MM"  value="{{$event->when_month}}" required>
					</div>
					<div class="col-md-3">
						<input type="text" name="when_day" class="form-control" placeholder="DD"  value="{{$event->when_day}}" required>
					</div>
					<div class="col-md-3">
						<input type="text" name="when_time" placeholder="HH:MM" class="form-control"  value="{{$event->when_time}}" required>
					</div>
				</div>
			</span>
		</div><br>
		<div class="row">
			<span class="col-md-1 col-md-offset-6"><input type="button" class="btn btn-default btn-md" value="Буцах"></span>
			<span class="col-md-1"><input type="submit" class="btn btn-primary btn-md" value="Хадгалах"></span>
		</div>
	</form>
</div>
@endsection