@extends('layouts.admin')
@section('content')
@section('content')
<div class="_cevent">

	<div class="row">
		<h3>Шинэ үйл ажиллагаа үүсгэх</h3>
		<hr>
	</div>
	<form action="/dashboard/events/create/create" method="POST">
	<input name="_token" type="hidden" value="{!! csrf_token() !!}" />
	<div class="row">
		<label class="col-md-3 col-md-offset-1 control-space ">Гарчиг :</label>
		<span class="col-md-5"><input type="text" name="title" placeholder="Гарчиг бичнэ үү" class="form-control"/ required></span>
	</div><br>
	<div class="row">
		<label class="col-md-3 col-md-offset-1">Үйл ажиллагаа :</label>
		<span class="col-md-5"><textarea type="text" placeholder="Үйл ажиллагаагаа бичнэ үү" name="body" class="form-control" required></textarea></span>
	</div><br>
	<div class="row">
		<label class="col-md-3 col-md-offset-1">Зохион байгуулагч :</label>
		<span class="col-md-5"><input type="text" name="author" placeholder="Зохион байгуулагч байгуулга оруулна уу"  class="form-control" required/></span>
	</div><br>
	<div class="row">
		<label class="col-md-3 col-md-offset-1">Илтгэгч :</label>
		<span class="col-md-5"><input type="text" name="lector" placeholder="Илтгэгчийн нэрийг таслал тавьж оруулна уу" class="form-control"></span>
	</div><br>
	<div class="row">
		<label class="col-md-3 col-md-offset-1">Хаана :</label>
		<span class="col-md-5"><input type="text" name="where_is" placeholder="Арга хэмжээ болох газрын нэрийг оруулна уу" class="form-control" required></span>
	</div><br>
	<div class="row">
		<label class="col-md-3 col-md-offset-1">Хэзээ :</label>
		<span class="col-md-5">
			<div class="row">
				<div class=" col-md-3">
					<input type="text" name="when_year" class="form-control" placeholder="YYYY" required>
				</div>
				<div class="col-md-3">
					<input type="text" name="when_month" class="form-control" placeholder="MM" required>
				</div>
				<div class="col-md-3">
					<input type="text" name="when_day" class="form-control" placeholder="DD" required>
				</div>
				<div class="col-md-3">
					<input type="text" name="when_time" placeholder="HH:MM" class="form-control" required>
				</div>
			</div>
		</span>
	</div><br>
	<div class="row">
		<span class="col-md-1 col-md-offset-7"><input type="button" class="btn btn-sm btn-default" value="Арилгах"></span>
		<span class="col-md-1"><input type="submit" class="btn btn-sm btn-primary" value="Үүсгэх"></span>
	</div>
	</form>
</div>
@endsection