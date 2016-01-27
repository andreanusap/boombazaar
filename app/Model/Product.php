<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
	//
	protected $guarded = [ 
			'id' 
	];
	public function shop() {
		return $this->belongsTo ( 'App\Model\Shop' );
	}
	public function productImage() {
		return $this->hasMany ( 'App\Model\ProductImage', 'product_ID' );
	}
}
