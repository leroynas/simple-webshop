@extends('layouts.master')

@section('content')
<div class="container">
	<div class="jumbotron">
		<h1>Categorieën</h1>
		<p>Quo et maxime aperiam corrupti assumenda. Blanditiis est excepturi voluptas minus iure recusandae dolorem.</p>
		@auth
			<a class="btn btn-primary" href="{{ route('category.create') }}">Categorie toevoegen</a>
		@endauth
	</div>

	<div class="row">
		@foreach($categories as $category)
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="/{{ $category->name }}">
					<img src="{{ $category->image }}" alt="{{ $category->title }}">
				</a>
				<div class="caption">
					<a href="/{{ $category->name }}"><h3>{{ $category->title }}</h3></a>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection
