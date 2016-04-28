@extends('layouts.master')

@section('content')
	<br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-1">
				<h4><small>Бүтээлийн нэр:</small>{{$item->title}}</h4>
				<h4><small>Зохиогч:</small>{{$item->publisher_name}}</h4>
				@if(isset($item->co_author))
					<h4><small>Хамтран Зохиогчид:</small>{{$item->co_author}}</h4>
				@endif
				<h4><small>Төрөл:</small>{{$item->category_name}}</h4>
				<h4><small>Дэд Төрөл:</small>{{$item->sub}}</h4>
				<p><small>Танилцуулга:</small>{{$item->some_text}}</p>
				<h4><small>Бүтээл бичигдсэн огноо:</small>{{$item->publication_date}}</h4>
				<h4><small>Хуудасны тоо:</small>{{$item->page_count}}</h4>
				@if(Auth::check())
					<a href="/pdfs/{{$item->file}}" download>Бүтээлийг энд дарж татна уу.</a>
				@else 
					<div class="alert alert-warning">
					  	<strong>Warning!</strong> Та хэрэглэгчийн эрхээр нэвтэрснээр татаж авах боломжтой болно.
					</div>
				@endif
			</div>
			<div class="col-md-5">
				<div class="pdfobject-container" id="my-container"></div>
			</div>
			<script>
				PDFObject.embed("/pdfs/{{$item->file}}", "#my-container");
				var options = {
					pdfOpenParams: {
						pagemode: "thumbs",
						navpanes: 0,
						toolbar: 0,
						statusbar: 0,
						view: "FitV"
					}
				};

				var myPDF = PDFObject.embed("/pdfs/{{$item->file}}", "#my-container", options);

				var el = document.querySelector("#results");
				el.setAttribute("class", (myPDF) ? "success" : "fail");
				el.innerHTML = (myPDF) ? "PDFObject successfully added an &lt;embed> element to the page!" : "Uh-oh, the embed didn't work.";
			</script>
			
		</div>
	</div>

@endsection