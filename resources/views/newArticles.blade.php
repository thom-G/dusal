@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<form role="form" action="/articles/add" method="post" enctype="multipart/form-data">
		          	{!! csrf_field() !!}
		          	<div class="form-group">
				        <label for="email">Зохиолч:</label>
				        <input type="text" class="form-control"  name="publisher_name" value="{{Auth::user()->f_name}}" required>
				    </div>

				    <div class="form-group">
				        <label for="email">Гарчиг:</label>
				        <input type="text" class="form-control"  name="title" value="" required>
				    </div>

				    <div class="form-group">
				        <label for="email" >Бүтээлийн файл (pdf) :</label>
				        <input type="file" accept="application/pdf" class="form-control"  name="file" value="" required>
				    </div>

				    <div class="form-group">
				        <label for="email">Товч:</label>
				        <input type="text" class="form-control"  name="some_text" value="" required>
				    </div>

				    <div class="form-group">
				        <label for="email">Хамтран зохиосон:</label>
				        <input type="text" class="form-control"  name="co_author" required>
				    </div>

				    <div class="form-group">
				        <label for="email">Үндсэн ангилал:</label>
				        <select class="form-control"  name = "category_id" required>
				            <option value="1">
				                Математик
				            </option>
				            <option  value="2">
				                Физик
				            </option>
				            <option value="3">
				                Хими
				            </option>
				            <option  value="4">
				                Газарзүй Геологи
				            </option>
				            <option value="5">
				                ХАА Биологи
				            </option>
				        </select>
				    </div>

				    <div class="form-group">
				        <label for="email">Төрөл:</label>
				        <select class="form-control"  name = "sub_id" required>
				            <option value="1">
				                Судалгааны бүтээл
				            </option>
				            <option  value="2">
				                Эрдэм шинжилгээний хурлын илтгэл, эмхтгэл
				            </option>
				            <option value="3">
				                Лекц
				            </option>
				        </select>
				    </div>

				    <div class="form-group">
				        <label for="email">Хайлтын түлхүүр үгнүүд:</label>
				        <input class="form-control"  type="text" name="search_keys" required>
				    </div>

				    <div class="form-group">
				        Бүтээлийн огноо:
				        <input class="form-control"  type="date" name="publication_date" required>
				    </div>
				    <div class="form-group">
				        Хуудасны тоо:
				        <input class="form-control"  type="text" name="page_count" required>
				    </div>
				    <div class="form-group">
				        <button class="form-control"  type="submit"  onclick="return confirm('Таны бүтээлийг бид хүлээн авч нягтласны эцэст нийтлэгдэх болно.');">Илгээх</button>
				    </div>
		        </form>
			</div>
		</div>
	</div>

	
@endsection