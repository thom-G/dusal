@extends('layouts.admin')

@section('content')
<div class="_artreq">
	<div class="row">
		<h4>Ирсэн бүтээлүүд</h4><hr>
	</div>
	<div class="_aevs">
		<div class="row">
				<table class="col-md-12" id="t01">
				  <tr>
					<th>№</th>
					<th>Нийтэлсэн зохиогч</th>
					<th>Төрөл</th>
					<th>Дэд төрөл</th>
					<th>гарчиг</th>
					<th>Тайлбар</th>
					<th>Зохиолч</th>
				  </tr>
				  <?php $id = 1; ?>
					@foreach($article as $article)
					<tr>
						<td><?php echo $id; ?></td>
						<td>{{$article->user_id}}</td>
						<td>{{$article->category_id}}</td>
						<td>{{$article->sub_id}}</td>
						<td>{{$article->title}}</td>
						<td>{{$article->some_text}}</td>
						<td>{{$article->publisher_name}}</td>
						<td>{{-- 
							<a href="/dashboard/events/{{$event->id}}"><input type="button" class="btn btn-primary btn-md" value="Засах"></a>
							<a href="/dashboard/events/delete/{{$event->id}}"><input type="button" class="btn btn-danger btn-md" value="Устгах"></a> --}}
						</td>
					</tr>
					<?php $id++; ?>
					@endforeach
				</table>
		</div>
	</div>
</div>
@endsection