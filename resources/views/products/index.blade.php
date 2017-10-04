@extends('layouts.master')

@section('content')
<div class="container">
	<div class="jumbotron">
		<h1>{{ $category->title }}</h1>
		<p>Quo et maxime aperiam corrupti assumenda. Blanditiis est excepturi voluptas minus iure recusandae dolorem.</p>
		@auth
			<a class="btn btn-primary" href="/category/{{ $category->name }}/product/create">Product toevoegen</a>
		@endauth
	</div>

	<div class="row">
		@foreach($products as $product)
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="/{{ $category->name }}/{{ $product->name }}">
					<img src="{{ $product->image }}" alt="{{ $product->title }}">
				</a>
				<div class="caption">
					<a href="/{{ $category->name }}/{{ $product->name }}"><h3>{{ $product->title }}</h3></a>
					<h4>&euro;{{ $product->price }}</h4>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection
