<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Organizer extends Model {
	//
	protected $guarded = [ 
			'id' 
	];
	public function user() {
		return $this->belongsTo ( 'App\Model\User' );
	}
	public function events() {
		return $this->hasMany ( 'App\Model\Events', 'organizer_ID' );
	}
}
