<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    protected $fillable = [
        'category_id', 'title', 'name', 'description', 'price', 'image'
    ];

    public function category() {
    	return $this->belongsTo(Category::class);
    }

    public function getRouteKeyName() {
    	return 'name';
    }
}
