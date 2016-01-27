<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model {
	//
	protected $guarded = [ 
			'id' 
	];
	public function category() {
		return $this->belongsTo ( 'App\Model\Category' );
	}
	public function user() {
		return $this->belongsTo ( 'App\Model\User' );
	}
	public function shopImage() {
		return $this->hasMany ( 'App\Model\ShopImage', 'shop_ID' );
	}
	public function product() {
		return $this->hasMany ( 'App\Model\Product', 'shop_ID' );
	}
	public function eventParticipant() {
		return $this->hasMany ( 'App\EventParticipant', 'shop_ID' );
	}
}
