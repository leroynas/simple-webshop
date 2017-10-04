@extends('layouts.master')

@section('content')
<div class="container">
	<div class="jumbotron">
		<div class="row">
			<div class="col-md-5">
				<img class="img-rounded" src="{{ $product->image }}" alt="{{ $product->title }}" style="width: 100%;">
			</div>
			<div class="col-md-7">
				<h1 style="color: #3097D1;">{{ $product->title }}</h1>
				<h3>&euro;{{ $product->price }}</h3>
				<p>{{ $product->description }}</p>
				<a class="btn btn-primary">Product kopen</a>
			</div>
		</div>
	</div>
</div>
@endsection
