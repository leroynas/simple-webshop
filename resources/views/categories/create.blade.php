@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">Categorie aanmaken</div>

				<div class="panel-body" style="padding: 20px;">
					<form method="post" action="{{ route('category.store') }}" enctype="multipart/form-data">
						{{ csrf_field() }}

						<div class="form-group">
							<label for="title">Naam</label>
							<input type="text" class="form-control" id="title" name="title" placeholder="Naam">
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
