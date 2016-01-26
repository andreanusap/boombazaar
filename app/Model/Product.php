<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
	//
	protected $guarded = [ 
			'id' 
	];
	public function shop() {
		return $this->belongsTo ( 'App\Shop' );
	}
	public function productImage() {
		return $this->hasMany ( 'App\ProductImage', 'product_ID' );
	}
}
