<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EventParticipant extends Model {
	//
	protected $guarded = [ 
			'id' 
	];
	public function event() {
		return $this->belongsTo ( 'App\Event' );
	}
	public function shop() {
		return $this->belongsTo ( 'App\Shop' );
	}
}
