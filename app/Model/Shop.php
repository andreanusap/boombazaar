<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model {
	//
	protected $guarded = [ 
			'id' 
	];
	public function category() {
		return $this->belongsTo ( 'App\Category' );
	}
	public function user() {
		return $this->belongsTo ( 'App\User' );
	}
	public function shopImage() {
		return $this->hasMany ( 'App\ShopImage', 'shop_ID' );
	}
	public function product() {
		return $this->hasMany ( 'App\Product', 'shop_ID' );
	}
	public function eventParticipant() {
		return $this->hasMany ( 'App\EventParticipant', 'shop_ID' );
	}
}
