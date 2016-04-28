@extends('layouts.admin')

@section('content')
<div class="_aaevnt">
	<div class="row">
		<h3>Бүх үйл ажиллагаа</h3><hr>
	</div>
	<div class="_aevs">
		<div class="row">

			<table class="col-md-12" id="t01">
			  <tr>
				<th>№</th>
				<th class="_evtit">Гарчиг</th>
				<th class="_evauth">Зохион байгуулагч</th>
				<th class="_evwher">Хаана</th>
				<th>Хэзээ</th>
				<th>Статус</th>
			  </tr>
			  <?php $id = 1; ?>
			@foreach($events as $event)
			<tr>
				<td><?php echo $id; ?></td>
				<td>{{$event->title}}</td>
				<td>{{$event->author}}</td>
				<td>{{$event->where_is}}</td>
				<td>{{$event->when_year}} / {{$event->when_month}} / {{$event->when_day}} / {{$event->when_time}}</td>
				<td>
					<a href="/dashboard/events/{{$event->id}}"><input type="button" class="btn btn-primary btn-md" value="Засах"></a>
					<a href="/dashboard/events/delete/{{$event->id}}"><input type="button" class="btn btn-danger btn-md" value="Устгах"></a>
				</td>
			</tr>
			<?php $id++; ?>
			@endforeach
			</table>
		</div>
	</div>
</div>
@endsection