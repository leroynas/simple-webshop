@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">Product aanmaken</div>
				
				<div class="panel-body" style="padding: 20px;">
					<form method="post" action="/category/{{ $category->name }}/product" enctype="multipart/form-data">
						{{ csrf_field() }}
						
						@if(isset($test))
							{{ dd($test) }}
						@endif

						<div class="form-group">
							<label for="title">Naam</label>
							<input type="text" class="form-control" id="title" name="title" placeholder="Naam">
						</div>

						<div class="form-group">
							<label for="description">Beschrijving</label>
							<textarea class="form-control" id="description" name="description" placeholder="Beschrijving"></textarea>
						</div>

						<div class="form-group">
							<label for="price">Prijs in euro</label>
							<input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Prijs">
						</div>

						<div class="form-group">
							<label for="image">Afbeelding</label>
							<input type="file" id="image" name="image">
						</div>

						@include('layouts.errors')

						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection