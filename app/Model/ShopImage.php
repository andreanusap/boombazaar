<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ShopImage extends Model {
	//
	protected $guarded = [ 
			'id' 
	];
	public function shop() {
		return $this->belongsTo ( 'App\Shop' );
	}
}
