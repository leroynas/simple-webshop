<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Category extends Model
{
    protected $fillable = [
        'title', 'name', 'image',
    ];

    public function products() {
    	return $this->hasMany(Product::class);
    }

    public function getRouteKeyName() {
    	return 'name';
    }
}
