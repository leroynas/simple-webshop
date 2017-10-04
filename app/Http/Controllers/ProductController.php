<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class ProductController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth')->except(['index', 'show']);
	}

    public function index(Category $category)
    {
    	$products = $category->products;

    	return view('products.index', compact('category', 'products'));
    }

    public function show(Category $category, Product $product)
    {
    	return view('products.show', compact('category', 'product'));
    }

	public function create(Category $category) 
	{
		return view('products.create', compact('category'));
	}

	public function store(Category $category) 
	{
		request()->validate([
			'title' => 'required|unique:products|max:255',
			'description' => 'required',
			'price' => 'required|numeric',
			'image' => 'required',
		]);

		$name = strtolower(str_replace(' ', '-', request()->title));
		$image = request()->image->store('/images', 'public');

		 Product::create([
		 	'category_id' => $category->id,
		 	'title' => request()->title,
		 	'name' => $name,
		 	'description' => request()->description,
		 	'price' => request()->price,
			'image' => $image
		]);

		return redirect()->route('product.index', ['category' => $category->name]);
	}
}
