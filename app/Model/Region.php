<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Region extends Model {
	//
	protected $guarded = [ 
			'id' 
	];
	public function city() {
		return $this->hasMany ( 'App\Model\City', 'region_ID' );
	}
}
