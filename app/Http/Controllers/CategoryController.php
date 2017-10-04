<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
	public function __construct() {
		$this->middleware('auth')->except('index');
	}

	public function index() {
		$categories = Category::all();

		return view('categories.index', compact('categories'));
	}

	public function create() {
		return view('categories.create');
	}

	public function store(Request $request) {
		$request->validate([
			'title' => 'required|unique:categories|max:255',
			'image' => 'required',
		]);

		$name = strtolower(str_replace(' ', '-', $request->title));
		$image = $request->image->store('/images', 'public');

		 Category::create([
		 	'title' => $request->title,
		 	'name' => $name,
			'image' => $image
		]);

		return redirect()->route('home');
	}
}
